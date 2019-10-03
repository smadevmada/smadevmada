<?php
# HEADER
require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/include/general.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    	<div class="container">
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
        	</button>

        	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        		<ul class="navbar-nav mr-auto smooth-scroll">
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#home">Accueil<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#services" data-offset="20">Nos Services</a>
					</li>

					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#portfolio" data-offset="100">Portfolio</a>
					</li>

					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#about" data-offset="100">Qui sommes nous</a>
					</li>

					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#contact" data-offset="100">Contact</a>
					</li>
				</ul>
				<!-- Social Icon  -->
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a class="nav-link"><i class="fab fa-facebook-f light-green-text-2"></i></a>
					</li>

					<li class="nav-item">
						<a class="nav-link"><i class="fab fa-twitter light-green-text-2"></i></a>
					</li>

					<li class="nav-item">
						<a class="nav-link"><i class="fab fa-instagram light-green-text-2"></i></a>
					</li>
				</ul>
        	</div>
		</div>
	</nav>

    <!-- Video -->
    <section class="view intro-section" id="home">

      <video class="video-intro"
        poster="<?php echo $HTTP_HOST; ?>/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg" playsinline autoplay
        muted loop>

        <source src="<?php echo $HTTP_HOST; ?>/img/video/animation-intro.mp4" type="video/mp4">

      </video>

      <div class="mask rgba-gradient">

        <div class="container h-100 d-flex justify-content-center align-items-center">

          <div class="row pt-5 mt-3">

            <div class="col-md-12 white-text text-center smooth-scroll">

              <div class="white-text text-center wow fadeInUp">

                <h3 class="display-3 font-weight-bold text-uppercase">SmaDev Madagascar</h3>

                <h5 class="mb-5">Smart Development</h5>

                <a class="btn btn-outline-white btn-rounded wow fadeInUp" data-wow-delay="0.2s" href="#about"
                  data-offset="100"> <span>VOIR PLUS</span> </a>

              </div>

            </div>

          </div>

        </div>

      </div>
    </section>
