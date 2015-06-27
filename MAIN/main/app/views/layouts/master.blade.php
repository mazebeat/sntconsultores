<!DOCTYPE html>
<html class="css3transitions" data-wf-site="548c1b32ad84757a7d5d6fc9" data-wf-page="549d4f014f80c2c9267f6a6b">
<head>
	@include('layouts.modules.assets.bodyHead')
	@yield('script-text')
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
{{ Analytics::render() }}
<?php include_once(public_path('analyticstracking.php')) ?>

{{--BEGIN NAVBAR--}}
@yield('navbar')
{{--END NAVBAR--}}

{{--BEGIN REVOLUTION SLIDER--}}
<article class="">
	@yield('slider')
</article>{{--END REVOLUTION SLIDER--}}

{{--BEGIN CONTENT--}}
<div id="content">
	@yield('content')
</div>{{--END CONTENT--}}

{{--BEGIN FOOTER--}}
@yield('footer')
{{--END FOOTER--}}

{{--BEGIN ASSETS JS FOOTER--}}
@include('layouts.modules.assets.bodyFooter')
{{--END ASSETS JS FOOTER--}}<a href="#" class="scrollToTop"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-arrow-up fa-inverse fa-1x"></i></span></a>
</body>
</html>