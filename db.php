<?php
/**
 * Created by Salman Zafar.
 * User: sam
 * Date: 11/21/17
 * Time: 9:53 AM
 */

class DbConn{

    public static $instance;
    protected $server = "localhost";
    protected $uname  = "root";
    protected $pass   = "";
    protected $db     = "lrs";
    public    $conn   = "";

    private function __construct()
    {
        $this->connect($this->server, $this->uname,$this->pass,$this->db);
    }

    public static function get_instance()
    {
        if(!isset(DbConn::$instance))
            DbConn::$instance = new DbConn();
        return DbConn::$instance;
    }

    public function connect($server, $user,$pass, $db)
    {
        $this->conn = new mysqli($server,$user,$pass,$db);
        if($this->conn->connect_error)
        {
            die("Connection failed: ".$this->conn->connect_error);
        }
    }
}

$db = DbConn::get_instance();