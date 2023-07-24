<?php

$userName = $_POST['name'];
$password = $_POST['pass'];

if($userName && $password){
    $statement = $app['db']->query("SELECT * FROM users WHERE name = '$userName' and password = '$password'");
   $checking =  $statement->fetchAll();
    if($checking){
        $_SESSION['login'] = [
            'name' =>$userName
        ];
        header('location:/');
    }
    else{
        header('location:/login');
    }
}
