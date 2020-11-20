<?php
function typeDefenseInputRow()
{
    echo '
        <tr>
            <form class="info-form" method="POST" action="type_defense_process.php">
            <td><input type = hidden name = "pokemon_id" value = '.$_GET["id"].'></td>
                <td><input name="power" type=text ></td>
                <td><input name="point" type=text ></td>
                <td><input type=submit name="add-button" id="add" value=""></td>
            </form>
        </tr>
    ';
}

function typeDefenseDataRow(
    int $id,
    string $Power,
    float $Point
)
{
    echo '
    <tr>
        <form class="info-form" method="POST" action="type_defense_process.php?id='.$id.'">
        
            <input type = hidden name = "pokemon_id" value = '.$_GET["id"].'>
            <td><input name="id" type=text value="' . $id . '"></td>
            <td><input name="power" type=text value="' . $Power . '"></td>
            <td><input name="point" type=text value="' . $Point . '"></td>
            <td><input type=submit name="edit-button" id="edit" value="edit"></td>
            <td><input type=submit name="delete-button" id="delete" value="delete"></td>
        </form>
    </tr>
    ';
}
