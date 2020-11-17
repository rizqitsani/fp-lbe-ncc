<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
include('simplehtmldom_1_9_1/simple_html_dom.php');

$pokemon_table = "https://pokemondb.net/pokedex/all";
$pokemon_base_pokedex = "https://pokemondb.net";
$html = file_get_html($pokemon_table);

$pokemon = $html->find('tbody');

function getRoute($item)
{
    return $item
        ->children[1]
        ->children[0]
        ->attr['href'];

}

$i = 0;
$max_pokemon_details = 1;

foreach ($pokemon[0]->children as $item) {
    $pokemon_page_details = file_get_html($pokemon_base_pokedex.getRoute($item));

    $vitals = $pokemon_page_details->find('table[class=vitals-table]');

    echo $vitals[0];

    $i++;
    if($i >= $max_pokemon_details-1) break;
}


?>
</body>
</html>
