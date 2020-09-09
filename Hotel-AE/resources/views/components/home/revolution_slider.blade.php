
 <div class="hero_wrapper">
    <div id="hero" class="rev_slider gradient_slider" style="display:none">
        <ul>

            <li data-index="rs-214" 
                data-delay="1000" 
                data-transition="fade" 
                data-slotamount="7" 
                data-easein="default" 
                data-easeout="default" 
                data-masterspeed="100" 
                data-rotate="0" 
                data-saveperformance="off" 
                data-title="Slide" 
                data-description="">
                <!-- IMAGE -->
                <img src="{{asset('images/home/obelisco.jpeg')}}" alt="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <!-- LAYER NR. 1 --> 
                
                <div class="tp-caption"
                     data-x="['510','right','left','center']" 
                     data-hoffset="['15','15','15','0']" 
                     data-y="['250','200','200','200']"
                     data-responsive_offset="on" 
                     data-fontsize="['40','28','28','22']" 
                     data-lineheight="['40','28','28','22']"
                     data-whitespace="nowrap"
                     data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                     style="color: #fff; font-weight: 700; font-family: 'Raleway', sans-serif;; ">{{ __('home.title')}} <br><span id="text_rotating"> COMODO, TRANQUILO , CONFORTABLE</span>
                </div>
                <!-- LAYER NR. 8 --> 
                <div class="tp-caption tp_s_title"
                     data-visibility="['on','on','on','off']"
                     data-x="['510','left','right','right']" 
                     data-hoffset="['15','15','15','15']" 
                     data-y="['350','middle','middle','top']"
                     data-voffset="['50','50','300','300']" 
                     data-responsive_offset="on" 
                     data-fontsize="['20','20','20','15']"
                     data-lineheight="['20','20','20','15']"
                     data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]' style="display: flex; justify-content: center; align-items: center; ">
                     <i style="font-size: 34px; color: #ED325C; padding: 15px;" class="fa fa-wifi"></i> Wifi Disponible las 24hs.
                </div>
                <!-- LAYER NR. 9 --> 
                <div class="tp-caption tp_s_title"
                     data-visibility="['on','on','on','off']"
                     data-x="['510','center','center','center']" 
                     data-hoffset="['15','15','15','0']"  
                     data-y="['400','middle','200','200']"
                     data-voffset="['50','50','300','300']" 
                     data-responsive_offset="on" 
                     data-fontsize="['20','20','20','15']"
                     data-lineheight="['20','20','20','15']" 
                     data-frames='[{"delay":2200,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]' style="display: flex; justify-content: center; align-items: center; "><i style="font-size: 34px; color: #ED325C; padding: 15px;" class="fa fa fa-coffee"></i> Desayuno continental libre.
                </div>
                <!-- LAYER NR. 10 --> 
                <div class="tp-caption tp_s_title"
                     data-visibility="['on','on','on','off']"
                     data-x="['510','left','right','right']" 
                     data-hoffset="['15','15','15','0']" 
                     data-y="['450','middle','top','top']"
                     data-voffset="['110','150','400','400']" 
                     data-responsive_offset="on" 
                     data-fontsize="['20','20','20','15']" 
                     data-lineheight="['20','20','20','15']"
                     data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]' style="display: flex; justify-content: center; align-items: center; "><i style="font-size: 34px; color: #ED325C; padding: 15px;" class="fa ffa fa-television"></i> Television por cable.
                </div>
                
                <!-- LAYER NR. 14 --> 
                <div class="tp-caption" 
                     data-x="['left','left','center','center']" 
                     data-hoffset="['15','15','0','0']" 
                     data-y="['160','160','500','400']"
                     data-width="[368, 368, 768, 480]" 
                     data-height="[auto, auto, auto, auto]"
                     data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]' 
                     style="z-index: 99;">
                <!-- ========== BOOKING FORM ========== -->
                @component('components.general.Form_reserva')
                @endcomponent
                <!-- LAYER NR. 15 --> 
                <div class="tp-caption"
                     data-visibility="['on','on','off','off']"
                     data-x="['center','center','center','center']" 
                     data-hoffset="['0','0','0','0']" 
                     data-y="['bottom','bottom','bottom','bottom']" 
                     data-voffset="['20','20','20','20']" 
                     data-width="none" 
                     data-height="none" 
                     data-whitespace="nowrap" 
                     data-transform_idle="o:1;" 
                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;" 
                     data-transform_out="opacity:0;s:300;s:300;" 
                     data-start="8000" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]' 
                     data-responsive_offset="on" 
                     data-startslide="0" 
                     data-endslide="2" 
                     style="z-index: 11; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: 400; color: rgba(245, 245, 245, 1.00);text-transform:left;cursor:pointer;">
                    <div class="rs-looped rs-slideloop" data-easing="Power2.easeInOut" data-speed="1" data-xs="0" data-xe="0" data-ys="-5" data-ye="5"><i class="fa fa-angle-down"></i></div>
                </div>
            </li>

        </ul>
    </div>
</div>    
