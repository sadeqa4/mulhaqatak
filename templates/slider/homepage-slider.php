<?php
if ( get_theme_mod( 'topshop-slider-type', false ) == 'topshop-no-slider' ) : ?>
    
    <!-- No Slider -->
    
<?php
elseif ( get_theme_mod( 'topshop-slider-type', false ) == 'topshop-meta-slider' ) : ?>
    
    <?php
    $slider_code = '';
    if ( get_theme_mod( 'topshop-meta-slider-shortcode', false ) ) {
        $slider_code = get_theme_mod( 'topshop-meta-slider-shortcode' );
    } ?>
    
    <?php echo do_shortcode( sanitize_text_field( $slider_code ) ); ?>
    
<?php else : ?>
    
    <?php
    $slider_cats = '';
    if ( get_theme_mod( 'topshop-slider-cats', false ) ) {
        $slider_cats = get_theme_mod( 'topshop-slider-cats' );
    } ?>
    
    <?php if( $slider_cats ) : ?>
        
        <?php $slider_query = new WP_Query( 'cat=' . esc_html( $slider_cats ) . '&posts_per_page=-1&orderby=date&order=DESC' ); ?>
        
        <?php if ( $slider_query->have_posts() ) : ?>

            <div class="home-slider-wrap home-slider-remove">
                <div class="home-slider-prev"><i class="fas fa-angle-left"></i></div>
                <div class="home-slider-next"><i class="fas fa-angle-right"></i></div>
                
                <div class="home-slider">
                    
                    <?php while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
                    
                        <div class="home-slider-block">
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                            
                                <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                                
                            <?php endif; ?>
                            
                            <div class="home-slider-block-inner">
                                <div class="home-slider-block-bg">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                    <?php if ( has_excerpt() ) : ?>
                                        <?php the_excerpt(); ?>
                                    <?php else : ?>
                                        <?php the_content(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                        </div>
                    
                    <?php endwhile; ?>
                    
                </div>
                <div class="home-slider-pager"></div>
            </div>
            
        <?php endif; wp_reset_query(); ?>
        
    <?php else : ?>
        
        <div class="home-slider-wrap home-slider-remove">
            <div class="home-slider-prev"><i class="fas fa-angle-left"></i></div>
            <div class="home-slider-next"><i class="fas fa-angle-right"></i></div>
                
            <div class="home-slider">
                
                <div class="home-slider-block">
                    
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/demo/slider_default_01.jpg" alt="<?php esc_attr_e('Demo Slide One', 'topshop') ?>" />
                    
                    <div class="home-slider-block-inner">
                        <div class="home-slider-block-bg">
                            <h3>
                                <?php _e( 'A Little Extra Thought', 'topshop' ); ?>
                            </h3>
                            <p><?php _e( 'It\'s that little extra thought that counts', 'topshop' ); ?></p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="home-slider-pager"></div>
        </div>

    <?php endif; ?>
    
<?php endif; ?>