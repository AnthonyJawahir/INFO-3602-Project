<?php get_header(); ?>

<div class="wrapper section medium-padding" id="site-content">
										
	<div class="section-inner">
	
		<div class="content fleft">
	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		

			
				<div class="post">
				
					<div class="post-header">

<!---------------------------------  Page Breadcrumbs  ------------------------------->
				<?php
$ancestors = get_post_ancestors(get_the_ID());
$ancestors = array_reverse($ancestors);

if ($ancestors) { ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo get_permalink($ancestors[0]); ?>">
            </a>

            <?php
            foreach ($ancestors as $ancestor) {
                echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a> >';
            }
            ?>

            <span class="metabox__main"><?php echo get_the_title(); ?></span>
        </p>
    </div>
<?php } ?>
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
								                                        
						<?php 
						the_content();
						wp_link_pages();
						?>
						
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
