<form role="search" action="<?php echo home_url(); ?>" method="get">
	<div>
        <label class="screen-reader-text" for="s">Search for: </label>
        <input type="text" name="s" id="s" value="" placeholder="<?php the_search_query();?>" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>