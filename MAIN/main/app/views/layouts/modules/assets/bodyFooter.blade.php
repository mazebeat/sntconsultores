{{-- javascript files --}}
{{ HTML::script('js/animations.js') }}
{{ HTML::script('js/waypoints.min.js') }}
{{ HTML::script('js/jquery.easy-pie-chart.js') }}
{{ HTML::script('js/jquery.countdown.min.js') }}
{{ HTML::script('js/jquery.countTo.js') }}
{{ HTML::script('js/jquery.easing.min.js') }}

{{ HTML::script('js/vision.js') }}

<!--[if lte IE 9]>
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js') }}
<![endif]-->
@yield('script-text')
{{-- end javascript files --}}