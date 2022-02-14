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
        '/activity' => [[['_route' => 'activity', '_controller' => 'App\\Controller\\ActivityController::index'], null, null, null, false, false, null]],
        '/addActivity' => [[['_route' => 'activityAdd', '_controller' => 'App\\Controller\\ActivityController::add'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/addCategory' => [[['_route' => 'categoryAdd', '_controller' => 'App\\Controller\\CategoryController::add'], null, null, null, false, false, null]],
        '/exercice' => [[['_route' => 'exercice', '_controller' => 'App\\Controller\\ExerciceController::index'], null, null, null, false, false, null]],
        '/addExercice' => [[['_route' => 'exerciceAdd', '_controller' => 'App\\Controller\\ExerciceController::add'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/test/1' => [[['_route' => 'test1', '_controller' => 'App\\Controller\\TestController::index2'], null, null, null, false, false, null]],
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
                .'|/update(?'
                    .'|Activite/([^/]++)(*:196)'
                    .'|Exercice/([^/]++)(*:221)'
                .')'
                .'|/Delete(?'
                    .'|Activity/([^/]++)(*:257)'
                    .'|Exercice/([^/]++)(*:282)'
                .')'
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
        196 => [[['_route' => 'ActivityUpdate', '_controller' => 'App\\Controller\\ActivityController::updateActivite'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'ExerciceUpdate', '_controller' => 'App\\Controller\\ExerciceController::updateExercice'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'ActivityDelete', '_controller' => 'App\\Controller\\ActivityController::delete'], ['id'], null, null, false, true, null]],
        282 => [
            [['_route' => 'ExerciceDelete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
