<div class="slider">
    <div id="slider-larg" class="owl-carousel image-gallery">
        <!-- ITEM -->
        @foreach ($rooms['fotos'] as $foto)
        <div class="item lightbox-image-icon">
            <a href="{{$foto['href']}}" 
            class="hover_effect h_lightbox h_blue">
                <img class="img-responsive" 
                src="{{$foto['href']}}" 
                alt="{{$foto['alt']}}">
            </a>
        </div>
        @endforeach
        
        
    </div>
    <div id="thumbs" class="owl-carousel">
        <!-- ITEM -->
        @foreach ($rooms['fotos'] as $foto)
        
        <div class="item"><img 
            class="img-responsive" 
            src="{{$foto['href']}}" 
            alt="{{$foto['alt']}}">
        </div>
        @endforeach
    </div>
            
        
      
</div>