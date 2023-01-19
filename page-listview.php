<?php
/*
Template Name: List View
*/
?>

<?php get_header(); ?>

<div class="homepage">

	<div id="content">

				<div class="container">
						
					<h2 class="main-title">Diary</h2>
								
					 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					 <div class="notice"><br><br>
						 <?php the_content();?>
					 </div>
					 <?php endwhile; endif;?>
					     
						<?php $lecturePosts = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'events',
							'category_name' => 'Meeting, Lectures, Visits, Trips',
                            'category__not_in' => array(9, 10,),
							'meta_key'     => 'date',
							'meta_value'   => date( "Ymd" ),
							'meta_compare' => '>=',
							'orderby' => 'meta_value',
							'order' => 'ASC'
						));  ?>

						<?php if($lecturePosts->have_posts()) : while($lecturePosts->have_posts()) : $lecturePosts->the_post(); ?>
							
                            <div class="row">
								<div class="col-sm-4">
                                    <div class="post-img">
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ){
												the_post_thumbnail('full'); } 
													else { echo '<img style="object-fit: contain;"  src="/wp-content/uploads/2020/07/cropped-kensingtonchelsea_tertiary_purple.png">'; }
												?>
										</a>
									</div>
									<?php $post_ID = get_the_ID(); ?>
										<div class="site-button tag" style="margin-left: 15px;">
										<?php
										$category_detail=get_the_category($post_ID);//$post->ID
														foreach($category_detail as $cd){
														echo '<li>'.$cd->cat_name.'</li>';
														} ?>
										</div>
                                </div>
								<div class="col-sm-8">
									<div class="post-description">
										<h3 class="post-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>

										<h5 class="post-date">
										<?php the_field('date'); ?>
										<br>Location: <?php the_field('location'); ?>
										</h5>

										<p class="post-excerpt">
											<?php echo wp_trim_words( get_the_content(), 30) ?>
										</p>

										<a href="<?php the_permalink(); ?>" class="site-button">
											Find out more<i class="fas fa-chevron-right"></i>
										</a>
									</div>
								</div>
								
                                <!--<div class="col-sm-2"></div>-->
							</div>

							<?php endwhile; 
							  else: ?>
							    <div class="notice">
								<?php the_field('empty_lectures_description', 'option');?>
								</div>
							<?php endif; ?>
						   
							
							<div class="flex-button" style="margin-top:100px; margin-bottom:50px; ">
								<a href="/archive/" class="site-button">View our Archives</a> 
							</div>
        </div>
	</div> <!-- #content -->

</div><!--homepage -->
			

<?php get_footer(); ?>