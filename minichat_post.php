<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Strawberry591peaches', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$pseudo = addslashes($_POST['pseudo']);
$message = addslashes($_POST['message']);


$bdd->exec("INSERT INTO minichat(pseudo, message) VALUES('$pseudo', '$message')");

header('Location: index.php');

?>
