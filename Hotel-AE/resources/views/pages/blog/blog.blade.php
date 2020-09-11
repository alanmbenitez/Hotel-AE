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
@endsection

@section('main')

        <!-- =========== PAGE TITLE ========== -->
        @include('components.blog.blog_title')
        

        <!-- =========== MAIN ========== -->
        
        @include('components.blog.blog_main')
        
@endsection