<div class="similar_rooms">
    <div class="main_title t_style5 l_blue s_title a_left">
        <div class="c_inner">
        <h2 class="c_title">{{$rooms['title_rooms']}}</h2>
        </div>
    </div>
    <div class="row">
        @foreach ($rooms['other_rooms'] as $room)
        
        <div class="col-md-4">
            <article>
                <figure>
                <a href="{{$room['href']}}" 
                class="hover_effect h_blue h_link"><img 
                src="{{$room['src']}}" 
                alt="Image" 
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