<div class="clearfix"></div>
<div class="footer-big" style="padding-top: 0px;">
	<div class="footer-small" id="Footer">
		<div class="w-container">
			<div class="w-row">
				<div class="w-col w-col-3 w-col-stack">
					<h5 class="copyright">© {{ Carbon::now()->year }}&nbsp;{{ Config::get('api.company.name') }}</h5>
				</div>
				<div class="w-col w-col-9 w-col-stack navi">
					<div class="w-nav-menu footer navigation" role="navigation">
						<a class="w-nav-link link-page" href="{{ URL::to('/')  }}">Inicio</a> <a id="footer_contact" class="w-nav-link link-page" href="#">Contact</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>