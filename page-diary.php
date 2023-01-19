<?php
/*
Template Name: Diary
*/
?>

<?php get_header(); ?>

<script>
	function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
		console.log(results + "found");
		if(results == null){
			return ("X")
		} 
    return results == null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};
	
	var param = getUrlParameter('category');
	
</script>

    <div class="container">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <h2 class="main-title"><script>
			if(param !== "X" ) {
   				document.write (param);
				}
			else{ 
				 document.write ( "All events" );
			}
			</script></h2>

            <div class="row">

                <div class="col-sm-12">

                    <div class="content">
                        
                        <div class="second-filters alm-filters alm-filters-container filters-default">
                            
                            <a href="/diary/" class="site-button">Diary</a>
                            <a href="/all-events/?category=lectures" class="site-button">Lectures</a>
                            <a href="/all-events/?category=visits" class="site-button">Visits</a>
                            <a href="/all-events/?category=trips" class="site-button">Trips</a>
                            <a href="/archive/" class="site-button">Archives</a> 
                            
                        </div>
						
						<!--<a class="list" href="/list-view/"><i class="fas fa-list"></i> List view</a>-->
                        
                        <?php /* echo do_shortcode('[ajax_load_more_filters id="diary" target="diary"]'); */?>
                       
						<div class="notice">
						<p>Our lectures will be held either via Zoom or in the Kensington Library lecture hall and our visits and trips will be listed on the website as and when we can organise group visits. Please keep updated via our website and email noticeboards.<br><br></p>
						</div>
						
                        <?php echo do_shortcode('[ajax_load_more loading_style="light-grey" container_type="div" filters="true" post_type="events" posts_per_page="12" meta_key="date" meta_value="date("dmY")" meta_compare="&gt;=" order_by="meta_value" order="ASC" scroll="false" ajax_load_more id="diary" category__not_in="6,9" button_label="Load more"]');?>
                        
                        <script>
                        window.almEmpty = function(alm){
                            var el = alm.listing;
                            var msg = 'Currently our lectures are held via Zoom and our visits and trips suspended due to the Covid 19 restrictions. Please keep updated via our website and click <a style="font-weight:800; text-decoration: underline;" href="/category/archive/">here </a>to visit our archives.';

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