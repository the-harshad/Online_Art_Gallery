<?php
session_start();
if(!isset($_SESSION['userdata'])){
    $uemail = $_SESSION['userdata'];
    echo "errors";
    header("location: ../login.php");

}

?>
<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
  }

  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .checkout-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .checkout-form {
    margin-top: 20px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .form-group input[type="text"], .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .payment-methods {
    margin-top: 20px;
  }

  .payment-method {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .payment-method input[type="radio"] {
    margin-right: 10px;
  }

  .checkout-button {
    text-align: right;
    margin-top: 20px;
  }

  .checkout-button button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .checkout-button button:hover {
    background-color: #0056b3;
  }
</style>
</head>
  <body>
<div class="container">
    <h2 class="checkout-title">Checkout</h2>
    <form class="checkout-form" action='conform.php' method="POST">
      <div class="form-group">
        
            <label>ORDER_ID::</label>
					<input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" readonly		value="<?php echo  "ORDS" .$_SESSION['rand']=rand(10000,99999999)?>"> Please note this

 <br><br> 
						    						    
						    <h5><?php if(isset($_SESSION['userdata'])) { echo  $_SESSION['userdata']; } else{ echo 'error'; } ?></h5>

       <label>Price</label>
					<h2>₹ <?php if(isset($_SESSION['price'])) { echo  $_SESSION['price']; } else{ echo 'error'; } ?></h2>
            
            
            <br><br>
      <div class="form-group">
        <label for="paymentMethod">Payment Method</label>
        <!--select id="paymentMethod" name="paymentMethod">
          <option value="creditCard">Credit Card</option>
          <option value="paypal">PayPal</option>
          <option value="upi">UPI</option>
        </select-->
      </div>
      <div class="payment-methods">
        <div class="payment-method">
          <input type="radio" name="paymentType" id="creditCard" required>
          <h4>Credit Card</h4>
        </div>
        <div class="payment-method">
          <input type="radio" name="paymentType" id="paypal">
          <h4>Net Banking</h4>
        </div>
        <div class="payment-method">
          <input type="radio" name="paymentType" id="upi">
         <h4>Paytm</h4>
      </div>
        <div class="payment-method">
          <input type="radio" name="paymentType" id="upi">
         <h4>BHIM UPI</h4>
      </div>
      </div>
      <div class="checkout-button">
        <button type="submit" name="conform">Prosses to pay</button>
            <button type="submit" name="notcon">not pay</button>
            

      </div>
    </form>
  </div>
</body>
</html>


