<main class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- ITEM -->
                @foreach($data['places'] as $item)
                <article class="blog_list">
                    <figure>
                    <a href="{{$item['href']}}" class="hover_effect h_link">
                            <img src="{{$item['img']}}" class="img-responsive" alt="Image">
                        </a>
                    </figure>
                    <div class="details">
                        <h2><a href={{$item['href']}}>{{$item['title']}}</a></h2>
                       
                        <p>{{$item['parrafo']}}</p>
                        <a class="button btn_blue " target="_blank" rel="noreferrer" href={{$item['href']}}><i class="fa fa-angle-double-right"></i> Leer más </a>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="col-md-4">
                @component('components.general.Form_reserva')
                @endcomponent
            </div>
        </div>