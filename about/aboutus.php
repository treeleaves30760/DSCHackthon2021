<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>About us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="../css/main.css" rel="stylesheet" type="text/css">
	</head>
	<body class="no-sidebar is-preload">
		<header class="header">
    		<nav class="navbar navbar-expand-lg fixed-top py-3">
        		<div class="container"><a href="./index.php" class="navbar-brand text-uppercase font-weight-bold">宿舍食物外送分配取餐系統</a>
           			<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            		<div id="navbarSupportedContent" class="collapse navbar-collapse">
                		<ul class="navbar-nav ml-auto">
                   			<li class="nav-item active"><a href="../index.php" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
            	        	<li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                	    	<li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                    		<li class="nav-item"><a href="../admin.php" class="nav-link text-uppercase font-weight-bold">To Admin</a></li>
    	            	</ul>
        	    	</div>
        		</div>
    		</nav>
  		</header>

		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1>Meichu eat</h1>
							<p>零卡的距離</p>
						</div>

				</section>

			<!-- Main -->
				<div id="main" class="wrapper style2">
					<div class="title">About us</div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>零卡的距離，杜絕人與人之間的聯繫<br class="mobile-hide" /></h2>
										<p>協助宿舍外送食物的管理平台</p>
									</header>
								<!--	<div class="image featured">
										<img src="images/pic01.jpg" alt="" />
										<p>hello</p> 
									</div>  -->
									<h2>Who we are</h2>
									<p>A team from Hshinchu, hope to solve some problems around us with some cool idea 
									and our interest at programming^^</p>

									<h2>The problem we found</h2>
									<p>Living in the dormitory makes us think of a question: How to get our meal
									without walking out? The answer to the question may be quite simple: 
									food delivery system, but <u style = "color: black">what if a dormitory with hundreds of people 
									order meals at the same time?</u> This may result in lots of people swarming the entrance 
									for the delivery.</p>

									<h2>The way we solve</h2>
									<p>Our idea is simple:<br>
									When the delivery arrived, manager collect related INFO:<br>
									1. user's name<br>
									2. what the user ordered<br><br>
									At the user side, they will see if their meal has arrived. If the food is delivered to the dormitory, 
									they can press the "reserve" button, and the backend will tell them when to pick up their meal
									We create a "pickup status" to tell whether the meal had been picked up by the user
								</article>
							</div>

					</div>
				</div>
	

	<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5><i class="fas fa-hamburger"></i>MCE INC.│零卡的距離</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="">Benefit</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="">Legal Terms</a></li>
                                <li><a href="">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item"><a href="https://github.com/treeleaves30760/DSCHackthon2021"
                                class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                    </ul>
                    <br>
                </div>
                <div class="col-md-2" id="contactUs">
                    <h5 class="text-md-right">Contact Us</h5>
                    <hr>
                </div>
                <div class="col-md-5">
                  <form action="./php/sendContact.php" method="post">
                      <fieldset class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                      </fieldset>
                      <fieldset class="form-group">
                          <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                      </fieldset>
                      <fieldset class="form-group text-xs-right">
                          <input type="submit" class="btn btn-secondary-outline btn-lg" value="送出"></button>
                      </fieldset>
                  </form>
              </div>
            </div>
        </div>
    </footer>


    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>


	</body>
</html>