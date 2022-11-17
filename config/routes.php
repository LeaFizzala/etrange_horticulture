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
];