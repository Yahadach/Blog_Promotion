
<?php 
/*
Template Name: accueil
*/


	get_header();
	
?>



	<?php 
	
		if( is_single() ){
			include "article.php";
			get_footer();
			exit();
		}

		if( is_page('articles') ){
			include "articles.php";
			get_footer();
			exit();
		}

		if (is_page('projets')){
			include 'projets.php';
			get_footer();
			exit();
		  }

		  if (is_page('promotion')){
			include 'promotion.php';
			get_footer();
			exit();
		  }

		  if (is_page('mentions')){
			include 'mentions.php';
			get_footer();
			exit();
		  }

	?>
	<!------------------------------------------------------>

	<section id="section-welcome" class="container-fluid">
		<div id="container-title" class="container">
			<div id="row-title" class="row no-gutters">
				<div class="col-lg-6 title no-gutters">
					<h2> Bienvenue à vous! </h2>
				</div>
			</div>
		</div>

		<div class="container">
			<div id="row-presentation" class="row justify-content-center">
				<div id="presentation" class="col-lg-6">
					<p>Café-inline, c’est 10 apprentis développeurs web,<br> du talent et beaucoup de café.</p><br>

					<p>Sur ce blog, vous trouverez les articles que nous avons rédigés, autour du web, de la veille technologique et de l’actualité.<br>
					Vous trouverez également les projets que nous avons réalisés (avec amour)
					au cours de notre formation.<br>

					</p><br><p>N’hesitez pas à jeter un oeil à nos réseaux sociaux et à suivre nos actualités.</p>
				</div>
				<div id="promotion" class="col-lg-6">
				</div>
			</div>
		</div>
		
	</section>

	<!-------------- Les derniers articles ---------------->

	<section id="section-articles" class="container-fluid">
			<div id="row-articles-title" class="row">
				<div id="col-articles-title" class="col-lg-8 title">
					<h2> Nos derniers articles </2>
				</div>
			</div>

		<?php 
			$recentPosts = new WP_Query();
			$recentPosts->query('showposts=6');
		?>


			<div id="row-articles" class="row justify-content-center no-gutters" >
				<!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="back; background-repeat: no-repeat; background-size: cover; background-position: center;"> -->
			<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
				<a class="article col-md-4" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>); background-repeat: no-repeat; background-size: cover; background-position: center;" href="<?php the_permalink();?>">
					
						<div id="titreArticle">
							<h3><?php the_title(); ?></h3>
						</div>
				</a>
			<?php endwhile; ?>
			</div>


	</section>

<?php get_footer(); ?>