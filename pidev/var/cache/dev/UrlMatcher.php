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
        '/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/new' => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipe/new' => [[['_route' => 'app_equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/invitation' => [[['_route' => 'app_invitation_index', '_controller' => 'App\\Controller\\InvitationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/invitation/new' => [[['_route' => 'app_invitation_new', '_controller' => 'App\\Controller\\InvitationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|rticle/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|vis/([^/]++)(?'
                        .'|(*:237)'
                        .'|/edit(*:250)'
                        .'|(*:258)'
                    .')'
                .')'
                .'|/equipe/([^/]++)(?'
                    .'|(*:287)'
                    .'|/edit(*:300)'
                    .'|(*:308)'
                .')'
                .'|/invitation/([^/]++)(?'
                    .'|(*:340)'
                    .'|/edit(*:353)'
                    .'|(*:361)'
                .')'
                .'|/reponse/([^/]++)(?'
                    .'|(*:390)'
                    .'|/edit(*:403)'
                    .'|(*:411)'
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
        192 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['idarticle'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['idarticle'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['idarticle'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['idAvis'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['idAvis'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['idAvis'], ['POST' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['idEquipe'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['idEquipe'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['idEquipe'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_invitation_show', '_controller' => 'App\\Controller\\InvitationController::show'], ['idInvitation'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_invitation_edit', '_controller' => 'App\\Controller\\InvitationController::edit'], ['idInvitation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [[['_route' => 'app_invitation_delete', '_controller' => 'App\\Controller\\InvitationController::delete'], ['idInvitation'], ['POST' => 0], null, false, true, null]],
        390 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idReponse'], ['GET' => 0], null, false, true, null]],
        403 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idReponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        411 => [
            [['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idReponse'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
