<?php
return [
    'sidebar'=>[
        [
            'tittle'=>'MAIN',
            'items'=>[
                [
                    'label'=>'Dashboard',
                    'icon' => 'far fa-home',
                    'link' => '/',
                    'hasChild'=>false,
                    'child'=>[

                    ]
                ],
                [
                    'label'=>'Notification',
                    'icon' => 'far fa-bell',
                    'link' => '',
                    'hasChild'=>false,
                    'child'=>[

                    ]
                ],
                [
                    'label'=>'Comment',
                    'icon' => 'far fa-comment',
                    'link' => '',
                    'hasChild'=>false,
                    'child'=>[

                    ]
                ],
                [
                    'label'=>'Email',
                    'icon' => 'far fa-envelope',
                    'link' => '',
                    'hasChild'=>false,
                    'child'=>[

                    ]
                ],
                [
                    'label'=>'Slider',
                    'icon' => 'far fa-sliders',
                    'link' => '',
                    'hasChild'=>false,
                    'child'=>[

                    ]
                ]
            ]
        ],
        [
            'tittle'=>'ECOMMERCE',
            'items'=>[
                [
                    'label'=>'Shops',
                    'icon' => 'far fa-store',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'Shop',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Commission',
                            'icon' => '',
                            'link' => '',
                        ]
                    ]
                ],
                [
                    'label'=>'Products',
                    'icon' => 'far fa-tags',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'Categories',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Brands',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Products',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Attributes',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Attribute Values',
                            'icon' => '',
                            'link' => '',
                        ]
                    ]
                ],
                [
                    'label'=>'Customers',
                    'icon' => 'far fa-users',
                    'link' => '',
                    'hasChild'=>false,
                    'child'=>[

                    ]
                ]
            ]
        ],
        [
            'tittle'=>'PAGES & BLOGS',
            'items'=>[
                [
                    'label'=>'Pages',
                    'icon' => 'far fa-copy',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'News',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Events',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Career',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Article',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Textbook',
                            'icon' => '',
                            'link' => '',
                        ]
                    ]
                ],
                [
                    'label'=>'Blogs',
                    'icon' => 'far fa-globe',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'FAQ',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'About Us',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Contact US',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Privacy Policy',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Term & Condition',
                            'icon' => '',
                            'link' => '',
                        ]
                    ]
                ]
            ]
        ],
        [
            'tittle'=>'SERVICES & ADVERTISEMENTS',
            'items'=>[
                [
                    'label'=>'Services',
                    'icon' => 'far fa-first-aid',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'Type',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Services',
                            'icon' => '',
                            'link' => '',
                        ]
                    ]
                ],
                [
                    'label'=>'Advertisements',
                    'icon' => 'far fa-bullhorn',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'Organize',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Advertisements',
                            'icon' => '',
                            'link' => '',
                        ]
                    ]
                ]
            ]
        ],
        [
            'tittle'=>'SETTING & SECURITY',
            'items'=>[
                [
                    'label'=>'Users',
                    'icon' => 'far fa-user-lock',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'Role',
                            'icon' => '',
                            'link' => '/role'
                        ],
                        [
                            'label'=>'Permission',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Users',
                            'icon' => '',
                            'link' => '',
                        ]

                    ]
                ],
                [
                    'label'=>'Setting',
                    'icon' => 'far fa-users-cog',
                    'link' => '',
                    'hasChild'=>true,
                    'child'=>[
                        [
                            'label'=>'General',
                            'icon' => '',
                            'link' => '',
                        ],
                        [
                            'label'=>'Setting',
                            'icon' => '',
                            'link' => '',
                        ]
                    ]
                ]
            ]
        ]
    ]
];
