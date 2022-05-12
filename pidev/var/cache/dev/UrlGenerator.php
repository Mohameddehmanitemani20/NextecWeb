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
    'app_article_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article/']], [], []],
    'app_article_new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/article/new']], [], []],
    'app_article_show' => [['idarticle'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'idarticle'], ['text', '/article']], [], []],
    'app_article_edit' => [['idarticle'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idarticle'], ['text', '/article']], [], []],
    'app_article_delete' => [['idarticle'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'idarticle'], ['text', '/article']], [], []],
    'app_avis_index' => [[], ['_controller' => 'App\\Controller\\AvisController::index'], [], [['text', '/avis/']], [], []],
    'app_avis_new' => [[], ['_controller' => 'App\\Controller\\AvisController::new'], [], [['text', '/avis/new']], [], []],
    'app_avis_show' => [['idAvis'], ['_controller' => 'App\\Controller\\AvisController::show'], [], [['variable', '/', '[^/]++', 'idAvis'], ['text', '/avis']], [], []],
    'app_avis_edit' => [['idAvis'], ['_controller' => 'App\\Controller\\AvisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idAvis'], ['text', '/avis']], [], []],
    'app_avis_delete' => [['idAvis'], ['_controller' => 'App\\Controller\\AvisController::delete'], [], [['variable', '/', '[^/]++', 'idAvis'], ['text', '/avis']], [], []],
    'app_equipe_index' => [[], ['_controller' => 'App\\Controller\\EquipeController::index'], [], [['text', '/equipe/']], [], []],
    'app_equipe_new' => [[], ['_controller' => 'App\\Controller\\EquipeController::new'], [], [['text', '/equipe/new']], [], []],
    'app_equipe_show' => [['idEquipe'], ['_controller' => 'App\\Controller\\EquipeController::show'], [], [['variable', '/', '[^/]++', 'idEquipe'], ['text', '/equipe']], [], []],
    'app_equipe_edit' => [['idEquipe'], ['_controller' => 'App\\Controller\\EquipeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idEquipe'], ['text', '/equipe']], [], []],
    'app_equipe_delete' => [['idEquipe'], ['_controller' => 'App\\Controller\\EquipeController::delete'], [], [['variable', '/', '[^/]++', 'idEquipe'], ['text', '/equipe']], [], []],
    'app_invitation_index' => [[], ['_controller' => 'App\\Controller\\InvitationController::index'], [], [['text', '/invitation/']], [], []],
    'app_invitation_new' => [[], ['_controller' => 'App\\Controller\\InvitationController::new'], [], [['text', '/invitation/new']], [], []],
    'app_invitation_show' => [['idInvitation'], ['_controller' => 'App\\Controller\\InvitationController::show'], [], [['variable', '/', '[^/]++', 'idInvitation'], ['text', '/invitation']], [], []],
    'app_invitation_edit' => [['idInvitation'], ['_controller' => 'App\\Controller\\InvitationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idInvitation'], ['text', '/invitation']], [], []],
    'app_invitation_delete' => [['idInvitation'], ['_controller' => 'App\\Controller\\InvitationController::delete'], [], [['variable', '/', '[^/]++', 'idInvitation'], ['text', '/invitation']], [], []],
    'app_reponse_index' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse/']], [], []],
    'app_reponse_new' => [[], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['text', '/reponse/new']], [], []],
    'app_reponse_show' => [['idReponse'], ['_controller' => 'App\\Controller\\ReponseController::show'], [], [['variable', '/', '[^/]++', 'idReponse'], ['text', '/reponse']], [], []],
    'app_reponse_edit' => [['idReponse'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idReponse'], ['text', '/reponse']], [], []],
    'app_reponse_delete' => [['idReponse'], ['_controller' => 'App\\Controller\\ReponseController::delete'], [], [['variable', '/', '[^/]++', 'idReponse'], ['text', '/reponse']], [], []],
];