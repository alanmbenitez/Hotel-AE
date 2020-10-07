@extends('layout')

@section('title')
Home
@endsection

@section('description')
Somos un hotel de Categoria ubicado en plena Ciudad de Buenos aires
@endsection

@section('logo_menu')
{{ asset('images\logo1.png')}}
@endsection
@section('navBar')
@component('components.home.nav_home')
    
@endcomponent    
@endsection
@section('revolution')
    @component('components.home.revolution_slider')
        
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
{{-- @include('componentes.home.favorite_rooms') --}}
@component('components.home.favorite_rooms')
@endcomponent

<!-- ========== FEATURES ========== -->
@component('components.home.banner_services')
@endcomponent

<!-- ========== BLOG ========== -->

<!-- ========== VIDEO ========== -->

<!-- ========== TESTIMONIALS ========== -->

<!-- ========== PLACES ========== -->

<!-- ========== CONTACT ========== -->
<div data-aos="fade-right"
data-aos-anchor="#example-anchor"
data-aos-offset="2200"
data-aos-duration="1500">
@component('components.home.contact')
@endcomponent
</div>
@endsection