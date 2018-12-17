<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?>
    </title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>
</head>
<body>
<div id="page">
    <div id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php bloginfo('description'); ?>
    </div>

    <div id="content">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>">

                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <p class="postmetadata">
                    <?php the_time('j F Y') ?>par
                    <?php the_author() ?>| Cat&eacute;gorie:
                    <?php the_category(', ') ?> |
                </p>

                <div class="post_content">
                    <?php the_content(); ?>
                </div>
                <div class="comments-template">
                    <?php comments_template(); ?>
                </div>
            </div>
        <?php endwhile; ?>
            <?php previous_post_link() ?> <?php next_post_link() ?>
        <?php else : ?> <p>Désolé, aucun article ne correspond à vos critères.</p>
        <?php endif; ?> </div>

