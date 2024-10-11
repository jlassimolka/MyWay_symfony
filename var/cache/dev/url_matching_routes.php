<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/affichemoyen' => [[['_route' => 'app_affichemoyen', '_controller' => 'App\\Controller\\AffichemoyenController::index'], null, null, null, false, false, null]],
        '/rechercher' => [[['_route' => 'app_affichemoyen_rechercher', '_controller' => 'App\\Controller\\AffichemoyenController::rechercher'], null, null, null, false, false, null]],
        '/api/contrat' => [[['_route' => 'app_api_contrat_index', '_controller' => 'App\\Controller\\ApiContractController::index'], null, ['GET' => 0], null, true, false, null]],
        '/api/location' => [[['_route' => 'app_api_location_index', '_controller' => 'App\\Controller\\ApiLocationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chart2' => [[['_route' => 'app_chart2', '_controller' => 'App\\Controller\\Chart2Controller::index'], null, null, null, false, false, null]],
        '/chart' => [[['_route' => 'chart', '_controller' => 'App\\Controller\\ChartController::index'], null, null, null, false, false, null]],
        '/chauffeur' => [[['_route' => 'app_chauffeur_index', '_controller' => 'App\\Controller\\ChauffeurController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/chauffeur/new' => [[['_route' => 'app_chauffeur_new', '_controller' => 'App\\Controller\\ChauffeurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/continufront' => [[['_route' => 'app_continufront', '_controller' => 'App\\Controller\\ContinufrontController::index'], null, null, null, false, false, null]],
        '/location/contrat' => [[['_route' => 'app_contrat_index', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, true, false, null]],
        '/location/contrat/new' => [[['_route' => 'app_contrat_new', '_controller' => 'App\\Controller\\ContratController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/chauffeur' => [[['_route' => 'app_front_chauffeur', '_controller' => 'App\\Controller\\FrontChauffeurController::noteChauffeur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/front/guide' => [[['_route' => 'app_front_guide', '_controller' => 'App\\Controller\\FrontGuideController::noteGuide'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/guide' => [[['_route' => 'app_guide_index', '_controller' => 'App\\Controller\\GuideController::index'], null, ['GET' => 0], null, true, false, null]],
        '/guide/new' => [[['_route' => 'app_guide_new', '_controller' => 'App\\Controller\\GuideController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/homeadmin' => [[['_route' => 'app_homeadmin', '_controller' => 'App\\Controller\\HomeadminController::index'], null, null, null, false, false, null]],
        '/ligne' => [[['_route' => 'app_ligne_index', '_controller' => 'App\\Controller\\LigneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/new' => [[['_route' => 'app_ligne_new', '_controller' => 'App\\Controller\\LigneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/location' => [[['_route' => 'app_location_index', '_controller' => 'App\\Controller\\LocationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/location/new' => [[['_route' => 'app_location_new', '_controller' => 'App\\Controller\\LocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/location/reservation/calendar' => [[['_route' => 'app_location_calendar', '_controller' => 'App\\Controller\\LocationController::calendar'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/moyentp' => [[['_route' => 'app_moyentp_index', '_controller' => 'App\\Controller\\MoyentpController::index'], null, ['GET' => 0], null, true, false, null]],
        '/moyentp/new' => [[['_route' => 'app_moyentp_new', '_controller' => 'App\\Controller\\MoyentpController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/moyentp/search/matricule' => [[['_route' => 'search_matricule', '_controller' => 'App\\Controller\\MoyentpController::searchMatricule'], null, ['POST' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/reclamation/recherche' => [[['_route' => 'app_reclamation_recherche', '_controller' => 'App\\Controller\\ReclamationController::recherche'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'registration_confirmation_route', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/location' => [[['_route' => 'app_reservation_location_index', '_controller' => 'App\\Controller\\ReservationLocationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|ffichemoyen/([^/]++)(*:32)'
                    .'|pi/(?'
                        .'|contrat/(?'
                            .'|([^/]++)(*:64)'
                            .'|create(*:77)'
                            .'|([^/]++)/(?'
                                .'|edit(*:100)'
                                .'|delete(*:114)'
                            .')'
                        .')'
                        .'|location/(?'
                            .'|([^/]++)(*:144)'
                            .'|create(*:158)'
                            .'|([^/]++)/delete(*:181)'
                        .')'
                    .')'
                .')'
                .'|/chauffeur/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|show(*:225)'
                            .'|edit(*:237)'
                        .')'
                        .'|(*:246)'
                    .')'
                    .'|pdf(*:258)'
                    .'|search(*:272)'
                .')'
                .'|/l(?'
                    .'|ocation/(?'
                        .'|contrat/([^/]++)(?'
                            .'|(*:316)'
                            .'|/edit(*:329)'
                            .'|(*:337)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:357)'
                            .'|/(?'
                                .'|edit(*:373)'
                                .'|pdf(*:384)'
                            .')'
                            .'|(*:393)'
                        .')'
                    .')'
                    .'|igne/([^/]++)(?'
                        .'|(*:419)'
                        .'|/edit(*:432)'
                        .'|(*:440)'
                    .')'
                .')'
                .'|/guide/(?'
                    .'|guide/([^/]++)(*:474)'
                    .'|([^/]++)(?'
                        .'|/edit(*:498)'
                        .'|(*:506)'
                    .')'
                    .'|s(?'
                        .'|tats(*:523)'
                        .'|earch(*:536)'
                    .')'
                    .'|pdf(*:548)'
                .')'
                .'|/moyentp/([^/]++)(?'
                    .'|(*:577)'
                    .'|/edit(*:590)'
                    .'|(*:598)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:634)'
                        .'|/edit(*:647)'
                        .'|(*:655)'
                    .')'
                    .'|ponse/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:688)'
                            .'|edit(*:700)'
                        .')'
                        .'|(*:709)'
                    .')'
                    .'|se(?'
                        .'|rvation/location/([^/]++)(*:748)'
                        .'|t\\-password/reset(?:/([^/]++))?(*:787)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:814)'
                    .'|/(?'
                        .'|edit(*:830)'
                        .'|disable(*:845)'
                        .'|p(?'
                            .'|rivilege(*:865)'
                            .'|df(*:875)'
                        .')'
                    .')'
                    .'|(*:885)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:925)'
                    .'|wdt/([^/]++)(*:945)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:991)'
                            .'|router(*:1005)'
                            .'|exception(?'
                                .'|(*:1026)'
                                .'|\\.css(*:1040)'
                            .')'
                        .')'
                        .'|(*:1051)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_affichemoyen_details', '_controller' => 'App\\Controller\\AffichemoyenController::details'], ['id'], null, null, false, true, null]],
        64 => [[['_route' => 'app_api_contrat_show', '_controller' => 'App\\Controller\\ApiContractController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'api_contrat_create', '_controller' => 'App\\Controller\\ApiContractController::create'], [], ['POST' => 0], null, false, false, null]],
        100 => [[['_route' => 'api_location_update', '_controller' => 'App\\Controller\\ApiContractController::update'], ['id'], ['PUT' => 0], null, false, false, null]],
        114 => [[['_route' => 'api_location_delete', '_controller' => 'App\\Controller\\ApiContractController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        144 => [[['_route' => 'app_api_location_show', '_controller' => 'App\\Controller\\ApiLocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        158 => [[['_route' => 'api_location_create', '_controller' => 'App\\Controller\\ApiLocationController::create'], [], ['POST' => 0], null, false, false, null]],
        181 => [[['_route' => 'app_apilocation_delete', '_controller' => 'App\\Controller\\ApiLocationController::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        225 => [[['_route' => 'app_chauffeur_show', '_controller' => 'App\\Controller\\ChauffeurController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        237 => [[['_route' => 'app_chauffeur_edit', '_controller' => 'App\\Controller\\ChauffeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'app_chauffeur_delete', '_controller' => 'App\\Controller\\ChauffeurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_chauffeur_pdf', '_controller' => 'App\\Controller\\ChauffeurController::pdf'], [], null, null, false, false, null]],
        272 => [[['_route' => 'app_chauffeur_search', '_controller' => 'App\\Controller\\ChauffeurController::search'], [], ['GET' => 0], null, false, false, null]],
        316 => [[['_route' => 'app_contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'app_contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        357 => [[['_route' => 'app_location_show', '_controller' => 'App\\Controller\\LocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        373 => [[['_route' => 'app_location_edit', '_controller' => 'App\\Controller\\LocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        384 => [[['_route' => 'app_location_pdf', '_controller' => 'App\\Controller\\LocationController::createPDF'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'app_location_delete', '_controller' => 'App\\Controller\\LocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_ligne_show', '_controller' => 'App\\Controller\\LigneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'app_ligne_edit', '_controller' => 'App\\Controller\\LigneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'app_ligne_delete', '_controller' => 'App\\Controller\\LigneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        474 => [[['_route' => 'app_guide_show', '_controller' => 'App\\Controller\\GuideController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'app_guide_edit', '_controller' => 'App\\Controller\\GuideController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        506 => [[['_route' => 'app_guide_delete', '_controller' => 'App\\Controller\\GuideController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        523 => [[['_route' => 'app_guide_stats', '_controller' => 'App\\Controller\\GuideController::stats'], [], null, null, false, false, null]],
        536 => [[['_route' => 'app_guide_search', '_controller' => 'App\\Controller\\GuideController::search'], [], ['GET' => 0], null, false, false, null]],
        548 => [[['_route' => 'app_guide_pdf', '_controller' => 'App\\Controller\\GuideController::pdf'], [], null, null, false, false, null]],
        577 => [[['_route' => 'app_moyentp_show', '_controller' => 'App\\Controller\\MoyentpController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        590 => [[['_route' => 'app_moyentp_edit', '_controller' => 'App\\Controller\\MoyentpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        598 => [[['_route' => 'app_moyentp_delete', '_controller' => 'App\\Controller\\MoyentpController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        634 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        647 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        655 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        688 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        700 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        709 => [
            [['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        748 => [[['_route' => 'app_reservation_update', '_controller' => 'App\\Controller\\ReservationLocationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        787 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        814 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        830 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        845 => [[['_route' => 'app_user_disable', '_controller' => 'App\\Controller\\UserController::disable'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        865 => [[['_route' => 'app_user_role', '_controller' => 'App\\Controller\\UserController::role'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        875 => [[['_route' => 'app_user_pdf', '_controller' => 'App\\Controller\\UserController::createPdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        885 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        925 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        945 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        991 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1005 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1026 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1040 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1051 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
