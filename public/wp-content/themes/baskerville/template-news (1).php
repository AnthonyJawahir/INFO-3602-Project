<?php

/*
Template Name: News
*/

get_header(); ?>

<div class="wrapper section medium-padding" id="site-content">

	<div class="section-inner">

    <!---------------------------------  Page Breadcrumbs  ------------------------------->
					<?php  
        $theParent = wp_get_post_parent_ID(get_the_ID()); 
        if($theParent){ ?> 
<div class="metabox metabox--position-up metabox--with-home-link"> 
      <p><a class="metabox__blog-home-link" href="<?php echo 
get_permalink($theParent); ?>"> 
     <i class="fa fa-home" aria-hidden="true"></i> Back to <?php 
echo get_the_title($theParent); ?> >> </a>
 
      <span class="metabox__main"><?php echo the_title(); ?> 
</span></p> 
            </div> 
        <?php } 
         
    ?> 
<!---------------------------------  Page Breadcrumbs  ------------------------------->
	<br>

		<div class="content fleft">
					
	<?php 

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // Get current page number
$args = array(
    'post_type' => 'news', // Change to your post type if different
    'posts_per_page' => 5, // Number of posts per page
    'paged' => $paged, // Current page number
);

// The Query
$history_query = new WP_Query( $args );
    
    $args = array(
   'category_name' => 'news',
   'order' => 'DESC',
   'orderby' => 'date',
   'posts_per_page' => -1
    );


$query = new WP_Query($args);


if ($query->have_posts()) {
   while ($query->have_posts()) {
       $query->the_post();
       ?>
       <h2><a style="color:#1C4983;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <p>By <?php the_author(); ?> on <?php the_date(); ?></p>
       <br> <?php the_excerpt(); ?>
       <br> 
       <hr>
       <?php
   }

    // Add pagination links
    echo paginate_links( array(
        'total' => $history_query->max_num_pages,
        'current' => max( 1, $paged ),
        'prev_text' => __( '&laquo; Previous' ),
        'next_text' => __( 'Next &raquo;' ),
    ) );

   wp_reset_postdata();
} ?>
				
		</div><!-- .content -->
		
		<?php get_sidebar(); ?>
	
		<div class="clear"></div>
	
	</div><!-- .section-inner -->
	
</div><!-- .wrapper section-inner -->
								
<?php get_footer(); ?>