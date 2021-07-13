<?php

require 'autoload.php';
require 'path.php';

?>
<?php require_once ROOT_PATH . "/templates/header.php" ?>


<main role="main" class="inner cover text-light">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="auth-container w-100 d-flex justify-content-center align-items-center">
            <form action="classes/Authentication.php" method="POST">
                <h1 class="h3 mb-3">Please sign in</h1>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" name="username" class="form-control" id="username" placeholder="johnDoe123">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
            </form>
        </div>
    </div>

</main>