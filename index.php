<?php
require_once './functions/config.php';
$pokemon_query = mysqli_query($db, "SELECT * FROM pokemon;");

function pokemonDataRow(
    $id,
    $name,
    $type,
    $species,
    $height,
    $weight,
    $chenges,
    $attack,
    $health_point,
    $speed,
    $speed_attack,
    $speed_defense
)
{
    echo "
            <tr >
                <td> {$id} </td>
                <td> {$name} </td>
                <td> {$type} </td>
                <td> {$species} </td>
                <td>{$height} </td>
                <td>{$weight }</td>
                <td>{$chenges} </td>
                <td>{$attack} </td>
                <td>{$health_point} </td>
                <td>{$speed} </td>
                <td>{$speed_attack }</td>
                <td>{$speed_defense}</td>
                <td>
                    <a class = 'data-row' href= 'pokemon_details_page.php?id={$id}'>details</a>
                </td>
            </tr>
        ";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main_page">
POKEMONS

<table>
    <thead>
    <td> ID</td>
    <td> Name</td>
    <td> Type</td>
    <td> Species</td>
    <td> Height</td>
    <td> Weight</td>
    <td> Chenges</td>
    <td> Attack</td>
    <td> Health Point</td>
    <td> Speed</td>
    <td> Attack Speed</td>
    <td> Defense Speed</td>
    <td> Action</td>
    </thead>
    <tbody>
    <?php
    while ($record = mysqli_fetch_assoc($pokemon_query)) {
        pokemonDataRow(
            $record["Id"],
            $record["Nama"],
            $record["Type"],
            $record["Species"],
            $record["Height"],
            $record["Weight"],
            $record["Chenges"],
            $record["Attack"],
            $record["Health_Point"],
            $record["Speed"],
            $record["Speed_Attack"],
            $record["Speed_Defense"]
        );
    }
    pokemonDataRow(
        "Id",
        "Nama",
        "Type",
        "Species",
        "Height",
        "Weight",
        "Chenges",
        "Attack",
        "Health_Point",
        "Speed",
        "Speed_Attack",
        "Speed_Defense"
    );
    ?>

    </tbody>
</table>

</body>
</html>