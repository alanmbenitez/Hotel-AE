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
    ]
];