<?php
/**
 * The custom template for the one-page style front page.
 */

get_header(); ?>

	<div id="primary" class="content-area lander-page">
		<main id="main" class="site-main" role="main">
            
            <section id="services">
                    <div class="indent clear">
                        <?php 
                        $query = new WP_Query( 'pagename=services' );
                        $services_id = $query->queried_object->ID;
                        
                        // The Loop
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                echo '<h2 class="section-title">' . get_the_title() . '</h2>';
                                echo '<div class="entry-content">';
                                the_content('');
                                echo '</div>';
                            }
                        }

                        /* Restore original Post Data */
                        wp_reset_postdata();

                        
                        /* get the children of the services page */
                        
                        $args = array(
                        'post_type' => 'page',
                        'post_parent' => $services_id
                    );
                    $services_query = new WP_Query( $args );

                    // The Loop
                    if ( $services_query->have_posts() ) {

                        echo '<ul class="services-list">';
                            while ( $services_query->have_posts() ) {
                                $services_query->the_post();
                                echo '<li class="clear">';
                                echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
                                echo '<h3 class="services-title">' . get_the_title() . '</h3>';
                                echo '</a>';
                                echo '<div class="services-lede">';
                                the_content('Read more...');
                                echo '</div>';
                                echo '</li>';
                            }
                        echo '</ul>';
                    }

                    /* Restore original Post Data */
                    wp_reset_postdata();

                        
                        
                        ?>
                        
                        
                        
                    </div><!-- .indent -->
                </section><!-- #services -->
            
            
            <section id="about">
                <div class="indent">
                    
                    <?php
                    $query = new WP_query('pagename=about');
                    
                    //the loop
                    if($query->have_posts()) {
                        while ($query->have_posts()){
                            $query->the_post();
                            //entry-content from the theme
                            echo '<div class="entry-content">';
                            the_content();
                            echo '</div>';
                            
                        }   
                    }
                    
                    wp_reset_postdata();
                    
                    ?>
                    
                </div>
            </section>
            
            <section id="leadership">
                <div class="indent">
                    
                    <?php
                    $query = new WP_query('pagename=leadership');
                    
                    //the loop
                    if($query->have_posts()) {
                        while ($query->have_posts()){
                            $query->the_post();
                            //entry-content from the theme
                            echo '<div class="entry-content">';
                            the_content();
                            echo '</div>';
                            
                        }   
                    }
                    
                    wp_reset_postdata();
                    
                    ?>
                    
                </div>
            </section>
            
            <section id="contact">
                    <div class="indent clear">
                        <?php 
                        $query = new WP_Query( 'pagename=contact' );
                        // The Loop
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                echo '<h2 class="section-title">' . get_the_title() . '</h2>';
                                echo '<div class="entry-content">';
                                the_content();
                                echo '</div>';
                            }
                        }

                        /* Restore original Post Data */
                        wp_reset_postdata();
                        ?>
                    </div><!-- .indent -->
                </section><!-- #contact -->
   

                
                
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
