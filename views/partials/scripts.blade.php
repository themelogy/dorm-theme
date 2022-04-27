@stack('css-stack')
<!-- Vendor -->
{!! Theme::script('vendor/jquery/jquery.min.js') !!}
{!! Theme::script('plugins/jquery.appear/jquery.appear.min.js') !!}
{!! Theme::script('plugins/jquery.easing/jquery.easing.min.js') !!}
{!! Theme::script('plugins/jquery-cookie/jquery-cookie.js') !!}
{!! Theme::script('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
{!! Theme::script('plugins/common/common.min.js') !!}
{!! Theme::script('plugins/jquery.validation/jquery.validation.min.js') !!}
{!! Theme::script('plugins/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') !!}
{!! Theme::script('plugins/jquery.gmap/jquery.gmap.min.js') !!}
{!! Theme::script('vendor/lazyload/lazyload.min.js') !!}
{!! Theme::script('vendor/isotope/isotope.pkgd.min.js') !!}
{!! Theme::script('vendor/owl.carousel/owl.carousel.min.js') !!}
{!! Theme::script('vendor/magnific-popup/jquery.magnific-popup.min.js') !!}
{!! Theme::script('vendor/vide/jquery.vide.min.js') !!}
{!! Theme::script('vendor/vivus/vivus.min.js') !!}
@stack('js-stack')
<!-- Theme Base, Components and Settings -->
<script src="{{ mix('/themes/dorm/js/theme.js') }}"></script>
<!-- Current Page Vendor and Views -->
{{ Theme::script('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}
{{ Theme::script('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
<!-- Theme Custom -->
{{ Theme::script('js/custom.js') }}
<!-- Theme Initialization Files -->
{{ Theme::script('js/theme.init.js') }}
<!-- Examples -->
{{ Theme::script('js/examples/examples.portfolio.js') }}
@stack('css-inline')
@stack('js-inline')