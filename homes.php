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
<meta charset="utf-8">
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
	
<!--slideshow-->
<div class="w3-content w3-section" style="max-width: 1387px;
margin:1px;">
  <img class="mySlides" src="images\aa.jpg" style="width:100%">
  <img class="mySlides" src="images\win.jpg" style="width:100%">
  <img class="mySlides" src="images\win1.jpg" style="width:100%">

<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
		
<section>
	<h4 style="line-height: 4.2; color: #24ed24;">Discover your next favourite game</h4>
	<div class="boxx">
		<a href="#" class="boxs">
			<img src="images\Atomic_heart_box_art_2.jpg" alt="" class="poster">
		</a>
		<a href="#" class="boxs">
			<img src="images\cities-sky.jpg" alt="" class="poster">
		</a>
		<a href="#" class="boxs">
			<img src="images\darkest.jpg" alt="" class="poster">
		</a>
		<a href="#" class="boxs">
			<img src="images\mount.jpg" alt="" class="poster">
		</a>
		<a href="#" class="boxs">
			<img src="images\sd-gun.jpg" alt="" class="poster">
		</a>
		<a href="#" class="boxs">
			<img src="images\shadow-warr.jpeg" alt="" class="poster">
		</a>
		<a href="#" class="boxs">
			<img src="images\jojo.jpg" alt="" class="poster">
		</a>
		<a href="#" class="boxs">
			<img src="images\aragami.jpg" alt="" class="poster">
		</a>
       <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="margin-right: 54px;">&#10095;</button>	
