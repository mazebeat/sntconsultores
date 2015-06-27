@extends('layouts.master')

@section('style')
@stop

@section('content')
	<div class="w-col w-col-8 w-col-offset-2">
		@if(isset($code))
			<div class="divider2-ele">
				<div class="headline-div-block ele">
					<h5>{{ HTML::image('images/logo_header.png', 'logo', array('style'=>'width: 30%; margin-bottom: 20px;')) }}</h5>
					<h4 class="headerline-section small">Error! <i class="fa fa-terminal fa"></i><strong>{{ $code }}</strong></h4>

					<h2>P&aacute;gina no encontrada</h2>

					<div class="vidider"></div>
					<h1 class="clearfix" style="line-height: 55px;">Oops! Sentimos las molestia</h1>
				</div>
			</div>
		@endif
	</div>
	<div class="w-col w-col-8 w-col-stack column-button">
		<a class="button" href="#">Discover more</a>
	</div>
@endsection

@section('footer')
	@if(Config::get('modules.footer'))
		@include('layouts.modules.footer')
	@endif
@endsection