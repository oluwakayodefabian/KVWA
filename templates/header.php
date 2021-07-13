<?php require_once "path.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>KVWA</title>

    <link rel="canonical" href="<?= BASE_URL . 'index.php' ?>">
    <script src="<?= BASE_URL . '/js/all.js' ?>"></script>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= BASE_URL . '/assets/favicon.png' ?>" />
    <!-- Bootstrap core CSS -->
    <link href="<?= BASE_URL . "/assets/css/bootstrap.min.css" ?>" rel="stylesheet">
    <link href="<?= BASE_URL . '/assets/css/styles.css' ?>" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="text-center bg-primary">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto bg-light">
            <div class="inner">
                <h3 class="masthead-brand"><img src="<?= BASE_URL . '/assets/images/KVWA_logo.png' ?>" alt=""></h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="<?= BASE_URL . '/index.php' ?>">Home</a>
                    <a class="nav-link" href="<?= BASE_URL . '/index.php#' ?>">About</a>
                    <a class="nav-link" href="<?= BASE_URL . '/index.php#' ?>">Contact</a>
                </nav>
                <div class="d-flex justify-content-end mr-5 user-info">
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <p class="lead">
                            <i class="fas fa-user"></i>
                            <?= ' Welcome, ' . $_SESSION['username'] ?>
                        </p>
                        <a href="classes/Logout.php" class="text-white logout bg-primary p-3">Logout</a>
                    <?php else : ?>
                        <a href="<?= BASE_URL . '/login.php' ?>" class='btn btn-success d-block mb-2'>Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </header>