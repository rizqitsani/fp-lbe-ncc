<?php
function trainingInputRow()
{
    echo '
        <tr>
            <form class="info-form" method="POST" action="training_process.php">
                <td></td><input type = hidden name = "pokemon_id" value = '.$_GET["id"].'>
                <td><input name="ev_yield" type=text></td>
                <td><input name="catch_rate" type=text ></td>
                <td><input name="base_friendship" type=text ></td>
                <td><input name="base_exp" type=number></td>
                <td><input name="growth_rate" type=text></td>
                <td><input type=submit name="add-button" id="add" value=""></td>
            </form>
        </tr>
    ';
}

function trainingDataRow(
    int $id,
    string $ev_yield,
    string $catch_rate,
    string $base_friendship,
    int $base_exp,
    string $growth_rate
)
{
    echo '
    <tr>
        <form class="info-form" method="POST" action="training_process.php?id='.$id.'">
            <input type = hidden name = "pokemon_id" value = '.$_GET["id"].'>
            <td>' . $id . '</td>
            <td><input name="ev_yield" type=text value="' . $ev_yield . '"></td>
            <td><input name="catch_rate" type=text value="' . $catch_rate . '"></td>
            <td><input name="base_friendship" type=text value="' . $base_friendship . '"></td>
            <td><input name="base_exp" type=number value="' . $base_exp . '"></td>
            <td><input name="growth_rate" type=text value="' . $growth_rate . '"></td>
            <td><input type=submit name="edit-button" id="edit" value="edit"></td>
            <td><input type=submit name="delete-button" id="delete" value="delete"></td>
        </form>
    </tr>
            ';
}
