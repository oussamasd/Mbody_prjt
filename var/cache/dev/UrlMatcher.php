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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/adminJson' => [[['_route' => 'admin_Json', '_controller' => 'App\\Controller\\AdminController::afficherJson'], null, null, null, false, false, null]],
        '/mobile' => [[['_route' => 'app_mobile', '_controller' => 'App\\Controller\\AppMobileController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginFormController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginFormController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\LoginFormController::oubliPass'], null, null, null, false, false, null]],
        '/profile/user' => [[['_route' => 'app_profile_user', '_controller' => 'App\\Controller\\ProfileUserController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/ajouterUserJ' => [[['_route' => 'ajouterUserJ', '_controller' => 'App\\Controller\\RegistrationController::SignupAction'], null, null, null, false, false, null]],
        '/Signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\RegistrationController::signinAction'], null, null, null, false, false, null]],
        '/user/getPasswordByEmail' => [[['_route' => 'app_password', '_controller' => 'App\\Controller\\RegistrationController::getPassswordByEmail'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|modifier/([^/]++)(*:199)'
                        .'|([^/]++)(*:215)'
                    .')'
                    .'|ctivation/([^/]++)(*:242)'
                .')'
                .'|/supprimerUserJson/([^/]++)(*:278)'
                .'|/reset_pass/([^/]++)(*:306)'
                .'|/test/profileuser/([^/]++)(*:340)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'modifierU', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'supprimerU', '_controller' => 'App\\Controller\\RegistrationController::supprimer'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\RegistrationController::activation'], ['token'], null, null, false, true, null]],
        278 => [[['_route' => 'supprimerUs_Json', '_controller' => 'App\\Controller\\AdminController::supprimerJson'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\LoginFormController::resetPassword'], ['token'], null, null, false, true, null]],
        340 => [
            [['_route' => 'profileuser', '_controller' => 'App\\Controller\\TestController::profileuser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
