<div class="page_title gradient_overlay hero_blog_img" >
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                <h1>{{$rooms['title']}}</h1>
                    
                </div>
                @if ($rooms['precio_num'] !== '')
                    
                <div class="col-md-6 col-sm-6">
                    <div class="price">
                        <div class="inner">
                        {{$rooms['precio_num']}}<span>{{$rooms['Precio_per_night']}}</span>
                        </div>
                    </div>
                </div>  
                
                @endif
            </div>
        </div>
    </div>
</div>