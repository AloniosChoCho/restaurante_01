@extends('frontend.layouts.app')

@section('title')
Nuestros Menus
@endsection

@section('title-nav')
   Nuestros Menus
@endsection


@section('content')
    
<div class="lr_element_section_main_wrapper lr_om_element_section_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="lr_element_section_heading_wrapper">
                    <h2>Elementos Alimentarios<span></span></h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="lr_element_tabs_main_wrapper">
                    <ul class="nav nav-tabs" role="tablist">
                        <li>
                            <div class="slider"></div>
                        </li>
                        <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Café Espresso</a></li>
                        <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">Moca</a></li>
                        <li role="presentation" class=""><a href="#messages" role="tab" data-toggle="tab">Blanco plano </a></li>
                        <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">Negro largo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="lr_element_left_img_main_wrapper hidden-xs">
        <div class="lr_element_img_back_box_wrapper">
            <img src="{{ asset ('frontend/images/content/e1.jpg') }} " alt="element_img">
        </div>
    </div>
    <div class="lr_element_right_tabs_cont_main_wrapper">
        <div class="lr_element_right_tabs_img_cont_wrapper">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e2.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper4">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e3.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper3">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e4.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e5.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e6.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e7.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e7.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper4">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e6.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper3">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e5.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e4.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e3.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e2.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="messages">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e2.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper4">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e3.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper3">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e4.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e5.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e6.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e7.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e7.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper4">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e6.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                               <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper3">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e5.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                               <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e4.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e3.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 res_col">
                        <div class="lr_ele_tab_img_box_wrapper lr_ele_tab_img_box_wrapper2">
                            <div class="lr_ele_img_box_wrapper">
                                <div class="lr_ele_img_box_overlay"></div>
                                <img src="{{ asset ('frontend/images/content/e2.png') }} " alt="food_img">
                            </div>
                            <div class="lr_ele_img_cont_box_wrapper">
                                <h3><a href="#">Pakora de verduras</a></h3>
                                <p>$70.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lr_element_left_img_main_wrapper visible-xs">
        <div class="lr_element_img_back_box_wrapper">
            <img src="{{ asset ('frontend/images/content/e1.jpg') }} " alt="element_img">
        </div>
    </div>
</div>
    
<div class="lr_menu_section_main_wrapper lr_ourmenu_section_main_wrapper">
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
                            <li>Rebanada de trigo caprese<span>$55.00</span></li>
                        </ul>
                        <a href="#" class="lr-btn move-eff lr_menu_btn"><span>Leer más</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    <div class="lr_om_main_section_wrapper">
        <div class="container">
            <div class="lr_about_service_heading_wrapper">
                <h2><span class="lr_dots_left"></span>Nuestros menús<span class="lr_dots_right"></span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
            <div class="lr_om_left_section_wrapper">
                <div class="lr_om_box_wrapper">
                    <h2><a href="#">Espinacas a la crema</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <div class="lr_om_price_lebel_wrapper">
                        <p>$36</p>
                    </div>
                    <div class="lr_om_borders_wrapper"></div>
                </div>
                <div class="lr_om_box_wrapper">
                    <h2><a href="#">Espinacas a la crema</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <div class="lr_om_price_lebel_wrapper">
                        <p>$36</p>
                    </div>
                    <div class="lr_om_borders_wrapper2"></div>
                </div>
                <div class="lr_om_box_wrapper">
                    <h2><a href="#">Espinacas a la crema</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <div class="lr_om_price_lebel_wrapper">
                        <p>$36</p>
                    </div>
                    <div class="lr_om_borders_wrapper2"></div>
                </div>
            </div>
            <div class="lr_om_center_section_wrapper hidden-xs hidden-sm">
                <span></span>
            </div>
            <div class="lr_om_right_section_wrapper">
                <div class="lr_om_box_wrapper">
                    <h2><a href="#">Espinacas a la crema</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <div class="lr_om_price_lebel_wrapper">
                        <p>$36</p>
                    </div>
                    <div class="lr_om_borders_wrapper3"></div>
                </div>
                <div class="lr_om_box_wrapper">
                    <h2><a href="#">Espinacas a la crema</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <div class="lr_om_price_lebel_wrapper">
                        <p>$36</p>
                    </div>
                    <div class="lr_om_borders_wrapper3"></div>
                </div>
                <div class="lr_om_box_wrapper">
                    <h2><a href="#">Espinacas a la crema</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <div class="lr_om_price_lebel_wrapper">
                        <p>$36</p>
                    </div>
                    <div class="lr_om_borders_wrapper3"></div>
                </div>
                <img src="{{ asset ('frontend/images/content/om2.png') }} " alt="chef_img">
            </div>
            <div class="lr_om_btn_wrapper">
                <a href="#" class="lr-btn lr-btn2 move-eff"><span>MENÚ COMPLETO</span></a>
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
                <img src="{{ asset ('frontend/images/content/sheif_img.png') }} " alt="reser_img">
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
@section('scripter')
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
    
@endsection