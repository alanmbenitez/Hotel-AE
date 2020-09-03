<header class="fixed transparent">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand light" href="index.html">
                <img src="https://i.imgur.com/l35y0S2.png" height="50" alt="Logo">
            </a>
            <a class="navbar-brand dark nodisplay" href="index.html">
                <img src="https://i.imgur.com/l35y0S2.png" height="50" alt="Logo">
            </a>
        </div>
        <nav id="main_menu" class="mobile_menu navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="mobile_menu_title" style="display:none;">MENU</li>
                <li class="dropdown simple_menu active">
                    <a href="#" data-toggle="dropdown">HOME </a>
                </li>
                <li class="dropdown simple_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">ROOMS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/singleRoom') }}">Habitacion Simple</a></li>
                        <li><a href="buttons.html">Habitacion ddoble</a></li>
                        <li><a href="icons.html">Habitacion triple</a></li>
                    </ul>
                </li>
                
                <li class="dropdown simple_menu"><a href="#" data-toggle="dropdown" aria-expanded="true">ELEMENTS </a>
                   
                </li>
              
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="blog.html">CONTACTO</a></li>
                <li class="dropdown simple_menu">
                    @if(App::getLocale() === 'en')
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><i class="fa fa-globe"></i> | EN <b class="caret"></b></a>
                    @else
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><i class="fa fa-globe"></i> | ES <b class="caret"></b></a>
                    @endif
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                    <ul style="left: 10px" class="dropdown-menu">
                        <li><a id="lang_en" href="{!! route('lang.swap', 'en') !!}">EN</a></li>
                        <li><a id="lang_es" href="{!! route('lang.swap', 'es') !!}">ES</a></li>
                        
                    </ul>
                    @endif
                </li>

               {{--  <li class="language-switcher">
                    <nav class="dropdown">
                        <a href="#" id="lang_page" class="dropdown-toggle select" data-hover="dropdown" data-toggle="dropdown">
                            @if(App::getLocale() === 'en')
                            <i class="famfamfam-flag-gb "></i>English<b class="caret"></b>
                            @else
                            <i class="famfamfam-flag-es "></i>Español<b class="caret"></b>
                            @endif
                            
                        </a>
                        @if (config('locale.status') && count(config('locale.languages')) > 1)
                       
                        <ul class="dropdown-menu">
                            <li><a id="lang_en" href="{!! route('lang.swap', 'en') !!}"><i class="famfamfam-flag-gb "></i>English</a></li>
                            <li><a id="lang_es" href="{!! route('lang.swap', 'es') !!}"><i class="famfamfam-flag-es "></i>Español</a></li>
                        </ul>
                      
                        @endif
                        
                    </nav>
                </li> --}}






                
            </ul>
        </nav>
    </div>
</header>
