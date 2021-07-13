<?php
// session_start();
require_once "Db_connection.php";

class Users extends Db_connection
{
    public function __construct()
    {
        parent::__construct();
    }
    public function showUserInfo()
    {
        $userId     = $_SESSION['username'];
        $password   = $_SESSION['password'];
        $sql        = "SELECT * FROM users WHERE username='$userId' AND password='$password'";
        $run_query  = $this->conn->query($sql);
        $result     = $run_query->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}
