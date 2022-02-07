@extends('frontend.layouts.app')

@section('title')
Blog Categoria
@endsection

@section('title-nav')
   Blog Categoria
@endsection

@section('content')


<div class="lr_blog_categories_main_wrapper">
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_bc_first_box_main_wrapper">
                        <div class="lr_bc_first_box_img_wrapper">
                            <img src="{{ asset ('frontend/images/content/blog/b1.jpg') }} " alt="blog_img">
                        </div>
                        <div class="lr_bc_first_box_img_cont_wrapper">
                            <h2>Master Chef Mejor Competencia</h2>
                            <ul>
                                <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                                <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                                <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="lr-btn lr-ev-btn move-eff"><span>RESERVAR</span></a>
                            <div class="lr_blg_date_wrapper">
                                <p>21<br> <span>marzo</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_in_bog_slider_cont_wrapper lr_bc_second_box_main_wrapper">
                        <h2>Master Chef Mejor Competencia</h2>
                        <ul>
                            <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                            <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                            <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comments</a></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris</p>
                        <a href="#" class="lr_reser_btn_background move-eff lr_ff_btn2"><span>RESERVAR</span></a>
                        <div class="lr_blg_date_wrapper">
                            <p>21<br> <span>marzo</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_bc_first_box_main_wrapper lr_bc_third_box_main_wrapper">
                        <div class="hs_blog_box1_img_wrapper">
                            <img src="{{ asset ('frontend/images/content/blog/b2.jpg') }} "  class="lr_bc_zoom_img" alt="blog_img">
                            <div class="prs_ms_scene_img_overlay">
                                <ul>
                                    <li><a class="test-popup-link button" rel='external' href='https://www.youtube.com/watch?v=kbn4lB07gm0' title='title'><img src="{{ asset ('frontend/images/content/blog/play.png') }} " alt="play_icon"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="lr_bc_first_box_img_cont_wrapper">
                            <h2>Master Chef Mejor competición</h2>
                            <ul>
                                <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                                <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                                <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="lr-btn lr-ev-btn move-eff"><span>RESERVA</span></a>
                            <div class="lr_blg_date_wrapper">
                                <p>21<br> <span>marzo</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_bc_first_box_main_wrapper lr_bc_four_box_main_wrapper">
                        <div class="lr_bc_slider_first_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="lr_bc_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/content/blog/b3.jpg') }} " alt="fresh_food_img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="lr_bc_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/content/blog/b2.jpg') }} " alt="fresh_food_img">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="lr_bc_slider_img_wrapper">
                                        <img src="{{ asset ('frontend/images/content/blog/b1.jpg') }} " alt="fresh_food_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lr_bc_first_box_img_cont_wrapper">
                            <h2>Master Chef Mejor Competencia</h2>
                            <ul>
                                <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                                <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                                <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="#" class="lr-btn lr-ev-btn move-eff"><span>Reserva</span></a>
                            <div class="lr_blg_date_wrapper">
                                <p>21<br> <span>marzo</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                    <div class="pager_wrapper lr_blog_pagi_wrapper">
                        <ul class="pagination">
                            <li><a href="#">ant</a>
                            </li>
                            <li><a href="#">01</a>
                            </li>
                            <li><a href="#">02</a>
                            </li>
                            <li class="btc_third_pegi btc_shop_pagi"><a href="#">03 <span></span></a>
                            </li>
                            <li class="btc_shop_pagi"><a href="#">04</a>
                            </li>
                            <li class="hidden-xs btc_shop_pagi"><a href="#">05</a>
                            </li>
                            <li class="hidden-xs btc_shop_pagi"><a href="#">06</a>
                            </li>
                            <li><a href="#">sig</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="lr_bc_right_sidebar_wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_blog_right_search_wrapper">
                            <input type="text" placeholder="Search here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_bc_cate_sb_main_wrapper">
                            <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
                                <h2>Categorías<span></span></h2>
                                <ul>
                                    <li><a href="#">Sobre nosotros <span>(02)</span></a>
                                    </li>
                                    <li><a href="#">Comida <span>(09)</span></a>
                                    </li>
                                    <li><a href="#">FullWidth <span>(16)</span></a>
                                    </li>
                                    <li><a href="#">Restaurante <span>(51)</span></a>
                                    </li>
                                    <li><a href="#">Menú <span>(75)</span></a>
                                    </li>
                                    <li><a href="#">Medio <span>(15)</span></a>
                                    </li>
                                    <li><a href="#">Introducción <span>(71)</span></a>
                                    </li>
                                    <li><a href="#">Servicios <span>(80)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_bc_cate_sb_main_wrapper">
                            <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
                                <h2>Ofertas de hoy<span></span></h2>
                            </div>
                            <div class="lr_bc_tf_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/blog/tf1.jpg') }} " alt="blog_img">
                                <h2><a href="#">Alimentos Barger</a> <span>$70.00</span></h2>
                            </div>
                            <div class="lr_bc_tf_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/blog/tf2.jpg') }} " alt="blog_img">
                                <h2><a href="#">Col</a> <span>$43.00</span></h2>
                            </div>
                            <div class="lr_bc_tf_img_wrapper">
                                <img src="{{ asset ('frontend/images/content/blog/tf3.jpg') }} " alt="blog_img">
                                <h2><a href="#">Café helado</a> <span>$21.00</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_bc_cate_sb_main_wrapper">
                            <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
                                <h2>Archivos<span></span></h2>
                                <ul>
                                    <li><a href="#">Marzo <span>(02)</span></a>
                                    </li>
                                    <li><a href="#">Abril <span>(09)</span></a>
                                    </li>
                                    <li><a href="#">Mayo <span>(16)</span></a>
                                    </li>
                                    <li><a href="#">Junio <span>(51)</span></a>
                                    </li>
                                    <li><a href="#">Julio <span>(75)</span></a>
                                    </li>
                                    <li><a href="#">Agosto <span>(15)</span></a>
                                    </li>
                                    <li><a href="#">Septiembre <span>(71)</span></a>
                                    </li>
                                    <li><a href="#">Octubre <span>(80)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="lr_bc_cate_sb_main_wrapper">
                            <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper lr_bc_bd_sb_heading_main_wrapper">
                                <h2>Las mejores ofertas<span></span></h2>
                            </div>
                            <div class="lr_blog_right_bd_cont_wrapper">
                                <div class="lr_br_bd_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/blog/bd1.jpg') }} " alt="ln_img" />
                                </div>
                                <div class="lr_br_bd_img_cont_wrapper">
                                    <h4><a href="#">Pizza de Frutas</a></h4>
                                    <p>$12</p>
                                </div>
                            </div>
                            <div class="lr_blog_right_bd_cont_wrapper lr_blog_right_bd_cont_wrapper2">
                                <div class="lr_br_bd_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/blog/bd2.jpg') }} " alt="ln_img" />
                                </div>
                                <div class="lr_br_bd_img_cont_wrapper">
                                    <h4><a href="#">Pizza de Frutas</a></h4>
                                    <p>$54</p>
                                </div>
                            </div>
                            <div class="lr_blog_right_bd_cont_wrapper lr_blog_right_bd_cont_wrapper2">
                                <div class="lr_br_bd_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/blog/bd3.jpg') }} " alt="ln_img" />
                                </div>
                                <div class="lr_br_bd_img_cont_wrapper">
                                    <h4><a href="#">Café</a></h4>
                                    <p>$09</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-xs visible-sm">
                        <div class="pager_wrapper lr_blog_pagi_wrapper">
                            <ul class="pagination">
                                <li><a href="#">ant</a>
                                </li>
                                <li><a href="#">01</a>
                                </li>
                                <li><a href="#">02</a>
                                </li>
                                <li class="btc_third_pegi btc_shop_pagi"><a href="#">03 <span></span></a>
                                </li>
                                <li class="btc_shop_pagi"><a href="#">04</a>
                                </li>
                                <li class="hidden-xs btc_shop_pagi"><a href="#">05</a>
                                </li>
                                <li class="hidden-xs btc_shop_pagi"><a href="#">06</a>
                                </li>
                                <li><a href="#">sig</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection