<?php
require_once(dirname(__DIR__)."../db/db_config.php");
if( $_SERVER['REQUEST_METHOD'] == "GET"){
    $user_id = $_GET['user_id'];
    $db = new DBConfig();
    $dbConnection = $db->connect();
    $query = "SELECT * FROM users WHERE user_id=$user_id";
    $users = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    echo(json_encode($users[0]));
}
else{
    echo "parce no se puede";
}