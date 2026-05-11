<?php include("header.html"); ?>
<?php session_start(); ?>

<body>
<div class="login">
  <h2>Log in and start your journey with us</h2>
  <div class="signin-container">

    <form action="connect.php" method="post">
      <h2>LOGIN</h2>

      <!-- PHP Error / Success Handling -->
      <?php
        if (isset($_GET['error'])) {
          $error_message = htmlspecialchars($_GET['error']);
          echo "<div class='error-message'>" . $error_message . "</div>";
        }
      ?>

      <table cellpadding="10" cellspacing="0">
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="email" name="email" id="email" required></td>
        </tr>

        <tr>
          <td><label for="password">Password</label></td>
          <td>
            <div class="password-wrapper">
              <input type="password" name="password" id="password" required>
              <span class="toggle-password" onClick="togglePassword()">Show</span>
            </div>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
          </td>
        </tr>

        <tr>
          <td colspan="2" style="text-align: center;">
            <button type="submit">Login</button>
          </td>
        </tr>

        <tr>
          <td colspan="2" class="links" style="text-align: center;">
            <a href="forgot-password.php">Forgot Password</a> |
            <a href="register.php">Create Account</a>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

<!-- Toast Notification -->
<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
  echo "
    <div class='toast' id='toast'>Your order has been successfully placed</div>
    <script>
      setTimeout(() => {
        document.getElementById('toast').style.display = 'none';
      }, 3000);
    </script>
  ";
}
?>

<!-- Toggle Password JS -->
<script>
function togglePassword() {
  var pwd = document.getElementById("password");
  var toggle = document.querySelector(".toggle-password");
  if (pwd.type === "password") {
    pwd.type = "text";
    toggle.textContent = "Hide";
  } else {
    pwd.type = "password";
    toggle.textContent = "Show";
  }
}
</script>

<!-- Toast CSS -->
<style>
.toast {
  position: fixed;
  top: 20px;
  right: 20px;
  background-color: #4BB543;
  color: white;
  padding: 15px 20px;
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  font-weight: bold;
  z-index: 1000;
}
</style>

<?php include("footer.html"); ?>
