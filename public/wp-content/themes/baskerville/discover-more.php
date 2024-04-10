<?php
/**
 * Discover More Page Template
 */

get_header();

//gets the current page number- for pagination
$paged= (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query to get all post categories 
$categories= get_categories(array(
    'orderby' => 'name',
    'order' => 'ASC',
    'exclude' => 1, //To exclude the uncategorized category

));

//Breadcrumbs
if (function_exists('')){
    //bcn_display();
}
?>

<div class="container">
    <div class="row">
        <?php
        foreach ($categories as $cat){//Loop to go through categories
        $args = array( 
            'post_type' => 'post',
            'posts_per_page' => 5, //Limits number of posts shown per category
            'category__in' => array($cat ->term_id),
            'paged' => paged,
        );

        $query = new WP_Query($args); //runs the query for the category
        
        
        }
        ?>
    </div>
</div>
