@extends('layout')


@section('title')
Contactenos
@endsection


@section('description')
Somos un hotel de Categoria ubicado en plena Ciudad de Buenos aires
@endsection

@section('logo_menu')
{{ asset('images\logo2.png')}}
@endsection

@section('navBar')
@component('components.general.nav_general') 
@endcomponent  
@endsection

@section('main')

        <!-- =========== CONTACTENOS ========== -->
        <div class="page_title gradient_overlay_banner hero_blog_img" >
            <div class="container">
                <div class="inner">
                <h1>Contacto</h1>
                    
                </div>
            </div>
        </div>
        <div style="width: 100% ; background-color:#f5f5f5 ">
        <div class="section-contacto flex py-4 mx-auto flex-wrap lg:justify-between">
            <a class="medios-contacto inline-flex text-dh-black text-lg font-bold mx-auto items-center w-full md:w-1/2 lg:w-1/4 px-2" target="_blank" href="https://api.whatsapp.com/send?phone=+5491140480054">
                <i style="padding: 10px; font-size: 3rem; color: #ED325C" class="fab fa-whatsapp"></i>
                <p style="margin: 0px" class="font-medios-contacto text-sm"> Whatsapp</p> 
            </a>
            <a class="medios-contacto inline-flex text-dh-black text-lg font-bold mx-auto items-center w-full md:w-1/2 lg:w-1/4 px-2" href="tel:+541148671265">
                <i style="padding: 10px; font-size: 3rem; color: #ED325C" class="fas fa-phone-alt"></i>
                <p style="margin: 0px" class="font-medios-contacto text-sm" >  Telefono</p>
            </a>
            <a class="medios-contacto inline-flex text-dh-black text-lg font-bold mx-auto items-center w-full md:w-1/2 lg:w-1/4 px-2" href="mailto:hotelairesexpress@hotmail.com">
                <i style="padding: 10px; font-size: 3rem; color: #ED325C" class="far fa-envelope"></i>
                <p style="margin: 0px" class="font-medios-contacto text-sm"> Email</p> 
            </a>
            
        </div>
    </div>
        @component('components.home.contact')
@endcomponent

      
        
@endsection