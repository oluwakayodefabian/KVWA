<?php



// namespace classes;

// use mysqli;

require_once ROOT_PATH . "/mysql_config.php";


class Db_connection
{
    private $host;
    private $user;
    private $password;
    public $databaseName;
    protected object $conn;
    protected $connection_error;

    public function __construct()
    {
        $this->host         = HOSTNAME;
        $this->user         = USERNAME;
        $this->password     = PASSWORD;
        $this->databaseName = DBNAME;
        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->databaseName);
        if (!$this->conn) {
            $this->connection_error = "There's an error with the connection:" . mysqli_connect_error();
            return false;
        }
    }
}
