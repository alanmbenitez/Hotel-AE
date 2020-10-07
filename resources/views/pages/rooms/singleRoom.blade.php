@extends('layout')


@section('title')
{{-- {{$single}} --}}
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

     
     
<div class="navbar-sticky-top" style="width: 100%; padding-top: 1rem;
padding-bottom: 1rem; justify-content: center; lex-direction: row; display: flex; background-color: #ED325C;  " id="banner-dist">
    <a href="{{route('contacto')}}" style="width: 83.333333%; font-size: 2rem; color: #fff;    text-transform: uppercase;
    text-align: center;
    font-weight: bold;    padding-left: .5rem;
    padding-right: .5rem; text-decoration: underline;">Consulta nuestras promociones Vigentes!!!</a>
    <span style="padding-right: 1.5rem; right: 0; position: absolute; cursor: pointer; margin-top: 4px;">
      <i class="fas fa-times" style="color: #ffffff;" ></i>
    </span>
  </div>
     
     <!-- =========== PAGE TITLE ========== -->
        @include('components.rooms.hero_rooms')
      
        <!-- =========== MAIN ========== -->
        <main id="room_page">
           
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @include('components.rooms.images_rooms')
                        @include('components.rooms.info_rooms')
                        @include('components.rooms.services_room')
                        @include('components.rooms.other_rooms') 
                        
                    </div>
                    
                  
            <div class="col-md-4">
                @component('components.general.Form_reserva')
                @endcomponent
            </div>
                </div>
            </div>
        </main>
@endsection