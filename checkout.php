<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel="stylesheet" href="style/style.css"> 
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <div class="header2">
    <a href="#" class="logo"><img src="plantlogo.jpg" height="50px" width="auto"> </a>

      <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="aboutus.html">About</a>
        <a href="contact.html">Contact</a>

      </nav>
      <div class="icons">
        <a href="cart.php" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user-circle" ></a>
      </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" id="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" id="email" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" id="contact" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
           <input type="submit" name="cod" value="Cash On Delivery" class="btn btn-block" style=" background-color:	#A0A0A0;color:white">
            
            <!--<select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>-->
          </div>
          <div class="form-group">

          </div>
          <input type="button" name="button" value="Pay Now" onclick="MakePayment()" class="btn btn-block" style="background-color:	#A0A0A0 ;color:white;">
        </form>
        
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function MakePayment() {
        var name = $("#name").val();
        var amount = $("#grand_total").val();
        var email=$('#email').val();
        var contact=$('#contact').val();
        var options = {
    "key": "rzp_test_WRObkYKnVyZruu", // Enter the Key ID generated from the Dashboard
    "amount": amount*100,
    "currency": "INR",
    "name":name,
    "description": "vanspti Website",
    "image": "",
    "prefill":
    {
      "email": email,
      "contact": contact,
    },
    config: {
    display: {
      blocks: {
        banks: {
          name: 'All payment methods',
          instruments: [
            {
              method: 'upi'
            },
            {
              method: 'card'
            },
            {
                method: 'wallet'
            },
            {
                method: 'netbanking'
            }
          ],
        },
      },
      sequence: ['block.banks'],
      preferences: {
        show_default_blocks: false,
      },
    },
  },
    "handler": function (response) {
      jQuery.ajax({
        type:"POST",
        url:"payment.php",
        data:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
        success:function(result){
            window.location.href="success.php";
        }
      });
    },
    "modal": {
      "ondismiss": function () {
        if (confirm("Are you sure, you want to close the form?")) {
          txt = "You pressed OK!";
          console.log("Checkout form closed by the user");
        } else {
          txt = "You pressed Cancel!";
          console.log("Complete the Payment")
        }
      }
    }
  };
  var rzp1 = new Razorpay(options);
    rzp1.open();
    } 
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>