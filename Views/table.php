<?php
$tBody = '';
foreach ($hotels as $hotel) {
    $tBody .= '<tr>' . '<td>' . $hotel['name'] . '</td>' . '<td>' . $hotel['description'] . '</td>' . '<td>' . $hotel['parking'] . '</td>' . '<td>' . $hotel['vote'] . '</td>' . '<td>' . $hotel['distance_to_center'] . '</td>' . '</tr>';
}
?>

<table class=" table table-striped ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>

            <th>Parking</th>

            <th>Vote</th>

            <th>Distance to center</th>
        </tr>
    </thead>
    <tbody>
        <?php echo $tBody; ?>
    </tbody>
</table>