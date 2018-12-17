<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Themes de Lamine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="<?php bloginfo('template_directory');?>/css/main.css" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
<div class="jumbotron text-center">
    <h1>ACCESS CODE DAKAR KELOUMAK </h1>
    <p>Cultivez votre passion pour en faire un metier</p>
</div>
<div class="header">
    <div class="container">
        <nav id="navigation-principale" role="navigation">
            <?php wp_nav_menu(array( 'theme_location' => 'menu-principal' )); ?>
        </nav>
    </div>
</div>

<div id="page">
    <div class="row">
        <div class="col-md-8">
    <div id="header">
        <div class="container">
            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <p class="description"> <?php bloginfo('description'); ?> </p>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="col-md-12 lam">
        <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">

                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>
                    <p class="postmetadata">
                        <?php the_time('j F Y') ?>par
                        <?php the_author() ?>| Cat&eacute;gorie:
                        <?php the_category(', ') ?> | <BR>
                        <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                        <?php edit_post_link('Editer', ' &#124; ', ''); ?>
                    </p>
                </div>
            <?php endwhile; ?>
            <div class="navigation">
                <?php posts_nav_link(' - ','page suivante','page pr&eacute;c&eacute;dente'); ?>
            </div>
        <?php else : ?>
            <h2>Oooopppsss...</h2>
            <p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>

        <?php endif; ?>
            </div>
        </div>
    </div>
        </div>
