<?php
include('pokemon_details_moves.php');
include('pokemon_detail_egg_moves.php');

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
            <?php moveDataRow(
                123,
                "ini nama",
                "ini tipe",
                "ini category",
                2222,
                300000,
                20202020,
                "ini effect"
            ); ?>
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
            <?php eggMoveDataRow(
                321,
                "ini nama",
                "ini tipe",
                "ini category",
                3232,
                303030
            ); ?>
            <?php eggMoveInputRow(); ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>