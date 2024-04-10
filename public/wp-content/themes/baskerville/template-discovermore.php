<?php

/*
Template Name: Discover More
*/

get_header(); ?>

<div class="wrapper section medium-padding" id="site-content">

	<div class="section-inner">

    <div class="header" style="display: flex;  flex-direction: column;  align-items: center; background-color:#B2C7E0; padding: 20px;">
        <h1 class="header-title">DISCOVER MORE</h1>
        <p class="header-desc">View all blogs by category</p>
      </div>
      <br>

		<div class="content fleft">

		<?php

		// Query to get all post categories 
$categories= get_categories(array(
    'orderby' => 'name',
    'order' => 'ASC',
    //'exclude' => 1, //To exclude the uncategorized category

));

?> 

<div class="container" style="border: 10px solid #ccc; border-radius: 5px; padding: 50px;">
    <div class="row">
        <?php
        foreach ($categories as $cat){//Loop to go through categories
        $args = array( 
            'post_type' => 'post',
            'posts_per_page' => 5, //Limits number of posts shown per category
            'category__in' => array($cat ->term_id),
            //'paged' => paged,
        );

        $query = new WP_Query($args); //runs the query for the category
        
        if ($query->have_posts()) {
    //echo '<div class="col-md-6">';
    echo '<div class="card mb-4" style="border: 1px solid #ccc; border-radius: 10px; padding: 50px; ">';
    echo '<h1 class="card-header" style="color: #0E6B8E; text-align: center;">' . $cat->name .'</h1>';
    
    echo '<div class="card-body">';
    while ($query->have_posts()) {
        $query->the_post();
        echo '<h3 style="padding-bottom:10px; text-decoration:underline;">' . get_the_title() . '</h3>';
        echo '<p class="post-text" style="color: #666;">' . get_the_excerpt() . '</p>';
        echo '<a href="' . get_permalink() . '" ></a>';
        echo '<hr style="border: 0; border-top: 1px solid #ccc; margin: 1px 0;"> <br>';
    }

    //echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<br>';

    wp_reset_postdata();
}
        
        }
        ?>
    </div>
</div>

		</div><!-- .content -->
		
		<?php get_sidebar(); ?>
	
		<div class="clear"></div>
	
	</div><!-- .section-inner -->
	
</div><!-- .wrapper section-inner -->
								
<?php get_footer(); ?>