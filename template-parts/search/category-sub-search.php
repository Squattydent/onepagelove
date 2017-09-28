<?php
/**
 * @package onepagelove
 * @version 6.11.25
 *
*/ 
?>

<p>
    
<?php
    global $wp;
    $current_url = home_url(add_query_arg(array(),$wp->request));
    $category = get_category( get_query_var( 'cat' ) );
	$cat_id = $category->cat_ID;
    $category_name = get_cat_name( $cat_id );
?>

<form action="<?php echo $current_url; ?>/" method="get">
    <label for="search">Search within the <?php echo $category_name; ?> category: </label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
</form>


</p>