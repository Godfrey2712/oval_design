<?php get_header(); ?>
			
    <div class="container">
            <?php if (is_category()) { ?>
                <h2 class="main-title">
                    <span><?php _e(" ", "wpbootstrap"); ?></span> <?php single_cat_title(); ?>
                </h2>
            <?php } elseif (is_tag()) { ?> 
                <h2 class="main-title">
                    <span><?php _e("Posts Tagged:", "wpbootstrap"); ?></span> <?php single_tag_title(); ?>
                </h2>
            <?php } elseif (is_author()) { ?>
                <h2 class="main-title">
                    <span><?php _e("Posts By:", "wpbootstrap"); ?></span> <?php get_the_author_meta('display_name'); ?>
                </h2>
            <?php } elseif (is_day()) { ?>
                <h2 class="main-title">
                    <span><?php _e("Daily Archives:", "wpbootstrap"); ?></span> <?php the_time('l, F j, Y'); ?>
                </h2>
            <?php } elseif (is_month()) { ?>
                <h2 class="main-title">
                    <span><?php _e("Monthly Archives:", "wpbootstrap"); ?></span> <?php the_time('F Y'); ?>
                </h2>
            <?php } elseif (is_year()) { ?>
                <h2 class="main-title">
                    <span><?php _e("Yearly Archives:", "wpbootstrap"); ?></span> <?php the_time('Y'); ?>
                </h2>
            <?php } ?>
      

            <div class="row">

                <div class="col-sm-12">

                    <div class="content">
                
                        <div class="second-filters alm-filters alm-filters-container filters-default">
                            
                            <a href="/dairy/" class="site-button">Diary</a>
                            <a href="/past-lectures/" class="site-button">Lecture archives</a>
                            <a href="/past-visits/" class="site-button">Visit archives</a>
                            <a href="/past-trips/" class="site-button">Trip archives</a>
                            
                        </div>
                        
                        
                        <?php echo do_shortcode('[ajax_load_more loading_style="light-grey" container_type="div" filters="true" post_type="events" posts_per_page="6" archive="true" meta_key="date" meta_value="date("dmY")" meta_compare="&gt;=" order_by="meta_value" order="ASC" scroll="false" ajax_load_more id="diary" category__not_in="6" button_label="Load more"]');?>
                        
                        <script>
                        window.almEmpty = function(alm){
                            var el = alm.listing;
                            var msg = 'All visits and lectures are currenly suspended due to the Covid-19 pandemic. Please browse our <a style="font-weight:800; text-decoration: underline;" href="/category/archive/">achives of past events here</a> and check back soon';

                            var item = document.createElement('li');
                            item.innerHTML = msg;
                            el.appendChild(item); // Append to ALM

                            //console.log("Nothing found in this Ajax Load More query :(");
                        };
                            
                        </script>
                    </div>
                
                </div>       
                
            </div>
					
					
			
		  </div>		

<?php get_footer(); ?>