<?php

  require_once './functions/config.php';

  if(isset($_POST['add-button'])) {

    $egg_groups = htmlspecialchars($_POST["egg_groups"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $egg_cycle = htmlspecialchars($_POST["egg_cycle"]);

    mysqli_query($db, "INSERT INTO breeding VALUES ('', '$egg_groups', '$gender', '$egg_cycle') ;");

    // Redirect
    if(mysqli_affected_rows($db)){
      header('Location: ./pokemon_details_page.php');
    }

  }

  if(isset($_POST['edit-button'])) {

    $id = $_GET["id"];
    
    $egg_groups = htmlspecialchars($_POST["egg_groups"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $egg_cycle = htmlspecialchars($_POST["egg_cycle"]);

    mysqli_query($db, "UPDATE breeding SET egg_groups='$egg_groups', gender='$gender', egg_cycle='$egg_cycle' WHERE b_id='$id';");

    header('Location: ./pokemon_details_page.php');

  }
  
  if(isset($_POST['delete-button'])) {

    $id = $_GET["id"];
    mysqli_query($db, "DELETE FROM breeding WHERE b_id = '$id';");

    header('Location: ./pokemon_details_page.php');

  }