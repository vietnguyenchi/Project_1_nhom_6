<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FPOLY Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/links.php') ?>
    <style>
        <?php require('assets/css/style.css') ?>
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <?php require_once $view . '.php'; ?>

    <?php require('inc/footer.php') ?>
    <?php require('inc/scripts.php') ?>
</body>

</html>