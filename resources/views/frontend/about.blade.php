@extends('frontend.layouts.app')

@section('title')
    Sobre nosotros
@endsection

@section('title-nav')
    Sobre nosotros
@endsection

@section('content')
    <div class="lr_about_section_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="lr_index_about_right_wrapper">
                        <h2>Bienvenido a<span></span></h2>
                        <h3>RESTAURANTE WESTROT</h3>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim anim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            doore eu fgiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            anim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doore eu fgiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="lr-btn lr-btn2 move-eff"><span>SOBRE NOSOTROS</span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="lr_about_slider_main_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_about_slider_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/about_slider_img.jpg') }} " alt="fresh_food_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_about_slider_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/about_slider_img.jpg') }} " alt="fresh_food_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_about_slider_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/about_slider_img.jpg') }} " alt="fresh_food_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lr_about_service_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_about_service_heading_wrapper">
                        <h2><span class="lr_dots_left"></span>Nuestros servicios<span class="lr_dots_right"></span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="lr_as_box_main_wrapper">
                        <div class="lr_as_icon_wrapper">
                            <i class="flaticon-chef-hat-outline-symbol"></i>
                        </div>
                        <div class="lr_as_icon_cont_wrapper">
                            <h2><a href="#">Los mejores platos</a></h2>
                            <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="lr_as_box_main_wrapper">
                        <div class="lr_as_icon_wrapper">
                            <i class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view"></i>
                        </div>
                        <div class="lr_as_icon_cont_wrapper">
                            <h2><a href="#">Café Premium</a></h2>
                            <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="lr_as_box_main_wrapper">
                        <div class="lr_as_icon_wrapper">
                            <i class="flaticon-cheers"></i>
                        </div>
                        <div class="lr_as_icon_cont_wrapper">
                            <h2><a href="#">Bebidas y bar</a></h2>
                            <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="lr_as_box_main_wrapper">
                        <div class="lr_as_icon_wrapper">
                            <i class="flaticon-edit"></i>
                        </div>
                        <div class="lr_as_icon_cont_wrapper">
                            <h2><a href="#">Reserva</a></h2>
                            <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="lr_as_box_main_wrapper">
                        <div class="lr_as_icon_wrapper">
                            <i class="flaticon-cutlery"></i>
                        </div>
                        <div class="lr_as_icon_cont_wrapper">
                            <h2><a href="#">Platos personalizados</a></h2>
                            <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="lr_as_box_main_wrapper">
                        <div class="lr_as_icon_wrapper">
                            <i class="flaticon-discount-sticker-with-percentage"></i>
                        </div>
                        <div class="lr_as_icon_cont_wrapper">
                            <h2><a href="#">Ofertas especiales</a></h2>
                            <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection