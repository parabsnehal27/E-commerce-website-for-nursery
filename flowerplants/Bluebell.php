
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
   <link rel="stylesheet" href="../style/style1.css">
   <title>Bluebell Plant</title>
</head>

<body>
   <main>
    <header>
        <div class="header2">
            <a href="#" class="logo"><img src="../plantlogo.jpg" height="50px" width="auto"> </a>

            <nav class="navbar">
                <a href="../index.html">Home</a>
                <a href="../aboutus.html">About</a>
                <a href="../contact.html">Contact</a>

            </nav>
            <form action="" class="search-bar-container">
                <input type="text" name="" id="find" placeholder="search here.." onkeyup="search()" class="searchhere"> 
            </form>
            <div class="icons">
                <a href="../cart.php" class="fas fa-shopping-cart"><span id="cart-item" ></span></a>

                <a href="login.html" class="fas fa-user-circle" ></a>
            </div>
        </div>
      <section>
      <?php
            include '../config.php';
            $stmt = $conn->prepare('SELECT * FROM product where id=10');
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()):
        ?>
        <div class="container">
        
            <div class="slide">
                <div class="item" style="background-image: url(BLUEBELL.jpg); width: 30%;height: 350px;">  
                </div>
                <div class="item" style="background-image: url(BULEBELLBAN.jpg);width: 30%;height: 350px;">
                </div>
                <div class="button">
                    <button class="prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="next"><i class="fas fa-arrow-right"></i></button>
                </div>   
            </div>
            <div class="content">
               <h1>Bluebell plant</h1>
               <div class="content-in">
                   <h4><b>₹ 350</h4></b><span>(3.5)<i class="fa fa-star"></i></span>
                </div>
           </div>
            <div class="page-header">
              <form action="" class="form-submit">
                <b>Quantity : </b>
                <input type="number" class="form-control pqty" list="item" style="width:40%;" min="1" max="5" >
                <datalist id="cityname">
                  <option value="1" value="<?= $row['qty'] ?>">
                  <option value="2 " value="<?= $row['qty'] ?>">
                </datalist>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <div class="featured-content-list">
                    <button class="btn btn-info btn-block addItemBtn" style="width: 40%;background-color:green;">Add to cart</button>
                </div>
              </form>
                    <h2><b>Benefits of Bluebell</b></h2> 
                    <div class="benefit-item">
                        <h5>  Improves skin health </h5>
                        <h5>Helps regulate blood sugar levels</h5> 
                   </div> 
                 </div>
               </div>
         </div>
         </div>
         
      </div>
   </div>
   <?php endwhile; ?>
   </section>
   </main>
   <script src="../js/script.js"></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: '../action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: '../action.php',
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