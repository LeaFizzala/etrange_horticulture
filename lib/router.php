<?php

require dirname(__DIR__) . '/config/routes.php';

// récupère toutes les clés du tableau ROUTES avec la fonction array_keys()

$availableRouteNames = array_keys(ROUTES);

//On vérifie si un paramètre $_GET['page'] est bien présent dans l'URL
// et si ce dernier est bien défini dans la liste des routes
if (isset($_GET['page']) && in_array($_GET['page'], $availableRouteNames)) {

    // si oui, on récupère les infos de la route avec clés controller et method
    $route= ROUTES[$_GET['page']]; // la route issue de la constante

    $controller = new $route['controller'];
    $controller->{$route['method']}();
}