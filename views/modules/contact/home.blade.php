@if(Request::route()->getName()!='contact')
    <div class="feedback-box">
        <div class="content card">
            <header><a class="close" href="#" id="feedback-close"><i class="fa fa-times"></i></a> {{ trans('themes::contact.we will call you') }} </header>
            <section>
                <div class="form-wrapper" id="contact_form">

                    <div class="alert alert-success" role="alert" v-show="success">
                        @{{ successMessage }}
                    </div>

                    {!! Form::open(['v-on:submit'=>'submitForm', 'class' => 'contact-form form-style-2', 'method'=>'post', 'v-show'=>'!success']) !!}
                    {!! Form::hidden('from', Request::path()) !!}

                    <div class="form-row row mb-3">
                        <div class="form-group col" :class="{'has-error':errors.first_name}">
                            <input type="text" name="first_name" value="" placeholder="{{ trans('contact::contacts.form.first_name') }}" class="form-control form-control-sm" v-model="input.first_name" :class="{ 'is-invalid' : hasError('first_name') }" />
                            <span v-for="error in errors.first_name" class="help-block">@{{ error }}</span>
                        </div>
                        <div class="form-group col" :class="{'has-error':errors.last_name}">
                            <input type="text" name="last_name" value="" placeholder="{{ trans('contact::contacts.form.last_name') }}" class="form-control form-control-sm" v-model="input.last_name" :class="{ 'is-invalid' : hasError('last_name') }"/>
                            <span v-for="error in errors.last_name" class="help-block">@{{ error }}</span>
                        </div>
                    </div>

                    <div class="form-row row mb-3">
                        <div class="form-group col" :class="{'has-error':errors.phone}">
                            <input type="text" name="phone" value="" placeholder="{{ trans('contact::contacts.form.phone') }}" class="form-control form-control-sm" v-model="input.phone" :class="{ 'is-invalid' : hasError('phone') }"/>
                            <span v-for="error in errors.phone" class="help-block">@{{ error }}</span>
                        </div>
                        <div class="form-group col" :class="{'has-error':errors.email}">
                            <input type="text" name="email" value="" placeholder="{{ trans('contact::contacts.form.email') }}" class="form-control form-control-sm" v-model="input.email" :class="{ 'is-invalid' : hasError('email') }"/>
                            <span v-for="error in errors.email" class="help-block">@{{ error }}</span>
                        </div>
                    </div>

                    <div class="form-row row mb-3">
                        <div class="form-group col" :class="{'has-error':errors.enquiry}">
                            <textarea name="enquiry" class="form-control form-control-sm" placeholder="{{ trans('contact::contacts.form.enquiry') }}" rows="3" v-model="input.enquiry" :class="{ 'is-invalid' : hasError('enquiry') }"></textarea>
                            <span v-for="error in errors.enquiry" class="help-block">@{{ error }}</span>
                        </div>
                    </div>

                    <div class="form-row row">
                        <div class="form group col">
                            <button type="submit" class="btn btn-primary font-weight-semibold text-0">{{ trans('global.buttons.send') }}</button>
                        </div>
                        <div class="form-group col" :class="{'has-error':errors.captcha_contact}">
                            <div class="pull-right">{!! Captcha::image('captcha_contact') !!}</div>
                            <span v-for="error in errors.captcha_contact" class="help-block">@{{ error }}</span>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
    <button class="btn btn-default" id="feedback">{{ trans('themes::contact.let us call you') }} <i class="fa fa-phone"></i></button>
    @push('js-stack')
        <script src="{{ Module::asset('contact:js/vue/vue.min.js') }}"></script>
        <script src="{{ Module::asset('contact:js/vue/axios.min.js') }}"></script>
        <script src="{{ Module::asset('contact:js/vue/loadingoverlay.min.js') }}"></script>
    @endpush
    @push('js-inline')
        <script>
            //Feedback
            var feedback = $(".feedback-box");
            if(feedback.length) {
                $("#feedback").on("click" , function(){
                    feedback.addClass("show");
                    $(this).toggle("slide");
                });
                $(".close").on("click" , function(){
                    feedback.removeClass("show");
                    $("#feedback").toggle("slide");
                    setTimeout(function(){
                        feedback.removeClass("show-confirm").find("textarea").val('');
                    }, 1000);
                });
                $("#submit").on("click" ,function(){
                    if( !$("textarea").val() ) {
                        feedback.addClass("error");
                        setTimeout(function(){
                            feedback.removeClass("error");
                        }, 500)
                    }else{
                        feedback.addClass("show-confirm");
                        setTimeout(function(){
                            feedback.removeClass("show").find("textarea").val('').delay(1000);
                        },2000);

                        setTimeout(function(){
                            feedback.removeClass("show-confirm");
                        },2200);
                    }
                });
            }
        </script>
        <script defer>
            window.axios.defaults.headers.common['X-CSRF-TOKEN']   = '{{ csrf_token() }}';
            window.axios.defaults.headers.common['Cache-Control']  = 'no-cache';
            dataLayer = window.dataLayer || [];
            new Vue({
                el: '#contact_form',
                data: {
                    input: {
                        first_name: '',
                        last_name: '',
                        phone: '',
                        email:'',
                        enquiry: '',
                        captcha_contact: ''
                    },
                    errors: {},
                    success: false,
                    successMessage: '',
                    response: {}
                },
                updated() {
                    let success = this.success;
                    let response = this.response;
                    if(success === true) {
                        dataLayer.push({
                            'event'   : 'apiCallEvent',
                            'success' : success,
                            'response': response
                        });
                    }
                },
                methods: {
                    submitForm: function (e) {
                        e.preventDefault();
                        this.success = false;
                        this.input.captcha_contact = grecaptcha.getResponse(captcha_contact);
                        this.ajaxStart(true);
                        axios.post('{{ route('api.contact.call') }}', this.$data.input)
                            .then(response => {
                                this.successMessage = response.data.message;
                                this.response = response.data.data;
                                this.success = true;
                                this.resetForm();
                                this.ajaxStart(false);
                                setTimeout(()=>{
                                    this.success = false;
                                    $(".close").trigger('click');
                                }, 5000);
                            })
                            .catch(error => {
                                this.errors = error.response.data;
                                this.success = false;
                                this.ajaxStart(false);
                                grecaptcha.reset(captcha_contact);
                            });
                    },
                    getError: function (field) {
                        if(this.errors[field]) {
                            return this.errors[field][0];
                        }
                    },
                    hasError: function (field) {
                        if(this.errors[field]) {
                            return true;
                        }
                        return false;
                    },
                    resetForm: function () {
                        var self = this;
                        Object.keys(this.$data.input).forEach(function(key, index){
                            self.$data.input[key] = '';
                        });
                    },
                    ajaxStart: function (loading) {
                        if (loading) {
                            $('form', this.$el).LoadingOverlay("show",{
                                zIndex: 9999
                            });
                        } else {
                            $('form', this.$el).LoadingOverlay("hide",{
                                zIndex: 9999
                            });
                        }
                    }
                }
            });
        </script>
        {!! Captcha::setLang(LaravelLocalization::getCurrentLocale())->scriptWithCallback(['captcha_contact']) !!}
    @endpush
@endif