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
$html = file_get_html($pokemon_table);

$article = $html->find('div[class=article__list clearfix]');

foreach($article as $berita){
    echo $berita;
}

?>
</body>
</html>
