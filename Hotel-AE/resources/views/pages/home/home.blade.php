@extends('layout')

@section('title')
Home
@endsection

@section('description')
Somos un hotel de Categoria ubicado en plena Ciudad de Buenos aires
@endsection



<meta content="" name="description">
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