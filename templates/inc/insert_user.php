<?php
include_once 'db_connection.php';

// Taking values from the form data
$first_name =  $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

// création de la requête
$newUser = $mysqlConnection->prepare('INSERT INTO user VALUES ("$first_name",
                         "$last_name", "$email", "$password")');

// ensuite on exécute
$newUser->execute();
