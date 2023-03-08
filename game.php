<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index2.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!DOCTYPE html>
<html>
 	<head>
	<meta charshet="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SR GAMING SITE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images\x.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	    <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

      <!-- Bootstrap CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
<style>
.mySlides {display:none;}
</style>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="main.js"></script>
  
</head>
<body>
	<!-- <video id="background-video" autoplay loop muted poster="Pexels Videos 2715412.mp4">
		<source src="videos\Pexels Videos 2715412.mp4" type="video/mp4">
		</video> -->

			
		<header>
    <div class="logo">
		  <a href="index2.php"><img src="images\logo3.png"  ></a>
		  </div>
		  <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>


		  <div class="search-wrapper ">
			<div class="input-holder ">
				<input type="text " class="search-input " placeholder="Type to search " />
				<button class="search-icon " onclick="searchToggle(this, event); ">
					<span></span>
				</button>
			</div>
			<span class="close " onclick="searchToggle(this, event); "></span>
		</div>

		
		  <label>
			<input type="checkbox">
			<div class="toggle">
				<span class="top_line common"></span>
				<span class="middle_line common"></span>
				<span class="bottom_line common"></span>
			</div>
			<div class="slide">
		<ul class="nav">
		  <li><a href="homes.php">Home</a></li>
		   <li><a href="About.html">About</a></li>
			 <li><a href="game.php">Games</a></li>
			 <li><a href="Tournament.html">Tournaments</a></li>
			 <li><a href="#contact">Contact</a></li>
       <li class="btn"><a href ="signup.php">Registration</a></li>
			
		</ul>
	</label>

		<div class="toggleMenu" onclick="toggleMenu();"></div>

	</header>
		
		  
<div class="games" id="Games">
    <h2>Popular Games</h2>
    <ul>
      <li class="list active" data-filter="all">All</li>
      <li class="list active" data-filter="pc">Pc games</li>
      <li class="list active" data-filter="moblie">Moblie games</li>
    </ul>

    <div class="container">
      <div class="row text-center py-5">
          <?php
              $result = $database->getData();
              while ($row = mysqli_fetch_assoc($result)){
                  component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
              }
          ?>
      </div>
</div>
    </div>

  <!--Contact-->
 <div class="contact" id="contact">
    <img src="images/iphone-4699057_1280.jpg">
    <div class="form">
      <h1>Contact Us</h1>
      <div class="inputBx">
        <p>Enter Name</p>
        <input type="text" placeholder="Full Name">
      </div>
      <div class="inputBx">
        <p>Enter Email</p>
        <input type="text" placeholder="full Name">
      </div>
      <div class="inputBx">
        <p>Message</p>
        <textarea placeholder="type here..."></textarea>
      </div>
      <div class="inputBx">
        <input type="submit" name="Submit">
      </div>
    </div>
   </div>
  <!--Footer-->
  <footer>
		<div class="info">
			<div class="logo">
			<img src="images/logo3.png" >
		  </div>
			  <p><i class='bx bx-copyright' ></i>2022 All Rights Reserved</p>
			  <ul>
				 <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
				 <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
				 <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
				 <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
				</ul>
			   </div>
		</footer>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  </html>
  