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
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier2' => [[['_route' => 'cart_index2', '_controller' => 'App\\Controller\\CartController::index2'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/listp' => [[['_route' => 'categories_listp', '_controller' => 'App\\Controller\\CategoriesController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/categories/new' => [[['_route' => 'categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/back' => [
            [['_route' => 'produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'TrierParNom', '_controller' => 'App\\Controller\\ProduitsController::trier'], null, ['GET' => 0], null, false, false, null],
        ],
        '/produits/front' => [[['_route' => 'produits_index2', '_controller' => 'App\\Controller\\ProduitsController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/produits/new' => [[['_route' => 'produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/listp' => [[['_route' => 'produits_listp', '_controller' => 'App\\Controller\\ProduitsController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/reserve/p' => [[['_route' => 'reserve_p_index', '_controller' => 'App\\Controller\\ReservePController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reserve/p/new' => [[['_route' => 'reserve_p_new', '_controller' => 'App\\Controller\\ReservePController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/p(?'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:195)'
                        .'|remove/([^/]++)(*:218)'
                    .')'
                    .'|roduits/([^/]++)(?'
                        .'|(*:246)'
                        .'|/edit(*:259)'
                        .'|(*:267)'
                    .')'
                .')'
                .'|/categories/([^/]++)(?'
                    .'|(*:300)'
                    .'|/edit(*:313)'
                    .'|(*:321)'
                .')'
                .'|/reserve/p/([^/]++)(*:349)'
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
        195 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        300 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        321 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        349 => [
            [['_route' => 'reserve_p_show', '_controller' => 'App\\Controller\\ReservePController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
