<?php
    session_start();
$name = $_POST['name'];
$addres = $_POST['addres'];
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);

$error_input = [];

if($name === ""){
    $error_input[] = 'name';
}
if($addres === ""){
    $error_input[] = 'addres';
}
if($phone === ""){
    $error_input[] = 'phone';
}
if($email === ""){
    $error_input[] = 'email';
}
if(strlen($phone)<11){
    $error_input[] = 'phone';
}
if(!preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i",$email)){
    $error_input[] = 'email';
}

if(!empty($error_input)){

    $res=[
        "status" => false,
        "message" => "Заполни все поля",
        "type" => 1,
        "fields" => $error_input
    ];
    echo json_encode($res);
    exit();
}else{
    $res = [
        "status" => true
    ];
    echo json_encode($res);

    $_SESSION['user'] = [$name,$addres,$phone,$email];
}
?>