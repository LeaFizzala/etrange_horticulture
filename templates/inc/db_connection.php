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
<!-- on prépare d'abord la query-->
<?php
$plantList = $mysqlConnection->prepare('SELECT * FROM plants');
?>
<!-- Puis on l'exécute et on récupère les données sous forme de tableau-->
<?php
$plantList->execute();
global $plants;
$plants = $plantList->fetchAll();

?>
