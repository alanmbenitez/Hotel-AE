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
    'single' => [

    'title'=>'Habitación Individual',
    'precio_num'=>'$1700',
    'Precio_per_night'=>'por noche ',
    'fotos'=>[
        'foto1'=>[
            'href'=> 'https://cf.bstatic.com/images/hotel/max1024x768/101/101866374.jpg',
            'alt'=>'frontal'
        ],
        'foto2'=>[
            'href'=>'https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_650,q_auto,w_1000/itemimages/11/22/112232_v4.jpeg',
            'alt'=>'lateral'
        ],
        'foto3'=>[
            'href'=>'https://media-cdn.tripadvisor.com/media/photo-s/06/fe/72/11/exterior-view.jpg',
            'alt'=>'tracera'
        ]
    ],

    'title_service'=>'Servicios',

    'informacion'=>[
        'columna1' =>[
            'servicio1'=>'Cama individual o Matromonial',
            'servicio2'=>'1 personas',
            'servicio3'=>'Wifi Libre',
        ] ,
        'columna2' =>[
            'servicio1'=>'Desayuno Continental Libre',
            'servicio2'=>'Televisión por cable',
            'servicio3'=>'Secador de cabello'
        ] ,
        'columna3' =>[
            'servicio1'=>'Conserjería 24hs',
            'servicio2'=>'Estacionamiento cercano',
            'servicio3'=>'Aire frio/Calor'
        ] ,
    ],


    'title_content'=>'Hotel Aires Express',
            
        'contenido'=>[
            'parrafo1' => 'Cómoda habitación espaciosa, un excelente lugar para trabajar y descansar. Tenemos todos los servicios a tu disposición para crear una excelente experiencia en una de las zonas históricas de nuestra ciudad.',
            'parrafo2' => 'Ven y disfruta de Buenos Aires desde nuestras instalaciones, te esperamos!'
    
        ],

        'title_rooms'=>'Otras habitaciones',
            'other_rooms'=>[
                'room1'=>[
                    'href'=> url('/rooms/double'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Doble',
                    'price'=>'$1980',
                    'per_night'=>'/noche'
                ],
                'room2'=>[
                    'href'=> url('/rooms/triple'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Triple',
                    'price'=>'$2200',
                    'per_night'=>'/noche'
                ],
                'room3'=>[
                    'href'=> url('/rooms/cuadruple'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Cuádruple',
                    'price'=>'$2450',
                    'per_night'=>'/noche'
                ]
    ]],
    'double' => [
        'title'=>'Habitación Doble',
        'precio_num'=>'$1980',
        'Precio_per_night'=>'por noche ',
        'fotos'=>[
            'foto1'=>[
                'href'=> 'https://cf.bstatic.com/images/hotel/max1024x768/101/101866374.jpg',
                'alt'=>'frontal'
            ],
            'foto2'=>[
                'href'=>'https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_650,q_auto,w_1000/itemimages/11/22/112232_v4.jpeg',
                'alt'=>'lateral'
            ],
            'foto3'=>[
                'href'=>'https://media-cdn.tripadvisor.com/media/photo-s/06/fe/72/11/exterior-view.jpg',
                'alt'=>'tracera'
            ]
        ],

        'title_service'=>'Servicios',
    
    
        'informacion'=>[
            'columna1' =>[
                'servicio1'=>'Cama Matrimonial',
                'servicio2'=>'2 personas',
                'servicio3'=>'Wifi Libre',
            ] ,
            'columna2' =>[
                'servicio1'=>'Desayuno Continental Libre',
                'servicio2'=>'Televisión por cable',
                'servicio3'=>'Secador de cabello'
            ] ,
            'columna3' =>[
                'servicio1'=>'Conserjería 24hs',
                'servicio2'=>'Estacionamiento cercano',
                'servicio3'=>'Aire frio/Calor'
            ] ,
        ],
        
        'title_content'=>'Hotel Aires Express',
            
        'contenido'=>[
            'parrafo1' => 'Cómoda habitación espaciosa, un excelente lugar para trabajar y descansar. Tenemos todos los servicios a tu disposición para crear una excelente experiencia en una de las zonas históricas de nuestra ciudad.',
            'parrafo2' => 'Ven y disfruta de Buenos Aires desde nuestras instalaciones, te esperamos!'
    
        ],

        'title_rooms'=>'Otras habitaciones',
            'other_rooms'=>[
                'room1'=>[
                    'href'=>url('/rooms/single'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Individual',
                    'price'=>'$1700',
                    'per_night'=>'/noche'
                ],
                'room2'=>[
                    'href'=>url('/rooms/triple'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Triple',
                    'price'=>'$2200',
                    'per_night'=>'/noche'
                ],
                'room3'=>[
                    'href'=>url('/rooms/cuadruple'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Cuádruple',
                    'price'=>'$2450',
                    'per_night'=>'/noche'
                ]
            ]
    
    ],
    'triple' => [

        'title'=>'Habitación Triple',
        'precio_num'=>'$2200',
        'Precio_per_night'=>'por noche ',
        'fotos'=>[
            'foto1'=>[
                'href'=> 'https://cf.bstatic.com/images/hotel/max1024x768/101/101866374.jpg',
                'alt'=>'frontal'
            ],
            'foto2'=>[
                'href'=>'https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_650,q_auto,w_1000/itemimages/11/22/112232_v4.jpeg',
                'alt'=>'lateral'
            ],
            'foto3'=>[
                'href'=>'https://media-cdn.tripadvisor.com/media/photo-s/06/fe/72/11/exterior-view.jpg',
                'alt'=>'tracera'
            ]
        ],

        'title_service'=>'Servicios',
    
    
        'informacion' => [
            'columna1' =>[
                'servicio1'=>'Matrimonial y Cama Individual',
                'servicio2'=>'3 Personas',
                'servicio3'=>'Secador de cabello',
            ] ,
            'columna2' =>[
                'servicio1'=>'Conserjería 24hs',
                'servicio2'=>'Televisión por cable',
                'servicio3'=>'Secador de cabello'
            ] ,
            'columna3' =>[
                'servicio1'=>'Conserjería 24hs',
                'servicio2'=>'Estacionamiento cercano',
                'servicio3'=>'Aire frio/Calor'
            ] ,
            
    
        ],
        'title_content'=>'Hotel Aires Express',
            
        'contenido'=>[
            'parrafo1' => 'Cómoda habitación espaciosa, un excelente lugar para trabajar y descansar. Tenemos todos los servicios a tu disposición para crear una excelente experiencia en una de las zonas históricas de nuestra ciudad.',
            'parrafo2' => 'Ven y disfruta de Buenos Aires desde nuestras instalaciones, te esperamos!'
    
        ],
        'title_rooms'=>'Otras habitaciones',
            'other_rooms'=>[
                'room1'=>[
                    'href'=> url('/rooms/single'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Individual',
                    'price'=>'$1700',
                    'per_night'=>'/noche'
                ],
                'room2'=>[
                    'href'=> url('/rooms/double'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Doble',
                    'price'=>'$1980',
                    'per_night'=>'/noche'
                ],
                'room3'=>[
                    'href'=>url('/rooms/cuadruple'),
                    'src'=>asset('images/rooms/single-room.jpg'),
                    'name'=>'Cuádruple',
                    'price'=>'$2450',
                    'per_night'=>'/noche'
                ]
            ]
            ],

            'cuadruple' => [

                'title'=>'Habitación Cuádruple',
                'precio_num'=>'$2450',
                'Precio_per_night'=>'/ noche ',
                'fotos'=>[
                    'foto1'=>[
                        'href'=> 'https://cf.bstatic.com/images/hotel/max1024x768/101/101866374.jpg',
                        'alt'=>'frontal'
                    ],
                    'foto2'=>[
                        'href'=>'https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_650,q_auto,w_1000/itemimages/11/22/112232_v4.jpeg',
                        'alt'=>'lateral'
                    ],
                    'foto3'=>[
                        'href'=>'https://media-cdn.tripadvisor.com/media/photo-s/06/fe/72/11/exterior-view.jpg',
                        'alt'=>'tracera'
                    ]
                ],
            
                'title_service'=>'Servicios',
            
                'informacion'=>[
                    'columna1' =>[
                        'servicio1'=>'2 Camas Matrimoniales',
                        'servicio2'=>'4 personas',
                        'servicio3'=>'Wifi Libre',
                    ] ,
                    'columna2' =>[
                        'servicio1'=>'Desayuno Continental Libre',
                        'servicio2'=>'Televisión por cable',
                        'servicio3'=>'Secador de cabello'
                    ] ,
                    'columna3' =>[
                        'servicio1'=>'Conserjería 24hs',
                        'servicio2'=>'Estacionamiento cercano',
                        'servicio3'=>'Aire frio/Calor '
                    ] ,
                ],
            
            
                'title_content'=>'Hotel Aires Express',
            
                'contenido'=>[
                    'parrafo1' => 'Cómoda habitación espaciosa, un excelente lugar para trabajar y descansar. Tenemos todos los servicios a tu disposición para crear una excelente experiencia en una de las zonas históricas de nuestra ciudad.',
                    'parrafo2' => 'Ven y disfruta de Buenos Aires desde nuestras instalaciones, te esperamos!'
                ],
                'title_rooms'=>'Otras habitaciones',
                    'other_rooms'=>[
                        'room1'=>[
                            'href'=>url('/rooms/single'),
                            'src'=>asset('images/rooms/single-room.jpg'),
                            'name'=>'Individual',
                            'price'=>'$1700',
                            'per_night'=>'/noche'
                        ],
                        'room2'=>[
                            'href'=> url('/rooms/double'),
                            'src'=>asset('images/rooms/single-room.jpg'),
                            'name'=>'Doble',
                            'price'=>'$1980',
                            'per_night'=>'/noche'
                        ],
                        'room3'=>[
                            'href'=>url('/rooms/triple'),
                            'src'=>asset('images/rooms/single-room.jpg'),
                            'name'=>'Triple',
                            'price'=>'$2200',
                            'per_night'=>'/noche'
                        ]
                    ]
                ]
                        ];