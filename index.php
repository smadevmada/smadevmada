<?php
/**
* Description : Fichier index
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/include/general.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SmaDev - Madagascar</title>
	<link rel="icon" href="<?php echo $HTTP_HOST; ?>/img/favicon.png">
	<link href="<?php echo $HTTP_HOST; ?>/css/all.min.css" rel="stylesheet">
	<link href="<?php echo $HTTP_HOST; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $HTTP_HOST; ?>/css/mdb.min.css" rel="stylesheet">
	<style>
		#home
		{
			background-image: url(<?php echo $HTTP_HOST; ?>/img/fond-smadev.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}

		html, body, header, .intro-section
		{
			height: 100%;
		}

		@media (min-width: 560px) and (max-width: 740px)
		{
			html, body, header, .intro-section
			{
				height: 470px;
			}
		}

		@media (min-width: 800px) and (max-width: 850px)
		{
			.navbar:not(.top-nav-collapse)
			{
				background: #7d8488 !important;
			}

			.navbar
			{
				box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
			}
		}
  	</style>
</head>
<body class="agency">
	<header>
		<?php
	    # Inclusion HEADER
	    require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/include/header.php');
	    ?>
	</header>

	<main>
	    <?php
	    # Inclusion OFFRES ET SERVICES
	    require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/page/services.php');
	    ?>

	    <?php
	    # Inclusion PORTFOLIO
	    require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/page/portfolio.php');
	    ?>

	    <?php
	    # Inclusion QUI SOMMES NOUS
	    require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/page/qui_sommes_nous.php');
	    ?>

	    <?php
	    # Inclusion CONTACTER NOUS
	    require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/page/contacter.php');
	    ?>
	</main>

	<footer class="page-footer text-center text-md-left grey">
		<?php
		# Inclusion FOOTER
		require_once($_SERVER['DOCUMENT_ROOT'].'/smadev/include/footer.php');
		?>	
	</footer>

	<!-- JQuery -->
	<script type="text/javascript " src="<?php echo $HTTP_HOST; ?>/js/jquery-3.4.1.min.js "></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript " src="<?php echo $HTTP_HOST; ?>/js/popper.min.js "></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript " src="<?php echo $HTTP_HOST; ?>/js/bootstrap.min.js "></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript " src="<?php echo $HTTP_HOST; ?>/js/mdb.min.js "></script>

	<script type="text/javascript " src="<?php echo $HTTP_HOST; ?>/js/contact.js "></script>

	<script>
	    // initialize scrollspy
	    $('body').scrollspy({
	      target: '.dotted-scrollspy'
	    });

	    // initialize lightbox
	    $(function () {
	      $("#mdb-lightbox-ui ").load("mdb-addons/mdb-lightbox-ui.html ");
	    });

	    /* WOW.js init */
	    new WOW().init();

	    $('.navbar-collapse a').click(function () {

	      $(".navbar-collapse ").collapse('hide');
	    });
	</script>
</body>
</html>
