@extends('frontend.layouts.app')

@section('title')
Nuestra Galeria
@endsection

@section('title-nav')
Nuestra Galeria
@endsection

@section('content')

<div class="prs_gallery_main_section_wrapper">
    <div class="container">
        <div class="row">
            <div class="portfolio-area ptb-100">
                <div class="container">
                    <div class="portfolio-filter clearfix text-center my_slide_filter">
                        <ul class="list-inline my_filter_tabs" id="filter">
                            <li>
                                <div class="filter_slider"></div>
                            </li>
                            <li class="active"><a data-group="all">Café Espresso </a>
                            </li>
                            <li><a data-group="business">Moca</a>
                            </li>
                            <li><a data-group="website"> Blanco plano </a></li>
                            <li><a data-group="business"> Negro largo </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row three-column">
                        <div id="gridWrapper" class="clearfix">
                            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "website", "logo"]'>
                                <div class="portfolio-thumb">
                                    <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                        <img src="{{ asset ('frontend/images/content/gallery/g2.jpg') }} " class="zoom image img-responsive" alt="service_img" />
                                        <div class="prs_ms_scene_img_overlay"> <a href="{{ asset ('frontend/images/content/gallery/g1.jpg') }} " class="venobox info" data-title="TÍTULO DE LA CARTERA" data-gall="gall12"><img src="{{ asset ('frontend/images/content/event/zoom.png') }} " alt="gallery_img"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                                <div class="portfolio-thumb">
                                    <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                        <img src="{{ asset ('frontend/images/content/gallery/g2.jpg') }} " class="zoom image img-responsive" alt="service_img" />
                                        <div class="prs_ms_scene_img_overlay"> <a href="{{ asset ('frontend/images/content/gallery/g2.jpg') }} " class="venobox info" data-title="TÍTULO DE LA CARTERA" data-gall="gall12"><img src="{{ asset ('frontend/images/content/event/zoom.png') }} " alt="gallery_img"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "photoshop"]'>
                                <div class="portfolio-thumb">
                                    <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                        <img src="{{ asset ('frontend/images/content/gallery/g4.jpg') }} " class="zoom image img-responsive" alt="service_img" />
                                        <div class="prs_ms_scene_img_overlay"> <a href="{{ asset ('frontend/images/content/gallery/g3.jpg') }} " class="venobox info" data-title="TÍTULO DE LA CARTERA" data-gall="gall12"><img src="{{ asset ('frontend/images/content/event/zoom.png') }} " alt="gallery_img"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "website", "business"]'>
                                <div class="portfolio-thumb">
                                    <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                        <img src="{{ asset ('frontend/images/content/gallery/g4.jpg') }} " class="zoom image img-responsive" alt="service_img" />
                                        <div class="prs_ms_scene_img_overlay"> <a href="{{ asset ('frontend/images/content/gallery/g4.jpg') }} " class="venobox info" data-title="TÍTULO DE LA CARTERA" data-gall="gall12"><img src="{{ asset ('frontend/images/content/event/zoom.png') }} " alt="gallery_img"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                                <div class="portfolio-thumb">
                                    <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                        <img src="{{ asset ('frontend/images/content/gallery/g5.jpg') }} " class="zoom image img-responsive" alt="service_img" />
                                        <div class="prs_ms_scene_img_overlay"> <a href="{{ asset ('frontend/images/content/gallery/g5.jpg') }} " class="venobox info" data-title="TÍTULO DE LA CARTERA" data-gall="gall12"><img src="{{ asset ('frontend/images/content/event/zoom.png') }} " alt="gallery_img"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                                <div class="portfolio-thumb">
                                    <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                        <img src="{{ asset ('frontend/images/content/gallery/g6.jpg') }} " class="zoom image img-responsive" alt="service_img" />
                                        <div class="prs_ms_scene_img_overlay"> <a href="{{ asset ('frontend/images/content/gallery/g6.jpg') }} " class="venobox info" data-title="TÍTULO DE LA CARTERA" data-gall="gall12"><img src="{{ asset ('frontend/images/content/event/zoom.png') }} " alt="gallery_img"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                                <div class="portfolio-thumb">
                                    <div class="gc_filter_cont_overlay_wrapper prs_ms_scene_slider_img">
                                        <img src="{{ asset ('frontend/images/content/gallery/g7.jpg') }} " class="zoom image img-responsive" alt="service_img" />
                                        <div class="prs_ms_scene_img_overlay"> <a href="{{ asset ('frontend/images/content/gallery/g7.jpg') }} " class="venobox info" data-title="TÍTULO DE LA CARTERA" data-gall="gall12"><img src="{{ asset ('frontend/images/content/event/zoom.png') }} " alt="gallery_img"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                        </div>
                        <!--/#gridWrapper-->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pager_wrapper prs_blog_pagi_wrapper">
                                <ul class="pagination">
                                    <li><a href="#">Ant</a>
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
                                    <li><a href="#">Sig</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <!--/.portfolio-area-->
        </div>
    </div>
</div>
@section('scripter')
<script>
    $(window).load(function () {
       $(".my_slide_filter .my_filter_tabs li a").click(function() {
         var position = $(this).parent().position();
         var width = $(this).parent().width();
           $(".filter_slider").css({"left":+ position.left,"width":width});
       });
       var actWidth = $(".my_slide_filter .my_filter_tabs .active").width();
       var actPosition = $(".my_slide_filter .my_filter_tabs .active").position();
       $(".filter_slider").css({"left":+ actPosition.left,"width": actWidth});
        });
   </script>
@endsection    

@endsection