<footer>
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 widget">
                    <div class="about">
                        <a href="index.html"><img class="logo" src="{{ asset('images\logo2.png')}}" height="64" alt="Logo"></a>
                        <p>{{__('footer.text')}}</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                   
                </div>
                <div class="col-md-2 col-sm-6 widget">
                    <h5>Links</h5>
                    <ul class="useful_links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{url('/singleRoom') }}">Rooms</a></li>
                        <li><a href="{{route('guia')}}">Blog</a></li>
                        <li><a href="{{route('home')}}">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 widget">
                    <h5>{{__('footer.contact')}}</h5>
                    <address>
                        <ul class="address_details">
                            
                            <li><i class="glyphicon glyphicon-map-marker"></i>{{__('footer.data')['address']}}</li>
                            <li><i class="glyphicon glyphicon-phone-alt"></i>{{__('footer.data')['phone']}}</li>
                            <li><i class="fa fa-whatsapp"></i>{{__('footer.data')['wpp']}}
                            </li>
                            <li><i class="fa fa-envelope"></i> Email: <a href="mailto:{{__('footer.data')['email']}}">{{__('footer.data')['email']}}</a></li>
                            
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copyrights">
                         Copyright 2020 <a href="index.html">Hotel Aires Express</a> All Rights Reserved.
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="social_media">
                        <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>