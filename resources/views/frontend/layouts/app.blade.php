<!DOCTYPE html>
<html lang="es">
    <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <title> @yield('title') | Restaurante </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Street" />
    <meta name="keywords" content="Street" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/venobox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}" />
    <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>


    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/header/favicon.ico') }}" />


    <script> var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-30585461-1']);
        _gaq.push(['_trackPageview']);

        (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        </script>

<body>

    <div id="preloader">
        <div id="status">
            <img src="{{ asset('frontend/images/header/loader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>

    <div class="lr_inner_header_navigation_main_wrapper">
        <div class="lr_navigation_header_fixed lr_inner_top_header_navigation_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="lr_logo_mian_wrapper">
                            <a href="/index"><img src="{{ asset('frontend/images/header/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="lr_main_navigation_wrapper">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="#"><a href="{{ route('home') }}">Inicio</a>
                                        </li>
                                        <li><a href="{{ route('reservaciones') }}">Reserva</a></li>
                                        <li><a href="{{ route('nosotros') }}">Sobre nosotros</a></li>
                                        <li class="dropdown"><a href="#">Evento</a>
                                            <ul>
                                                <li><a href="{{ route('Categoria') }}">Evento-Categoría</a></li>
                                                <li><a href="{{ route('Individual') }}">Evento-Solo</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Páginas</a>
                                            <ul>
                                                <li><a href="{{ route('Menus') }}">Menú</a></li>
                                                <li><a href="{{ route('404') }}">404</a></li>
                                                <li><a href="{{ route('Galeria') }}">Galería</a></li>
                                                <li><a href="{{ route('Equipo') }}">Equipo</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="{{ route('Blog Categoria') }}">Blog-Categoría</a></li>
                                                <li><a href="{{ route('Blog Individual') }}">Blog Solo</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                                        <li class="dropdown caret_btn"><a href="#"><i class="flaticon-shopping-cart"></i><span>02</span></a>
                                            <ul>
                                                <li>
                                                    <div class="cc_cart_wrapper1 menu-button">
                                                        <div class="cc_cart_img_wrapper">
                                                            <img src="{{ asset('frontend/images/content/cart_img.jpg') }}" alt="cart_img" />
                                                        </div>
                                                        <div class="cc_cart_cont_wrapper">
                                                            <h4><a href="#">Pakora</a></h4>
                                                            <p>Cantidad : 2 × $45</p>
                                                            <h5>$90</h5>
															<button type="button" class="close" data-dismiss="modal">×</button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cc_cart_wrapper1 menu-button">
                                                        <div class="cc_cart_img_wrapper">
                                                            <img src="{{ asset('frontend/images/content/cart_img.jpg') }}" alt="cart_img" />
                                                        </div>
                                                        <div class="cc_cart_cont_wrapper">
                                                            <h4><a href="#">Pakora</a></h4>
                                                            <p>Cantidad : 2 × $45</p>
                                                            <h5>$90</h5>
															<button type="button" class="close" data-dismiss="modal">×</button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cc_cart_wrapper1 menu-button">
                                                        <div class="cc_cart_img_wrapper">
                                                            <img src="{{ asset('frontend/images/content/cart_img.jpg') }}" alt="cart_img" />
                                                        </div>
                                                        <div class="cc_cart_cont_wrapper">
                                                            <h4><a href="#">Pakora</a></h4>
                                                            <p>Cantidad : 2 × $45</p>
                                                            <h5>$90</h5>
															<button type="button" class="close" data-dismiss="modal">×</button>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lr_inner_header_bottom_title_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_inner_title_heading_wrapper">
                            <h2> @yield('title-nav') <span></span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_inner_title_right_Wrapper">
                            <ul>
                                <li><a href="index3.html">Inicio &nbsp;&nbsp;&nbsp;></a></li>
                                <li> @yield('title-nav') </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('content')



    <div class="lr_footer_main_wrapper lr_inner_footer_main_wrapper">
        <div class="lr_footer_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="lr_footer_cont_first">
                        <div class="lr_footer_first_heading">
                            <h2>Sobre nosotros <span></span></h2>
                        </div>
                        <div class="lr_footer_first_heading_cont">
                            <p>Lorem ipsum dolor sit amet, consectetur adigio eiusmod tempor incididunt ut labore et doloire magna Ut enim ad minim veniam.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="lr_footer_first_btn">
                            <a href="#" class="lr-btn lr-footer-btn move-eff"><span>LEER MÁS</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="lr_footer_cont_first lr_footer_cont_second">
                        <div class="lr_footer_second_heading">
                            <h2>Horario de apertura <span></span></h2>
                        </div>
                        <div class="lr_footer_second_heading_cont">
                            <ul>
                                <li>Lunes a viernes ....................... 10Am-8Pm</li>
                                <li>Sábado....................... 10Am-9Pm</li>
                                <li>Miércoles...................... 10Am-3Pm</li>
                            </ul>
                        </div>
                        <div class="lr_footer_second_heading_cont_bottom">
                            <h2>Horario del Café Bar</h2>
                            <ul>
                                <li>Lunes a viernes ....................... 10Am-8Pm</li>
                                <li>Sábado....................... 10Am-9Pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="lr_footer_cont_first lr_footer_cont_second">
                        <div class="lr_footer_third_heading">
                            <h2>Contacto <span></span></h2>
                        </div>
                        <div class="lr_footer_third_heading_cont">
                            <div class="lr_foot_add_wrapper">
                                <div class="lr_foot_icon_wrapper">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                <div class="lr_foot_icon_cont_wrapper">
                                    <p>British Columbia, Canada <br> 512B omexcity, India</p>
                                </div>
                            </div>
                            <div class="lr_foot_add_wrapper lr_foot_contact_wrapper">
                                <div class="lr_foot_icon_wrapper">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="lr_foot_icon_cont_wrapper lr_foot_icon_contact_cont_wrapper">
                                    <p>+6100-142-758<br> +1800-658-654
                                    </p>
                                </div>
                            </div>
                            <div class="lr_foot_add_wrapper lr_foot_contact_wrapper">
                                <div class="lr_foot_icon_wrapper">
                                    <i class="fa fa-envelope-open"></i>
                                </div>
                                <div class=" lr_foot_icon_cont_wrapper lr_foot_icon_email_cont_wrapper">
                                    <p><a href="#">omeniacoffe@example.com</a><br>
                                        <a href="#">coffeeorers@example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="lr_footer_news_letter_wrapper">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="lr_nl_heading_wrapper">
                                    <h2>Suscríbase a nuestro boletín de noticias</h2>
                                    <p>Reciba un 15% de descuento en su primer pedido.</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="lr_nl_form_wrapper">
                                    <input type="text" placeholder="Introduzca su correo electrónico">
                                    <button type="submit">Suscríbase a</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lr_bottom_footer_main_wrapper">
        <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i><br><span>Arriba</span></a>
        <p>Copyright 2018 <a href="#">Calle</a> - Diseño por ~ <a href="#">Webstrot</a></p>
    </div>
    <script src="{{ asset ('frontend/js/jquery_min.js') }} "></script>
    <script src="{{ asset ('frontend/js/modernizr.js') }} "></script>
    <script src="{{ asset ('frontend/js/bootstrap.js') }} "></script>
    <script src="{{ asset ('frontend/js/owl.carousel.js') }} "></script>
    <script src="{{ asset ('frontend/js/parallax.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/tilt.jquery.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.countTo.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.inview.min.js') }} "></script>
	<script src="{{ asset ('frontend/js/jarallax.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.shuffle.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.magnific-popup.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.counterup.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.downCount.js') }} "></script>
    <script src="{{ asset ('frontend/js/waypoints.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/venobox.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/custom.js') }} "></script>
    <script>
        function initMap() {
        		var uluru = {lat: -36.742775, lng:  174.731559};
        		var map = new google.maps.Map(document.getElementById('map'), {
        		zoom: 15,
        		scrollwheel: false,
        		center: uluru
        		});
        		var marker = new google.maps.Marker({
        		position: uluru,
        		map: map
        		});
        		}
    </script>

   @yield('scripter')

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
</body>
</html>
