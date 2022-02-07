<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>Street </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Street" />
    <meta name="keywords" content="Street" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />

    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/animate.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/bootstrap.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/font-awesome.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/fonts.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/flaticon.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/owl.carousel.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/owl.theme.default.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/magnific-popup.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/venobox.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/js/plugin/rs_slider/layers.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/js/plugin/rs_slider/navigation.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/js/plugin/rs_slider/settings.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/style3.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/responsive3.css') }} "/>
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />

    <link rel="shortcut icon" type="image/png" href=" {{ asset ('frontend/images/pizza/header/favicon.ico')}}" />



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
            <img src=" {{ asset ('frontend/images/pizza/header/loader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>

    <div class="lr_header_navigation_main_wrapper">
        <div class="lr_navigation_header_fixed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
                        <div class="lr_logo_mian_wrapper lr_logo_mian_wrapper2 lr_center_logo_wrapper">
                            <a href="/index"><img src="{{ asset('frontend/images/header/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-6">
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
                                        <li class="lr_apoi_btn visible-lg">
                                            <a href="#" class="lr-btn-background move-eff lr_ff_btn2"><span>Cita</span></a>
                                        </li>
                                        <li class="lr_searchbar_wrapper hidden-xs">
                                            <div class="search_bar hidden-xs">
                                                <div class="lv_search_bar" id="search_button">
                                                    <i class="flaticon-magnifier"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown caret_btn"><a href="#"><i class="flaticon-shopping-cart"></i><span>02</span></a>
                                            <ul>
                                                <li>
                                                    <div class="cc_cart_wrapper1 menu-button">
                                                        <div class="cc_cart_img_wrapper">
                                                            <img src="{{ asset ('frontend/images/pizza/content/cart_img.jpg') }} " alt="cart_img" />
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
                                                            <img src="{{ asset ('frontend/images/pizza/content/cart_img.jpg') }} " alt="cart_img" />
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
                                                            <img src="{{ asset ('frontend/images/pizza/content/cart_img.jpg') }} " alt="cart_img" />
                                                        </div>
                                                        <div class="cc_cart_cont_wrapper">
                                                            <h4><a href="#">Pakora</a></h4>
                                                            <p>Cantidad  : 2 × $45</p>
                                                            <h5>$90</h5>
															<button type="button" class="close" data-dismiss="modal">×</button>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <div id="search_open" class="lv_search_box">
                                        <input type="text" placeholder="Search here">
                                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('slider')

    @yield('index')
    
    <div class="lr_index_about_main_section_wrapper">
        <div class="lr_about_index_particles_effect_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lr_index_about_img_wrapper">
                            <img src="{{ asset ('frontend/images/pizza/content/about_img.jpg') }} " alt="about_img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lr_index_about_right_wrapper">
                            <h2>Bienvenido a<span></span></h2>
                            <h3>RESTAURANTE WESTROT</h3>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim anim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum doore eu fgiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim anim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doore eu fgiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="lr-btn lr-btn2 move-eff"><span>SOBRE NOSOTROS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <div class="lr_menu_section_main_wrapper jarallax">
		<div class="lr_menu_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                    <div class="lr_menu_section_heading_wrapper">
                        <h2>Menú especial<span></span></h2>
                    </div>
                    <div class="lr_menu_section_list_wrapper">
                        <ul>
                            <li>Berry Trifl<span>$70.00</span></li>
                            <li>Crepes de chocolate<span>$20.00</span></li>
                            <li>Tarta doble de chocolate<span>$75.00</span></li>
                            <li>Croissants franceses<span>$60.00</span></li>
                            <li>Macarrones franceses<span>$80.00</span></li>
                            <li>Rodaja de trigo caprese<span>$55.00</span></li>
                        </ul>
                        <a href="#" class="lr-btn move-eff lr_menu_btn"><span>Leer más</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('menu')




    
    <div class="lr_fresh_section_main_wrapper jarallax">
        <div class="lr_fresh_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_fresh_heading_wrapper">
                        <h2>Siempre fresco, no te lo pierdas<span></span></h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_fresh_food_slider_main_wrapper">
                        <div class="lr_ff_slider_first_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="lr_ff_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/f1.jpg') }} " alt="fresh_food_img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="lr_ff_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/f2.jpg') }} " alt="fresh_food_img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="lr_ff_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/f1.jpg') }} " alt="fresh_food_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lr_ff_slider_cont_first_wrapper">
                            <h2>Pruebe la mejor pizza y comida de la ciudad</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed does eiusmod tempor incididunt ut ipsum dolor sit amet,tetur ipisicing elit, sed doeiusmod tempor incididunt.</p>
                            <div class="lr_ff_main_btn_wrapper">
                                <a href="#" class="lr-btn-background move-eff lr_ff_btn2"><span>comprar ahora</span></a>
                                <a href="#" class="lr-btn move-eff lr_ff_btn1"><span>ver oferta</span></a>
                            </div>
                            <div class="lr_ff_price_lable_wrapper">
                                <h5>Inicie con $25</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_fresh_food_slider_main_wrapper">

                        <div class="lr_ff_slider_cont_first_wrapper lr_ff_slider_cont_second_wrapper hidden-xs">
                            <h2>Pruebe la mejor pizza y comida de la ciudad</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed does eiusmod tempor incididunt ut ipsum dolor sit amet,tetur ipisicing elit, sed doeiusmod tempor incididunt.</p>
                            <div class="lr_ff_main_btn_wrapper">
                                <a href="#" class="lr-btn-background move-eff lr_ff_btn2"><span>comprar ahora</span></a>
                                <a href="#" class="lr-btn move-eff lr_ff_btn1"><span>ver oferta</span></a>
                            </div>
                            <div class="lr_ff_price_lable_wrapper">
                                <h5>Inicie con $25</h5>
                            </div>
                        </div>
                        <div class="lr_ff_slider_second_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="lr_ff_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/f2.jpg') }}" alt="fresh_food_img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="lr_ff_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/f1.jpg') }}" alt="fresh_food_img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="lr_ff_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/f2.jpg') }}" alt="fresh_food_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lr_ff_slider_cont_first_wrapper lr_ff_slider_cont_second_wrapper visible-xs">
                            <h2>Pruebe la mejor pizza y comida de la ciudad</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed does eiusmod tempor incididunt ut ipsum dolor sit amet,tetur ipisicing elit, sed doeiusmod tempor incididunt.</p>
                            <div class="lr_ff_main_btn_wrapper">
                                <a href="#" class="lr-btn-background move-eff lr_ff_btn2"><span>buy now</span></a>
                                <a href="#" class="lr-btn move-eff lr_ff_btn1"><span>view offer</span></a>
                            </div>
                            <div class="lr_ff_price_lable_wrapper lr_ff_price_lable_wrapper2">
                                <h5>Inicie con $25</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="lr_reser_main_section_wrapper">
        <div class="lr_reser_heading_main_wrapper">
            <h2><span class="lr_dots_left"></span>Hacer una reserva<span class="lr_dots_right"></span></h2>
        </div>
        <div class="lr_reser_map_left_wrapper">
            <div id="map"></div>
        </div>
        <div class="lr_reser_map_right_wrapper">
            <div class="lr_reser_map_right_inner_wrapper">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_reser_inner_heading">
                        <h2>Reserva</h2>
                        <p>+1800-154-175</p>
                    </div>
                </div>
                <div class="lr_reser_input_box_main_wrapper">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <input type="text" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <input type="text" placeholder="Correo Electrónico">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <input type="text" placeholder="Fecha">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <input type="text" placeholder="08:00am">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <select>
								<option>Nº de invitados</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
                        </div>
                    </div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <select>
								<option>Nº de mesa</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <textarea rows="4" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <a href="#" class="lr_reser_btn_background move-eff lr_ff_btn2"><span>Reserve Mesa</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lr_reser_map_right_inner_img_wrapper">
                <img src="{{ asset ('frontend/images/pizza/content/sheif_img.png') }} " alt="reser_img">
            </div>
        </div>
    </div>
    
    
    <div class="lr_testi_main_section_wrapper jarallax">
        <div class="lr_testi_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_testi_heading_wrapper">
                        <h2>Testimonio<span></span></h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_testi_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_testi_slider_cont_main_wrapper">
                                    <div class="lr_testi_slider_img">
                                        <img src="{{ asset ('frontend/images/pizza/content/testi_img.jpg') }} " alt="tesi_img">
                                    </div>
                                    <div class="lr_testi_slider_img_cont">
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                        <h2><span>Tanvi S.</span>&nbsp;&nbsp;( Masterchef Team Leader )</h2>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_testi_slider_cont_main_wrapper">
                                    <div class="lr_testi_slider_img">
                                        <img src="{{ asset ('frontend/images/pizza/content/testi_img.jpg') }} " alt="tesi_img">
                                    </div>
                                    <div class="lr_testi_slider_img_cont">
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                        <h2><span>Tanvi S.</span>&nbsp;&nbsp;( Masterchef Team Leader )</h2>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_testi_slider_cont_main_wrapper">
                                    <div class="lr_testi_slider_img">
                                        <img src="{{ asset ('frontend/images/pizza/content/testi_img.jpg') }} "< alt="tesi_img">
                                    </div>
                                    <div class="lr_testi_slider_img_cont">
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                        <h2><span>Tanvi S.</span>&nbsp;&nbsp;( Masterchef Team Leader )</h2>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="lr_event_section_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_reser_heading_main_wrapper">
                        <h2><span class="lr_dots_left"></span>Eventos recientes<span class="lr_dots_right"></span></h2>
                    </div>
                </div>
                <div class="lr_ev_main_section_wrapper">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lr_ev_img_main_wrapper">
                            <div class="lr_ev_img_wrapper">
                                <img src="{{ asset ('frontend/images/pizza/content/ev1.jpg') }} " alt="event_img">
                            </div>
                            <span class="small_dot1"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lr_ev_img_cont_wrapper">
                            <ul>
                                <li><i class="fa fa-calendar"></i>&nbsp;&nbsp; 20 de junio de 2018</li>
                                <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp; 12:45pm A 04:26pm</li>
                            </ul>
                            <h2>Master Chef Mejor Competencia</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod terempor incididunt ut re et dolore magna aliqua. Ut enim ad minim veniam, quis nersostrud exercitation ullamco laboris nisi ut aliquip extea.</p>
                            <a href="#" class="lr-btn lr-ev-btn move-eff"><span>RESERVAR</span></a>
                        </div>
                    </div>
                </div>
                <div class="lr_ev_main_section_wrapper lr_ev_main_section_wrapper2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <div class="lr_ev_img_cont_wrapper">
                            <ul>
                                <li><i class="fa fa-calendar"></i>&nbsp;&nbsp; 20 de junio de 2018</li>
                                <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp; 12:45pm A 04:26pm</li>
                            </ul>
                            <h2>Master Chef Mejor Competencia</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod terempor incididunt ut re et dolore magna aliqua. Ut enim ad minim veniam, quis nersostrud exercitation ullamco laboris nisi ut aliquip extea.</p>
                            <a href="#" class="lr-btn lr-ev-btn move-eff"><span>RESERVAR</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lr_ev_img_main_wrapper">
                            <span class="small_dot2"></span>
                            <div class="lr_ev_img_wrapper">
                                <img src="{{ asset ('frontend/images/pizza/content/ev2.jpg') }} " alt="event_img">
                            </div>
                            <span class="small_dot3"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-sm visible-xs">
                        <div class="lr_ev_img_cont_wrapper">
                            <ul>
                                <li><i class="fa fa-calendar"></i>&nbsp;&nbsp; 20 de junio de 2018</li>
                                <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp; 2:45pm A 04:26pm</li>
                            </ul>
                            <h2>Master Chef Mejor Competencia</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod terempor incididunt ut re et dolore magna aliqua. Ut enim ad minim veniam, quis nersostrud exercitation ullamco laboris nisi ut aliquip extea.</p>
                            <a href="#" class="lr-btn lr-ev-btn move-eff"><span>RESERVAR</span></a>
                        </div>
                    </div>
                </div>
                <div class="lr_ev_main_section_wrapper lr_ev_main_section_wrapper2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lr_ev_img_main_wrapper">
                            <span class="small_dot2 small_dot4"></span>
                            <div class="lr_ev_img_wrapper">
                                <img src="{{ asset ('frontend/images/pizza/content/ev3.jpg') }} " alt="event_img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lr_ev_img_cont_wrapper">
                            <ul>
                                <li><i class="fa fa-calendar"></i>&nbsp;&nbsp; 20 de junio de 2018</li>
                                <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp; 2:45pm A 04:26pm</li>
                            </ul>
                            <h2>Master Chef Mejor Competencia</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod terempor incididunt ut re et dolore magna aliqua. Ut enim ad minim veniam, quis nersostrud exercitation ullamco laboris nisi ut aliquip extea.</p>
                            <a href="#" class="lr-btn lr-ev-btn move-eff"><span>RESERVAR</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="lr_count_main_section_wrapper jarallax">
        <div class="lr_count_img_overlay"></div>
        <section class="counter-section section-padding">
            <div class="container text-center">
                <div class="row">
                    <div class="trucking_counter">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="con con_right_border">
                                <i class="flaticon-chef-hat-outline-symbol"></i>
                            </div>
                            <div class="count-description">
                                <span class="timer">513</span>
                                <h5 class="con1">Platos deliciosos</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="con con_right_border con2">
                                <i class="flaticon-cup"></i>
                            </div>
                            <div class="count-description">
                                <span class="timer">7325</span>
                                <h5 class="con2">Años de experiencia</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="con con_right_border con3">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="count-description">
                                <span class="timer">1924</span>
                                <h5 class="con3">Clientes felices</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="con con4">
                                <i class="flaticon-trophy"></i>
                            </div>
                            <div class="count-description">
                                <span class="timer">4275</span>
                                <h5 class="con4">Premios merecidos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    
    <div class="lr_indx_blog_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_reser_heading_main_wrapper">
                        <h2><span class="lr_dots_left"></span>Último blog<span class="lr_dots_right"></span></h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_index_bog_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_in_bog_slider_cont_wrapper">
                                    <h2>Master Chef Mejor Competencia</h2>
                                    <ul>
                                        <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                                        <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                                        <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris</p>
                                    <a href="#" class="lr_reser_btn_background move-eff lr_ff_btn2"><span>Reservar ahora</span></a>
                                    <div class="lr_blg_date_wrapper">
                                        <p>21<br> <span>marzo</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_in_bog_slider_cont_wrapper">
                                    <h2>Master Chife Best Competition</h2>
                                    <ul>
                                        <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                                        <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                                        <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris</p>
                                    <a href="#" class="lr_reser_btn_background move-eff lr_ff_btn2"><span>Reservar ahora</span></a>
                                    <div class="lr_blg_date_wrapper">
                                        <p>21<br> <span>marzo</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_in_bog_slider_cont_wrapper">
                                    <h2>Master Chife Best Competition</h2>
                                    <ul>
                                        <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                                        <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                                        <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris</p>
                                    <a href="#" class="lr_reser_btn_background move-eff lr_ff_btn2"><span>Reservar ahora</span></a>
                                    <div class="lr_blg_date_wrapper">
                                        <p>21<br> <span>marzo</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="lr_team_main_section_wrapper jarallax">
        <div class="lr_team_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_team_heading_wrapper">
                        <h2>Nuestro mejor chef<span></span></h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_team_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_team_box_main_wrapper">
                                    <div class="lr_team_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/t1.png') }} " alt="team_img">
                                    </div>
                                    <div class="lr_team_img_cont_wrapper">
                                        <div class="lr_team_social_left_wrapper">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="lr_team_name_center_wrapper">
                                            <h3><a href="#">Ajay S.</a></h3>
                                            <p>(Jefe de cocina)</p>
                                        </div>
                                        <div class="lr_team_social_right_wrapper">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_team_box_main_wrapper">
                                    <div class="lr_team_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/t2.png') }} " alt="team_img">
                                    </div>
                                    <div class="lr_team_img_cont_wrapper">
                                        <div class="lr_team_social_left_wrapper">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="lr_team_name_center_wrapper">
                                            <h3><a href="#">Shruti J.</a></h3>
                                            <p>(Jefe de cocina)</p>
                                        </div>
                                        <div class="lr_team_social_right_wrapper">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_team_box_main_wrapper">
                                    <div class="lr_team_img_wrapper">
                                        <img src="{{ asset ('frontend/images/pizza/content/t3.png') }} " alt="team_img">
                                    </div>
                                    <div class="lr_team_img_cont_wrapper">
                                        <div class="lr_team_social_left_wrapper">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="lr_team_name_center_wrapper">
                                            <h3><a href="#">Ajay S.</a></h3>
                                            <p>(Jefe de cocina)</p>
                                        </div>
                                        <div class="lr_team_social_right_wrapper">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="lr_partner_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_reser_heading_main_wrapper">
                        <h2><span class="lr_dots_left"></span>Nuestro Patrón<span class="lr_dots_right"></span></h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_prt_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset ('frontend/images/pizza/content/p1.jpg') }} "alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset ('frontend/images/pizza/content/p2.jpg') }} "alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset ('frontend/images/pizza/content/p3.jpg') }} "alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset ('frontend/images/pizza/content/p4.jpg') }} "alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset ('frontend/images/pizza/content/p5.jpg') }} "alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset ('frontend/images/pizza/content/p6.jpg') }} "alt="partner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="lr_footer_main_wrapper">
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
                                    <p>Columbia Británica, Canadá <br> 512B omexcity, India</p>
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
                                        <a href="#">pizzaorers@example.com</a></p>
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
        <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i><br><span>Arriba
        </span></a>
        <p>Copyright 2018 <a href="#">Calle</a> - Diseño por ~ <a href="#">Webstrot</a></p>
    </div>
    
    
    <script src="{{ asset ('frontend/js/jquery_min.js') }} "></script>
    <script src="{{ asset ('frontend/js/modernizr.js') }} "></script>
    <script src="{{ asset ('frontend/js/bootstrap.js') }} "></script>
    <script src="{{ asset ('frontend/js/owl.carousel.js') }} "></script>
    <script src="{{ asset ('frontend/js/parallax.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.countTo.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.inview.min.js') }} "></script>
	<script src="{{ asset ('frontend/js/jarallax.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.magnific-popup.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.counterup.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.downCount.js') }} "></script>
    <script src="{{ asset ('frontend/js/waypoints.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/venobox.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.bxslider.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/jquery.themepunch.revolution.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/jquery.themepunch.tools.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.addon.snow.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.actions.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.carousel.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.kenburn.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.layeranimation.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.migration.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.navigation.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.parallax.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.slideanims.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.extension.video.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/plugin/rs_slider/revolution.addon.slicey.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/custom3.js') }} "></script>
    
    
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
    <script>
        $(".lr_element_tabs_main_wrapper .nav-tabs a").click(function() {
          var position = $(this).parent().position();
          var width = $(this).parent().width();
            $(".slider").css({"left":+ position.left,"width":width});
        });
        var actWidth = $(".lr_element_tabs_main_wrapper .nav-tabs .active").width();
        var actPosition = $(".lr_element_tabs_main_wrapper .nav-tabs .active").position();
        $(".slider").css({"left":+ actPosition.left,"width": actWidth});
    </script>
</body>


</html>