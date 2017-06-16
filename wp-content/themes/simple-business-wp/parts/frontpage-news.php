<?php if ((nimbus_get_option('fp-news-toggle') == '1') || (nimbus_get_option('fp-news-toggle') == '')) { ?>
    <?php if ( get_option( 'show_on_front' ) == 'page' ) { ?>
        <section id="<?php if (nimbus_get_option('fp-news-slug')=='') {echo "news";} else {echo nimbus_get_option('fp-news-slug');} ?>" class="frontpage-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (nimbus_get_option('fp-news-title') != '') { ?>
                            <div class="news-title h1"><?php echo nimbus_get_option('fp-news-title'); ?></div>
                        <?php } ?>
                        <?php if (nimbus_get_option('fp-news-sub-title') != '') { ?>
                            <div class="news-sub-title h4"><?php echo nimbus_get_option('fp-news-sub-title'); ?></div>
                        <?php } ?>
                        <?php the_content(); ?>
                    </div> 
                </div>    
            </div>    
        </section>
    <?php } else { ?>
        <section id="<?php if (nimbus_get_option('fp-news-slug')=='') {echo "news";} else {echo nimbus_get_option('fp-news-slug');} ?>" class="frontpage-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (nimbus_get_option('fp-news-title') != '') { ?>
                            <div class="news-title h1"><?php echo nimbus_get_option('fp-news-title'); ?></div>
                        <?php } else { ?>
                            <div class="news-title h1">Latest Articles</div>
                        <?php } ?>
                        <?php if (nimbus_get_option('fp-news-sub-title') != '') { ?>
                            <div class="news-sub-title h4"><?php echo nimbus_get_option('fp-news-sub-title'); ?></div>
                        <?php } else { ?>
                            <div class="news-sub-title h4">Get up to date with the latest news from our newsroom.</div>
                        <?php } ?>
                        <?php get_template_part( 'parts/content', 'blog'); ?>
                    </div> 
                </div>    
            </div>    
        </section>
    <?php } ?>
<?php } else if (nimbus_get_option('fp-news-toggle') == '2') {
    // Don't do anything
}  ?>
