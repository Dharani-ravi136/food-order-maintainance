<?php include("header.html"); ?>

<body>
<div class="login">
  <h2>FOOD ORDER FORM</h2>
  <div class="signin-container" style="display:flex; gap:40px; align-items: flex-start;">

    <?php
      // Display selected food item and image
      if (isset($_GET['item']) && isset($_GET['image'])) {
        $selectedItem = htmlspecialchars($_GET['item']);
        $selectedImage = htmlspecialchars($_GET['image']);
        echo "
          <div class='selected-item'>
            <p><strong>$selectedItem</strong></p>
            <img src='$selectedImage' alt='$selectedItem' class='selected-img'>
          </div>";
      }

      // Show success or error message
      if (isset($_GET['error'])) {
        echo "<div class='error-message'>" . htmlspecialchars($_GET['error']) . "</div>";
      }
      if (isset($_GET['success'])) {
        echo "<div class='success-message'>Your order has been successfully placed!</div>";
      }
    ?>

    <form action="order-process.php" method="post" style="flex: 1;">
      <table cellpadding="10" width="100%">
        <tr>
          <td><label for="name">Customer Name</label></td>
          <td><input type="text" id="name" name="name" required></td>
        </tr>

        <tr>
          <td><label for="phone">Phone Number</label></td>
          <td><input type="tel" id="phone" name="phone" required></td>
        </tr>

        <tr>
          <td><label for="address">Delivery Address</label></td>
          <td><textarea id="address" name="address" rows="3" required></textarea></td>
        </tr>

        <tr>
          <td><label for="food">Select Food Item</label></td>
          <td>
            <select id="food" name="food" required>
  <option value="">Choose an item</option>
  <option value="Idly">Idly</option>
  <option value="Dosa">Dosa</option>
  <option value="Parotta">Parotta</option>
  <option value="Ven Pongal">Ven Pongal</option>
  <option value="Chapati">Chapati</option>
  <option value="Puri">Puri</option>
  <option value="Burger">Burger</option>
  <option value="Chicken Noodles">Chicken Noodles</option>
  <option value="Chicken Rice">Chicken Rice</option>
  <option value="Pasta">Pasta</option>
  <option value="Pizza">Pizza</option>
  <option value="Biriyani">Biriyani</option>
</select>

          </td>
        </tr>

        <tr>
          <td><label for="quantity">Quantity</label></td>
          <td>
            <select id="quantity" name="quantity" required>
              <option value="">Select Plates</option>
              <option value="1">1 Plate</option>
              <option value="2">2 Plates</option>
              <option value="3">3 Plates</option>
              <option value="4">4 Plates</option>
            </select>
          </td>
        </tr>

       
        <tr>
  <td colspan="2" style="text-align:center;">
    <div class="payment-buttons">
      <button type="submit"  class="left-btn"><span>Cash on Delivery</span></button>
      <button type="submit" class="right-btn"><span>Online Payment</span></button>
    </div>
  </td>
</tr>
        <tr>
          <td colspan="2" style="text-align:center;">
            <button type="submit">Place Order</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>



</body>
<?php include("footer.html"); ?>
