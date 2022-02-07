@extends('frontend.layouts.app')

@section('title')
  Evento Individual
@endsection

@section('title-nav')
    Evento Individual
@endsection

@section('content')
    
<div class="lr_es_top_slider_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="lr_es_top_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="lr_es_slider_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/event/es1.jpg') }} " alt="slider_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lr_es_slider_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/event/es1.jpg') }} " alt="slider_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lr_es_slider_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/event/es1.jpg') }} " alt="slider_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="le_es_slider_bottom_left_content_wrapper">
                    <div class="lr_team_heading_wrapper lr_about_team_heading_wrapper">
                        <h2>A French Christmas<span></span></h2>
                    </div>
                    <ul>
                        <li><i class="fa fa-calendar"></i> &nbsp;&nbsp;Vie,15/04/18</li>
                        <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp; 6:00 am</li>
                        <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Avenida 45, Estrasburgo, Francia</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamostrud exon ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exceur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anm id est laborum. Sed ut perspiciatis unde
                        omnis iste natus error sit volupttem acm doloremque laudantium.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="le_es_slider_bottom_right_content_wrapper">
                    <ul>
                        <li>Compartir con :</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="le_es_sign_main_wrapper">
                    <img src="{{ asset ('frontend/images/content/event/Signature.png') }} " alt="sign_img">
                    <h3><i class="fa fa-user"></i> Ajay S. <span>(Maestro de cocina)</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lr_es_timer_main_warpper">
    <div class="lr_es_timer_img_overlay"></div>
    <div class="container">
        <div class="lr_es_timer_main_wrapper">
            <ul class="count-list list-inline">
                <li>
                    <p>dias</p><span class="count days">00</span></li>
                <li>
                    <p>horas</p><span class="count hours">00</span></li>
                <li>
                    <p>min</p><span class="count minutes">00</span></li>
                <li>
                    <p>sec</p><span class="count seconds">00</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="lr_book_event_main_section_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="lr_reser_heading_main_wrapper lr_ec_timer_heading">
                    <h2><span class="lr_dots_left"></span>Evento de libro<span class="lr_dots_right"></span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
            </div>
            <div class="blog_contect_wrapper lr_gt_contact_form_Wrapper">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="contect_form1">
                        <input type="text" placeholder="Nombre"><i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="contect_form2">
                        <input type="email" placeholder="Correo Electronico"><i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="contect_form2">
                        <select>
                                <option>Número de personas</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contect_form4">
                        <textarea rows="6" placeholder="Comentario"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_es_cont_effect_btn">
                        <a href="#" class="lr-btn-background move-eff lr_es_btn2"><span>Reservar ahora</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lr_es_about_main_wrapper">
    <div class="lr_es_about_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="lr_team_box_main_wrapper">
                    <div class="lr_team_img_wrapper">
                        <img src="{{ asset ('frontend/images/content/t2.png') }} " alt="team_img">
                    </div>
                    <div class="lr_team_img_cont_wrapper lr_es_team_img_cont_wrapper">
                        <div class="lr_team_name_center_wrapper lr_es_team_name_center_wrapper">
                            <h3><a href="#">Shruti J.</a></h3>
                            <p>(Jefe de cocina)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="lr_team_heading_wrapper lr_es_team_heading_wrapper">
                    <h2>Sobre el organizador<span></span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore aire magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo equat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui<br><br>officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                        unde omnis iste natus error sit voluptatem ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasichitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit sied quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Lorem ipsum dolor sit amet, constetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim niam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non pdent, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lr_partner_main_wrapper lr_about_partner_main_wrapper">
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
                                <img src="{{ asset ('frontend/images/content/p1.jpg') }} " alt="partner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lr_prt_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/p2.jpg') }} " alt="partner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lr_prt_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/p3.jpg') }} " alt="partner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lr_prt_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/p4.jpg') }} " alt="partner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lr_prt_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/p5.jpg') }} " alt="partner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lr_prt_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/p6.jpg') }} " alt="partner_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection