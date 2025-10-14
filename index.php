<?php include('includes/header.php'); ?>
<div class="auth-container">
  <h2>WalkSafe</h2>
  <form id="loginForm" method="POST" action="api/login.php">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
  <p>Don’t have an account? <a href="#" id="showSignup">Sign up</a></p>
</div>
<script src="assets/js/auth.js"></script>
<?php include('includes/footer.php'); ?>
