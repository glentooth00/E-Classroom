<?php
session_start();

include 'teacher.php';

if($_POST){


    $User_credentials = new Teacher();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $User_credentials->Login($username,$password);


}




?>