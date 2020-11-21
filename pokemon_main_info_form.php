<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href = "style.css">
</head>
<body class = "pokemon_main_information_form">
<div>INSERT POKEMON</div>
<form method="POST" action="process_input.php">
    <div class="form-section">
        <div class = "form-title">MAIN INFORMATION</div>
        <input name="national_no" type="text" placeholder="NATIONAL NO">
        <input name="name" type="text" placeholder="NAME">
        <input name="type" type="text" placeholder="TYPE">
        <input name="species" type="text" placeholder="SPECIES">
        <input name="height" type="number" placeholder="HEIGHT">
        <input name="weight" type="number" placeholder="WEIGHT">
        <input name="abilities" type="text" placeholder="ABILITY">
        <input name="health_point" type="number" placeholder="HP">
        <input name="attack" type="number" placeholder="ATTACK">
        <input name="defense" type="number" placeholder="DEFENSE">
        <input name="speed" type="number" placeholder="SPEED">
        <input name="speed_attack" type="number" placeholder="ATTACK SPEED">
        <input name="speed_defense" type="number" placeholder="DEFENSE SPEED">
    </div>
    <input type="submit" name="insert_main" value="input pokemon">
    <button><a href="./index.php">Kembali</a></button>
</form>

</body>
</html>