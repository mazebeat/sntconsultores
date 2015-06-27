@extends('layouts.master')

@section('navbar')
	@include('layouts.modules.navbar')
@endsection

@section('slider')
	@if(Config::get('modules.slider'))
		@include('layouts.modules.slider')
	@endif
@endsection

@section('content')
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
@endsection

@section('footer')
	{{--BEGIN CONTACT--}}
	@if(Config::get('modules.contact'))
		@include('layouts.modules.contact')
	@endif
	{{--END CONTACT--}}

	@if(Config::get('modules.footer'))
		@include('layouts.modules.footer')
	@endif
@endsection