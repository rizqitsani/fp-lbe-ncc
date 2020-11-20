<?php
function abilitiyInputRow()
{
    echo '
        <tr>
            <form class="info-form" method="POST" action="abilitiy_process.php">
                <td><input name="id" type=number ></td>
                <td><input name="name" type=text ></td>
                <td><input name="effect" type=text ></td>
                <td><input type=submit name="add-button" id="add" value=""></td>
            </form>
        </tr>
    ';
}

function abilityDataRow(
    int $id,
    string $name,
    string $effect
)
{
    echo '
    <tr>
        <form class="info-form" method="POST" action="ability_process.php?id=' . $id . '">
            <td>' . $id . '</td>
            <td><input name="name" type=text value="' . $name . '"></td>
            <td><input name="effect" type=text value="' . $effect . '"></td>
            <td><input type=submit name="edit-button" id="edit" value="edit"></td>
            <td><input type=submit name="delete-button" id="delete" value="delete"></td>
        </form>
    </tr>
            ';
}
