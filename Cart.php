<?php session_start();	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Customer Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="style1.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Overlock:ital@1&display=swap');
    </style>
</head>

<body>
	
	<div id="scroll">
		<div class="nav_top">
			<div class="nav_t_l">
				<div class="nav">

					<label for="nav-mb-input" class="nav_bars-btn">
						<i style="cursor: pointer" class="fas fa-bars"></i>
					</label>

					<input type="checkbox" hidden name="" class="nav__input" id="nav-mb-input">
					<label id="menu_hidden" for="nav-mb-input" style="color: black; cursor: pointer">Menu</label>
					<label for="nav-mb-input" class="nav__overlay"></label>
					<!-- Nav Mobile -->
					<div class="left">
						 <main id="accordion">
							<section style="margin-top: 60px;" id="item1">
								<a href="#item1"><h5>WATCHES</h5></a>
								<ul class="item">
									<li><a href="#">CONSTELLATION</a></li>
									<li><a href="#">SEAMASTER</a></li>
									<li><a href="#">SPEEDMASTER</a></li>
									<li><a href="#">DE VILLE</a></li>
									<li><a href="#">Find your Omega</a></li>
									<li><a href="#">Women's Selection</a></li>
									<li><a href="#">Men's Selection</a></li>
									<li>
										<button type="button" class="btn btn-outline-light btn-danger">
											WATCH FINDER
										</button>
									</li>
								</ul>
							</section>

							<section id="item2">
								<a href="#item2"><h5>NATO STRAPS</h5></a>
							</section>

							<section id="item3">
								<a href="#item3"><h5>WATCH STRAPS</h5></a>
							</section>

							 <section id="item4">
								<a href="#item4"><h5>FINE JEWELLERY</h5></a>
								<ul class="item">
									<li><a href="#">CONSTELLATION</a></li>
									<li><a href="#">AQUA SWING</a></li>
									<li><a href="#">OMEGA FLOWER</a></li>
									<li><a href="#">LADYMATIC</a></li>
									<li><a href="#">OMEGA DEWDROP</a></li>
								</ul>
							</section>

							<section style="padding-bottom: 20px; border-bottom: 1px solid #737373;" id="item5">
								<a href="#item5"><h5>ACCESSORIES</h5></a>
								<ul class="item">
									<li><a href="#">FINE LEATHER</a></li>
									<li><a href="#">BRACELETS</a></li>
									<li><a href="#">CUFFLINKS</a></li>
									<li><a href="#">EYEWEAR</a></li>
									<li><a href="#">BELTS</a></li>
									<li><a href="#">KEYHOLDERS & OTHERS</a></li>
									<li><a href="#">FINE FRAGRANCE</a></li>
								</ul>
							</section>

							<section style="margin-top: 20px;" id="item6">
								<a href="#item6"><h5>PLANET OMEGA</h5></a>

							</section>

							 <section id="item7">
								<a href="#item7"><h5>NEWS & STORIES</h5></a>

							</section>

							<section id="item8">
								<a href="#item8"><h5>STORE LOCATOR</h5></a>

							</section>

							<section id="item9">
								<a href="#item9"><h5>CUSTOMER SERVICE</h5></a>
								<ul class="item">
									<li><a href="#">INTERVENTIONS & PRICES</a></li>
									<li><a href="#">FINDING A SERVICE CENTRE</a></li>
									<li><a href="#">5???YEAR WARRANTY</a></li>
									<li><a href="#">USER MANUALS</a></li>
									<li><a href="#">CERTIFICATES & EXTRACTS</a></li>
									<li><a href="#">PRESERVE YOUR OMEGA</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">GLOSSARY</a></li>
									<li><a href="#">ORDER A CATALOG</a></li>
									<li>
										<button type="button" class="btn btn-outline-light btn-danger">
											CONTACT US
										</button>
									</li>
								</ul>
							</section>

						</main>
					</div>
				</div>
			</div>
			<div class="nav_t_c">
				<a href="index.php"><img src="./img/logo_omega.png" title="?????ng h??? OMEGA th????ng hi???u cao c???p."></a>
			</div>
			<div class="nav_t_r" style="text-align: right; padding-right: 20px">
				<div class="search-box">
					<input class="search-txt" type="text" name="" placeholder="Type to search...">
					<a class="search-btn" href="#">
					<i class="fas fa-search"></i>
					</a>
				</div>
				<a href="#"><i class="fa fa-map-marker"></i></a>
				<a href="account.php"><i class="fa fa-user"></i></a>
				<a style="margin-left: 10px;" href="Cart.php"><i class="fas fa-cart-plus"></i></a>
			</div>
		</div>

		<div class="wrapper">
			<nav>
				<ul>
					<li class="dropdown">
						<a href="#">CONSTELLATION</a>
						<ul class="menu-area">
							<h2 style="color: black">CONSTELLATION</h2>
							<div class= "row">
								<div class ="col-md-2 bg-primary ctn_image">

								</div>
								<div class ="col-md-2 bg-primary ctn_image">

								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav5.1.png">
									<a href="#">GLOBEMASTER</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav5.2.png">
									<a href="#">CONSTELLATION</a>
								</div>
								<div class ="col-md-2 ctn_image">

								</div>
								<div class ="col-md-2 ctn_image">

								</div>
							</div><br><br>
								<a style="text-decoration: underline; padding: 20px 40px;" class="more" href="constellation.php">ALL CONSTELLATION</a>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">SEAMASTER</a>
						<ul class="menu-area">
							<h2 style="color: black">SEAMASTER</h2>
							<div class= "row">
								<div class ="col-md-2 ctn_image">

								</div>
								<div class ="col-md-2 bg-primary ctn_image">
								   <img src="./img/nav4.1.png">
									<a href="#">AQUA TERRA</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav4.2.png">
									<a href="#">DIVER 300M</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav4.3.png">
									<a href="#">PLANET OCEAN</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav4.4.png">
									<a href="#">HERITAGE MODELS</a>
								</div>
								<div class ="col-md-2 ctn_image">

								</div>
							</div><br><br>
							<a style="text-decoration: underline; padding: 20px 40px;" class="more" href="seamaster.php">ALL SEAMASTER</a>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">SPEEDMASTER</a>
						<ul class="menu-area">
							<h2 style="color: black">SPEEDMASTER</h2>
							<div class= "row">
								<div class ="col-md-2 bg-primary ctn_image">
								   <img src="./img/nav3.1.png">
									<a href="#">MOONWATCH</a>
								</div>
								<div class ="col-md-2 bg-primary ctn_image">
								   <img src="./img/nav3.2.png">
									<a href="#">HERITAGE MODELS</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav3.3.png">
									<a href="#">DARK SIDE OF THE MOON</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav3.4.png">
									<a href="#">SPEEDMASTER 38</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav3.5.png">
									<a href="#">TWO COUNTERS</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav3.6.png">
									<a href="#">INSTRUMENTS</a>
								</div>
							</div><br><br>
							<a style="text-decoration: underline; padding: 20px 40px;" class="more" href="speedmaster.php">ALL SPEEDMASTER</a>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">DE VILLE</a>
						<ul class="menu-area">
							<h2 style="color: black">DE VILLE</h2>
							<div class= "row">
								<div class ="col-md-2 bg-primary ctn_image">
								   <img src="./img/nav2.1.png">
									<a href="#">LADYMATIC</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav2.2.png">
									<a href="#">HOUR VISION</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav2.3.png">
									<a href="#">TRESOR</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav2.4.png">
									<a href="#">PRESTIGE</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav2.5.png">
									<a href="#">TOURBILLON</a>
								</div>
							</div><br><br>
							<a style="text-decoration: underline; padding: 20px 40px;" class="more" href="DeVille.php">ALL DE VILLE</a>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">Find your OMEGA</a>
						<ul class="menu-area">
							<h2 style="color: black">Find your OMEGA</h2>
							<div class= "row">
								<div class ="col-md-2 bg-primary ctn_image">
								   <img src="./img/nav1.1.png">
									<a href="#">LADYMATIC</a>
								</div>
								<div class ="col-md-2 ctn_image">
									<img src="./img/nav1.2.png">
									<a href="#">HOUR VISION</a>
								</div>
								<div>
									<ul>
										<h4>BY SIZE</h4>
										<li><a href="#">Women's Selection</a></li>
										<li><a href="#">Men's Selection</a></li><br><br>
										<h4>BY STYLE</h4>
										<li><a href="#">Dress Wathces</a></li>
										<li><a href="#">Sport Wathces</a></li>
										<li><a href="#">Dive Wathces</a></li><br><br>
									</ul>
								</div>
								<div>
									<ul>
										<h4>BY MATERIAL</h4>
										<li><a href="#">Gold Wathces</a></li>
										<li><a href="#">Titanium Wathces</a></li>
										<li><a href="#">Ceramic Wathces</a></li>
										<li><a href="#">Steel Wathces</a></li>
									</ul>
								</div>
								<div>
									<ul>
										<h4>BY FEATURE</h4>
										<li><a href="#">Press Wathces</a></li>
										<li><a href="#">Cgronograph Wathces</a></li>
										<li><a href="#">Automatic Wathces</a></li>
										<li><a href="#">Manual Winding Wathces</a></li>
										<li><a href="#">Quartz Wathces</a></li>
									</ul>
								</div>
							</div><br><br>
							<div style="display: flex; margin-left: 42%;">
								<a style="text-decoration: underline; padding: 20px 10px;"  href="find_your_OMEGA.php">ALL SAGGESTIONS</a>
								<a style="text-decoration: underline; padding: 20px 10px;" href="watch_finder.php">WATCH FINDER</a>
							</div>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	
	<?php
        include ('Connect.php');
        if (isset($_GET['action'])) {
            var_dump($_POST);exit;
        }
	?>
    <div class="container" style="margin-top: 150px;">
            <h1>Gi??? h??ng</h1>
            <form id="cart-form" action="Cart.php?action=submit" method="POST">
                <table>
                    <tr>
                        <th class="product-number">STT</th>
                        <th class="product-name">T??n s???n ph???m</th>
                        <th class="product-img">???nh s???n ph???m</th>
                        <th class="product-price">????n gi??</th>
                        <th class="product-quantity">S??? l?????ng</th>
                        <th class="total-money">Th??nh ti???n</th>
                        <th class="product-delete">X??a</th>
                    </tr>
					<tr>
                        <th class="product-number">1</th>
                        <th class="product-name">CO???AXIAL MASTER CHRONOMETER 41 MM 1</th>
                        <th class="product-img"><img src="http://localhost:8888/bai1/thuctap_2021/img/seamaster1.png"/></th>
                        <th class="product-price">20000000</th>
                        <th class="product-quantity"><input type="text" value="" name="quantity[1]"></th>
                        <th class="total-money">20000000</th>
                        <th class="product-delete">X??a</th>
					</tr>
					<tr>
                        <th class="product-number">1</th>
                        <th class="product-name">CO???AXIAL MASTER CHRONOMETER 41 MM 2</th>
                        <th class="product-img"><img src="http://localhost:8888/bai1/thuctap_2021/img/seamaster1.png"/></th>
                        <th class="product-price">20000000</th>
                        <th class="product-quantity"><input type="text" value="" name="quantity[2]"></th>
                        <th class="total-money">20000000</th>
                        <th class="product-delete">X??a</th>
					</tr>
                    <tr id="row-total">
                        <td class="product-number">&nbsp;</td>
                        <td class="product-name">T???ng ti???n</td>
                        <td class="product-img">&nbsp;</td>
                        <td class="product-price">&nbsp;</td>
                        <td class="product-quantity">&nbsp;</td>
                        <td class="total-money">2.500.000</td>
                        <td class="product-delete">X??a</td>
                    </tr>
                </table>
                <div id="form-button">
                    <input type="submit" name="update_click" value="C???p nh???t" />
                </div>
                <hr>
                <div><label>Ng?????i nh???n: </label><input type="text" value="" name="name" /></div>
                <div><label>??i???n tho???i: </label><input type="text" value="" name="phone" /></div>
                <div><label>?????a ch???: </label><input type="text" value="" name="address" /></div>
                <div><label>Ghi ch??: </label><textarea name="note" cols="50" rows="7" ></textarea></div>
                <input type="submit" name="order_click" value="?????t h??ng" />
            </form>
        </div>
	
	
	
	
	<!--footer-->
		<div style="background:#E2DDDD" class="lienhe">
		<div class="send_mail">
			<h5>SUBSCRIBE TO OUR NEWSLETTER</h5><br>
			<input type="text" style="background:white" placeholder="Enter your email address">
			<input id="send_mail" type="submit" value="SUBMIT"/>
		</div>
		<div class="lienket">
			<h5>FOLLOW US</h5>
			<div style="color: #423E3E">
				<i class="fab fa-instagram"></i>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-youtube"></i>
				<i class="fab fa-weixin"></i>
				<i class="fab fa-pinterest-square"></i>
			</div>
		</div>
	</div>
	<div class="row1">
		<div>
			<ul>
				<h4>THE COLLECTION</h4>
				<li><a href="#">Globemaster</a></li>
				<li><a href="#">Constellation</a></li>
				<li><a href="#">Diver 300M</a></li>
				<li><a href="#">Aqua terra 150M</a></li>
				<li><a href="#">Seamaster 300</a></li>
				<li><a href="#">Planet Ocean 600M</a></li>
				<li><a href="#">Moonwatch</a></li>
				<li><a href="#">Dark side of the Moon</a></li>
				<li><a href="#">Ladymatic</a></li>
				<li><a href="#">Hour Vision</a></li>
				<li><a href="#">Tr??sor</a></li>
				<li><a href="#">Prestige</a></li>
				<li><a href="#">Tourbillon</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<h4>FIND YOUR OMEGA</h4>
				<li><a href="#">Women's Selection</a></li>
				<li><a href="#">Men's Selection</a></li>
				<li><a href="#">Gold Watches</a></li>
				<li><a href="#">Chronograph Watches</a></li>
				<li><a href="#">Master Chronometer</a></li><br><br>
				<h4>PLANET OMEGA</h4>
				<li><a href="#">Watchmaking</a></li>
				<li><a href="#">Space</a></li>
				<li><a href="#">Sport</a></li>
				<li><a href="#">James Bond</a></li>
				<li><a href="#">The OMEGA Museum</a></li>
				<li><a href="#">Chronicle</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<h4>MASTER CHRONOMETER</h4>
				<li><a href="#">Access my Test Results</a></li>
				<li><a href="#">iPhone Card Scanner App</a></li><br><br>
				<h4>STORE LOCATOR</h4>
				<li><a href="#">Find a Store</a></li>
				<li><a href="#">Locate me</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<h4>CUSTOMER SERVICE</h4>
				<li><a href="#">Interventions and Prices</a></li>
				<li><a href="#">Preserve your OMEGA</a></li>
				<li><a href="#">Find a Service Center</a></li>
				<li><a href="#">Order an Extract from the Archives</a></li>
				<li><a href="#">Order a Catalogue</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">GLOSSARY</a></li><br><br>
				<h4>MORE</h4>
				<li><a href="#">Press Room</a></li>
				<li><a href="#">Jobs</a></li>
			</ul><br>
			<button type="button" class="btn btn-outline-light btn-danger">CONTACT US</button>
		</div>
	</div>
	<div class="footer">
		<div class="ftr_">
			<small style="padding-left: 15px">Copyright OMEGA SA. All rights reserved.</small>
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Notice</a></li>
					<li><a href="#">Cookie Notice</a></li>
					
				</ul>
			</div>
			<div class="footer_hidden" style="color: #555555;margin-left: 40%">
				<i style="color: #555555" class="fa fa-globe"></i>ENGLISH (INTERNETIONAL) <i style="color: #555555" class="fa fa-angle-up"></i>
			</div>
		</div>


		<script type="text/javascript">
			   $(document).ready(function(){
				 //jquery for toggle sub menus
				 $('.sub-btn').click(function(){
				   $(this).next('.sub-menu').slideToggle();
				   $(this).find('.dropdown').toggleClass('rotate');
				 });
			   });
			   </script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="style.css">

	
</body>
</html>
