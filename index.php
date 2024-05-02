<?php
include __DIR__ . '/Models/model.php';
var_dump($hotels);
include __DIR__ . '/Views/header.php';
?>

<div id="app" class="ms_screen text-center">
    <h1>PHP Hotel</h1>
    <div class="card ms_card">
        <h2>Hotel</h2>
        <?php
        include __DIR__ . '/Views/table.php';
        include __DIR__ . '/Views/footer.php'
            ?>
    </div>
</div>
</body>

</html>