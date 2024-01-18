<?php

// class Connect {
//     private $conn;
//     private $host = "localhost";
//     private $user = "bp_user_db";
//     private $pass = "fmh0P=cF[x7:l%h{";
//     private $dbName = "BackDev";

//     public function __construct() {
//         $this->conn = null; 
//     }

//     public function connect(){
//         $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbName);

//         if ($this->conn->connect_error) {
//             die("Connection error!!! " . $this->conn->connect_error);
//         }
//     }
// }

// $connect = new Connect();
// $connect->connect(); 

$host = "localhost";
$user = "bp_user_db";
$pass = "fmh0P=cF[x7:l%h{";
$dbName = "BackDev";

$conn = new mysqli($host,$user,$pass,$dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}