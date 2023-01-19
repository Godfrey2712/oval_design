<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="homepage">


	<div id="content">
				
				<div id="homeCarousel" class="showcase carousel slide" data-ride="carousel" data-interval="3000">

					<div class="carousel-logo">

						<img src="<?php bloginfo('template_url');?>/images/kensingtonchelsea_tertiary_white.png" alt="" >

					</div>

					<ol class="carousel-indicators">
						<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#homeCarousel" data-slide-to="1"></li>
						<li data-target="#homeCarousel" data-slide-to="2"></li>
						<li data-target="#homeCarousel" data-slide-to="3"></li>
						<li data-target="#homeCarousel" data-slide-to="4"></li>
						<li data-target="#homeCarousel" data-slide-to="5"></li>
					</ol>
				
					<div class="carousel-inner dark-background">
				
						<?php $counter = 0 ?>
				
						<?php if( have_rows('carousel_slides') ): 
							
							while( have_rows('carousel_slides') ) : the_row(); $counter++ ?>
				
							<?php if($counter == 1 ): ?>
				
							<div class="item active">
				
								<img src="<?php echo get_sub_field('image') ?>" alt="">

								<div class="caption"><?php echo get_sub_field('caption') ?></div>
				
							</div><!--item-->
				
							<?php else: ?>
				
							<div class="item">
				
								<img src="<?php echo get_sub_field('image') ?>" alt="">

								<div class="caption"><?php echo get_sub_field('caption') ?></div>
				
							</div><!--item-->
				
							<?php endif ?>
				
							<?php endwhile; ?>
				
							<?php endif ?>
				
					</div><!--carousel-inner-->
				
					<a class="carousel-left" href="#homeCarousel" data-slide="prev">
						<i class="fas fa-chevron-left fa-3x"></i>
					</a>
				
					<a class="carousel-right" href="#homeCarousel" data-slide="next">
						<i class="fas fa-chevron-right fa-3x"></i>
					</a>
							
				</div><!--carousel-->
				
				<div class="dark-background">
					<div class="container">
						<div class="notice">
							<?php the_content();?>
							<a class="site-button" href="/about/">Find out more</a>
						</div>
					</div><!--.container-->
				</div><!--.dark-background-->
		
				<div class="container">
						
					<h2 class="main-title">Upcoming Lectures</h2>
						
						<?php $lecturePosts = new WP_Query(array(
							'posts_per_page' => 3,
							'post_type' => 'events',
							'category_name' => 'Lectures',
							'meta_key'     => 'date',
							'meta_value'   => date( "Ymd" ),
							'meta_compare' => '>=',
							'orderby' => 'meta_value',
							'order' => 'ASC'
						));  ?>

                        <div class="row">
                            <div class="notice">
                                <?php the_field('lecture_notice', 'option');?>
                            </div>
                        </div>
                    
						<div class="row event-row">
							
						<?php if($lecturePosts->have_posts()) : while($lecturePosts->have_posts()) : $lecturePosts->the_post(); ?>
							<div class="col-sm-4 event-col">
								<div class="post-block">
									<div class="post-img">
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ){
												the_post_thumbnail('full'); } 
													else { echo '<img style="object-fit: contain;"  src="/wp-content/uploads/2020/07/cropped-kensingtonchelsea_tertiary_purple.png">'; }
												?>
										</a>
									</div>

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

										<a href="<?php the_permalink(); ?>" class="link">
											Find out more<i class="fas fa-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
                        
                    
							<?php endwhile; 
							  else: ?>
                                <div class="row" style="margin-top: 0px; margin-bottom: 0px;">
                                    <div class="notice">
                                    <?php the_field('empty_lectures_description', 'option');?>
                                    </div>
                                </div>
							<?php endif; ?>
						</div>	
						

						<h2 class="main-title">Upcoming Visits</h2>

						<?php $visitPosts = new WP_Query(array(
							'posts_per_page' => 3,
							'post_type' => 'events',
							'category_name' => 'Visits',
							'meta_key'     => 'date',
							'meta_value'   => date( "Ymd" ),
							'meta_compare' => '>=',
							'orderby' => 'meta_value',
							'order' => 'ASC'
						));  ?>

						<div class="row event-row">

							<?php if($visitPosts->have_posts()) : while($visitPosts->have_posts()) : $visitPosts->the_post(); ?>
						
							<div class="col-sm-4 event-col">
								<div class="post-block">
									<div class="post-img">
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ){
												the_post_thumbnail('full'); } 
													else { echo '<img style="object-fit: contain;"  src="/wp-content/uploads/2020/07/cropped-kensingtonchelsea_tertiary_purple.png">'; }
												?>
										</a>							
									</div>
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

										<a href="<?php the_permalink(); ?>" class="link">
											Find out more<i class="fas fa-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
                        
                        
                        <?php endwhile; 
                          else: ?>
                            <div class="row" style="margin-top: 0px; margin-bottom: 0px;">
                                <div class="notice">
                                    <?php the_field('empty_trips_description', 'option');?>
                                </div>
                            </div>
                        <?php endif; ?>
				    </div>	

						<div class="flex-button">
							<a href="<?php site_url()?>/diary" class="site-button">View the diary</a>
						</div>

					</div><!-- .container -->
