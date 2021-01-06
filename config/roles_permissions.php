<?php
return [
    'roles'=>[
       'root'=>[
           'name'=>'Super Administrator',
           'slug'=>'root',
           'description'=>'manage all of system',
           'active'=>1
       ],
       'admin'=>[
           'name'=>'Administrator',
           'slug'=>'admin',
           'description'=>'manage system',
           'active'=>1
       ],
       'user'=>[
           'name'=>'User',
           'slug'=>'user',
           'description'=>'who can be user',
           'active'=>1
       ],
       'guest'=>[
           'name'=>'Guest',
           'slug'=>'guest',
           'description'=>'who can be guest',
           'active'=>1
       ],
   ],
    'permissions'=>[
        'dashboard',
        'notification',
        'comment',
        'email',
        'slider',
        'shop',
        'commission',
        'category',
        'brand',
        'product',
        'attributed',
        'attributed_value',
        'customer',
        'news',
        'event',
        'career',
        'article',
        'faq',
        'about_us',
        'contact_us',
        'privacy_policy',
        'team_condition',
        'service',
        'service_type',
        'organization',
        'advertisement',
        'user',
        'role',
        'permission',
        'general',
        'setting',

    ],
    'role_has_permissions'=>[
        'root'=>[
            'dashboard'=>[
                'create' => 0,
                'view'=>1,
                'edit'=>0,
                'delete'=>0
            ],
            'notification'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'comment'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'email'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'slider'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'shop'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'commission'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'category'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'brand'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'product'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'attributed'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'attributed_value'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'customer'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'news'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'event'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'career'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'article'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'faq'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'about_us'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'contact_us'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'privacy_policy'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'team_condition'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'service'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'service_type'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'organization'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'advertisement'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'user'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'role'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'permission'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'general'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
            'setting'=>[
                'create' => 1,
                'view'=>1,
                'edit'=>1,
                'delete'=>1
            ],
        ],
        'admin'=> [
                'dashboard'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>0,
                    'delete'=>0
                ],
                'notification'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'comment'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'email'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'slider'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'shop'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'commission'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'category'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'brand'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'product'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'attributed'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'attributed_value'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'customer'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'news'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'event'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'career'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'article'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'faq'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'about_us'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'contact_us'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'privacy_policy'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'team_condition'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'service'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'service_type'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'organization'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'advertisement'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'user'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'role'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'permission'=>[
                    'view'=>1,
                    'edit'=>0,
                    'delete'=>0
                ],
                'general'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>0
                ],
                'setting'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>0
                ],
            ],
        'user'=> [
//                'comment'=>[
//                    'create' => 1,
//                    'view'=>1,
//                    'edit'=>1,
//                    'delete'=>1
//                ],
//                'slider'=>[
//                    'create' => 1,
//                    'view'=>1,
//                    'edit'=>1,
//                    'delete'=>1
//                ],
                'shop'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'category'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'brand'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'product'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'attributed'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'attributed_value'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'customer'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'news'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'event'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'career'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'article'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'faq'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'about_us'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'contact_us'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'privacy_policy'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'team_condition'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'service'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'service_type'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>1
                ],
                'organization'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>0
                ],
                'advertisement'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>0
                ],
                'setting'=>[
                    'create' => 1,
                    'view'=>1,
                    'edit'=>1,
                    'delete'=>0
                ],
            ],
    ]
];
