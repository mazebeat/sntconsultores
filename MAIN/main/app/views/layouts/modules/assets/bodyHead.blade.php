<meta charset="utf-8">
<title>{{ Str::upper(Config::get('api.company.name')) }} @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="mazebeat">
{{--Latest compiled and minified CSS--}}{{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') }}
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
{{ HTML::style('css/normalize.css') }}
{{ HTML::style('css/vector-icons.css') }}
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/vision.css') }}

{{--MAIN JS FILE--}}
{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}
{{--{{ HTML::script('js/jquery.js')}}--}}
{{ HTML::script('js/modernizr.js')}}

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
{{ HTML::script('plugins/rs-plugin/js/jquery.themepunch.plugins.min.js') }}
{{ HTML::script('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}

<!-- SLIDER REVOLUTION  CSS STYLE-->
{{ HTML::style('plugins/rs-plugin/css/style.css') }}
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
{{ HTML::style('plugins/rs-plugin/css/extralayers.css') }}{{ HTML::style('plugins/rs-plugin/css/settings.css') }}<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css'>

{{--SCROLLING NAV BAR--}}<!--fullpage navigation script-->
{{ HTML::style('css/scrolling-nav.css') }}{{ HTML::script('js/scrolling-nav.js') }}

@yield('style')
{{--FAVICON--}}
<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('images/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('images/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('images/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('images/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('images/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('images/favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ URL::asset('images/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('images/favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ URL::asset('images/favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ URL::asset('images/favicon/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">
{{--WEB FONTS--}}
{{ HTML::script('http:///ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js') }}

<script>
    WebFont.load({
        google: {
            families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Changa One:400,400italic", "Raleway:100,200,300,regular,500,600,700,800,900"]
        }
    });
</script>
@yield('style-text')
