<section class=" star_rooms lightgrey_bg" id="features">
    <div data-aos="fade-left"
    data-aos-anchor="#example-anchor"
    data-aos-offset="1500"
    data-aos-duration="1000" class="container">
        <div class="main_title a_center">
            <h2 class="text_color_title_ae underlined_title">{{ __('home.title_services') }}</h2>
        </div>
        <p class="main_description a_center">{{ __('home.subtitle_services') }}</p>
        
        <div id="imagen" class="row">
            <div class="col-md-7">
                <div data-slider-id="features" id="features_slider" class="owl-carousel">
                   @foreach (__('home.img_services') as $img)
                <div class="{{$img['class']}}"><img src="{{$img['src']}}" class="{{$img['class']}} img-responsive" alt="{{ $img['alt'] }}"></div>
                       
                    @endforeach 
                </div>
            </div>
            <div style="    margin-top: 9px;" class="col-md-5">
                <div class="owl-thumbs" data-slider-id="features">
                    @foreach (__('home.info_services') as $info)
                    <a href="#imagen" class="{{$info['class']}} owl-thumb-item">
                        <span class="media-left">
                            <img src="{{ $info['src'] }}" alt="{{ $info['alt'] }}" srcset="">
                       </span>
                        <div class="media-body">
                            <h5>{{ $info['title'] }}</h5>
                            <p>{{ $info['description'] }}</p>
                        </div>
                   
                    </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
</section>