<?php

// Création d'un objet connection de la classe PDO
// dans un bloc try/catch pour éviter l'affichage du mdp si souci
try{
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=strange_horticulture;charset=utf8',
        'root',
        ''
    );
}catch (Exception $e){
    die('Error : ' . $e->getMessage());
}

?>

