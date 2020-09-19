<section class=" star_rooms lightgrey_bg" id="features">
    <div data-aos="fade-left"
    data-aos-anchor="#example-anchor"
    data-aos-offset="1500"
    data-aos-duration="1000" class="container">
        <div class="main_title a_center">
            <h2 class="text_color_title_ae underlined_title">{{ __('home.title_services') }}</h2>
        </div>
        <p class="main_description a_center">{{ __('home.subtitle_services') }}</p>
        
        <div id="imagen" class="row section_service">
            <div class="col-md-7">
                <div data-slider-id="features" id="features_slider" style="max-width: 670px" class="owl-carousel">
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
                            <h5 class="title-service">{{ $info['title'] }}</h5>
                            <p class="desc-service">{{ $info['description'] }}</p>
                        </div>
                   
                    </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
</section>
<style>



@media screen and (min-width:992px) {
    .section_service{
        max-width: 95% !important; 
        display: flex;
        align-items: center;
     }
  
}


.section_service{
    max-width: 670px;
    margin-left: auto;
    margin-right: auto;
}

@media screen and (max-width:648px) {
.title-service{
        font-size: 1em;
    }
    .desc-service{
        font-size: .8em;
    }
  

}
</style>