<?php /*				
				<div class="dark-background">
					<div class="container">
						<h2 class="main-title">Latest news</h2>

						<?php $newsPosts = new WP_Query(array(
							'posts_per_page' => 2,
							'post_type' => 'post'
						));  ?>

						<div class="row">
							<div class="two-row">
							<?php if($newsPosts->have_posts()) : while($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
							<div class="col-sm-5">
								<div class="post-block">
									<div class="post-img">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>							
									</div>
									<div class="post-description">
										<h3 class="post-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
										<h5 class="post-date">
											<?php echo get_the_date('jS F Y'); ?>
										</h5>
										<p class="post-excerpt">	
											<?php echo wp_trim_words( get_the_content(), 30) ?>
										</p>
										<a href="<?php the_permalink(); ?>" class="link">
											Read more<i class="fas fa-chevron-right"></i>
										</a>
									</div>					
								</div>
							</div>
							<?php endwhile; ?>
							<?php endif ?>						
							</div>
						</div>
					</div><!-- .container --> 
				</div><!-- dark-background -->
*/?>
		<?php /*
				<div class="partners">
					<h2 class="main-title">Our Partners</h2>
					<div id="partnerCarousel" class="carousel slide" data-ride="carousel" data-interval="false">			
						<div class="carousel-inner">
							<?php if( have_rows('partners', '24') ):
							$partnerCount = 0; 
							$partnerRows = $count = count(get_field('partners', '24'))
							?>
							<div class="item active">
								<?php while( have_rows('partners', '24') ) : the_row(); $partnerCount++ ?>								
										<a target="_blank" href="<?php echo get_sub_field('link') ?>"><div class="partners-img"><img src="<?php echo get_sub_field('image') ?>" alt=""></div></a>
									<?php if($partnerCount%4==0 and $partnerCount!=$partnerRows)
									{
										echo '</div><div class="item">';
									}  ?>
							
								<?php endwhile; ?>
					
								</div><!--item-->
								<?php endif ?>

						</div><!--carousel-inner-->
					
						<a class="carousel-left" href="#partnerCarousel" data-slide="prev">
							<i class="fas fa-chevron-left fa-3x"></i>
						</a>
					
						<a class="carousel-right" href="#partnerCarousel" data-slide="next">
							<i class="fas fa-chevron-right fa-3x"></i>
						</a>
								
					</div><!--carousel-->	
				</div><!--.partners-->	
*/?>
				
				
				<div class="dark-background">
					<a href="<?php site_url()?>/membership"><h2 class="main-title learn-more">Learn more about becoming a member of the<br> Arts Society of Kensington and Chelsea</h2></a>
				</div>

	</div> <!-- #content -->

</div><!--homepage -->
			

<?php get_footer(); ?>