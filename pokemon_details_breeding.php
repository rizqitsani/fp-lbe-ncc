<?php
function breedingInputRow()
{
    echo '
        <tr>
            <form class="info-form" method="POST" action="breeding_process.php">
                <td></td>
                <td><input name="egg_groups" type=number ></td>
                <td><input name="gender" type=text ></td>
                <td><input name="egg_cycle" type=text ></td>
                <td><input type=submit name="add-button" id="add" value=""></td>
            </form>
        </tr>
    ';
}

function breedingDataRow(
    int $id,
    string $egg_groups,
    string $gender,
    string $egg_cycle
)
{
    echo '
    <tr>
        <form class="info-form" method="POST" action="breeding_process.php?id='.$id.'">
            <td>' . $id . '</td>
            <td><input name="egg_groups" type=text value="' . $egg_groups . '"></td>
            <td><input name="gender" type=text value="' . $gender . '"></td>
            <td><input name="egg_cycle" type=text value="' . $egg_cycle . '"></td>
            <td><input type=submit name="edit-button" id="edit" value="edit"></td>
            <td><input type=submit name="delete-button" id="delete" value="delete"></td>
        </form>
    </tr>
            ';
}
