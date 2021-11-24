<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
    
        'super_admin'=>[

            'adverts'=>'c,r,u,d',
            'cookings'=>'c,r,u,d',
            'cuttings'=>'c,r,u,d',
            'faqs'=>'c,r,u,d',
            'spices'=>'c,r,u,d',
            'teams'=>'c,r,u,d',
            'spices'=>'c,r,u,d',
            'wrappings'=>'c,r,u,d',
            'users'=>'c,r,u,d',
            'opinions'=>'c,r,u,d',
            'categories'=>'c,r,u,d',
            'products'=>'c,r,u,d',
            'offers'=>'c,r,u,d',
            'cities'=>'c,r,u,d',
            'countries'=>'c,r,u,d',
            'banners'=>'c,r,u,d',
            'admins'=>'c,r,u,d',
            'roles'=>'c,r,u,d',
            'settings' => 'r,u',
            'abouts' => 'r,u',
            
        ]

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
