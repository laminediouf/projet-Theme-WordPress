<!--<php get_header(); ?>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile;
            endif;
            ?>

            <php get_template_part( 'content', get_post_format() ); ?>
        </div>
        <php get_sidebar(); ?>
    </div>
<php get_footer(); ?> -->

<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>
</body>
</html>

