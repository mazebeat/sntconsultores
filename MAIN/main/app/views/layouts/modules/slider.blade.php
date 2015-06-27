{{--REVOLUTION SLIDER--}}
<div class="tp-banner-container">
	<div class="tp-banner">
		<ul>
			{{--BEGIN SLIDER 1--}}
			<li data-transition="fade" data-slotamount="6" data-masterspeed="700">
				{{--MAIN IMAGE - BACKGROUND--}}
				@if(Config::get('slider.bgblur') == false)
					{{ HTML::image('images/slider/slide1.jpg', '', array('data-bgfit'=>'cover', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat')) }}
				@else
					{{ HTML::image('images/slider/slide1_blur.jpg', '', array('data-bgfit'=>'cover', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat')) }}
				@endif
				{{--1. TITLE1--}}
				<div class="tp-caption big_white skewfromleftshort randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="center" data-y="180" data-speed="200" data-start="0"
				     data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.03" data-endelementdelay="0.03" data-endspeed="200" style="z-index: 5; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 1px; font-size: 70px; font-weight: 300; font-family: raleway; text-align:left; color: #ffffff;">{{ Config::get('slider.slider1.title1', '') }}</div>
				{{--2. TITLE2--}}
				<div class="tp-caption big_white customin randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="center" data-y="240" data-speed="200" data-start="0"
				     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-endspeed="1200" data-endeasing="Power3.easeIn" style="z-index: 5; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 1px; font-size: 70px; font-family: raleway; text-align:left; font-weight:700; color: #ffffff;">{{ Config::get('slider.slider1.title2', '') }}</div>
				{{--3. PENDRIVE--}}
				<div class="tp-caption sfl stl start randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="200" data-y="530" data-speed="300" data-start="0" data-easing="Power3.easeOut" data-elementdelay="0.1" data-start="500" data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Power1.easeOut" style="z-index: 4; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/pendrive2.png', null, array('data-ww' => '101', 'data-hh' => '72', 'style' => 'width: 101px; height: 72px;')) }}
				</div>
				{{--4. CELULAR--}}
				<div class="tp-caption sfl stl start randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="310" data-y="500" data-speed="300" data-start="1000" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Power1.easeIn" style="z-index: 4; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/celular.png', null, array('data-ww' => '59', 'data-hh' => '118', 'style' => 'width: 59px; height: 118px;')) }}
				</div>
				{{--5. REPORTE--}}
				<div class="tp-caption sfr str start randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="840" data-y="472" data-speed="300" data-start="0" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-start="1600" data-endeasing="Linear.easeNone" style="z-index: 4; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/reporte2.png', null, array('data-ww' => '199', 'data-hh' => '229', 'style' => 'width: 199px; height: 229px;')) }}
				</div>
				{{--6. CAFE--}}
				<div class="tp-caption customin sfr str start randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="790" data-y="450" data-customin="rotationX:;rotationY:0;rotationZ:0;" data-speed="300" data-start="800" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Linear.easeNone" style="z-index: 4; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/cafe.png', null, array('data-ww' => '94', 'data-hh' => '104', 'style' => 'width: 95px; height: 104px;')) }}
				</div>
				{{--7. NOTEBOOK--}}
				<div class="tp-caption sfb stt start randomrotateout tp-resizeme rs-parallaxlevel-10"
				     data-x="center" data-hoffset="-3" data-y="bottom" data-voffset="-40" data-speed="300" data-start="1000" data-easing="Power0.easeIn" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Linear.easeNone" style="z-index: 4; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/notebook4.png', null, array('data-ww' => '470', 'data-hh' => '336', 'style' => 'width: 470px; height: 336px;')) }}</div>
				{{--8. MANOS--}}
				<div class="tp-caption customin sfb stt start randomrotateout tp-resizeme rs-parallaxlevel-10"
				     data-x="center"
				     data-hoffset="0" data-y="bottom" data-start="2000" data-voffset="10" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="0" data-easing="Power0.easeIn" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Power3.easeIn" style="z-index: 4; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/manos.png', null, array('data-ww' => '289', 'data-hh' => '236', 'style' => 'width: 289px; height: 236px;')) }}</div>
				{{--9. BUTTON--}}
				<div class="tp-caption customin start hidden-sm hidden-xs randomrotateout tp-resizeme rs-parallaxlevel-10"
				     data-x="center"
				     data-hoffset="0" data-y="center" data-voffset="-40" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="0"
				     data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-start="2500" data-endspeed="600" style="z-index: 6;">
					<a id="start-now" class="button" href="#" data-ix="button" style="">DESCUBRE MÁS</a>
				</div>
			</li>
			{{--END SLIDER 1--}}
			{{--BEGIN SLIDER 2--}}
			<li data-transition="3dcurtain-vertical" data-slotamount="6" data-masterspeed="700">
				{{--MAIN IMAGE - BACKGROUND--}}
				@if(Config::get('slider.bgblur') == false)
					{{ HTML::image('images/slider/slide2.jpg', '', array('data-bgfit'=>'cover', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat')) }}
				@else
					{{ HTML::image('images/slider/slide2_blur.jpg', '', array('data-bgfit'=>'cover', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat')) }}
				@endif
				{{--1. TITLE--}}
				<div class="tp-caption black sft stb resizeme start" data-x="center" data-y="280" data-speed="300" data-start="1500" data-easing="Power1.easeIn" data-endspeed="300" data-endeasing="Power0.easeInOut" style="z-index: 6; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 1px; font-size: 70px; font-weight: 300; font-family: raleway; text-align:left; color: #ffffff;">
					<span style="font-weight:800">{{ Config::get('slider.slider2.title', '') }}</span></div>
				{{--2. TEXT--}}
				<div class="tp-caption large_bold_white ltl start" data-x="center" data-y="350" data-speed="1000" data-start="1800" data-easing="Back.easeInuOt" data-endspeed="300" data-endeasing="Back.easeIn" style="z-index: 6; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 1px; font-size: 15px; font-weight: 300; font-family: raleway; text-align:center; color:#f7f7f7; white-space: pre-wrap; width: 60%;">{{ Config::get('slider.slider2.text', '') }}</div>
				{{--3. AMPOLLETA--}}
				<div class="tp-caption sfl stl start" data-x="center" data-hoffset="0" data-y="70" data-voffset="0" data-speed="300" data-start="2500" data-easing="Power3.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Power1.easeOut" style="z-index: 4; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/ampolleta.png', null, array('data-ww' => '206', 'data-hh' => '246', 'style' => 'width: 206px; height: 246px;')) }}
				</div>
				{{--4. MANOS--}}
				<div class="tp-caption customin start" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2800" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 5; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">{{ HTML::image('images/slider/trato.png', null, array('data-ww' => '567', 'data-hh' => '184', 'style' => 'width: 567px; height: 184px;')) }}
				</div>
			</li>
			{{--END SLIDER 2--}}
			{{--BEGIN SLIDER 3--}}
			<li data-transition="3dcurtain-vertical" data-slotamount="6" data-masterspeed="700">
				{{--MAIN IMAGE - BACKGROUND--}}
				@if(Config::get('slider.bgblur') == false)
					{{ HTML::image('images/slider/slide3.jpg', '', array('data-bgfit'=>'cover', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat')) }}
				@else
					{{ HTML::image('images/slider/slide3_blur.jpg', '', array('data-bgfit'=>'cover', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat')) }}
				@endif
				{{--1. SUBTITLE--}}
				<div class="tp-caption small_text start"
			        data-x="center"
				    data-y="200"
				    data-speed="500"
				    data-start="500" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power4.easeIn" data-captionhidden="on" style="z-index: 5; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 26px; border-width: 0px; margin: 0px; padding: 1px 4px 0px; letter-spacing: 0px; font-weight:600; color:#fff; text-shadow:none; text-transform: uppercase; font-family: raleway; font-size: 16px; text-align: center; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 0% 0% 0px;">{{ Config::get('slider.slider3.subtitle', '') }}</div>
				{{--2. TITLE--}}
				<div class="tp-caption large_bold_white ltl start"
				    data-x="center"
				    data-y="245"
				    data-speed="1000" data-start="600" data-easing="Back.easeInOut" data-endspeed="400" data-endeasing="Back.easeIn" style="z-index: 5; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 1px; font-size: 54px; text-transform: uppercase; font-weight: 600; text-aligh:center; font-family: raleway; color:#fff; text-align:left; ">
					<span style="font-weight:800">{{ Config::get('slider.slider3.title', '') }}</span></div>
				{{--3. TEXT--}}
				<div class="tp-caption large_bold_white ltl start"
				     data-x="center"
				     data-y="315"
				     data-speed="1000" data-start="700" data-easing="Back.easeInuOt" data-endspeed="400" data-endeasing="Back.easeIn" style="z-index: 5; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 1px; font-size: 15px; font-weight: 300; font-family: raleway; text-align: center; color:#f7f7f7; white-space: pre-wrap; width: 60%;">{{ Config::get('slider.slider3.text', '') }}</div>
				{{--4. BUTTON--}}
				<div class="tp-caption start hidden-sm hidden-xs"
				     data-x="center"
				     data-y="405"
				     data-speed="400"
				     data-start="900"
				     data-easing="Power3.easeInOut"
				     data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; white-space: nowrap; -webkit-transition: all 0s ease 0s; transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 88px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 60px; line-height: 21px; ">
					<a id="contact-now" class="button btn" href="#" data-ix="button" style="transition: all 0.5s ease 0s, opacity 500ms, transform 500ms; -webkit-transition: all 0.5s ease 0s, opacity 500ms, transform 500ms;  transform: translateX(0px) translateY(0px);">EMPECEMOS AHORA</a>
				</div>
				{{--5. PC--}}
				<div class="tp-caption customin start" data-x="180" data-hoffset="0" data-y="bottom" data-voffset="80"
				     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="1000" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 5; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">{{ HTML::image('images/slider/pc.png', null, array('data-ww' => '366', 'data-hh' => '396', 'style' => 'width: 366px; height: 396px;')) }}
				</div>
				{{--6. NOTEBOOK--}}
				<div class="tp-caption sfl stl start" data-x="600" data-hoffset="0" data-y="bottom" data-voffset="65"
				     data-speed="300"
				     data-start="500"
				     data-easing="Power3.easeOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-endeasing="Power1.easeOut" style="z-index: 5; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">{{ HTML::image('images/slider/notebook3.png', null, array('data-ww' => '395', 'data-hh' => '433', 'style' => 'width: 395px; height: 433px;')) }}
				</div>
			</li>
			{{--END SLIDER 3--}}
		</ul>
		<div class="tp-bannertimer"></div>
	</div>
</div>{{--THE SCRIPT INITIALISATION--}}{{--LOOK THE DOCUMENTATION FOR MORE INFORMATIONS--}}
<script type="text/javascript">
	var revapi;
	revapi = jQuery('.tp-banner').revolution({
		@if(Config::get('slider.type') == 'A')
		dottedOverlay: "twoxtwo",
		@elseif(Config::get('slider.type') == 'B')
		dottedOverlay: "twoxtwowhite",
		@else
		dottedOverlay: "none",
		@endif
		delay: 16000,
		startwidth: 1170,
		startheight: 750,
		hideThumbs: 200,

		thumbWidth: 100,
		thumbHeight: 50,
		thumbAmount: 5,

		navigationType: "bullet",
		navigationArrows: "solo",
		navigationStyle: "preview1",

		touchenabled: "on",
		onHoverStop: "on",

		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,

		parallax: "mouse",
		parallaxBgFreeze: "on",
		parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

		keyboardNavigation: "off",

		navigationHAlign: "center",
		navigationVAlign: "bottom",
		navigationHOffset: 0,
		navigationVOffset: 20,

		soloArrowLeftHalign: "left",
		soloArrowLeftValign: "center",
		soloArrowLeftHOffset: 20,
		soloArrowLeftVOffset: 0,

		soloArrowRightHalign: "right",
		soloArrowRightValign: "center",
		soloArrowRightHOffset: 20,
		soloArrowRightVOffset: 0,

		shadow: 0,
		fullWidth: "on",
		fullScreen: "off",

		spinner: "spinner4",

		stopLoop: "off",
		stopAfterLoops: -1,
		stopAtSlide: -1,

		shuffle: "off",

		autoHeight: "off",
		forceFullWidth: "off",

		hideThumbsOnMobile: "off",
		hideNavDelayOnMobile: 1500,
		hideBulletsOnMobile: "off",
		hideArrowsOnMobile: "off",
		hideThumbsUnderResolution: 0,

		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 0,
		hideAllCaptionAtLilmit: 0,
		startWithSlide: 0,
		videoJsPath: "rs-plugin/videojs/",
		fullScreenOffsetContainer: ""
	});
</script>
{{--END REVOLUTION SLIDER--}}