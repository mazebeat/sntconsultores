<div id="contact" class="contact-section">
	{{--<div class="w-widget w-widget-map mapp" data-widget-latlng="-33.43348,-70.6156029" data-widget-style="roadmap" data-widget-zoom="15"></div>--}}
	<div class="w-container">
		<div class="w-row">
			<div class="w-col w-col-8">
				<div class="contact-map-fprm">
					<h4 class="white-text-footer contact">CONTACTANOS!</h4>

					<div class="w-form form-wrapper">
						{{ Form::open(array('url' => 'contact', 'method' => 'POST', 'id' => 'email-form', 'name' => 'email-form', 'data-name' => 'Email Form'))  }}
						{{ Form::text('name', Input::old('name'), array('id' => 'nameCForm', 'class' => 'w-input text-field', 'placeholder' => 'Nombre...', 'data-name' => 'name', 'required')) }}
						<span class="error-display">{{$errors->first('name')}}</span>
						{{ Form::email('email', Input::old('email'), array('id' => 'emailCForm', 'class' => 'w-input text-field', 'placeholder' => 'Email...', 'data-name' => 'email', 'required')) }}
						<span class="error-display">{{$errors->first('email')}}</span>
						{{ Form::text('subject', Input::old('subject'), array('id' => 'subjectCForm', 'class' => 'w-input text-field', 'placeholder' => 'Asunto/Motivo...', 'data-name' => 'subject', 'required')) }}
						<span class="error-display">{{$errors->first('subject')}}</span>
						{{ Form::textarea('message', Input::old('message'), array('id' => 'messageCForm', 'class' => 'w-input text-area', 'placeholder' => 'Escribenos...', 'data-name' => 'message', 'required')) }}
						{{ Form::submit('Enviar!', array('class' => 'w-button submit-button', 'data-wait' => 'Espere...')) }}
						{{ Form::close() }}

						<div class="w-form-done success-message">
							<p>Gracias! Tu mensaje será recibido!</p>
						</div>
						<div class="w-form-fail error">
							<p>Oops! Algo fallo mientras se enviaba :(</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-second-part">
				<div class="w-col w-col-4 w-clearfix">
					<h4 class="white-text-footer contact">INFORMACIÓN DE CONTACTO</h4>

					<p class="text-fotter">
						<br>Email:&nbsp;<a href="javascript:void(window.open('https://mail.google.com/mail/?view=cm&fs=1&to=contacto@snt-consultores.net'));" rel="nofollow">{{ Config::get('api.company.contactemail') }}</a>
						<br>Web:&nbsp;<a href="{{ Config::get('api.company.web') }}">{{ Config::get('api.company.web') }}</a>
					</p>

					<p class="w-clearfix social-dic-s hidden-lg">
						<a class="w-inline-block social contact" href="#">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a class="w-inline-block social contact" href="#">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a class="w-inline-block social contact" href="#">
							<span class="fa-stack fa-lg">
	                            <i class="fa fa-circle fa-stack-2x"></i>
	                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a class="w-inline-block social contact" href="#">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>