</div>
</section>
		
			
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
		<!---Home Banner-->
		  <div class="banner" id="Home">
			<div class="bg">
			  <div class="content">
				<h2>A New Home for<br>
				  Game Lover</h2>
				  <p>A filibuster lasting 24 hours and 18 minute by Senate Democrats, but Thurmond saw the bill as "cruel and unu</p>
				  <a href="https://www.gameflare.com/online-game/chaotic-garden/" class="btn">Join Now</a>
				</div>
			  <img src="images\z.jpg">
			  </div>
		  </div>
		  <!--About-->
			<div class="about" id="About">
			  <div class="contentBx">
			  <h2>About As</h2>
			  <p>Insurgency: Sandstorm is a multiplayer tactical first-person shooter video game developed by New World Interactive and published by Focus Home Interactive. The game is a sequel to the 2014 video game Insurgency. Set in an unnamed fictional Middle Eastern region, the game depicts a conflict between two factions: "Security", loosely based on various world militaries (namely NATO forces; United States SOCOM; the armed forces of Iraq, Afghanistan, and Syria; Kurdish YPG and YPJ; and Western private military companies), and "Insurgents", loosely based on various paramilitary and terrorist groups (namely ISIL, the Taliban, Al-Qaeda, Security defectors, and implied Russian mercenaries).[
				the planned story campaign. <span id="dots">...</span><span id="more">and fluid animations, but was criticized for its technical issues and optimization, with some lamenting the cancellation oferisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
			<button onclick="myFunction()" id="myBtn">Read more</button>
			</div>
			<video controls muted width="600px">
			  <source src="videos\video-1.mp4" type="video/mp4">
			 </video>
		  </div>
		<!--popular-->
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
		   <!--Tournaments-->
		 <div class="tournaments" id="Tournaments">
		  <h2>Live Tournaments</h2>
		  <div class="boxBx">
			<div class="box">
			  <video autoplay muted loop id="myVideo" width="600" height="300" controls>
				<source src="videos\videoplayback.mp4" type="video/mp4">
			  </video>
		
			  <div class="content">
			   <h4><span>50</span> match in progress...</h4>
			  <p>Call of Duty is a first-person shooter video game based on id Tech 3, and was released on October 29, 2003. The game was developed by Infinity Ward and published by Activision. The game simulates the infantry and combined arms warfare of World War II.[6] An expansion pack, Call of Duty: United Offensive, was developed by Gray Matter Interactive with contributions from Pi Studios and produced by Activision....
			  </p>
			  <div class="btn">
				  <a href="videos\videoplayback.mp4" class="watch">Watch</a>
				  <a href="https://www.callofdutyleague.com/en-us/" class="join">Join Now</a>
			  </div>
			  </div>
			</div>
			<div class="box">
			  <video autoplay muted loop id="myVideo" width="600" height="300" controls>
				<source src="videos\LOST CROWNED A Clash Short Film - oDownloader.com.mp4" type="video/mp4">
			  </video>
			  <div class="content">
			   <h4><span>50</span> match in progress...</h4>
			  <p>Clash of Clans is an online multiplayer game in which players form communities called clans, train troops, and attack other players to earn resources. There are four currencies or resources in the game.[3] Gold and elixir can be used to build and upgrade defenses and traps that protect the player's village from other players' attacks and to build and upgrade buildings. Elixir and dark elixir are also used to upgrade troops and spells. In past, they were also used to train the troops but now training is free...
			  </p>
			  <div class="btn">
				  <a href="#" class="watch">Watch</a>
				  <a href="#" class="join">Join Now</a>
			  </div>
			  </div>
			</div>
		
			<div class="box">
			  <video autoplay muted loop id="myVideo" width="600" height="300" controls>
				<source src="videos\Subway Surfers Official Trailer - oDownloader.com.mp4" type="video/mp4">
			  </video>
			  <div class="content">
			   <h4><span>50</span> match in progress...</h4>
			  <p>Subway Surfers is an endless runner video game. The game starts by tapping the touchscreen, while Jake (the game's starter character) or any other character sprays graffiti on a subway, and then gets caught in the act by the inspector and his dog, who starts chasing the character. While running, the player can swipe up, down, left, or right to avoid crashing into oncoming obstacles especially moving subways, poles, tunnel walls and barriers...
			  </p>
			  <div class="btn">
				  <a href="#" class="watch">Watch</a>
				  <a href="#" class="join">Join Now</a>
			  </div>
			  </div>
			</div>
		
			<div class="box">
			  <video autoplay muted loop id="myVideo" width="600" height="300" controls>
				<source src="videos\video-4.mp4" type="video/mp4">
			  </video>
			  <div class="content">
			   <h4><span>50</span> match in progress...</h4>
			  <p>Free Fire is an online-only battle royale game played in third person perspective.
		
				A battle royale match consists of up to 50 players parachuting onto an island in search of weapons and equipment to kill the other players. Players are free to choose their starting position and take weapons and supplies to extend their battle life...
			  </p>
			  <div class="btn">
				  <a href="#" class="watch">Watch</a>
				  <a href="https://www.youtube.com/watch?v=WZMNk5K7A98" class="join">Join Now</a>
			  </div>
			  </div>
			</div>
		
			<div class="box">
			  <video autoplay muted loop id="myVideo" width="600" height="300" controls>
				<source src="videos\video-2.mp4" type="video/mp4">
			  </video>
			  <div class="content">
			   <h4><span>50</span> match in progress...</h4>
			  <p>BitCraft is a MMO community sandbox game created by the indie game developer Clockwork Labs, hailing from San Francisco, California. BitCraft strongly is focused on city-building and exploration, but also on farming and crafting as well as expanding skillsets.
			  </p>
			  <div class="btn">
				  <a href="#" class="watch">Watch</a>
				  <a href="#" class="join">Join Now</a>
			  </div>
			  </div>
			</div>
		
			<div class="box">
			  <video autoplay muted loop id="myVideo" width="600" height="300" controls>
				<source src="videos\video-2.mp4" type="video/mp4">
			  </video>
			  <div class="content">
			   <h4><span>50</span> match in progress...</h4>
			  <p>Cedar Hill Yard is a railroad classification yard in New Haven, North Haven, and Hamden, Connecticut, in the United States. It was built by the New York, New Haven and
			  </p>
			  <div class="btn">
				<a href="videos\video-3.mp4"class="watch">Watch</a>
		
				  <a href="#" class="join">Join Now</a>
			  </div>
			  </div>
			</div>
		  </div>
		 </div>
		<!--Contact-->
		 <div class="contact" id="contact">
		  <img src="images\iphone-4699057_1280.jpg">
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
			<img src="images\logo3.png" >
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
		  <script>
			var myIndex = 0;
			carousel();
			
			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 2000); // Change image every 2 seconds
			}
			
				var slideIndex = 1;
				showDivs(slideIndex);

			function plusDivs(n) {
  				showDivs(slideIndex += n);
			}

			function showDivs(n) {
  				var i;
				  var x = document.getElementsByClassName("mySlides");
  				if (n > x.length) {slideIndex = 1}
  				if (n < 1) {slideIndex = x.length}
  				for (i = 0; i < x.length; i++) {
    			x[i].style.display = "none";  
  		}
 				 x[slideIndex-1].style.display = "block";  
}
			
			</script>
						<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		</body>    
</html>