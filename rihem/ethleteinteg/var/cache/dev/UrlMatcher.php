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
        '/categorie' => [
            [['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'categorie', '_controller' => 'FrameworkBundle:Template:template', 'template' => 'show.html.twig'], null, null, null, false, false, null],
        ],
        '/categorie/catJSON' => [[['_route' => 'catJSON', '_controller' => 'App\\Controller\\CategorieController::categJSON'], null, null, null, false, false, null]],
        '/categorie/addJSON' => [[['_route' => 'addJSON', '_controller' => 'App\\Controller\\CategorieController::AddFormationJSON'], null, null, null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [
            [['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'commande', '_controller' => 'FrameworkBundle:Template:template', 'template' => 'show.html.twig'], null, null, null, false, false, null],
        ],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fournisseur' => [
            [['_route' => 'app_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'fournisseur', '_controller' => 'FrameworkBundle:Template:template', 'template' => 'show.html.twig'], null, null, null, false, false, null],
        ],
        '/fournisseur/new' => [[['_route' => 'app_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit' => [
            [['_route' => 'article_par_cat', '_controller' => 'App\\Controller\\ProduitController::Filtrer'], null, null, null, true, false, null],
            [['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, true, false, null],
            [['_route' => 'produit', '_controller' => 'FrameworkBundle:Template:template', 'template' => 'show.html.twig'], null, null, null, false, false, null],
        ],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/raison' => [
            [['_route' => 'app_raison_index', '_controller' => 'App\\Controller\\RaisonController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'raison', '_controller' => 'FrameworkBundle:Template:template', 'template' => 'show.html.twig'], null, null, null, false, false, null],
        ],
        '/raison/new' => [[['_route' => 'app_raison_new', '_controller' => 'App\\Controller\\RaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/count' => [[['_route' => 'count', '_controller' => 'App\\Controller\\ReclamationController::nombreRec'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [
            [['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'reclamation', '_controller' => 'FrameworkBundle:Template:template', 'template' => 'show.html.twig'], null, null, null, false, false, null],
        ],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/c(?'
                    .'|ategorie/(?'
                        .'|updateJSON/([^/]++)(*:205)'
                        .'|deletecatJSON/([^/]++)(*:235)'
                        .'|([^/]++)(?'
                            .'|(*:254)'
                            .'|/edit(*:267)'
                            .'|(*:275)'
                        .')'
                    .')'
                    .'|ommande/([^/]++)(?'
                        .'|(*:304)'
                        .'|/edit(*:317)'
                        .'|(*:325)'
                    .')'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:359)'
                    .'|/edit(*:372)'
                    .'|(*:380)'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:409)'
                    .'|/edit(*:422)'
                    .'|(*:430)'
                .')'
                .'|/r(?'
                    .'|aison/([^/]++)(?'
                        .'|(*:461)'
                        .'|/edit(*:474)'
                        .'|(*:482)'
                    .')'
                    .'|eclamation/([^/]++)(?'
                        .'|(*:513)'
                        .'|/edit(*:526)'
                        .'|(*:534)'
                    .')'
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
        205 => [[['_route' => 'updateJSON', '_controller' => 'App\\Controller\\CategorieController::updateFormationJSON'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'deletecatJSON', '_controller' => 'App\\Controller\\CategorieController::deleteJSON'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['idcateg'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['idcateg'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['idcateg'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['idcom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['idcom'], ['POST' => 0], null, false, true, null]],
        359 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['idf'], ['GET' => 0], null, false, true, null]],
        372 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['idf'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        380 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['idf'], ['POST' => 0], null, false, true, null]],
        409 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idp'], ['GET' => 0], null, false, true, null]],
        422 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        430 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idp'], ['POST' => 0], null, false, true, null]],
        461 => [[['_route' => 'app_raison_show', '_controller' => 'App\\Controller\\RaisonController::show'], ['idraison'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'app_raison_edit', '_controller' => 'App\\Controller\\RaisonController::edit'], ['idraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        482 => [[['_route' => 'app_raison_delete', '_controller' => 'App\\Controller\\RaisonController::delete'], ['idraison'], ['POST' => 0], null, false, true, null]],
        513 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idr'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idr'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [
            [['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idr'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
