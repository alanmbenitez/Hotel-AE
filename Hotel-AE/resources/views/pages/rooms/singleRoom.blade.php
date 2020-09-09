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
        <div class="page_title gradient_overlay hero_blog_img" >
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        <h1>Habitacion Individual</h1>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="price">
                                <div class="inner">
                                    $1490 <span>por noche</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main id="room_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider">
                            <div id="slider-larg" class="owl-carousel image-gallery">
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room1.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room1.jpg" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room2.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room2.jpg" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room3.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room3.jpg" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room4.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room4.jpg" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room5.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room5.jpg" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room6.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room6.jpg" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room7.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room7.jpg" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item  lightbox-image-icon">
                                    <a href="images/rooms/single-room/single-room8.jpg" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="images/rooms/single-room/single-room8.jpg" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div id="thumbs" class="owl-carousel">
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb1.jpg" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb2.jpg" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb3.jpg" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb4.jpg" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb5.jpg" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb6.jpg" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb7.jpg" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="images/rooms/single-room/single-room-thumb8.jpg" alt="Image"></div>
                            </div>
                        </div>
                        <div class="main_title mt50">
                            <h2>Hotel Aires Express</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                        
                        <p> at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius</p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        
                        <div class="main_title t_style a_left s_title mt50">
                            <div class="c_inner">
                                <h2 class="c_title">SERVICIOS</h2>
                            </div>
                        </div>
                        <div class="room_facilitys_list">
                            <div class="all_facility_list">
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Cama Simple o Matromonial</li>
                                        <li><i class="fa fa-check"></i>2 personas</li>
                                        <li><i class="fa fa-check"></i>Wifi Libre</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Desayuno Continental Libre</li>
                                        <li><i class="fa fa-check"></i>Televisión por cable</li>
                                        <li><i class="fa fa-check"></i>Secador de cabello</li>                           
                                    </ul>
                                </div>
                                <div class="col-sm-4 nopadding_left">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Conserjería 24hs</li>
                                        <li><i class="fa fa-check"></i>Estacionamiento cercano</li>
                                        <li><i class="fa fa-check"></i>Aire frio Calor con regulación individual</li>                           
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="similar_rooms">
                            <div class="main_title t_style5 l_blue s_title a_left">
                                <div class="c_inner">
                                    <h2 class="c_title">Otras habitaciones</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="room.html" class="hover_effect h_blue h_link"><img src="images/rooms/single-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">$1450<span> /noche</span></div>
                                            <figcaption>
                                                <h4><a href="room.html">Habitacion Doble</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="room.html" class="hover_effect h_blue h_link"><img src="images/rooms/double-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">$1450<span> /noche</span></div>
                                            <figcaption>
                                                <h4><a href="room.html"> Habitacion Triple </a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                               {{--  <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="room.html" class="hover_effect h_blue h_link"><img src="images/rooms/deluxe-room.jpg" alt="Image" class="img-responsive"></a>
                                            <div class="price">$1450<span> /noche</span></div>
                                            <figcaption>
                                                <h4><a href="room.html">Deluxe Room </a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @component('components.general.Form_reserva')
                        @endcomponent
                    </div>
                </div>
            </div>
        </main>
@endsection