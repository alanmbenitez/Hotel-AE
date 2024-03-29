
<div class="similar_rooms">
    <div class="main_title t_style5 l_blue s_title a_left">
        <div class="c_inner">
        <h2 class="c_title">{{$rooms['title_rooms']}}</h2>
        </div>
    </div>
    <div class="row CarouselRoom">
        @foreach ($rooms['other_rooms'] as $room)
        
        <div class=" cardRoom carousel-cell ">
            <article class="cardArticle">
                <figure>
                <a href="{{$room['href']}}" 
                class="hover_effect h_link"><img 
                src="{{$room['src']}}" 
                alt="Image" 
                style="height: 156px;"
                class="img-responsive"></a>
                @if ($room['price']!=='')
                <div class="price">{{$room['price']}}
                    <span>{{$room['per_night']}}</span>
                </div>
                @endif
                    <figcaption>
                        <h4><a href="room.html">{{$room['name']}}</a></h4>
                    </figcaption>
                </figure>
            </article>
        </div>
        
        @endforeach
        
        
       
    </div>
</div>
<script>
    
</script>