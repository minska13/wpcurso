<form role="search" method="get" class="form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input name="s" type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Pesquisar', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>">
        <span class="input-group-btn">
            <button type="submit" value="Search" class="btn btn-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
        </span>
    </div>
</form>
