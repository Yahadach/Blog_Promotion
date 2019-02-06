<main class="container-fluid">
  <div class="container">

    <?php
      // Aller chercher les articles
      $data = get_post(get_the_id());
      ?>

      <!-- Penny lane, is in my hears and in my eyes...  :) -->
      <article class="article">
        <div class="texte">
          <?php
          // article
          echo $data->post_content;
          ?>
        </div>

        <div class="meta">
          Auteur :
          <?php
            $author_obj = get_user_by('id', $data->post_author);
            echo $author_obj->user_login;
          ?>
          | Date :
          <?php
            echo $data->post_date;
          ?>
          <?php
             if (
               is_user_logged_in()
               // && $author_obj->ID ==
              ) {
          ?>
          | <a href="<?php echo get_edit_post_link( $comment->comment_post_ID, $context ); ?>">
                Editer
              </a>
          <?php
              // echo '<pre>'.print_r(,1).'</pre>';
            }
          ?>
      </div>

      </article>

      <aside class="list-comm">
         <table>
         <?php
           // IMPORTER LES commentaires
           $allcomment = get_comments();
           foreach($allcomment as $comment){
             // Ne garder que les commentaires de l'article affiché
             if ($comment->comment_post_ID == $data->ID){
               ?>
               <tr class="comm-unique">


                   <td>
                     <?php
                     $com_author_obj = get_user_by('login', $comment->comment_author);
                     echo get_avatar( $com_author_obj->ID, 64, $default, 'user avatar' );
                     ?>
                   </td>

                   <td>
                     <div class="texte">
                       <?php
                       echo $comment ->comment_content;
                       ?>
                     </div>

                       <div class="meta">
                         Author : <?php echo $comment ->comment_author;  ?>
                         | Date : <?php echo $comment->comment_date;  ?>
                         <?php
                         if (
                           is_user_logged_in()
                           && get_user_by('login', $comment ->comment_author) == get_current_user_id()
                         ){
                           ?>
                           | <?php edit_comment_link('Éditer');
                         }
                         ?>
                     </div>
                   </td>

                </tr>

               <?php
             }
           }
         ?>
       </table>
       </aside>

      <div class="postCommentForm">
      <?php
        comment_form();
      ?>
      </div>
          </div>
  </main>
