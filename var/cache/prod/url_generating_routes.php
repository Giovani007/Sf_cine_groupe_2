<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'activer' => [['id'], ['_controller' => 'App\\Controller\\Admin\\FilmCrudController::sommeilFilm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sommeilFilm']], [], []],
    'users_data_download' => [[], ['_controller' => 'App\\Controller\\Admin\\UserCrudController::usersDataDownload'], [], [['text', '/users/data/download']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];