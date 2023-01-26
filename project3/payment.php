<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,
               initial-scale=1.0"/>
    <link rel="stylesheet" href="pay.css" 
          class="css" />
  </head>
  <body>
  </div>
    <div class="container">
      <div class="main-content">
        <p class="text">PAYMENT GATEWAY</p>
      </div>
  
      <div class="centre-content">
        <h1 class="price">Your order is being processed for Rs. <?php
          $con = mysqli_connect('localhost:3307', 'root', '', 'db');
          $query = 'select sum(price) AS total from cart';
          $result = mysqli_query($con, $query);
          
          $row = mysqli_fetch_assoc($result);
          $sum = $row['total'];
          echo $sum;
          mysqli_close($con);
          
          ?> <span>/-</span></h1>
        <p class="course">
           
        </p>
      </div>
  
      <div class="last-content">
        <button type="button" class="pay-now-btn">
           Cash On Delivery
        </button>
        <button type="button" class="pay-now-btn">
           Pay With UPI
        </button>
  
        <!-- <button type="button" class="pay-now-btn">
        Netbanking options
        </button> -->
      </div>
  
      <div class="card-details">
        <p>Pay using Credit or Debit card</p>
  
        <div class="card-number">
          <label> Card Number </label>
          <input
            type="text"
            class="card-number-field"
            placeholder="**** **** ****"/>
        </div>
        <br />
        <label for="start">Expiry date:</label>

<input type="date" id="start" name="trip-start"
       value="2021-12-08"
       min="2021-12-08" max="2050-12-31">

  
        <div class="cvv-number">
          <label> CVV number </label>
          <input type="text" class="cvv-number-field" 
                 placeholder="xxx" />
        </div>
        <div class="nameholder-number">
          <label> Card Holder name </label>
          <input
            type="text"
            class="card-name-field"
            placeholder="Enter your Name"/>
        </div>
        
        <button type="submit" 
                class="submit-now-btn">
          Pay Now
        </button>
      </div>
    </div>
  </body>
</html>