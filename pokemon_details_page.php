<?php
    include('pokemon_details_moves.php');
    include('pokemon_detail_egg_moves.php');
    include('pokemon_details_abilities.php');

    require_once './functions/config.php';

    $moves_query = mysqli_query($db, "SELECT * FROM moves;");
    $egg_moves_query = mysqli_query($db, "SELECT * FROM egg_moves;");
    $ability_query = mysqli_query($db, "SELECT * FROM abilities;");
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
        <div class="info-row">
            <div class="info-key"> name</div>
            <div class="info-value"> ini nama</div>
        </div>
        <div class="info-row">
            <div class="info-key"> name</div>
            <div class="info-value"> ini nama</div>
        </div>
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
    ABILITIES
    <div class="wrapper">
        <table>
            <thead>
            <td> ID</td>
            <td> Name</td>
            <td> Effect</td>
            </thead>
            <tbody>
            <?php
            while($record = mysqli_fetch_assoc($ability_query)) {
                abilityDataRow(
                    $record["ID"],
                    $record["Move"],
                    $record["effect"]
                );
            }
            ?>
            <?php abilitiyInputRow(); ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>