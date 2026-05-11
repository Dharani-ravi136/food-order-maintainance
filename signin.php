<?php include("header.html")
?>
<body>
<div class="signin-container" style="width: 400px; margin: auto; padding: 20px; border: 2px solid #006600; border-radius: 10px; background-color: #f9f9f9;">
  <h2 style="text-align: center; color: #006600;">Sign In</h2>
  
  <form action="../img/login.php" method="post">
    <table cellpadding="10" cellspacing="0" style="width: 100%;">
      
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" name="email" id="email" required style="width: 100%; padding: 5px;"></td>
      </tr>

      <tr>
        <td><label for="password">Password:</label></td>
        <td>
          <input type="password" name="password" id="password" required style="width: 100%; padding: 5px;">
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
          <button type="submit" style="padding: 8px 20px; background-color: #006600; color: white; border: none; border-radius: 5px;">Sign In</button>
        </td>
      </tr>

      <tr>
        <td colspan="2" style="text-align: center;">
          <a href="../img/forgot-password.php">Forgot Password?</a> |
          <a href="../img/register.php">Create an Account</a>
        </td>
      </tr>

    </table>
  </form>
</div>


</body>
<?php include("footer.html")
?>