@extends('layout')


@section('title')
Guía de Buenos Aires
@endsection


@section('description')
Somos un hotel de Categoria ubicado en plena Ciudad de Buenos aires
@endsection

@section('navBar')
@component('components.general.nav_general')
    
@endcomponent  

@section('main')

        <!-- =========== PAGE TITLE ========== -->
        @component('components.home.blog_title')
        @endcomponent

        <!-- =========== MAIN ========== -->
        
        @component('components.home.blog_main')
        @endcomponent
        
@endsection