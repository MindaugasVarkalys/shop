<table class="table">
    <tr>
        <th>Id</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Elektroninis paštas</th>
        <th>Telefono numeris</th>
        <th>Valstybė</th>
        <th>Miestas</th>
        <th>Gatvė ir namo numeris</th>
        <th>Pašto kodas</th>
    </tr>
    <?php
    foreach ($data as $key => $val) {
        echo
        "<tr>"
        . "<td>{$val['id']}</td>"
        . "<td>{$val['firstName']}</td>"
        . "<td>{$val['lastName']}</td>"
        . "<td>{$val['email']}</td>"
        . "<td>{$val['phoneNumber']}</td>"
        . "<td>{$val['country']}</td>"
        . "<td>{$val['city']}</td>"
        . "<td>{$val['streetAndHouseNumber']}</td>"
        . "<td>{$val['postalCode']}</td>"
        . "</tr>";
    }
    ?>
</table>

<?php
include 'templates/paging.tpl.php';
?>

