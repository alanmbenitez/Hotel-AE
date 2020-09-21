<div class="container">
    <div class="navbar-header">
        <button type="button" aria-label="Left Align" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand light" href="{{route('home')}}">
            <img src="@yield('logo_menu')" height="60" alt="Logo">
        </a>
        <a class="navbar-brand dark nodisplay" href="{{route('home')}}">
            <img src="{{ asset('images\logo2.png')}}" height="60" alt="Logo">
        </a>
    </div>
    <nav id="main_menu" class="mobile_menu navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="mobile_menu_title nav_mobile_ul_menu" style="display:none;">MENU</li>
            <li class="dropdown simple_menu nav_li_menu nav_mobile_ul_menu">
                <a href="{{route('home')}}" data-toggle="dropdown" class="nav_a_menu" >INICIO</a>
            </li>
            <li class="dropdown simple_menu nav_li_menu nav_mobile_ul_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav_a_menu" aria-expanded="true">HABITACIONES<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/rooms/single') }}">Individual</a></li>
                    <li><a href="{{url('/rooms/double') }}">Dobles</a></li>
                    <li><a href="{{url('/rooms/triple') }}">Triples</a></li>
                    <li><a href="{{url('/rooms/cuadruple') }}">Cuádruples</a></li>
                </ul>
            </li>
          
            <li class="nav_li_menu nav_mobile_ul_menu">
                <a href="{{route('tourism')}}" class="nav_a_menu">TURISMO</a></li>
            <li class="nav_li_menu nav_mobile_ul_menu">
                <a class="nav_a_menu" href="{{route('contacto')}}" >CONTACTO</a></li>
                @if (false)
                    
               
            <li class="dropdown simple_menu nav_li_menu">
                @if(App::getLocale() === 'en')
                <a href="#" data-toggle="dropdown" class="nav_a_menu  dropdown-toggle" aria-expanded="true"><i class="fa fa-globe"></i> | EN <b class="caret"></b></a>
                @else
                <a href="#" data-toggle="dropdown" class="nav_a_menu  dropdown-toggle" aria-expanded="true"><i class="fa fa-globe"></i> | ES <b class="caret"></b></a>
                @endif
                @if (config('locale.status') && count(config('locale.languages')) > 1)
                <ul class=" lang_menu dropdown-menu">
                    <li><a id="lang_en" href="{!! route('lang.swap', 'en') !!}">EN</a></li>
                    <li><a id="lang_es" href="{!! route('lang.swap', 'es') !!}">ES</a></li>
                    
                </ul>
                @endif
            </li>
            @endif
        



            
        </ul>
    </nav>
</div>