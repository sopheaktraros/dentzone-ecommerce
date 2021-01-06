<?php
return [
    'project_name' => 'Dent Zone',
    'version' => '1.0',
    'develop_by' => 'Camsolution Technology Company',
    'domain'=>[
        'primary' => env('APP_DOMAIN','dev.dentzone'),
        'sub_domain' => [
            'admins' => 'admin.'.env('APP_DOMAIN','dev.dentzone')
        ]
    ],
    'service' =>''
];
