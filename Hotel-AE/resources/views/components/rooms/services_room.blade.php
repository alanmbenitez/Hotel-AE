<div class="main_title t_style a_left s_title mt50">
    <div class="c_inner">
        <h2 class="c_title">{{$rooms['title_service']}}</h2>
    </div>
</div>
<div class="room_facilitys_list">
    <div class="all_facility_list">
       @foreach ($rooms['informacion'] as $columna)
        
            
       <div class="col-sm-4 nopadding">
            <ul class="list-unstyled">
                <li><i class="fa fa-check"></i>{{$columna['servicio1']}}</li>
                <li><i class="fa fa-check"></i>{{$columna['servicio2']}}</li>
                <li><i class="fa fa-check"></i>{{$columna['servicio3']}}</li>
            </ul>
        </div>
       
      @endforeach  
    
    </div>
</div>