@extends('layout')


@section('title')
Guía de Buenos Aires
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

@section('main')

        <!-- =========== PAGE TITLE ========== -->
        @component('components.blog.blog_title')
        @endcomponent

        <!-- =========== MAIN ========== -->
        
        @component('components.blog.blog_main')
        @endcomponent
        
@endsection