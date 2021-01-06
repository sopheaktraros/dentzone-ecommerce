<?php

return [

    /*
     * navigation type : 1=>Label, 2=>Main Navigation, 3=>Children of Navigation,
     *
     */

    'navigations'=>[
        //Main
        ['id'=>1,'name'=>'MAIN', 'slug'=>'main','icon'=>'','link'=>'','parent_id'=>null,'type'=>1,'active'=>1,'delete'=>0],
        ['id'=>2,'name'=>'Dashboard', 'slug'=>'dashboard','icon'=>'far fa-home','link'=>'/','parent_id'=>1,'type'=>2,'active'=>1,'delete'=>0],
        ['id'=>3,'name'=>'Navigations', 'slug'=>'navigations','icon'=>'far fa-file','link'=>'navigations','parent_id'=>1,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>4,'name'=>'Notification', 'slug'=>'notification','icon'=>'far fa-bell','link'=>'notification','parent'=>1,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>5,'name'=>'Locations', 'slug'=>'locations','icon'=>'far fa-location','link'=>'locations','parent'=>1,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>6,'name'=>'Comment', 'slug'=>'comment','icon'=>'far fa-comment','link'=>'comment','parent'=>1,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>7,'name'=>'Email', 'slug'=>'email','icon'=>'far fa-envelope','link'=>'email','parent'=>1,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>8,'name'=>'Slider', 'slug'=>'slider','icon'=>'far fa-sliders','link'=>'slider','parent'=>1,'type'=>2,'active'=>1,'delete'=>0],

//        //Ecommerce
//        ['id'=>8,'name'=>'ECOMMERCE', 'slug'=>'ecommerce','icon'=>'','link'=>'','parent'=>null,'type'=>1,'active'=>1,'delete'=>0],
//        //-Shop
//        ['id'=>9,'name'=>'Shops', 'slug'=>'shops','icon'=>'far fa-store','link'=>'','parent'=>7,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>10,'name'=>'Shops', 'slug'=>'shops','icon'=>'','link'=>'shops','parent'=>8,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>11,'name'=>'Commissions', 'slug'=>'commissions','icon'=>'','link'=>'commissions','parent'=>8,'type'=>3,'active'=>1,'delete'=>0],
//        //-Products
//        ['id'=>12,'name'=>'Products', 'slug'=>'products','icon'=>'far fa-tags','link'=>'','parent'=>7,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>13,'name'=>'Categories', 'slug'=>'categories','icon'=>'','link'=>'categories','parent'=>11,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>14,'name'=>'Brands', 'slug'=>'brands','icon'=>'','link'=>'brands','parent'=>11,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>15,'name'=>'Products', 'slug'=>'products','icon'=>'','link'=>'products','parent'=>11,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>16,'name'=>'Attributes', 'slug'=>'attributes','icon'=>'','link'=>'attributes','parent'=>11,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>17,'name'=>'Attribute Values', 'slug'=>'attributed_values','icon'=>'','link'=>'attribute_values','parent'=>11,'type'=>3,'active'=>1,'delete'=>0],
//        //-Customer
//        ['id'=>18,'name'=>'Customers', 'slug'=>'customers','icon'=>'far fa-users','link'=>'customers','parent'=>7,'type'=>2,'active'=>1,'delete'=>0],
//
//        //Pages & Blog
//        ['id'=>19,'name'=>'PAGES & BLOGS', 'slug'=>'pages_blogs','icon'=>'','link'=>'','parent'=>null,'type'=>1,'active'=>1,'delete'=>0],
//        //-Pages
//        ['id'=>20,'name'=>'Pages', 'slug'=>'pages','icon'=>'far fa-copy','link'=>'','parent'=>18,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>22,'name'=>'News', 'slug'=>'news','icon'=>'','link'=>'news','parent'=>19,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>22,'name'=>'Events', 'slug'=>'events','icon'=>'','link'=>'events','parent'=>19,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>23,'name'=>'Careers', 'slug'=>'careers','icon'=>'','link'=>'careers','parent'=>19,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>24,'name'=>'Articles', 'slug'=>'articles','icon'=>'','link'=>'articles','parent'=>19,'type'=>3,'active'=>1,'delete'=>0],
//
//        //-Blogs
//        ['id'=>25,'name'=>'BLogs', 'slug'=>'blogs','icon'=>'far fa-globe','link'=>'','parent'=>18,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>26,'name'=>'FAQ', 'slug'=>'f_a_q','icon'=>'','link'=>'f-a-q','parent'=>24,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>27,'name'=>'About Us', 'slug'=>'about_us','icon'=>'','link'=>'about-us','parent'=>24,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>27,'name'=>'Contact Us', 'slug'=>'contact_us','icon'=>'','link'=>'contact-us','parent'=>24,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>29,'name'=>'Privacy & Policy', 'slug'=>'privacy_policy','icon'=>'','link'=>'privacy-policy','parent'=>24,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>30,'name'=>'Term & Condition', 'slug'=>'term_condition','icon'=>'','link'=>'term-condition','parent'=>24,'type'=>3,'active'=>1,'delete'=>0],
//
//        //Service and Advertisement
//        ['id'=>31,'name'=>'SERVICES & ADVERTISEMENTS', 'slug'=>'service_advertisement','icon'=>'','link'=>'','parent'=>null,'type'=>1,'active'=>1,'delete'=>0],
//        //-Services
//        ['id'=>32,'name'=>'Services', 'slug'=>'services','icon'=>'far fa-first-aid','link'=>'','parent'=>30,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>33,'name'=>'Service Types', 'slug'=>'service_types','icon'=>'','link'=>'service-types','parent'=>31,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>34,'name'=>'Services', 'slug'=>'services','icon'=>'','link'=>'services','parent'=>31,'type'=>3,'active'=>1,'delete'=>0],
//
//        //-ADVERTISEMENTS
//        ['id'=>35,'name'=>'Advertisements', 'slug'=>'advertisement','icon'=>'far fa-bullhorn','link'=>'','parent'=>30,'type'=>2,'active'=>1,'delete'=>0],
//        ['id'=>36,'name'=>'Organizations', 'slug'=>'organizations','icon'=>'','link'=>'organizations','parent'=>31,'type'=>3,'active'=>1,'delete'=>0],
//        ['id'=>37,'name'=>'Advertisements', 'slug'=>'advertisements','icon'=>'','link'=>'advertisements','parent'=>31,'type'=>3,'active'=>1,'delete'=>0],
//
        //Setting and Security
        ['id'=>4,'name'=>'SETTING & SECURITY', 'slug'=>'main','icon'=>'','link'=>'','parent_id'=>null,'type'=>1,'active'=>1,'delete'=>0],
        //-User
        ['id'=>5,'name'=>'Users', 'slug'=>'users','icon'=>'far fa-users','link'=>'','parent_id'=>4,'type'=>2,'active'=>1,'delete'=>0],
        ['id'=>6,'name'=>'Roles', 'slug'=>'roles','icon'=>'','link'=>'roles','parent_id'=>5,'type'=>3,'active'=>1,'delete'=>0],
        ['id'=>7,'name'=>'Permissions', 'slug'=>'permissions','icon'=>'','link'=>'permissions','parent_id'=>5,'type'=>3,'active'=>1,'delete'=>0],
        ['id'=>8,'name'=>'Users', 'slug'=>'users','icon'=>'','link'=>'users','parent_id'=>5,'type'=>3,'active'=>1,'delete'=>0],

        //-Setting
        ['id'=>9,'name'=>'Setting', 'slug'=>'setting','icon'=>'far fa-users-cog','link'=>'','parent_id'=>4,'type'=>2,'active'=>1,'delete'=>0],
        ['id'=>10,'name'=>'General', 'slug'=>'general','icon'=>'','link'=>'general','parent_id'=>10,'type'=>3,'active'=>1,'delete'=>0],
        ['id'=>11,'name'=>'Setting', 'slug'=>'setting','icon'=>'','link'=>'setting','parent_id'=>10,'type'=>3,'active'=>1,'delete'=>0],

    ],

    'permissions'=>[
        ['name'=>'Dashboard','slug'=>'dashboard','active'=>1,'delete'=>0],
        ['name'=>'Navigations','slug'=>'navigations','active'=>1,'delete'=>0],
        ['name'=>'Roles','slug'=>'roles','active'=>1,'delete'=>0],
        ['name'=>'Permissions','slug'=>'permissions','active'=>1,'delete'=>0],
        ['name'=>'Users','slug'=>'users','active'=>1,'delete'=>0],
    ],
    'roles'=>[
        ['user_group_id'=>1,'name'=>'Root', 'slug'=>'root','description'=>'Who able to config and manage system','active'=>1,'delete'=>0],
        ['user_group_id'=>2,'name'=>'Admin', 'slug'=>'admin','description'=>'Who able to manage system','active'=>1,'delete'=>0],
        ['user_group_id'=>3,'name'=>'User', 'slug'=>'user','description'=>'Who able to use system','active'=>1,'delete'=>0],
        ['user_group_id'=>4,'name'=>'Guest', 'slug'=>'guest','description'=>'Who able to access the system','active'=>1,'delete'=>0]
    ],

    'user_group'=>[
        ['id'=>1,'name'=>'Super Admin', 'slug'=>'root','description'=>'Who able to config and manage system','active'=>1,'delete'=>0],
        ['id'=>2,'name'=>'Admin', 'slug'=>'admin','description'=>'Who able to manage system','active'=>1,'delete'=>0],
        ['id'=>3,'name'=>'System User', 'slug'=>'user','description'=>'Who able to use system','active'=>1,'delete'=>0],
        ['id'=>4,'name'=>'Guest', 'slug'=>'guest','description'=>'Who able to use system','active'=>1,'delete'=>0],
    ],

    'user'=>[
        ['id'=>1,'uuid'=>\Faker\Provider\Uuid::uuid(),'name'=>'Root','username'=>'root','email'=>'root@dentzon.com','password'=>'','create_by'=>0,'active'=>1,'delete'=>0],
        ['id'=>2,'uuid'=>\Faker\Provider\Uuid::uuid(),'name'=>'Admin','username'=>'admin','email'=>'admin@dentzon.com','password'=>'','create_by'=>0,'active'=>1,'delete'=>0],
        ['id'=>3,'uuid'=>\Faker\Provider\Uuid::uuid(),'name'=>'User','username'=>'user','email'=>'user@dentzon.com','password'=>'','create_by'=>0,'active'=>1,'delete'=>0],
    ],

    'user_roles'=>[
        ['user_id'=>1,'role_id'=>1],
        ['user_id'=>2,'role_id'=>2],
        ['user_id'=>3,'role_id'=>3]
    ],

    'role_has_permissions'=>[
        'root'=>[
            'dashboard'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'navigations'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'roles'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'permissions'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'users'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
        ],
        'admin'=>[
            'dashboard'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'navigations'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'roles'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'permissions'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
            'users'=>['create' => 1, 'read'=>1, 'update'=>1, 'delete'=>1],
        ],
    ],

    'user_has_permission'=>[
        ['user_id'=>1,'permission_id'=>1,'create'=>1,'update'=>1,'delete'=>1,'read'=>1],
        ['user_id'=>2,'permission_id'=>1,'create'=>1,'update'=>1,'delete'=>1,'read'=>1],
    ]

];
