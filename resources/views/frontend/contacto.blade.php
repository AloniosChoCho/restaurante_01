@extends('frontend.layouts.app')

@section('title')
    Contacto 
@endsection

@section('title-nav')
    Contacto
@endsection

@section('content')
    
<div class="lr_contact_title_main_section_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="lr_ct_box_wrapper">
                    <div class="lr_ct_icon_wrapper">
                        <i class="flaticon-agenda"></i>
                    </div>
                    <h2>Contacto</h2>
                    <p>+1800-148-423<br>+9175-148-124</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="lr_ct_box_wrapper lr_ct_box_wrapper2">
                    <div class="lr_ct_icon_wrapper">
                        <i class="flaticon-close-envelope"></i>
                    </div>
                    <h2>Correo Electronico</h2>
                    <p><a href="#">resto@example.com</a><br><a href="#">onlineresto@example.com</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="lr_ct_box_wrapper lr_ct_box_wrapper2">
                    <div class="lr_ct_icon_wrapper">
                        <i class="flaticon-placeholder"></i>
                    </div>
                    <h2>Ubicación</h2>
                    <p>51-Maxico ,canada<br>52B-Ram nagar,Dewas</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="lr_contact_map_main_wrapper">
    <div id="map"></div>
</div>


<div class="lr_contact_gt_main_wrapper">
    <div class="container">
        <div class="lr_gt_left_wrapper">
            <h2>Hora de apertura</h2>
            <div class="lr_gt_time_list_wrapper">
                <ul>
                    <li>Lunes<span>8am - 9pm</span></li>
                    <li>Martes<span>9am - 10pm</span></li>
                    <li>Miercoles<span>7am - 9pm</span></li>
                    <li>Jueves<span>8am - 1pm</span></li>
                    <li>Viernes<span>9am - 4pm</span></li>
                    <li>Sabado<span>10am - 6pm</span></li>
                    <li>Domingo<span>11am - 5pm</span></li>
                </ul>
            </div>
            <p>Call Now - +1800-551-475</p>
        </div>
        <div class="lr_gt_right_wrapper">
            <div class="lr_gt_right_heading">
                <h2>Póngase en contacto con nosotros<span></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua enim.</p>
            </div>
            <div class="lr_gt_chef_img">
                <img src="{{ asset ('frontend/images/content/contact/chef.png') }} " alt="chef_img">
            </div>
            <div class="lr_gt_bur_img">
                <img src="{{ asset ('frontend/images/content/contact/bur.png') }} "alt="chef_img">
            </div>
            <div class="row">
                <div class="blog_contect_wrapper lr_gt_contact_form_Wrapper">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contect_form1">
                            <input type="text" placeholder="Nombre"><i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contect_form2">
                            <input type="email" placeholder="Correo Electronico"><i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contect_form4">
                            <textarea rows="6" placeholder="Comentario"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_bs_effect_btn">
                            <a href="#" class="lr-btn-background move-eff lr_ff_btn2"><span>enviar</span></a>
                        </div>
                    </div>
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

