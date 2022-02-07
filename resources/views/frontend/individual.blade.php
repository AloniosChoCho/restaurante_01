@extends('frontend.layouts.app')

@section('title')
Blog de una sola entrada
@endsection

@section('title-nav')
Blog de una sola entrada
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
                            <img src="{{ asset ('frontend/images/content/blog/b1.jpg') }} "alt="blog_img">
                        </div>
                        <div class="lr_bc_first_box_img_cont_wrapper">
                            <h2>Master Chife Mejor Competencia</h2>
                            <ul>
                                <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">Ajay s.</a></li>
                                <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Me Gusta</a></li>
                                <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. d minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, conur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <div class="lr_bs_right_img_sec hidden-xs">
                                <img src="{{ asset ('frontend/images/content/blog/bs1.jpg') }} " alt="blog_img">
                            </div>
                            <div class="lr_bs_right_img_sec_cont">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor nt ut labore et dolore magna aliquaenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exceint occaecat cupidatat <br><br>non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea codo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate elit esse cillum dolore eu fugiat nulla paratur Excepteur sint occaecat cupidatat conserter coul have new bike for buy now its nai</p>
                            <div class="lr_blg_date_wrapper">
                                <p>21<br> <span>march</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="lr_bs_second_box_main_wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <div class="lr_bs_small_img_wrapper">
                            <img src="{{ asset ('frontend/images/content/blog/bs2.png') }} " alt="blog_img">
                        </div>
                        <div class="lr_bs_small_img_cont_wrapper">
                            <h3>Aditi S. <span>( Maestro de cocina senior )</span></h3>
                        </div>
                    </div>
                    <div class="lr_bs_third_box_main_wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etlore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip x ea codo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate elit esse cillum dolore eu ugiat nulla pariatur Excepteur sint occaecat cupidatat conserter coul have new bike for buy now its nai Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco .</p>
                    </div>
                    <div class="lr_bs_third_social_box_main_wrapper">
                        <div class="lr_bs_third_social_left_wrapper">
                            <p><i class="fa fa-tags"></i> &nbsp;&nbsp;comida, negocio, cocina, granja, granja</p>
                        </div>
                        <div class="lr_bs_third_social_right_wrapper">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_blog_single_client_main_section">
                        <div class="jp_blog_single_client_img">
                            <img src="{{ asset ('frontend/images/content/blog/bs3.jpg') }} " alt="blog_client" class="img-circle" />
                        </div>
                        <div class="jp_blog_single_client_cont">
                            <h3>Admin : Jhon Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor lacinia tesue. Vivamus et tellus in urna faucibus porttitor. Sed auctor ut nunc..</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog_single_comment_wrapper">
                                <div class="blog_single_comment_heading_wrapper">
                                    <div class="lr_element_section_heading_wrapper lr_blog_single_comment_heading">
                                        <h2>Comentarios<span></span></h2>
                                    </div>
                                </div>
                                <div class="blog_comment1_wrapper">
                                    <div class="blog_comment1_img">
                                        <img src="{{ asset ('frontend/images/content/blog/comment_img1.jpg') }} " alt="comment_img" class="img-responsive img-circle" />
                                    </div>
                                    <div class="blog_comment1_cont">
                                        <h3>Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016</span></h3>
                                        <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                        <a href="#">RESPUESTA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="comment_cont2_border">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="blog_single_comment_wrapper">
                                            <div class="blog_comment2_wrapper">
                                                <div class="blog_comment1_img">
                                                    <img src="{{ asset ('frontend/images/content/blog/comment_img2.jpg') }} " alt="comment_img" class="img-responsive img-circle" />
                                                </div>
                                                <div class="blog_comment1_cont">
                                                    <h3>Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016</span></h3>
                                                    <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                                    <a href="#">RESPUESTA</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog_single_comment_wrapper">
                                <div class="blog_comment3_wrapper">
                                    <div class="blog_comment1_img">
                                        <img src="{{ asset ('frontend/images/content/blog/comment_img3.jpg') }} " alt="comment_img" class="img-responsive img-circle" />
                                    </div>
                                    <div class="blog_comment1_cont">
                                        <h3>Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016 </span></h3>
                                        <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                        <a href="#">RESPUESTA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog_single_comment_wrapper">
                                <div class="blog_comment3_wrapper">
                                    <div class="blog_comment1_img">
                                        <img src="{{ asset ('frontend/images/content/blog/comment_img4.jpg') }} " alt="comment_img" class="img-responsive img-circle" />
                                    </div>
                                    <div class="blog_comment1_cont">
                                        <h3>Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016 </span></h3>
                                        <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                        <a href="#">RESPUESTA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contect_heading_wrapper">
                        <div class="lr_element_section_heading_wrapper lr_blog_single_comment_heading">
                            <h2>Deja un comentario<span></span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog_contect_wrapper">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="contect_form1">
                                    <input type="text" placeholder="Nombre"><i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="contect_form2">
                                    <input type="email" placeholder="Envíe un correo electrónico a"><i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contect_form4">
                                    <textarea rows="6" placeholder="Comentario"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="lr_bs_effect_btn">
                                    <a href="#" class="lr-btn-background move-eff lr_ff_btn2"><span>presentar</span></a>
                                </div>
                            </div>
                        </div>
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
                                <h2>Categories<span></span></h2>
                                <ul>
                                    <li><a href="#">Sobre nosotros <span>(02)</span></a>
                                    </li>
                                    <li><a href="#">Alimentos <span>(09)</span></a>
                                    </li>
                                    <li><a href="#">FullWidth <span>(16)</span></a>
                                    </li>
                                    <li><a href="#">Restaurante <span>(51)</span></a>
                                    </li>
                                    <li><a href="#">Menu <span>(75)</span></a>
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
                                <h2><a href="#">Comida de Barger</a> <span>$70.00</span></h2>
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
                                <h2>Archives<span></span></h2>
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
                                    <h4><a href="#">Fruti Pizza</a></h4>
                                    <p>$12</p>
                                </div>
                            </div>
                            <div class="lr_blog_right_bd_cont_wrapper lr_blog_right_bd_cont_wrapper2">
                                <div class="lr_br_bd_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/blog/bd2.jpg') }} " alt="ln_img" />
                                </div>
                                <div class="lr_br_bd_img_cont_wrapper">
                                    <h4><a href="#">Fruti Pizza</a></h4>
                                    <p>$54</p>
                                </div>
                            </div>
                            <div class="lr_blog_right_bd_cont_wrapper lr_blog_right_bd_cont_wrapper2">
                                <div class="lr_br_bd_img_wrapper">
                                    <img src="{{ asset ('frontend/images/content/blog/bd3.jpg') }} " alt="ln_img" />
                                </div>
                                <div class="lr_br_bd_img_cont_wrapper">
                                    <h4><a href="#">Café    </a></h4>
                                    <p>$09</p>
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

@endsection