<?php
return [
    'theme'=>[
        'name' =>'ecam',
        'mode' =>[
            'skin' =>'dark-sidebar'  //=> dark,dark-sidebar,light,light-sidebar
        ],
        'layout'=>[
            'body'=>[
                'full_width' => true,
                'class_name'=>'wrapper'
            ],
            'header'=>[
                'is_header'=>true,
                'fixed' => true,
                'class_name'=>'header header-top-bar', //customize your own class style
            ],
            'sidebar'=>[
                'is_collapse'=>false,
                'fixed'=>true,
                'position' => 'left', //position has two left and right
                'class_name'=>'sidebar' //customize your own class style
            ],
            'footer'=>[
                'is_footer'=>false, // not show footer
                'fixed' => true,
                'class_name'=>'' //customize your own class style
            ],
            'content'=>[
                'breadcrumb' => [
                    'is_breadcrumb'=>true,
                    'has_tittle'=>true,
                ],
                'class_name'=>'main'
            ]
        ]
    ],
];
