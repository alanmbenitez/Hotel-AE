<?php
/**
 * 
 */
return [
    /*
    |--------------------------------------------------------------------------
    | {Idioma} - {Pais} - Base
    |--------------------------------------------------------------------------
    | Descripccion
    */
    // EJ
    'title' => 'Bienvenidos al Hotel Aires Express',
    'title_services' => 'NUESTROS SERVICIOS',
    'subtitle_services' => 'Ofrecemos los siguientes servicios para que puedas aprovechar al máximo tu estadía en el hotel.',

    'img_services' => [
        'img1' => [
            'src' => asset('images/home/breakfast.webp'),
            'class'=>'',
            'alt' => 'breakfast'
        ],
        'img2' => [
            'src' => asset('images/home/aire.webp'),
            'class'=>'',
            'alt' => 'aire'
        ],
        'img3' => [
            'src' => asset('images/home/conserje.webp'),
            'class'=>'',
            'alt' => 'conserje'
        ],
        'img4' => [
            'src' => asset('images/home/tv.webp'),
            'class'=>'',
            'alt' => 'tv'
        ],
        'img5' => [
            'src' => asset('images/home/car.webp'),
            'class'=>'',
            'alt' => 'aire'
        ]
        ],

    'info_services' => [
        'info1' => [
            'src' => asset('images/icons/coffee.svg'),
            'class'=>'',
            'alt' => 'icon1',
            'title' => 'Desayuno continental libre',
            'description' => 'Café con leche, medialunas, tostadas',
        ],
        'info2' => [
            'src' => asset('images/icons/air.svg'),
            'class'=>'',
            'alt' => 'icon2',
            'title' => 'Aire acondicionado frío/calor',
            'description' => 'Cada uno con regulación individual',
        ],
        'info3' => [
            'src' => asset('images/icons/conserje.svg'),
            'class'=>'',
            'alt' => 'icon3',
            'title' => 'Conserjería 24 horas',
            'description' => 'Atención personalizada cuando necesites',
        ],
        'info4' => [
            'src' => asset('images/icons/TV.svg'),
            'class'=>' ',
            'alt' => 'icon1',
            'title' => 'Television por cable',
            'description' => 'Cientos de canales para disfrutar',
        ],
       /*  'info5' => [
            'src' => asset('images/icons/Wifi.svg'),
            'class'=>'img_service_none_2 ',
            'alt' => 'icon2',
            'title' => 'Wifi disponible las 24hs.',
            'description' => 'Para que puedas estar conectado en todo momento',
        ], */
        'info6' => [
            'src' => asset('images/icons/car.svg'),
            'alt' => 'icon3',
            'class'=>' ',
            'title' => 'Estacionamiento Cercano',
            'description' => 'A solo algunos metros del Hotel',
        ],
    ],
    'title_our_rooms'=>'NUESTRAS HABITACIONES',
    'info_our_rooms'=>'Contamos con 52 habitaciones, de las cuales hay <strong>individuales</strong> con cama de 1 o 2 plazas, <strong>dobles</strong> con cama matrimonial o separadas, y <strong>triples</strong> con cama matrimonial o separadas.</p>',
    'main_carousel'=> [
        'carousel1'=>[
            'src'=> asset('images/rooms/single-room/Single_4.webp'),
            'alt'=>'Single_room',
            'title'=>'Individuales',
            'price'=>'$1700',
            'per_night'=>'/ noche',
            'href' => url('/rooms/single')
        ],
        'carousel2'=>[
            'src'=>asset('images/rooms/double-room/Dobles_2.webp'),
            'alt'=>'Double_room',
            'title'=>'Dobles',
            'price'=>'$1980',
            'per_night'=>'/ noche',
            'href' => url('/rooms/double')
        ],
        'carousel3'=>[
            'src'=>asset('images/rooms/triple-room/Triple_1.webp'),
            'alt'=>'Triple_room',
            'title'=>'Triples',
            'price'=>'$2200',
            'per_night'=>'/ noche',
            'href' => url('/rooms/triple')
        ],
        'carousel4'=>[
            'src'=>asset('images/rooms/double-room/Cuadruple_1.webp'),
            'alt'=>'Quadruple_room',
            'title'=>'Cuádruples',
            'price'=>'$2450',
            'per_night'=>'/ noche',
            'href' => url('/rooms/cuadruple')
        ]


        ],
    ];