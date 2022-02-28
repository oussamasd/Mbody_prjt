<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'abonnement_index' => [[], ['_controller' => 'App\\Controller\\AbonnementController::index'], [], [['text', '/abonnement/']], [], []],
    'abonnement_new' => [[], ['_controller' => 'App\\Controller\\AbonnementController::new'], [], [['text', '/abonnement/new']], [], []],
    'abonnement_show' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/abonnement']], [], []],
    'abonnement_edit' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/abonnement']], [], []],
    'abonnement_delete' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/abonnement']], [], []],
    'ck' => [[], ['_controller' => 'App\\Controller\\AbonnementController::afficher'], [], [['text', '/abonnement/abon/back']], [], []],
    'abonnement_front' => [[], ['_controller' => 'App\\Controller\\AbonnementController::index1'], [], [['text', '/abonnement/frontabon']], [], []],
    'abonnement_index10' => [[], ['_controller' => 'App\\Controller\\AbonnementController::index10'], [], [['text', '/abonnement/mobile/json/abonnement']], [], []],
    'sortname' => [[], ['_controller' => 'App\\Controller\\AbonnementController::triname'], [], [['text', '/abonnement/abon/back']], [], []],
    'offre_index' => [[], ['_controller' => 'App\\Controller\\OffreController::index'], [], [['text', '/offre/']], [], []],
    'offre_new' => [[], ['_controller' => 'App\\Controller\\OffreController::new'], [], [['text', '/offre/new']], [], []],
    'offre_show' => [['id'], ['_controller' => 'App\\Controller\\OffreController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/offre']], [], []],
    'offre_edit' => [['id'], ['_controller' => 'App\\Controller\\OffreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/offre']], [], []],
    'offre_delete' => [['id'], ['_controller' => 'App\\Controller\\OffreController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/offre']], [], []],
    'offre_front' => [[], ['_controller' => 'App\\Controller\\OffreController::afficher'], [], [['text', '/offre/off/front']], [], []],
];
