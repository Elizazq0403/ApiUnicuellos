<?php
require_once(dirname(__DIR__)."../db/db_config.php");
if( $_SERVER['REQUEST_METHOD'] == "POST"){
    $data = json_decode(file_get_contents('php://input'), true);
    $user_id = $data['user_id'];
    $db = new DBConfig();
    $dbConnection = $db->connect();
    $query = "SELECT * FROM users WHERE user_id='$user_id'";
    $users = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
    echo(json_encode($users));
}
else{
    echo "parce no se puede";
}