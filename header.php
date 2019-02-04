

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body>

		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
				<div>
					<a href="/wordpress-5.0.3/wordpress/"><img src="/wordpress-5.0.3/wordpress/wp-content/uploads/2019/02/logo_blog2.png" height="60px" width="60px"></img></a>
					<a id="name_promo" class="navbar-brand" href="/wordpress-5.0.3/wordpress/">Café-Inline</a>
				</div>
				
				<button id="toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul id="buttons_container" class="navbar-nav mr-auto">
        					<li><a class="nav-link" href="/wordpress-5.0.3/wordpress/">Accueil</a></li>
							<li><a class="nav-link" href="wordpress-5.0.3/wordpress/articles/">Articles</a></li>
        					<li><a class="nav-link" href="#">À propos</a></li>						
					</ul>
				</div>
			</nav>

			<?php
			if ( is_home() ) :
				echo"<div class='container-fluid'>
						<div class='container'>
							<div class='row justify-content-center'>
								<div class='col-lg-6'>
									<img src='/wordpress-5.0.3/wordpress/wp-content/uploads/2019/02/logo_blog2.png' height='200px' width='200px'></img>
								</div>
							</div>
						</div>
					</div>
				<h1> Bienvenue sur le blog <br> de la promotion Café-Inline! </h1>";

			elseif( is_page('articles') ) :

				echo"<div class='container-fluid'>
				<div class='container'>
					<div class='row justify-content-center'>
						<div class='col-lg-6'>
							<img src='/wordpress-5.0.3/wordpress/wp-content/uploads/2019/02/logo_blog2.png' height='200px' width='200px'></img>
						</div>
					</div>
				</div>
			</div>
		<h1> Nos articles </h1>";

			elseif( is_single() ) :

				echo"<div id='header_article' class='container-fluid' style='background-image:url(".get_the_post_thumbnail_url().")'>
				<div class='container'>
					<div class='row justify-content-center'>
						<div class='col-lg-6'>
							<h1>
								".get_post(get_the_id())->post_title."
							</h1>
						</div>
					</div>
				</div>
			</div>";
			
			elseif( is_404() ) :
				get_header( '404' );
			else :
				get_header('zouloux');
			endif;
			?>
		</header><!-- .site-header -->