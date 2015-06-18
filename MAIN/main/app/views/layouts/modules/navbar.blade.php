<div class="w-nav navbar transparent_header" data-collapse="medium" data-animation="lightSpeedIn" data-duration="400" data-contain="1">
	<div class="w-container">
		<nav class="w-nav-menu navigation" role="navigation">
			<div class="w-nav-link2">
				<div><a class="btn-block nav-link" style="display: block;" href="{{ URL::to('/') }}">INICIO</a></div>
			</div>
			<div class="w-nav-link2">
				<div><a class="btn-block nav-link" style="display: block;" href="{{ URL::to('/') }}">CONTACTO</a></div>
			</div>
			{{--<div class="w-dropdown dropdown" data-delay="0">--}}
			{{--<div class="w-dropdown-toggle nav-link">--}}
			{{--<div>CONTACTO</div>--}}
			{{--<div class="w-icon-dropdown-toggle arrow-drop"></div>--}}
			{{--</div>--}}
			{{--<nav class="w-dropdown-list dropdown-list">--}}
			{{--<a class="w-dropdown-link dropdown-link" href="contact-11.html">Contactanos 1</a> <a class="w-dropdown-link dropdown-link" href="contact-2.html">Contactanos 2</a>--}}
			{{--</nav>--}}
			{{--</div>--}}
		</nav>
		<a class="w-nav-brand brand light_logo" href="{{ URL::to('/') }}"> {{ HTML::image('images/logo_header_blanco.png', null, array('class' => 'logo', 'width' => '145')) }} </a>
		<a class="w-nav-brand brand dark_logo" href="{{ URL::to('/') }}"> {{ HTML::image('images/logo_header.png', null, array('class' => 'logo', 'width' => '110')) }} </a>

		<div class="w-nav-button menu-button">
			<div class="w-icon-nav-menu"></div>
		</div>
	</div>
</div>