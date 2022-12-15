<?php
include __DIR__ . '/partials/variabili.php';
var_dump(__DIR__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <!-- Voglio utilizzare le informazioni di un altro file -->

    <?php include __DIR__ . '/partials/struttura/header.php'; ?>
    <h1><?php echo $nome; ?></h1>
</body>
</html>