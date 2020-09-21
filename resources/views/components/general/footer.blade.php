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
                        <li><a href="{{route('home')}}">Inicio</a></li>
                        <li><a href="{{url('/rooms/single') }}">Habitaciones</a></li>
                        <li><a href="{{route('tourism')}}">Turismo</a></li>
                        <li><a href="{{route('contacto')}}">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 widget">
                    <h5>{{__('footer.contact')}}</h5>
                    <address>
                        <ul class="address_details">
                            
                            <li><i class="fa fa-map-marker-alt"></i><a target="_blank" href="https://goo.gl/maps/VBJvXDbRXdb7B7qY8">{{__('footer.data')['address']}}</a></li>
                            <li><i class="fa fa-phone-alt"></i><a target="_blank" href="tel:+541148671265">{{__('footer.data')['phone']}}</a></li>
                            <li><i class="fa fa-whatsapp"></i> <a target="_blank" href="https://api.whatsapp.com/send?phone=+5491140480054">{{__('footer.data')['wpp']}}</a>
                            </li>
                            <li><i class="fa fa-envelope"></i> Email: <a href="mailto:{{__('footer.data')['email']}}">{{__('footer.data')['email']}}</a></li>
                            <li><i class="fa fa-instagram"></i><a target="_blank" href="https://www.instagram.com/hotel_airesexpress">{{__('footer.data')['insta']}}</a></li>
                            <li><i class="fa fa-facebook-square"></i><a target="_blank"  href="https://www.facebook.com/airesexpress/">{{__('footer.data')['facebook']}}</a></li>
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
                          2020 Copyright <a href="{{route('home')}}">Hotel Aires Express</a> <br> All Rights Reserved.
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</footer>