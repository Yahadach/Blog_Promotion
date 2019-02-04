<?php
    get_header(); 


    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=1');
?>

<div class="container-fluid">
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="row">
        <div id="article1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>); background-repeat: no-repeat; background-size: cover; background-position: center; position:relative;">
            <div id="fond">
            <div class="carreblancGauche">
                <div id="titreArticleG">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="extrait">
                    <p><?php the_excerpt();?></p>
                </div>
                <div id="lireG">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    Lire la suite...</a>
                </div>
            </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php
    $recentPosts->query('showposts=1&offset=1');
    ?>

    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="row">
        <div  id="article2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="carreblancDroite">
                <div id="titreArticleD">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="extrait">
                    <p><?php the_excerpt();?></p>
                </div>
                <div id="lireD">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    Lire la suite...</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php 
    $recentPosts->query('showposts=1&offset=2');
    ?>

    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="row">
        <div id="article3" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
             <div class="carreblancGauche">
                <div id="titreArticleG">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="extrait">
                    <p><?php the_excerpt();?></p>
                </div> 
                <div id="lireG">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    Lire la suite...</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php
    $recentPosts->query('showposts=1&offset=3');
    ?>

    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="row">
        <div id="article4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="carreblancDroite">
                <div id="titreArticleD">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="extrait">
                    <p><?php the_excerpt();?></p>
                </div>
                <div id="lireD">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    Lire la suite...</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php
    $recentPosts->query('showposts=1&offset=4');
    ?>

    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="row">
        <div id="article5" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="carreblancGauche"> 
                <div id="titreArticleG">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="extrait">
                    <p><?php the_excerpt();?></p>
                </div>
                <div id="lireG">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    Lire la suite...</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

</div>

<?php
    get_footer(); 
?>
