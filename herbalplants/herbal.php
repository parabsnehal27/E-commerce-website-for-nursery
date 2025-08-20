<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERBAL PLANTS</title>
    <link rel="stylesheet" href="../style/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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
                <a href="../cart.php" class="fas fa-shopping-cart"></a>
                 <a href="../login.html" class="fas fa-user-circle" ></a>
            </div>
    </header>
    <MAIN>
        <section class="products" id="products" >
            <div class="box-container product-card product" onclick="tulsi()" >
                <div class="box">
                    <span class="discount"></span>
                        <div class="image">
                        <a href="tulsi.php"><img src="tulsi.jpg" ></a>
                    </div>
                    <div class="content">
                        <h3>TULSI PLANT</h3>
                                         
                    </div>                  
                </div>
            </div>
            
            <div class="box-container product-card" onclick="aloevera()">
                <div class="box">
                    <span class="discount"></span>
                    <div class="image">
                        <a href="aloevera.php"><img src="aloe vera.jpg" ></a>
                    </div>
                    <div class="content">
                    <h3>ALOE VERA PLANT</h3>
                        
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="ash()">
                <div class="box">
                    
                    <div class="image">
                    <a href="ash.php"><img src="Ashwagandha .jpg" ></a>
                    </div>
                    <div class="content">
                        <h3>ASHWAGANDHA PLANT</h3>
                        
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="basil()">
                <div class="box">
                    <div class="image">
                    <a href="basil.php"><img src="Basil.jpg" ></a>
                    </div>
                    <div class="content">
                        <h3>BASIL PLANT</h3>
                        
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="brahmi()">
                <div class="box">
                    
                    <div class="image">
                    <a href="brahmi.php"><img src="Brahmi.jpg" ></a>
                    </div>
                    <div class="content">
                        <h3>BRAHMI PLANT</h3>
                      
                    </div>
                </div>
            </div>
            <!--<div class="box-container product-card" onclick="Fenugreek()">
                <div class="box">
                    
                    <div class="image">
                        <img src="Fenugreek.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>FENUGREEK PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="gingko()">
                <div class="box">
                   
                    <div class="image">
                        <img src="gingko.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>GINGKO PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>-->
            <div class="box-container product-card" onclick="lemonbalm()">
                <div class="box">
                   
                    <div class="image">
                    <a href="lemonblam.php"><img src="Lemon Balm.jpg" ></a>
                    </div>
                    <div class="content">
                        <h3>LEMON BALM PLANT</h3>
                        
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="lemongrass()">
                <div class="box">
                    
                    <div class="image">
                    <a href="lemongrass.php"><img src="Lemon Grass.jpg" ></a>
                    </div>
                    <div class="content">
                        <h3>LEMON GRASS PLANT</h3>
                        
                    </div>
                </div>
            </div>
            <!--<div class="box-container product-card" onclick="neem()">
                <div class="box">
                   
                    <div class="image">
                        <img src="neem.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>NEEM PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>
            <!--<div class="box-container product-card" onclick="Rosemary()">
                <div class="box">
                   
                    <div class="image">
                        <img src="Rosemary.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>ROSEMARY PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="turmeric()">
                <div class="box">
                   
                    <div class="image">
                        <img src="turmeric.jpg" alt="tulsi">                       
                    </div>
                    <div class="content">
                        <h3>TURMERIC PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="adulsa()">
                <div class="box">
                    
                    <div class="image">
                        <img src="Adulsa_Plant.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>ADULSA PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="ajwain()">
                <div class="box">
                    
                    <div class="image">
                        <img src="ajwain plant.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>AJWAIN PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>
            <!--<div class="box-container product-card" onclick="ajwain()">
                <div class="box">
                    
                    <div class="image">
                        <img src="ajwain plant.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>AJWAIN PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>
            <div class="box-container product-card" onclick="Shatavari()">
                <div class="box">
                   
                    <div class="image">
                        <img src="Shatavari plant.jpg" alt="tulsi">
                    </div>
                    <div class="content">
                        <h3>SHATAVARI PLANT</h3>
                        <div class="price">150</div>
                    </div>
                </div>
            </div>-->
        </section>
       
    </MAIN>
   <script src="../js/drop.js"></script>
</body>
</html>