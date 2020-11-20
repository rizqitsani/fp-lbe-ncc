<?php

  require_once './functions/config.php';

  // !CREATE
  $id = $_GET["id"];
  $query_result = mysqli_query($db, "SELECT * FROM moves WHERE id = '$id';");
  $record = mysqli_fetch_assoc($query_result);

  // !READ
  if(isset($_POST["insert_moves"])) {
    $name = htmlspecialchars($_POST["name"]);
    $type = htmlspecialchars($_POST["type"]);
    $cat = htmlspecialchars($_POST["cat"]);
    $power = htmlspecialchars($_POST["power"]);
    $acc = htmlspecialchars($_POST["acc"]);
    $pp = htmlspecialchars($_POST["pp"]);
    $effect = htmlspecialchars($_POST["effect"]);

    mysqli_query($db, "INSERT INTO moves VALUES ('', '$name', '$type', '$cat', '$power', '$acc', '$pp'
    , '$effect') ;");

    // TODO Redirect
    if(mysqli_affected_rows($db)){
      header('Location: ./pokemon_main_info_form.php');
    }
  }
  
  // !UPDATE
  if(isset($_POST["update_moves"])) {
    $id = htmlspecialchars($_POST["id"]);
    $name = htmlspecialchars($_POST["name"]);
    $type = htmlspecialchars($_POST["type"]);
    $cat = htmlspecialchars($_POST["cat"]);
    $power = htmlspecialchars($_POST["power"]);
    $acc = htmlspecialchars($_POST["acc"]);
    $pp = htmlspecialchars($_POST["pp"]);
    $effect = htmlspecialchars($_POST["effect"]);

    mysqli_query($db, "UPDATE moves SET name='$name', type='$type', cat='$cat', power='$power', acc='$acc', pp='$pp', effect='$effect' WHERE id='$id';");

    // TODO Redirect
    // if(mysqli_affected_rows($db)){
    //   header('Location: ./pokemon_main_info_form.php');
    // }
  }

  // !DELETE
  if(isset($_GET["delete_moves"])) {
    $moves_id = $_GET["delete_moves"];
    mysqli_query($db, "DELETE FROM moves WHERE id = '$moves_id';");
    
    // TODO Redirect
    // header("Location: ./admin_books.php");
  }
  