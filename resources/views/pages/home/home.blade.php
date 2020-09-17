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