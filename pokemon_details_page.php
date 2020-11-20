<?php
    include('pokemon_details_moves.php');
    include('pokemon_details_egg_moves.php');
    include('pokemon_details_breeding.php');
    include('pokemon_details_training.php');
    include('pokemon_details_type_defense.php');

require_once './functions/config.php';

    $id = $_GET["id"];

    $moves_count = mysqli_query($db,
    "SELECT count(moves.ID) as moves_count 
                                FROM moves 
                                where pokemon_id = {$id};");

    $base_stats_query = mysqli_query($db, "SELECT * FROM pokemon WHERE national_no='$id'");
    $moves_query = mysqli_query($db, "SELECT * FROM moves join pokemon on pokemon.id = moves.Pokemon_id where national_no = '$id' ;");
    $egg_moves_query = mysqli_query($db, "SELECT * FROM egg_moves WHERE pokemon_id='$id';");
    $breeding_query = mysqli_query($db, "SELECT * FROM breeding WHERE pokemon_id='$id';");
    $training_query = mysqli_query($db, "SELECT * FROM training WHERE pokemon_id='$id';");
    $type_defense_query = mysqli_query($db, "SELECT * FROM type_defense WHERE pokemon_id='$id';");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="pokemon_details_page">

Details of Pokemon

<div class="main-info-section">
    <div class="info-wrapper">
        <div class="title"> BASE STATS</div>
        <?php while($record = mysqli_fetch_assoc($base_stats_query)):?>
            <div class="info-row">
                <div class="info-key"> Name</div>
                <div class="info-value"><?= $record["Name"]?></div>
            </div>
            <div class="info-row">
                <div class="info-key"> Type</div>
                <div class="info-value"><?= $record["Type"]?></div>
            </div>
            <div class="info-row">
                <div class="info-key"> Species</div>
                <div class="info-value"><?= $record["Species"]?></div>
            </div>
            <div class="info-row">
                <div class="info-key"> Moves Count</div>
                <div class="info-value"><?=mysqli_fetch_assoc($moves_count)["moves_count"] ?></div>
            </div>
        <?php endwhile;?>
    </div>
</div>

<div class="details-info-section">
    MOVES
    <div class="wrapper">
        <table>
            <thead>
            <td> ID</td>
            <td> Name</td>
            <td> Type</td>
            <td> Cat</td>
            <td> Power</td>
            <td> Acc</td>
            <td> Pp</td>
            <td> Effect</td>
            <td> Action</td>
            </thead>
            <tbody>
            <?php
                while($record = mysqli_fetch_assoc($moves_query)) {
                    moveDataRow(
                        $record["ID"],
                        $record["Name"],
                        $record["Type"],
                        $record["Cat"],
                        $record["Power"],
                        $record["Acc"],
                        $record["Pp"],
                        $record["Effect"]
                    );
                }
            ?>
            <?php moveInputRow(); ?>
            </tbody>
        </table>
    </div>
</div>

<div class="details-info-section">
    EGG MOVES
    <div class="wrapper">
        <table>
            <thead>
            <td> ID</td>
            <td> Name</td>
            <td> Type</td>
            <td> Cat</td>
            <td> Power</td>
            <td> Acc</td>
            <td> Action</td>
            </thead>
            <tbody>
            <?php
                while($record = mysqli_fetch_assoc($egg_moves_query)) {
                    eggMoveDataRow(
                        $record["ID"],
                        $record["Move"],
                        $record["Type"],
                        $record["Cat"],
                        $record["Power"],
                        $record["Acc"]
                    );
                }
            ?>
            <?php eggMoveInputRow(); ?>
            </tbody>
        </table>
    </div>
</div>

<div class="details-info-section">
    Breeding
    <div class="wrapper">
        <table>
            <thead>
            <td> id</td>
            <td> Egg Groups</td>
            <td> Gender</td>
            <td> Egg Cycles</td>
            <td colspan="2"> actions</td>
            </thead>
            <tbody>
            <?php
            while($record = mysqli_fetch_assoc($breeding_query)) {
                breedingDataRow(
                    $record["B_ID"],
                    $record["Egg_Groups"],
                    $record["Gender"],
                    $record["Egg_Cycles"]
                );
            }
            ?>
            <?php breedingInputRow(); ?>
            </tbody>
        </table>
    </div>
</div>

<div class="details-info-section">
    Training
    <div class="wrapper">
        <table>
            <thead>
            <td> id</td>
            <td> Ev_Yield</td>
            <td> Catch_Rate</td>
            <td> Base_Friendship</td>
            <td> Base_Exp</td>
            <td> Growth_Rate</td>
            </thead>
            <tbody>
            <?php
            while($record = mysqli_fetch_assoc($training_query)) {
                trainingDataRow(
                    $record["T_ID"],
                    $record["Ev_Yield"],
                    $record["Catch_Rate"],
                    $record["Base_Friendship"],
                    $record["Base_Exp"],
                    $record["Growth_Rate"],
                );
            }
            ?>
            <?php trainingInputRow(); ?>
            </tbody>
        </table>
    </div>
</div>

<div class="details-info-section">
    Type Defense
    <div class="wrapper">
        <table>
            <thead>
            <td> ID</td>
            <td> Power</td>
            <td> point</td>
            </thead>
            <tbody>
            <?php
            while($record = mysqli_fetch_assoc($type_defense_query)) {
                typeDefenseDataRow(
                    $record["ID"],
                    $record["Power"],
                    $record["Point"]
                );
            }
            ?>
            <?php typeDefenseInputRow(); ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>