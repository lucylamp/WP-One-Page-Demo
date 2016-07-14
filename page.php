<?php
			 while ( have_posts() ) : the_post(); 
				$args = array( 'category_name' => 'home-section', 'posts_per_page' => 10,  'orderby'=> 'title', 'order' => 'ASC');
				$lastposts = get_posts( $args );
					foreach ( $lastposts as $post ) : {
						setup_postdata( $post );
					}?>
					<?php the_content();
				 	endforeach; 
				wp_reset_postdata(); 
			endwhile; ?>
