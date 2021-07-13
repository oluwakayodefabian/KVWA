<?php
session_start();
require_once "path.php";
require_once "autoload.php";
$users = new Users();
$num = 1;
?>

<?php require_once ROOT_PATH . "/templates/header.php" ?>
<main role="main" class="inner cover text-light">
    <?php if (isset($_GET['msg'])) : ?>
        <div class="alert alert-success">
            <p class="lead">Congratulations You illegally logged in</p>
        </div>
    <?php endif; ?>
    <div class="container d-flex justify-content-center align-items-center">

        <table class="table table-striped table-hover text-light">
            <thead>
                <th scope="col">SN</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
            </thead>
            <tbody>
                <?php foreach ($users->showUserInfo() as $key => $user) : ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['password'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php require_once ROOT_PATH . "/templates/footer.php" ?>