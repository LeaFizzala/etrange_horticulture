<?php
include 'Plant.php';
include_once 'db_connection.php';




?>
    <!-- Puis on l'exécute et on récupère les données sous forme de tableau-->
<?php
if (!empty($plants)) {
    $plantList = $plants;
}


// déclaration d'un tableau pour ranger les plantes
$plantArray = array();

foreach ($plants as $plant){
    $thePlant = new Plant($plant['plant_name'],
        $plant['scientific_name'],
        $plant['description'],
        $plant['img_url']);
    //ajout des éléments au tableau de plantes
    array_push($plantArray,$thePlant);
}


foreach($plantArray as $laPlante){
    echo('<div class="card">');
    echo('<div class="card-body">');
    echo('<img class="card-img-top" src="$laPlante->getImgUrl()" alt="Card image cap">');
    echo('<h5 class="card-title">' . $laPlante->getName() . '</h5>');
    echo('<h6 class="card-subtitle mb-2 text-muted">' . $laPlante->getScientificName() . '</h6>');
    echo('<p class="card-text">' . $laPlante->getDescription() . '</p>');

    echo('</div>');
    echo('</div>');


}

?>

