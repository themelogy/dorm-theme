<footer id="footer" class="bg-light mt-0">
    <div class="container">
        <hr>
        <div class="row text-center">
            <div class="col">
                <div class="overflow-hidden">
                    <span class="top-sub-title text-color-primary d-block appear-animation" data-appear-animation="maskUp">LOREM IPSUM DOLOR SIT</span>
                </div>
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Get in Touch With Us</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Proje boyutu veya bütçesi ne olursa olsun fikirleri dikkat çekici alanlara dönüştürüyoruz.</p>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-4">
            <div class="col-12 col-md-4">
                <div class="icon-box icon-box-style-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="icon-box-icon">
                        <i class="lnr lnr-apartment text-color-primary"></i>
                    </div>
                    <div class="icon-box-info mt-1">
                        <div class="icon-box-info-title">
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">@lang('themes::contact.address')</h3>
                        </div>
                        <p>@setting('theme::address')</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="icon-box icon-box-style-1 ps-md-3 ps-lg-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="icon-box-icon icon-box-icon-no-top">
                        <i class="lnr lnr-envelope text-color-primary"></i>
                    </div>
                    <div class="icon-box-info mt-1">
                        <div class="icon-box-info-title">
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">@lang('themes::contact.email')</h3>
                        </div>
                        <p>
                            <a href="@setting('theme::email')">
                                @setting('theme::email')
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="icon-box icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="icon-box-icon">
                        <i class="lnr lnr-phone-handset text-color-primary"></i>
                    </div>
                    <div class="icon-box-info mt-1">
                        <div class="icon-box-info-title">
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">@lang('themes::contact.phone')</h3>
                        </div>
                        <p><a href="tel:@setting('theme::phone')">@setting('theme::phone')</a></p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
    </div>
    <div class="footer-copyright bg-light mt-0 mb-5 pb-5">
        <div class="container">
            <div class="row align-items-center justify-content-md-center">
                <div class="col-12 col-lg-4 text-center text-lg-end order-3 order-lg-1">
                    <p class="mb-0">@lang('themes::theme.footer.copyright', ['date' => \Carbon\Carbon::now()->year, 'company' => setting('theme::company-name')])</p>
                </div>
                <div class="col-12 col-lg-2 text-center order-1 order-lg-2">
                    <a href="@homepage"><img src="{{ Theme::url('images/logos/logo-icon.svg') }}" width="78" height="70" alt="EZY Theme" class="img-fluid" /></a>
                </div>
                <div class="col-12 col-lg-4 text-center text-lg-start order-2 order-lg-3 mb-2 mb-lg-0">
                    <a href="#" class="link-underline-dark me-3">Privacy Policy</a>
                    <a href="#" class="link-underline-dark">Terms of Use</a>
                </div>
            </div>
        </div>
    </div>
</footer>