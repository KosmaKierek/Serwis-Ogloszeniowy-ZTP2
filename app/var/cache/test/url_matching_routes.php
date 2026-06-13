<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/advert' => [[['_route' => 'advert_index', '_controller' => 'App\\Controller\\AdvertController::index'], null, ['GET' => 0], null, false, false, null]],
        '/advert/create' => [[['_route' => 'advert_create', '_controller' => 'App\\Controller\\AdvertController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategoryController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_hello_index', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/changeEmail' => [[['_route' => 'changeEmail', '_controller' => 'App\\Controller\\SecurityController::changeEmail'], null, ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        '/changePassword' => [[['_route' => 'changePassword', '_controller' => 'App\\Controller\\SecurityController::changePassword'], null, ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tag/create' => [[['_route' => 'tag_create', '_controller' => 'App\\Controller\\TagController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/advert/(?'
                    .'|([1-9]\\d*)(*:28)'
                    .'|([1-9]\\d*)/edit(*:50)'
                    .'|([1-9]\\d*)/delete(*:74)'
                .')'
                .'|/category/(?'
                    .'|([1-9]\\d*)(*:105)'
                    .'|([1-9]\\d*)/edit(*:128)'
                    .'|([1-9]\\d*)/delete(*:153)'
                .')'
                .'|/tag/(?'
                    .'|([1-9]\\d*)(*:180)'
                    .'|([1-9]\\d*)/edit(*:203)'
                    .'|([1-9]\\d*)/delete(*:228)'
                .')'
                .'|/user/(?'
                    .'|([1-9]\\d*)(*:256)'
                    .'|([1-9]\\d*)/edit(*:279)'
                    .'|([1-9]\\d*)/delete(*:304)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'advert_show', '_controller' => 'App\\Controller\\AdvertController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'advert_edit', '_controller' => 'App\\Controller\\AdvertController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        74 => [[['_route' => 'advert_delete', '_controller' => 'App\\Controller\\AdvertController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        105 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        128 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        153 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        180 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        228 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        256 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        304 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
