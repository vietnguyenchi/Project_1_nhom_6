<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php') ?>
    <style>
        <?php require('css/style.css'); ?>
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>
    <!-- Content -->

    <?php require_once $view . '.php'; ?>

    <?php require('inc/scripts.php') ?>
</body>

</html>