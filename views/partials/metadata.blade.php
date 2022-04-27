<!-- Basic -->
{!! seo_helper()->render() !!}

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet"
      type="text/css">

<!-- Vendor CSS -->
{!! Theme::style('vendor/bootstrap/css/bootstrap.min.css') !!}
{!! Theme::style('vendor/fontawesome-free/css/all.min.css') !!}
{!! Theme::style('vendor/animate/animate.min.css') !!}
{!! Theme::style('vendor/simple-line-icons/styles/simple-line-icons.css') !!}
{!! Theme::style('vendor/linearicons/web-font/style.css') !!}
{!! Theme::style('vendor/owl.carousel/assets/owl.carousel.min.css') !!}
{!! Theme::style('vendor/owl.carousel/assets/owl.theme.default.min.css') !!}
{!! Theme::style('vendor/magnific-popup/magnific-popup.css') !!}

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ mix('/themes/dorm/css/theme.css') }}">
<link rel="stylesheet" href="{{ mix('/themes/dorm/css/theme-elements.css') }}">

<!-- Current Page CSS -->
{!! Theme::style('plugins/rs-plugin/css/settings.css') !!}
{!! Theme::style('plugins/rs-plugin/css/layers.css') !!}
{!! Theme::style('plugins/rs-plugin/css/navigation.css') !!}

<!-- Skin CSS -->
<link rel="stylesheet" href="{{ mix('/themes/dorm/css/skins/default.css') }}">

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ mix('/themes/dorm/css/custom.css') }}">

<!-- Head Libs -->
{!! Theme::script('plugins/modernizr/modernizr.min.js') !!}