<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/appointment' => [[['_route' => 'appointment_index', '_controller' => 'App\\Controller\\AppointmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/appointment/new' => [[['_route' => 'appointment_new', '_controller' => 'App\\Controller\\AppointmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/customer' => [[['_route' => 'customer_index', '_controller' => 'App\\Controller\\CustomerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/customer/new' => [[['_route' => 'customer_new', '_controller' => 'App\\Controller\\CustomerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/place' => [[['_route' => 'place_index', '_controller' => 'App\\Controller\\PlaceController::index'], null, ['POST' => 0, 'GET' => 1], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/appointment/([^/]++)(?'
                    .'|/edit(*:198)'
                    .'|(*:206)'
                .')'
                .'|/customer/([^/]++)(?'
                    .'|(*:236)'
                    .'|/edit(*:249)'
                    .'|(*:257)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'appointment_edit', '_controller' => 'App\\Controller\\AppointmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [[['_route' => 'appointment_delete', '_controller' => 'App\\Controller\\AppointmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        236 => [[['_route' => 'customer_show', '_controller' => 'App\\Controller\\CustomerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'customer_edit', '_controller' => 'App\\Controller\\CustomerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [
            [['_route' => 'customer_delete', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
