<?php
function moveInputRow()
{
    echo '
        <tr>
            <form class="info-form" method="POST" action="move_process.php">
            
            <input type = hidden name = "pokemon_id" value = '.$_GET["id"].'>
                <td></td>
                <td><input name="name" type=text></td>
                <td><input name="type" type=text></td>
                <td><input name="cat" type=text ></td>
                <td><input name="power" type=number ></td>
                <td><input name="acc" type=number></td>
                <td><input name="pp" type=number ></td>
                <td><input name="effect" type=text ></td>
                <td><input type=submit name="add-button" id="add" value=""></td>
            </form>
        </tr>
    ';
}

function moveDataRow(
    int $id,
    string $name,
    string $type,
    string $cat,
    int $power,
    int $acc,
    int $pp,
    string $effect
)
{
    echo '
    <tr>
        <form class="info-form" method="POST" action="move_process.php?id=' . $id . '">
            <input type = hidden name = "pokemon_id" value = '.$_GET["id"].'>
            <td>' . $id . '</td>
            <td><input name="name" type=text value="' . $name . '"></td>
            <td><input name="type" type=text value="' . $type . '"></td>
            <td><input name="cat" type=text value="' . $cat . '"></td>
            <td><input name="power" type=number value=' . $power . '></td>
            <td><input name="acc" type=number value=' . $acc . '></td>
            <td><input name="pp" type=number value=' . $pp . '></td>
            <td><input name="effect" type=text value="' . $effect . '"></td>
            <td><input type=submit name="edit-button" id="edit" value="edit"></td>
            <td><input type=submit name="delete-button" id="delete" value="delete"></td>
        </form>
    </tr>
            ';
}

?>


