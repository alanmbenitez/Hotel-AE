 <!-- ========== FAVORITE ROOMS ========== -->
 <section  class=" star_rooms white_bg"  id="rooms">
    <div  class="container container_img_room"  data-aos="fade-right"
    data-aos-anchor="#example-anchor"
    data-aos-offset="980"
    data-aos-duration="1000">

        <div class="main_title a_center">
        <h2 class="text_color_title_ae underlined_title" >{{__('home.title_our_rooms')}}</h2>
        </div>
    <p class="main_description a_center">{{__('home.info_our_rooms')}}</p>

        <div  class="CarouselHome" > 
            @foreach (__('home.main_carousel') as $carousel)
                <div class="col-md-4 carousel-cell">
                    <article class="cardArticle room">
                        <figure>
                            <div class="price">{{$carousel['price']}} <span>{{$carousel['per_night']}}</span></div>
                            <a class="hover_effect h_link" href="{{$carousel['href']}}">
                                <img src="{{$carousel['src']}}" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="{{$carousel['href']}}">{{$carousel['title']}}</a></h4>
                                <span class="f_right"><a href="{{$carousel['href']}}" class="button btn_sm btn_blue">Ver más</a></span>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            @endforeach
            </div>
            
    </div>
</section>
