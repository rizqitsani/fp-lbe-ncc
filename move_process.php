<?php

  require_once './functions/config.php';

  if(isset($_POST['add-button'])) {

    $pokemon_id = htmlspecialchars($_POST["pokemon_id"]);
    $id = htmlspecialchars($_POST["id"]);
    $name = htmlspecialchars($_POST["name"]);
    $type = htmlspecialchars($_POST["type"]);
    $cat = htmlspecialchars($_POST["cat"]);
    $power = htmlspecialchars($_POST["power"]);
    $acc = htmlspecialchars($_POST["acc"]);
    $pp = htmlspecialchars($_POST["pp"]);
    $effect = htmlspecialchars($_POST["effect"]);

    mysqli_query($db, "INSERT INTO moves VALUES ('$id', '$name', '$type', '$cat', '$power', '$acc', '$pp'
    , '$effect', '$pokemon_id') ;");

    // Redirect
    if(mysqli_affected_rows($db)){
      header("Location:./pokemon_details_page.php?id=".$pokemon_id);
    }
    
  }
    
  if(isset($_POST['edit-button'])) {
    
    $id = $_GET["id"];

    $pokemon_id = htmlspecialchars($_POST["pokemon_id"]);
    $name = htmlspecialchars($_POST["name"]);
    $type = htmlspecialchars($_POST["type"]);
    $cat = htmlspecialchars($_POST["cat"]);
    $power = htmlspecialchars($_POST["power"]);
    $acc = htmlspecialchars($_POST["acc"]);
    $pp = htmlspecialchars($_POST["pp"]);
    $effect = htmlspecialchars($_POST["effect"]);
    
    mysqli_query($db, "UPDATE moves SET name='$name', type='$type', cat='$cat', power='$power', acc='$acc', pp='$pp', effect='$effect' WHERE id='$id';");

    header("Location:./pokemon_details_page.php?id=".$pokemon_id);
    
  }
  
  if(isset($_POST['delete-button'])) {

    $id = $_GET["id"];

    $pokemon_id = htmlspecialchars($_POST["pokemon_id"]);
    mysqli_query($db, "DELETE FROM moves WHERE id = '$id';");

    header("Location:./pokemon_details_page.php?id=".$pokemon_id);

  }