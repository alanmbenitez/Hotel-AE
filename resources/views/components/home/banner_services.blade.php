<section class="lightgrey_bg" id="features">
    <div class="container">
        <div class="main_title mt_wave a_center">
            <h2 class="text_color_title_ae">{{ __('home.title_services') }}</h2>
        </div>
        <p class="main_description a_center">{{ __('home.subtitle_services') }}</p>
        
        <div class="row">
            <div class="col-md-7">
                <div data-slider-id="features" id="features_slider" class="owl-carousel">
                   @foreach (__('home.img_services') as $img)
                    <div><img src="{{$img['src']}}" class="img-responsive" alt="{{ $img['alt'] }}"></div>
                       
                    @endforeach 
                </div>
            </div>
            <div class="col-md-5">
                <div class="owl-thumbs" data-slider-id="features">
                    @foreach (__('home.info_services') as $info)
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <img src="{{ $info['src'] }}" alt="{{ $info['alt'] }}" srcset="">
                       </span>
                        <div class="media-body">
                            <h5>{{ $info['title'] }}</h5>
                            <p>{{ $info['description'] }}</p>
                        </div>
                   
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
</section>