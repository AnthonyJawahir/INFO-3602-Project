<?php
/*
Template Name: AccessExpensive template
*/
get_header(); ?>

<div class="wrapper section medium-padding" id="site-content">
										
	<div class="section-inner">
	
		<div class="content fleft">
	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		

			
				<div class="post">
				
					<div class="post-header">

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
												
					    <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
					    				    
				    </div><!-- .post-header -->
				
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						
						<div class="featured-media">
						
							<a href="<?php the_permalink(); ?>" rel="bookmark">
							
								<?php 
								
								the_post_thumbnail( 'post-image' );

								$image_caption = get_post( get_post_thumbnail_id() )->post_excerpt;
								
								if ( $image_caption ) : ?>
												
									<div class="media-caption-container">
									
										<p class="media-caption"><?php echo $image_caption; ?></p>
										
									</div>
									
								<?php endif; ?>
								
							</a>
									
						</div><!-- .featured-media -->
							
					<?php endif; ?>
				   				        			        		                
					<div class="post-content">


<!-----------------------------------------------------Query---------------------------->								                                        
						

<?php 
// Define the custom query arguments
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // Get current page number
$args = array(
    'post_type'      => 'accessory', // Change to your post type if different
    'posts_per_page' => 3, // Number of posts per page
    'paged'          => $paged, // Current page number
    'meta_query'     => array(
        array(
            'key'     => 'pricerange', // Custom field key
            'value'   => 'expensive', // Value to match
            'compare' => '=', // Match exactly
        ),
    ),
);


// The Query
$history_query = new WP_Query( $args );

// The Loop
if ( $history_query->have_posts() ) :
    while ( $history_query->have_posts() ) :
        $history_query->the_post();
        ?>
        <div class="post">
            <h2><?php the_title(); ?></h2>
            <div class="entry-content">
                <?php the_excerpt(); ?>
				<br>
            </div>
        </div>
		<br>
        <?php
    endwhile;

	

    // Add pagination links
    echo paginate_links( array(
        'total' => $history_query->max_num_pages,
        'current' => max( 1, $paged ),
        'prev_text' => __( '&laquo; Previous' ),
        'next_text' => __( 'Next &raquo;' ),
    ) );

    // Restore original Post Data
    wp_reset_postdata();

else :
    // If no posts are found, display a message
    echo 'No posts found.';
endif;
?>





<!-----------------------------------------------------Query-------------------------------->

						<div class="clear"></div>
															            			                        
					</div><!-- .post-content -->
					
					<?php comments_template( '', true ); ?>
									
				</div><!-- .post -->
			
			<?php endwhile; endif; ?>

			<div class="clear"></div>
			
		</div><!-- .content -->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>
	
	</div><!-- .section-inner -->

</div><!-- .wrapper -->
								
<?php get_footer(); ?>     
