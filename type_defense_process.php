<?php

  require_once './functions/config.php';

  if(isset($_POST['add-button'])) {

    $id = htmlspecialchars($_POST["id"]);
    $power = htmlspecialchars($_POST["power"]);
    $point = htmlspecialchars($_POST["point"]);

    mysqli_query($db, "INSERT INTO type_defense VALUES ('$id', '$power', '$point') ;");

    // Redirect
    if(mysqli_affected_rows($db)){
      header('Location: ./pokemon_details_page.php');
    }

  }

  if(isset($_POST['edit-button'])) {

    $id = $_GET["id"];
    
    $power = htmlspecialchars($_POST["power"]);
    $point = htmlspecialchars($_POST["point"]);

    mysqli_query($db, "UPDATE type_defense SET power='$power', point='$point' WHERE id='$id';");

    header('Location: ./pokemon_details_page.php');

  }
  
  if(isset($_POST['delete-button'])) {

    $id = $_GET["id"];
    mysqli_query($db, "DELETE FROM type_defense WHERE id = '$id';");

    header('Location: ./pokemon_details_page.php');

  }