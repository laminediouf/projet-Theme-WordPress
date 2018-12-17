<div id="footer">
    <p> Copyright &#169;
        <?php print(date(Y)); ?>
        <?php bloginfo('name'); ?> <br /> Blog propulsé par
        <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par
        <a href="http://www.fran6art.com">Fran6art</a> <br />
        <a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)
        </a> et
        <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)
        </a>.
        <?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?>
        secondes.
    </p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
</div>
