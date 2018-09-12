<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Strawberry591peaches', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

// $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES($pseudo, $message)');
// $req->execute(array(
// 	'pseudo' => $pseudo,
// 	'message' => $message
// 	));

$bdd->exec("INSERT INTO minichat(pseudo, message) VALUES('$pseudo', '$message')");

header('Location: minichat.php');

?>


<?php
// if (isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['message'])) {
//   echo htmlspecialchars($_POST['pseudo']) . ' : ' . htmlspecialchars($_POST['message']) . '</br>';
// }

?>
