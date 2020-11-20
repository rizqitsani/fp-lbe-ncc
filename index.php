<?php
require_once './functions/config.php';

// Searching
if(isset($_GET["search"])) {
    $keyword = $_POST["keyword"];
    $keyword = mysqli_real_escape_string($db, $keyword);
    $pokemon_query = mysqli_query($db, "SELECT * FROM pokemon WHERE name LIKE '%$keyword%' ORDER BY national_no;");
} else{
    $pokemon_query = mysqli_query($db, "SELECT * FROM pokemon;");
}

function pokemonDataRow(
    $id,
    $name,
    $type,
    $species,
    $height,
    $weight,
    $abilities,
    $health_point,
    $attack,
    $defense,
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
                <td>{$abilities} </td>
                <td>{$health_point} </td>
                <td>{$attack} </td>
                <td>{$defense} </td>
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

<form method = "POST" action="index.php">
    <input type="text" name = "keyword" placeholder = "Search Name">
    <input type = "submit" name = "search" value = "Search">
</form>

<table>
    <thead>
    <td> National NO</td>
    <td> Name</td>
    <td> Type</td>
    <td> Species</td>
    <td> Height</td>
    <td> Weight</td>
    <td> Abilities</td>
    <td> Health Point</td>
    <td> Attack</td>
    <td> Defense</td>
    <td> Speed</td>
    <td> Attack Speed</td>
    <td> Defense Speed</td>
    <td> Action</td>
    </thead>
    <tbody>
    <?php
    while ($record = mysqli_fetch_assoc($pokemon_query)) {
        pokemonDataRow(
            $record["National_No"],
            $record["Name"],
            $record["Type"],
            $record["Species"],
            $record["Height"],
            $record["Weight"],
            $record["Abilities"],
            $record["Health_Point"],
            $record["Attack"],
            $record["Defense"],
            $record["Speed"],
            $record["Speed_Attack"],
            $record["Speed_Defense"]
        );
    }
    ?>

    </tbody>
</table>

</body>
</html>