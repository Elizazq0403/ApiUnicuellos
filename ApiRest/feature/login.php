<?php
require_once(dirname(__DIR__)."../db/db_config.php");
if( $_SERVER['REQUEST_METHOD'] == "GET"){
    $user_id = $_GET['user_id'];
    $db = new DBConfig();
    $dbConnection = $db->connect();
    $query = "SELECT * FROM users";
    $users = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    echo(json_encode($users));
}
else{
    echo "parce no se puede";
}