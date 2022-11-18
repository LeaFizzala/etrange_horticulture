<?php
namespace Lib\Controller;
abstract class AbstractController
{
    protected function renderView(string $template,//le nom du templates HTML à retourner (requis)
                                  array $data = [] //tableau de donnée à transmettre au templates(opt.)
    ): string {
        $templatePath = dirname(__DIR__, 2) . '/' . $template;
        return require_once dirname(__DIR__, 2) . '/templates/layout.php';
    }

    protected function redirectToRoute(string $name, array $params = []): void {
        $uri = "?page=" . $name; //nom de la page actuelle
        // à laquelle on colle le param page suivi de la valeur de page passée en paramètre
        var_dump($_SERVER['SCRIPT_NAME']);
        if (!empty($params)) { // si il y a des paramètres à passer à l'URL GET
            $strParams = [];
            foreach ($params as $key => $val) { // on divise chaque couple clé/valeur et on l'encode en URL
                array_push($strParams, urlencode((string) $key) . '=' . urlencode((string) $val));
            }
            $uri .= '&' . implode('&', $strParams); // ensuite on concatène toutes ces valeurs
            // pour former une URL valide
        }

        header("Location: " . $uri); // redirige vers l'uri fabriquée avant
        // Type d'appel spécial, renvoie un en-tête au client et renvoie un statut REDIRECT au navigateur
        die;
    }
}