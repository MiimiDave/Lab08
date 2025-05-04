<?php include 'header.inc'; ?>

<h1>Login</h1>

<?php if (isset($_GET['error'])): ?>
  <p style="color:red;">Invalid login—try again!</p>
<?php endif; ?>

<form action="process.php" method="POST">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>


  <input type="hidden" name="token" value="J12345678">

  <button type="submit">Login</button>
</form>

<?php include 'footer.inc'; ?>
