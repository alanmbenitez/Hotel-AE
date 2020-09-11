<div>
    <div class="main_title mt50">
    <h2>{{$rooms['title_content']}}</h2>
    </div>
    @foreach ($rooms['contenido'] as $parrafo)
<p>{{$parrafo}}</p>
    @endforeach
    
    
    
    </div>