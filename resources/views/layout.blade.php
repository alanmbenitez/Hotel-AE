<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
   
    <title>@yield('title') | Hotel Aires Express</title>
    <meta name="description" content="@yield('description')."/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/favicon-1.svg')}}" />
	<link rel="icon" href="{{asset('images/favicon-2.svg')}}">

    <!-- ========== STYLESHEETS ========== --> 
       <!-- Compiled and minified CSS -->
      
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity@2/dist/flickity.min.css" r> 
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('revolution/css/layers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('revolution/css/settings.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('revolution/css/navigation.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">
   
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

    <!-- ========== ICON FONTS ========== -->

    
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

   
</head>

<body>
    
    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        
        <!-- ========== TOP MENU ========== -->
      <div class="top_menu transparent hidden-xs">
  
        </div>
  
        <!-- ========== HEADER ========== -->
         @yield('navBar')
        <!-- ========== REVOLUTION SLIDER ========== -->
         @yield('revolution')

        <article class="btn-whatsapp">
            <span>
                <a 
                href="https://api.whatsapp.com/send?phone=+5491140480054" 
                target="_blank" rel="noreferrer"><img class="img_btn_whatsapp"
                src="{{asset('images/wp.png')}}" alt="logo whatsapp"></a>
            </span>
            
            
        </article>
     @yield('main')
     @include('sweetalert::alert')
                </div>
            </div>
        </section> 

        <!-- ========== FOOTER ========== -->
        @include('components.general.footer')
            
    </div>
    
    <!-- ========== BACK TO TOP ========== -->
    <div  id="back_to_top">
        <i class="back-to-top fa fa-angle-up" aria-hidden="false"></i>
    </div>

    <!-- ========== NOTIFICATION ========== -->
    <div id="notification"></div>
     
    <!-- ========== JAVASCRIPT ========== -->
    
    <script src="https://kit.fontawesome.com/89f55138af.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        
      </script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.smoothState.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/morphext.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.thumbs.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jPushMenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.js')}}"></script>
    
   {{--  <script type="text/javascript" src="{{asset('js/form_reservas.js')}}"></script> --}}

  


    <!-- ========== REVOLUTION SLIDER ========== -->
    <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        $('.CarouselHome').flickity({
          // options
          /* watchCSS: true, */
          cellAlign: 'center',
          contain: true,
          prevNextButtons: false,
          autoPlay: 2500,
          wrapAround: true,
          
          
        });

        $('.CarouselRoom').flickity({
          // options
          watchCSS: true,
          cellAlign: 'center',
          contain: true,
          prevNextButtons: false,
          autoPlay: 2500, 
          wrapAround: true,
          
          
        });
    </script>
    @yield('script')
    @yield('script2')
<script>
let cross = document.querySelector(".fa-times");
let banner = document.querySelector(".navbar-sticky-top")
   cross.addEventListener("click", () => {
        banner.style.display ="none"
   });

</script>

</body>
</html>