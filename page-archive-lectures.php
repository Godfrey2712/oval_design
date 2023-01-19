<?php
/*
Template Name: Archive Lectures
*/
?>

<?php get_header(); ?>


    <div class="container">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <h2 class="main-title">Past Lectures</h2>

            <div class="row">

                <div class="col-sm-12">

                    <div class="content">
                
                        <div class="second-filters alm-filters alm-filters-container filters-default">
                            
                            <a href="/diary/" class="site-button">Diary</a>
                            <a href="/past-lectures/" class="site-button">Lecture archives</a>
                            <a href="/past-visits/" class="site-button">Visit archives</a>
                            <a href="/past-trips/" class="site-button">Trip archives</a>
                            
                        </div>
                        
                        <!--<a class="list" href="/list-view/"><i class="fas fa-list"></i> List view</a>-->
                        
                        <?php echo do_shortcode('[ajax_load_more loading_style="light-grey" container_type="div"  post_type="events" posts_per_page="6" category__and="3,9" meta_key="date" meta_value="date("dmY")" meta_compare="&gt;=" order_by="meta_value" order="DSC" scroll="false" ajax_load_more id="diary" category__not_in="6" button_label="Load more"]');?>
                        
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


        <?php endwhile; 
        endif; ?>

    </div>



<?php get_footer(); ?>