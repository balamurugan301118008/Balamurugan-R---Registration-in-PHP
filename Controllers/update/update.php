<?php
$app['db']= (new Database())->db;


$upName = $_POST['names'];
$upEmail = $_POST['emails'];
// $upPass = $_POST['pwd'];
$id = $_POST['updated'];


try {
    $insert = $app['db']->query("UPDATE users SET name='$upName',email='$upEmail'WHERE id ='$id'");

    $_SESSION['login']=[
        'name'=>$upName
    ];
    header('Location:/');


} catch (Exception $e) {
    die($e->getMessage());
}



?>