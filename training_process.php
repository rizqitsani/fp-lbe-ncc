<?php

  require_once './functions/config.php';

  if(isset($_POST['add-button'])) {

    $pokemon_id = htmlspecialchars($_POST["pokemon_id"]);
    $ev_yield = htmlspecialchars($_POST["ev_yield"]);
    $catch_rate = htmlspecialchars($_POST["catch_rate"]);
    $base_friendship = htmlspecialchars($_POST["base_friendship"]);
    $base_exp = htmlspecialchars($_POST["base_exp"]);
    $growth_rate = htmlspecialchars($_POST["growth_rate"]);

    mysqli_query($db, "INSERT INTO training VALUES ('', '$ev_yield', '$catch_rate', '$base_friendship', '$base_exp', '$growth_rate', '$pokemon_id') ;");

    // Redirect
    if(mysqli_affected_rows($db)){
      header("Location:./pokemon_details_page.php?id=".$pokemon_id);
    }

  }

  if(isset($_POST['edit-button'])) {

    $id = $_GET["id"];
    
    $pokemon_id = htmlspecialchars($_POST["pokemon_id"]);
    $ev_yield = htmlspecialchars($_POST["ev_yield"]);
    $catch_rate = htmlspecialchars($_POST["catch_rate"]);
    $base_friendship = htmlspecialchars($_POST["base_friendship"]);
    $base_exp = htmlspecialchars($_POST["base_exp"]);
    $growth_rate = htmlspecialchars($_POST["growth_rate"]);

    mysqli_query($db, "UPDATE training SET ev_yield='$ev_yield', catch_rate='$catch_rate', base_friendship='$base_friendship', base_exp='$base_exp', growth_rate='$growth_rate' WHERE t_id='$id';");

    header("Location:./pokemon_details_page.php?id=".$pokemon_id);

  }
  
  if(isset($_POST['delete-button'])) {

    $id = $_GET["id"];

    $pokemon_id = htmlspecialchars($_POST["pokemon_id"]);
    mysqli_query($db, "DELETE FROM training WHERE t_id = '$id';");

    header("Location:./pokemon_details_page.php?id=".$pokemon_id);

  }