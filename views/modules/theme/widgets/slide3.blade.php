<div class="slider-container rev_slider_wrapper slider-container-height-600 bg-light-5">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [600,600,600,600], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'parallax': { 'type': 'mouse', 'origo': 'slidecenter', 'speed': 3000, 'levels': [1,2,3,4,5,6,7,12,16,10,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true, 'hide_under': 767, 'style': 'slider-arrows-style-1 slider-arrows-dark' }, 'bullets': {'enable': true, 'hide_under': 767, 'style': 'bullets-style-1', 'hide_onleave': false, 'h_align': 'right', 'v_align': 'bottom', 'space': 7, 'v_offset': 75, 'h_offset': 35}}}">
        <ul>
            @foreach($slides as $slide)
            <li data-transition="fade">
                <img src="{!! $slide->present()->firstImage(1240,600,'fit',90) !!}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg">
                <div class="tp-caption bg-dark-3"
                     data-x="['500','225','90','50']"
                     data-y="400"
                     data-start="1000"
                     data-width="1500"
                     data-height="['155','155','155','155']"
                     data-transform_in="x:[100%];opacity:0;s:500;"
                     data-transform_idle="skX:-30deg;opacity:0.9;"
                     data-transform_out="y:[50%];opacity:0;s:500;"></div>
                @if(!empty($slide->sub_title))
                <h1 class="tp-caption text-color-light font-weight-light font-primary"
                    data-x="right" data-hoffset="['0','0','0','0']"
                    data-y="bottom" data-voffset="['137','137','137','137']"
                    data-start="1300"
                    data-fontsize="['20','20','20','16']"
                    data-lineheight="['28','28','28','26']"
                    data-transform_in="y:[100%];opacity:0;s:500;"
                    data-transform_out="y:[-100%];opacity:0;s:500;">{!! $slide->sub_title !!}</h1>
                @endif
                <div class="tp-caption bg-light"
                     data-x="['530','250','100','60']"
                     data-y="bottom" data-voffset="['78','78','78','83']"
                     data-start="1600"
                     data-width="7"
                     data-height="['45','45','45','36']"
                     data-transform_in="x:[-100%];opacity:0;s:500;"
                     data-transform_idle="skX:-30deg"
                     data-transform_out="x:[-100%];opacity:0;s:500;"></div>
                @if(!empty($slide->title))
                <div class="tp-caption text-color-light font-primary font-weight-bold"
                     data-x="right" data-hoffset="['0','20','20','20']"
                     data-y="bottom" data-voffset="['88','88','88','88']"
                     data-start="1600"
                     data-fontsize="['30','30','30','22']"
                     data-transform_in="opacity:0;s:300;"
                     data-transform_out="opacity:0;s:300;">{!! $slide->title !!}
                </div>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</div>