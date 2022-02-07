@extends('frontend.app')


@section('title')
404 error
@endsection

@section('title-nav')
404 error
@endsection

@section('content')
    
<div class="lr_404_main_section_wrapper">
    <div class="container">
        <div class="lr_404_img_wrapper">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 621.9 312.5" style="enable-background:new 0 0 621.9 312.5;" xml:space="preserve">

            <g>
                <g>
                    <path class="st0" d="M194.2,0.9h-48.7L0,187.5v63.8h122.8v61.2h71.4v-61.2h39.3v-64.3h-39.3L194.2,0.9L194.2,0.9z M131.3,187.1
                        H70.5l60.7-79V187.1z M582.6,186.2V0h-48.7L388.4,186.6v63.8h122.8v61.2h71.4v-61.2h39.3v-64.3H582.6z M519.6,186.2h-60.7l60.7-79
                        V186.2z"/>
                </g>
            </g>
            <image style="overflow:visible;enable-background:new    ;" width="306" height="292" xlink:href="{{ asset ('frontend/images/content/404.png') }} "  transform="matrix(0.9999 0 0 0.9999 166.8555 19.7207)">
            </image>
            </svg>
        </div>
        <div class="lr_404_img_cont_wrapper">
            <h2>Ops Esa página no se puede encontrar</h2>
            <p>Lo sentimos, pero la página que busca no existe</p>
            <a href="index3.html" class="lr-btn move-eff lr_404_btn1"><span>Ir a la página de inicio</span></a>
        </div>
    </div>
</div>

@endsection