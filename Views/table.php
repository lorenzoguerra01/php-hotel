<?php

$tBody = '';

foreach ($hotels as $hotel) {
    $show = true;

    if (isset($_GET['withParking'])) {
        if ($_GET['withParking'] == 'on' && !$hotel['parking']) {
            $show = false;
        }
    }

    if (isset($_GET['vote'])) {
        if ($_GET['vote'] != 'all' && $hotel['vote'] < $_GET['vote']) {
            $show = false;
        }
    }

    if ($show) {
        $tBody .= '<tr>' . '<td>' . $hotel['name'] . '</td>' . '<td>' . $hotel['description'] . '</td>' . '<td>' . ( $hotel['parking'] ? 'Yes' : 'No' ) . '</td>' . '<td>' . $hotel['vote'] . '</td>' . '<td>' . $hotel['distance_to_center'] . '</td>' . '</tr>';
    }
}
?>
<form action="index.php" method="GET">
    <label for="withParking">Parcheggio:</label>
    <input type="checkbox" name="withParking" <?php if (isset($_GET['withParking']))
        echo 'checked'; ?>>
    <select class=" form-control my-3 " name="vote" <?php if (isset($_GET['vote']))
        echo 'value="' . $_GET['vote'] . '"'; ?>>
        <option value="all">All</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button type="submit">Submit</button>
</form>
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