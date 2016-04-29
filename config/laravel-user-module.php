<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General config
    |--------------------------------------------------------------------------
    */
    'activation_mail_blade'         => 'emails.activation',
    'date_format'                   => 'd.m.Y H:i:s',
    'app_name'                      => 'Laravel Modules',       // on some places
    'copyright_year'                => '2016',

    /*
    |--------------------------------------------------------------------------
    | URL config
    |--------------------------------------------------------------------------
    */
    'url' => [
        'login_route'               => 'login',                 // login url
        'logout_route'              => 'logout',                // logout url
        'register_route'            => 'register',              // register url
        'activate_route'            => 'account-activate',      // account activate url
        'forget_password_route'     => 'forget-password',       // forget password url
        'reset_password_route'      => 'reset-password',        // reset password url
        'user'                      => 'users',                 // users url
        'role'                      => 'roles',                 // users url
        'redirect_route'            => 'admin',                 // redirect dashboard route name after login
        'admin_url_prefix'          => 'admin'                  // admin dashboard url prefix
    ],

    /*
    |--------------------------------------------------------------------------
    | View config
    |--------------------------------------------------------------------------
    | dot notation of blade view path, its position on the /resources/views directory
    */
    'views' => [
        // all layouts default values
        'html_lang'                     => 'tr',
        'html_head' => [
            'content_type'              => 'text/html; charset=UTF-8',
            'charset'                   => 'utf-8',
            'default_title'             => 'Laravel User Module',   // default page title of all pages
            'meta_description'          => 'Laravel User Module package',
            'meta_author'               => 'Eren Mustafa ÖZDAL',
            'meta_keywords'             => 'laravel,user,module,package',
            'meta_robots'               => 'noindex,nofollow',
            'meta_googlebot'            => 'noindex,nofollow'
        ],
        // auth views
        'auth' => [
            'layout'                => 'laravel-user-module::layouts.auth',         // auth layout
            'login'                 => 'laravel-user-module::auth.login',           // get login view blade
            'register'              => 'laravel-user-module::auth.register',        // get register view blade
            'forget_password'       => 'laravel-user-module::auth.forget_password', // get forget password view blade
            'reset_password'        => 'laravel-user-module::auth.reset_password',   // get reset password view blade
        ],
        // user view
        'user' => [
            'layout'                => 'laravel-user-module::layouts.admin',        // user layout
            'index'                 => 'laravel-user-module::user.index',           // get user index view blade
            'create'                => 'laravel-user-module::user.create',          // get user create view blade
            'show'                  => 'laravel-user-module::user.show',            // get user show view blade
            'edit'                  => 'laravel-user-module::user.edit',            // get user edit view blade
        ],
        // role view
        'role' => [
            'layout'                => 'laravel-user-module::layouts.admin',        // role layout
            'index'                 => 'laravel-user-module::role.index',           // get role index view blade
            'create'                => 'laravel-user-module::role.create',          // get role create view blade
            'show'                  => 'laravel-user-module::role.show',            // get role show view blade
            'edit'                  => 'laravel-user-module::role.edit',            // get role edit view blade
        ],
        // email views
        'email' => [
            'activation'            => 'laravel-user-module::emails.activation',    // activation mail view blade
            'forget_password'       => 'laravel-user-module::emails.forget_password'// forget password mail view blade
        ]
    ]

];
