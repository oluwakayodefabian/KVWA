<?php
session_start();
require_once "path.php";
?>

<?php require_once ROOT_PATH . "/templates/header.php" ?>
<main role="main" class="inner cover text-light">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="">
            <h1 class="cover-heading">Kayode Vulnerable Web Application</h1>
            <p class="lead">KVWA is a deliberately insecure vulnerable web application that allows web developers like you to test a vulnerability commonly found in web applications built with <abbr title="PHP HyperText Preprocessor">PHP</abbr> called the classic <abbr title="Structured Query Language">SQL</abbr> injection</p>
            <p class="lead">
                <a href="<?= BASE_URL . '/login.php' ?? "Not found" ?>" class="btn btn-lg btn-secondary">Try it out!</a>
            </p>
        </div>
    </div>
</main>
<?php require_once ROOT_PATH . "/templates/footer.php" ?>