@extends('layout')

@section('title')
Home
@endsection

@section('description')
Somos un hotel de Categoria ubicado en plena Ciudad de Buenos aires
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
@component('components.home.contact')
@endcomponent

@endsection