<?php
include 'public/../../Plant.php';
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
?>
<section class="container">
<?php
foreach($plantArray as $laPlante){?>
    <div class="card" class="col" style="width: 18rem;" >
    <div class="card-body">
    <img class="card-img-top" src="<?=$laPlante->getImgUrl() ?>" alt="Card image cap">
    <h5 class="card-title"><?php echo( $laPlante->getName()) ?> </h5>
    <h6 class="card-subtitle mb-2 text-muted"> <?php echo( $laPlante->getScientificName()) ?> </h6>
    <p class="card-text"> <?php echo( $laPlante->getDescription()) ?> </p>

    </div>
    </div>


<?php }
?>
</section>
