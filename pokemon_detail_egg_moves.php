<?php
function eggMoveInputRow()
{
    echo '
        <tr>
            <form class="info-form" method="POST" action="egg_move_process.php?action=add">
                <td><input name="id" type=number ></td>
                <td><input name="name" type=text ></td>
                <td><input name="type" type=text ></td>
                <td><input name="cat" type=text ></td>
                <td><input name="power" type=number ></td>
                <td><input name="acc" type=number></td>
                <td><input type=submit name="submit-button" id="add" value=""></td>
            </form>
        </tr>
    ';
}

function eggMoveDataRow(
    int $id,
    string $name,
    string $type,
    string $cat,
    int $power,
    int $acc
)
{
    echo '
    <tr>
        <form class="info-form" method="POST" action="egg_move_process.php?id='.$id.'&action=modify">
            <td>' . $id . '</td>
            <td><input name="name" type=text value="' . $name . '"></td>
            <td><input name="type" type=text value="' . $type . '"></td>
            <td><input name="cat" type=text value="' . $cat . '"></td>
            <td><input name="power" type=number value=' . $power . '></td>
            <td><input name="acc" type=number value=' . $acc . '></td>
            <td><input type=submit name="submit-button" id="edit" value="edit"></td>
            <td><input type=submit name="submit-button" id="delete" value="delete"></td>
        </form>
    </tr>
            ';
}
