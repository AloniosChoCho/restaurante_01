@extends('frontend.layouts.app')

@section('title')
    Reservaciones
@endsection

@section('title-nav')
    Nuestros menús
@endsection

@section('content')
    <div class="lr_tb_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_reser_heading_main_wrapper lr_tb_heading_main_wrapper">
                        <h2><span class="lr_dots_left"></span>Reserve sus mesas<span class="lr_dots_right"></span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    </div>
                </div>
                <div class="lr_tb_main_box_wrapper">
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper1">
                        <img src="{{ asset('frontend/images/content/tb1.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw1.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper2">
                        <img src="{{ asset('frontend/images/content/tb2.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw2.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libros</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper3">
                        <img src="{{ asset('frontend/images/content/tb3.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw3.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper4">
                        <img src="{{ asset('frontend/images/content/tb4.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw4.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper5">
                        <img src="{{ asset('frontend/images/content/tb5.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw5.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper6">
                        <img src="{{ asset('frontend/images/content/tb6.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw6.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper7">
                        <img src="{{ asset('frontend/images/content/tb7.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw7.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lr_tb_box1_wrapper lr_tb_box1_wrapper8">
                        <img src="{{ asset('frontend/images/content/tb8.png') }}" alt="table_img">
                        <img src="{{ asset('frontend/images/content/tbw8.png') }}" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Mesa del Libro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lr_reser_main_section_wrapper lr_om_reser_main_section_wrapper">
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
                            <input type="text" placeholder="Correo Electronico">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_reser_input_box_Wrapper">
                            <select>
                                <option>Número de invitados</option>
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
                            <a href="#" class="lr_reser_btn_background move-eff lr_ff_btn2"><span>Mesa del Libro</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lr_reser_map_right_inner_img_wrapper">
                <img src="{{ asset('frontend/images/content/sheif_img.png') }}" alt="reser_img">
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
                                    <img src="{{ asset('frontend/images/content/p1.jpg') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('frontend/images/content/p2.jpg') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('frontend/images/content/p3.jpg') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('frontend/images/content/p4.jpg') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('frontend/images/content/p5.jpg') }}" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="{{ asset('frontend/images/content/p6.jpg') }}" alt="partner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection