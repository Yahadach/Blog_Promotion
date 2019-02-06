<main id="main-projets">

  <article class="project">

    <?php
     if ( have_posts() ) : while ( have_posts() ) : the_post();
     ?>

  </article>

     <?php

     $folder = glob(__DIR__.'/projets/*', GLOB_ONLYDIR);

      foreach($folder as $projetc){
        $projectfolder = get_template_directory_uri().'/projets/'.basename($projetc);
          echo "<a href=\"".$projectfolder."\">
            <div class=\"projet_thumbnail\" style=\"background-image:url(".$projectfolder."/screenshot.png);\">
              <div class=\"zoneTexte\">
                <h3>".preg_replace('#^[0-9]+\.(.*)#','$1',basename($projectfolder))."</h3>
              </div>
            </div>
          </a>";
      }
     ?>
    <!-- contents of the loop -->

    <?php endwhile; endif; ?>

</main>
