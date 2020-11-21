<?php

  require_once './functions/config.php';

  if(isset($_POST["insert_main"])) {
    $national_no = htmlspecialchars($_POST["national_no"]);
    $name = htmlspecialchars($_POST["name"]);
    $type = htmlspecialchars($_POST["type"]);
    $species = htmlspecialchars($_POST["species"]);
    $height = htmlspecialchars($_POST["height"]);
    $weight = htmlspecialchars($_POST["weight"]);
    $abilities = htmlspecialchars($_POST["abilities"]);
    $health_point = htmlspecialchars($_POST["health_point"]);
    $attack = htmlspecialchars($_POST["attack"]);
    $defense = htmlspecialchars($_POST["defense"]);
    $speed = htmlspecialchars($_POST["speed"]);
    $speed_attack = htmlspecialchars($_POST["speed_attack"]);
    $speed_defense = htmlspecialchars($_POST["speed_defense"]);

    mysqli_query($db, "INSERT INTO pokemon VALUES ('', '$national_no', '$name', '$type', '$species', '$height', '$weight'
    , '$abilities', '$health_point', '$attack', '$defense', '$speed', '$speed_attack', '$speed_defense') ;");

    if(mysqli_affected_rows($db)){
      header('Location: ./index.php');
    }
  }