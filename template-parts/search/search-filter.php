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
?>

<form action="<?php echo $current_url; ?>/" method="get">
    <label for="search">Filter search results: </label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
</form>





</p>