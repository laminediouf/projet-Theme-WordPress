<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div class="row">
        <div class="col-sm-9">
        <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit"  class="btn btn-primary" id="searchsubmit" value="Chercher" />
        </div>
    </div>
</form>
