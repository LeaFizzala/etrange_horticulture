<?php

/*
 * @param : controller : le nom de classe de contrôleur à instancier (ainsi que son namespace)
 * @param : method :  la méthode à appeler depuis l'objet ainsi créé
 * */
const ROUTES = [
    'home' => [
        'controller' => App\controllers\MainController::class,
        'method' => 'home'
    ],
    'register' => [
        'controller' => App\controllers\MainController::class,
        'method' => 'register'
    ],
    'add_user' => [
        'controller' => App\controllers\UserController::class,
        'method' => 'addUser'
    ],
    'success' => [
        'controller' => App\controllers\UserController::class,
        'method' => 'success'
    ],
    'quizz' => [
        'controller' => App\controllers\QuizzController::class,
        'method' => 'displayQuizz'
    ],
    'results' => [
        'controller' => App\controllers\QuizzController::class,
        'method' => 'displayResults'
    ]
];