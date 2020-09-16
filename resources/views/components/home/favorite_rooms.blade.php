 <!-- ========== FAVORITE ROOMS ========== -->
 <section class="white_bg" id="rooms">
    <div class="container container_img_room" >

        <div class="main_title mt_wave a_center">
        <h2 class="text_color_title_ae">{{__('home.title_our_rooms')}}</h2>
        </div>
    <p class="main_description a_center">{{__('home.title_our_rooms')}}</p>

        <div class="CarouselRoom" > 
            @foreach (__('home.main_carousel') as $carousel)
                <div class="col-md-4 carousel-cell">
                    <article class="room">
                        <figure>
                            
                            {{-- <div class="price">{{$carousel['price']}} <span>{{$carousel['/night']}}</span></div> --}}
                            <a class="hover_effect h_blue h_link" href="room.html">
                                <img src="images/rooms/single-room.jpg" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="room.html">{{$carousel['title']}}</a></h4>
                                <span class="f_right"><a href="rooms-list.html" class="button btn_sm btn_blue">Ver más</a></span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            @endforeach
            </div>
            {{-- <div class="mt40 a_center">
                <a class="button btn_sm btn_yellow" href="rooms-list.html">VIEW ROOMS LIST</a>
            </div>  --}}
    </div>
</section>
