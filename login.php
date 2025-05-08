<?php
session_start();

// 1. Generate a CSRF token if we don’t already have one
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

include 'header.inc';
?>

<h1>Login</h1>

<?php if (isset($_GET['error'])): ?>
  <p style="color:red;">Invalid login—try again!</p>
<?php endif; ?>

<form action="process.php" method="POST">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <!-- 2. Use the session’s token here! -->
  <input type="hidden" name="token" value="<?= htmlspecialchars($_SESSION['token']) ?>">

  <button type="submit">Login</button>
</form>

<?php include 'footer.inc'; ?>
