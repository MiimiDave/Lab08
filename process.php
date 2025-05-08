<?php
session_start();                


$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$token    = $_POST['token']    ?? '';  


if ($username === 'Davina' && $password === '105213476') {
    $_SESSION['user'] = $username;      
    header('Location: welcome.php');
    exit;
} else {
 
    header('Location: login.php?error=1');
    exit;
}
?>
