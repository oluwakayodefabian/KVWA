<?php
session_start();
require_once "../path.php";
class Logout
{
    public function __construct()
    {
        session_destroy();
        header("Location:" . BASE_URL . '/index.php');
        exit;
    }
}

$logout = new Logout();
