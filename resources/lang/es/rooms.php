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
            'href'=> asset('images/rooms/single-room/Single_4.webp'),
            'alt'=>'single_frontal'
        ],
        'foto2'=>[
            'href'=>asset('images/rooms/single-room/Single_3.webp'),
            'alt'=>'single_lateral'
        ],
        'foto3'=>[
            'href'=>asset('images/rooms/single-room/Baño_1.webp'),
            'alt'=>'single_baño'
        ],
        'foto4'=>[
            'href'=> asset('images/rooms/gral/Hotel_1.webp'),
            'alt'=>'Hotel_view6'
        ],
        'foto5'=>[
            'href'=>asset('images/rooms/gral/Hotel_2.webp'),
            'alt'=>'Hotel_view1'
        ],
        'foto6'=>[
            'href'=>asset('images/rooms/gral/Hotel_3.webp'),
            'alt'=>'Hotel_view2'
        ],
        'foto7'=>[
            'href'=> asset('images/rooms/gral/Hotel_4.webp'),
            'alt'=>'Hotel_view3'
        ],
        'foto8'=>[
            'href'=>asset('images/rooms/gral/Hotel_5.webp'),
            'alt'=>'Hotel_view4'
        ],
        'foto9'=>[
            'href'=>asset('images/rooms/gral/Hotel_6.webp'),
            'alt'=>'Hotel_view5'
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
                    'src'=>asset('images/rooms/double-room/Dobles_2.webp'),
                    'name'=>'Doble',
                    'price'=>'$1980',
                    'per_night'=>'/noche'
                ],
                'room2'=>[
                    'href'=> url('/rooms/triple'),
                    'src'=> asset('images/rooms/triple-room/Triple_1.webp'),
                    'name'=>'Triple',
                    'price'=>'$2200',
                    'per_night'=>'/noche'
                ],
                'room3'=>[
                    'href'=> url('/rooms/cuadruple'),
                    'src'=>asset('images/rooms/single-room/Single_3.webp'),
                    'name'=>'Cuádruple',
                    'price'=>'$2450',
                    'per_night'=>'/noche'
                ],
                
                
    ]],
    'double' => [
        'title'=>'Habitación Doble',
        'precio_num'=>'$1980',
        'Precio_per_night'=>'por noche ',
        'fotos'=>[
            'foto1'=>[
                'href'=> asset('images/rooms/double-room/Dobles_2.webp'),
                'alt'=>'double_frontal'
            ],
            'foto2'=>[
                'href'=>asset('images/rooms/double-room/Dobles_3.webp'),
                'alt'=>'double_lateral'
            ],
            'foto3'=>[
                'href'=>asset('images/rooms/single-room/Baño_1.webp'),
                'alt'=>'double_tracera'
            ],
            'foto4'=>[
                'href'=> asset('images/rooms/gral/Hotel_1.webp'),
                'alt'=>'Hotel_view6'
            ],
            'foto5'=>[
                'href'=>asset('images/rooms/gral/Hotel_2.webp'),
                'alt'=>'Hotel_view1'
            ],
            'foto6'=>[
                'href'=>asset('images/rooms/gral/Hotel_3.webp'),
                'alt'=>'Hotel_view2'
            ],
            'foto7'=>[
                'href'=> asset('images/rooms/gral/Hotel_4.webp'),
                'alt'=>'Hotel_view3'
            ],
            'foto8'=>[
                'href'=>asset('images/rooms/gral/Hotel_5.webp'),
                'alt'=>'Hotel_view4'
            ],
            'foto9'=>[
                'href'=>asset('images/rooms/gral/Hotel_6.webp'),
                'alt'=>'Hotel_view5'
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
                    'src'=>asset('images/rooms/single-room/Single_4.webp'),
                    'name'=>'Individual',
                    'price'=>'$1700',
                    'per_night'=>'/noche'
                ],
                'room2'=>[
                    'href'=>url('/rooms/triple'),
                    'src'=> asset('images/rooms/triple-room/Triple_1.webp'),
                    'name'=>'Triple',
                    'price'=>'$2200',
                    'per_night'=>'/noche'
                ],
                'room3'=>[
                    'href'=>url('/rooms/cuadruple'),
                    'src'=>asset('images/rooms/double-room/Dobles_2.webp'),
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
                'href'=> asset('images/rooms/triple-room/Triple_1.webp'),
                'alt'=>'frontal'
            ],
            'foto2'=>[
                'href'=>asset('images/rooms/triple-room/triple_2.webp'),
                'alt'=>'lateral'
            ],
            'foto3'=>[
                'href'=>asset('images/rooms/single-room/Baño_1.webp'),
                'alt'=>'tracera'
            ],
            'foto4'=>[
                'href'=> asset('images/rooms/gral/Hotel_1.webp'),
                'alt'=>'Hotel_view6'
            ],
            'foto5'=>[
                'href'=>asset('images/rooms/gral/Hotel_2.webp'),
                'alt'=>'Hotel_view1'
            ],
            'foto6'=>[
                'href'=>asset('images/rooms/gral/Hotel_3.webp'),
                'alt'=>'Hotel_view2'
            ],
            'foto7'=>[
                'href'=> asset('images/rooms/gral/Hotel_4.webp'),
                'alt'=>'Hotel_view3'
            ],
            'foto8'=>[
                'href'=>asset('images/rooms/gral/Hotel_5.webp'),
                'alt'=>'Hotel_view4'
            ],
            'foto9'=>[
                'href'=>asset('images/rooms/gral/Hotel_6.webp'),
                'alt'=>'Hotel_view5'
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
                    'src'=>asset('images/rooms/single-room/Single_4.webp'),
                    'name'=>'Individual',
                    'price'=>'$1700',
                    'per_night'=>'/noche'
                ],
                'room2'=>[
                    'href'=> url('/rooms/double'),
                    'src'=>asset('images/rooms/double-room/Dobles_2.webp'),
                    'name'=>'Doble',
                    'price'=>'$1980',
                    'per_night'=>'/noche'
                ],
                'room3'=>[
                    'href'=>url('/rooms/cuadruple'),
                    'src'=>asset('images/rooms/double-room/Cuadruple_1.webp'),
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
                        'href'=> asset('images/rooms/single-room/Single_3.webp'),
                        'alt'=>'Quadruple_frontal'
                    ],
                    'foto2'=>[
                        'href'=>asset('images/rooms/double-room/Dobles_2.webp'),
                        'alt'=>'Quadruple_lateral'
                    ],
                    'foto3'=>[
                        'href'=>asset('images/rooms/single-room/Baño_1.webp'),
                        'alt'=>'Quadruple_tracera'
                    ],
                    'foto4'=>[
                        'href'=> asset('images/rooms/gral/Hotel_1.webp'),
                        'alt'=>'Hotel_view6'
                    ],
                    'foto5'=>[
                        'href'=>asset('images/rooms/gral/Hotel_2.webp'),
                        'alt'=>'Hotel_view1'
                    ],
                    'foto6'=>[
                        'href'=>asset('images/rooms/gral/Hotel_3.webp'),
                        'alt'=>'Hotel_view2'
                    ],
                    'foto7'=>[
                        'href'=> asset('images/rooms/gral/Hotel_4.webp'),
                        'alt'=>'Hotel_view3'
                    ],
                    'foto8'=>[
                        'href'=>asset('images/rooms/gral/Hotel_5.webp'),
                        'alt'=>'Hotel_view4'
                    ],
                    'foto9'=>[
                        'href'=>asset('images/rooms/gral/Hotel_6.webp'),
                        'alt'=>'Hotel_view5'
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
                            'src'=>asset('images/rooms/single-room/Single_4.webp'),
                            'name'=>'Individual',
                            'price'=>'$1700',
                            'per_night'=>'/noche'
                        ],
                        'room2'=>[
                            'href'=> url('/rooms/double'),
                            'src'=>asset('images/rooms/double-room/Dobles_2.webp'),
                            'name'=>'Doble',
                            'price'=>'$1980',
                            'per_night'=>'/noche'
                        ],
                        'room3'=>[
                            'href'=>url('/rooms/triple'),
                            'src'=> asset('images/rooms/triple-room/Triple_1.webp'),
                            'name'=>'Triple',
                            'price'=>'$2200',
                            'per_night'=>'/noche'
                        ]
                    ]
                ]
                        ];