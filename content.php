<div class="header">
    <div class="container">
        <nav id="navigation-principale" role="navigation">
            <?php wp_nav_menu(array( 'theme_location' => 'menu-principal' )); ?>
        </nav>
    </div>
</div>
<div class="blog-post">
  <!--  <h2 class="blog-post-title"><php the_title(); ?> </h2> -->
    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

   <!-- <p class="blog-post-meta">
        <php the_date(); ?> par <a href="#"><php the_author(); ?></a>
    </p>
    <php// the_content(); ?>
-->
    <p class="postmetadata">
        <?php the_time('j F Y') ?>par
        <?php the_author() ?>| Cat&eacute;gorie:
        <?php the_category(', ') ?> |
        <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
        <?php edit_post_link('Editer', ' &#124; ', ''); ?>
    </p>

    <div class="post_content">
        <?php the_content(); ?>
    </div>
</div>