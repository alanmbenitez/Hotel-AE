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
            'alt' => 'breakfast'
        ],
        'img2' => [
            'src' => asset('images/home/aire.webp'),
            'alt' => 'aire'
        ],
        'img3' => [
            'src' => asset('images/home/conserje.webp'),
            'alt' => 'conserje'
        ]
        ],

    'info_services' => [
        'info1' => [
            'src' => asset('images/icons/coffee.svg'),
            'alt' => 'icon1',
            'title' => 'Desayuno continental libre',
            'description' => 'Café con leche, medialunas, tostadas',
        ],
        'info2' => [
            'src' => asset('images/icons/air.svg'),
            'alt' => 'icon2',
            'title' => 'Aire acondicionado frío/calor',
            'description' => 'Cada uno con regulación individual',
        ],
        'info3' => [
            'src' => asset('images/icons/conserje.svg'),
            'alt' => 'icon3',
            'title' => 'Conserjería 24 horas',
            'description' => 'Atención personalizada cuando necesites',
        ],
    ],
    'title_our_rooms'=>'NUESTRAS HABITACIONES',
    'info_our_rooms'=>'Contamos con 52 habitaciones, de las cuales hay <strong>individuales</strong> con cama de 1 o 2 plazas, <strong>dobles</strong> con cama matrimonial o separadas, y <strong>triples</strong> con cama matrimonial o separadas.</p>',
    'main_carousel'=> [
        'carousel1'=>[
            'src'=>asset('images/rooms/single-room.jpg'),
            'alt'=>'image',
            'title'=>'Individuales',
            'price'=>'',
            'per_night'=>'/ noche'
        ],
        'carousel2'=>[
            'src'=>asset('images/rooms/single-room.jpg'),
            'alt'=>'image',
            'title'=>'Dobles',
            'price'=>'',
            'per_night'=>'/ noche'
        ],
        'carousel'=>[
            'src'=>asset('images/rooms/single-room.jpg'),
            'alt'=>'image',
            'title'=>'Triples',
            'price'=>'',
            'per_night'=>'/ noche'
        ]


        ],
    ];
