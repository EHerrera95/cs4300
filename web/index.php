<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F & M's</title>
    <link rel="manifest" href="/manifest.json">
    <?php include "components/styles.php" ?>
</head>

<body>
    <!-- <script src="assets/js/sw_register.js"></script> -->
    <?php include "components/header.php" ?>
    <?php
    require "config/connection.php";

    $request = $_SERVER['REQUEST_URI'];
    switch ($request) {
        case '/contact':
            require __DIR__ . '/views/contact.php';
            break;
        case '/testimonials':
            require __DIR__ . '/views/testimonials.php';
            break;
        default:
            require __DIR__ . '/views/index.php';
            break;
    }
    ?>
    <?php include "components/footer.php" ?>
</body>

</html>