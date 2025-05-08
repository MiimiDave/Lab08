<?php include 'header.inc'; ?>
<?php
session_start();

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<h1>Welcome, <?= htmlspecialchars($_SESSION['user']) ?>!</h1>
<p>Your Token: D105213476</p>
<?php include 'footer.inc'; ?>
