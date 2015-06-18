<!DOCTYPE html>
<html class="css3transitions" data-wf-site="548c1b32ad84757a7d5d6fc9" data-wf-page="549d4f014f80c2c9267f6a6b">
<head>
	@include('layouts.modules.assets.bodyHead')
	@yield('script-text')
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">

{{--BEGIN NAVBAR--}}
@include('layouts.modules.navbar')
{{--END NAVBAR--}}

{{--BEGIN REVOLUTION SLIDER--}}
<article class="">
	@if(Config::get('modules.slider'))
		@include('layouts.modules.slider')
	@endif
</article>
{{--END REVOLUTION SLIDER--}}

{{--BEGIN CONTENT--}}
<div id="content">
	{{--BEGIN WE--}}
	@if(Config::get('modules.we'))
		@include('layouts.modules.we')
	@endif
	{{--END WE--}}

	{{--BEGIN PROJECTS--}}
	@if(Config::get('modules.proyects'))
		@include('layouts.modules.proyects')
	@endif
	{{--END PROJECTS--}}

	{{--BEGIN WHY_US--}}
	@if(Config::get('modules.whyUs'))
		@include('layouts.modules.whyUs')
	@endif
	{{--END WHY_US--}}

	{{--BEGIN FACTS--}}
	@if(Config::get('modules.facts'))
		@include('layouts.modules.facts')
	@endif
	{{--END FACTS--}}

	{{--BEGIN SKILLS--}}
	@if(Config::get('modules.skills'))
		@include('layouts.modules.skills')
	@endif
	{{--END SKILLS--}}

	{{--BEGIN SERVICIOS--}}
	@if(Config::get('modules.services'))
		@include('layouts.modules.services')
	@endif
	{{--END SERVICIOS--}}

	{{--BEGIN TEAM--}}
	@if(Config::get('modules.team'))
		@include('layouts.modules.team')
	@endif
	{{--END TEAM--}}

	{{--BEGIN MEDIA 1--}}
	@if(Config::get('modules.medias'))
		@include('layouts.modules.medias.media1')
	@endif
	{{--END MEDIA 1--}}

	{{--BEGIN TESTIMONIALS--}}
	@if(Config::get('modules.testimonials'))
		@include('layouts.modules.testimonials')
	@endif
	{{--END TESTIMONIALS--}}

	{{--BEGIN CLIENTS--}}
	@if(Config::get('modules.clients'))
		@include('layouts.modules.clients')
	@endif
	{{--END CLIENTS--}}
</div>
{{--END CONTENT--}}

{{--BEGIN CONTACT--}}
@if(Config::get('modules.contact'))
	@include('layouts.modules.contact')
@endif
{{--END CONTACT--}}

{{--BEGIN FOOTER--}}
@if(Config::get('modules.footer'))
	@include('layouts.modules.footer')
@endif
{{--END FOOTER--}}

{{--BEGIN ASSETS JS FOOTER--}}
@include('layouts.modules.assets.bodyFooter')
{{--END ASSETS JS FOOTER--}}
</body>
</html>