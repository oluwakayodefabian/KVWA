<?php
session_start();

require_once "../path.php";
require_once "Db_connection.php";

class Authentication extends Db_connection
{
    public $username;
    public $password;
    private $query;
    public $result;
    public function __construct()
    {
        parent::__construct();
    }

    public function login($table)
    {
        if (isset($_POST['submit'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            $this->query    = "SELECT * FROM $table WHERE username='$this->username' AND password='$this->password'";
            $run_query      = $this->conn->query($this->query);
            $count = mysqli_num_rows($run_query);
            if ($count > 0) {
                $this->result   = $run_query->fetch_all(MYSQLI_ASSOC);
                $_SESSION['user_id']    = $this->result[0]['user_id'];
                $_SESSION['username']   = $this->result[0]['username'];
                $_SESSION['password']   = $this->result[0]['password'];
                header("Location: " . BASE_URL . "/success.php?msg=success");
                exit;
            } else {
                header("Location: " . BASE_URL . "/login.php");
                exit;
            }
        }
    }
}

$auth = new Authentication();
echo $auth->login('users');
