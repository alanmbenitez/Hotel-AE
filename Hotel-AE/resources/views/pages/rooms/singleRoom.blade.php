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