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
                        <li><a href="{{url('/rooms/single') }}">Habitaciones</a></li>
                        <li><a href="{{route('guia')}}">Turismo</a></li>
                        <li><a href="{{route('contacto')}}">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 widget">
                    <h5>{{__('footer.contact')}}</h5>
                    <address>
                        <ul class="address_details">
                            
                            <li><i class="fa fa-map-marker-alt"></i>{{__('footer.data')['address']}}</li>
                            <li><i class="fa fa-phone-alt"></i>{{__('footer.data')['phone']}}</li>
                            <li><i class="fa fa-whatsapp"></i>{{__('footer.data')['wpp']}}
                            </li>
                            <li><i class="fa fa-envelope"></i> Email: <a href="mailto:{{__('footer.data')['email']}}">{{__('footer.data')['email']}}</a></li>
                            <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/hotel_airesexpress">{{__('footer.data')['insta']}}</a></li>
                            <li><i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/airesexpress/">{{__('footer.data')['facebook']}}</a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div style="text-align: center;" class="col-md-12 col-sm-12">
                    <div class="copyrights"><i class="far fa-copyright"></i>
                          2020 Copyright <a href="index.html">Hotel Aires Express</a> <br> All Rights Reserved.
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</footer>