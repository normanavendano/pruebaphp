<?php
session_start();
$session  = isset($_SESSION['nombreuser'])?$_SESSION['nombreuser']:'';
$userdata = [
    [
    'password' => 'Clave123',
    'user' => 'Norman F. Avendaño Cubillos',
    'email' => 'norman.avendano@outlook.com'],
    [
    'password' => 'Clave456',
    'user' => 'Makita',
    'email' => 'administrador@Makita.com']
];
$email=isset($_POST['email'])?$_POST['email']:'';
$password=isset($_POST['password'])?$_POST['password']:'';

foreach($userdata as $item){
    if($email == $item['email'] && $password == $item['password']){
        $_SESSION['nombreuser']=$item['user'];
        header('Location: index.php?msj_get_post=Bienvenido.');
        exit();
    }else{
        header('Location: index.php?msj_get_post=Usuario Invalido.');
    }
}
    

?>