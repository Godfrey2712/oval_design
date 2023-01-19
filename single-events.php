<?php get_header(); ?>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="container single">

        <div class="col-sm-12">

            <?php the_post_thumbnail('full'); ?>
			<p class="main-caption">
				<?php the_field('image_caption');?>
			</p>

            <h2 class="main-title"><?php the_title(); ?></h2>
            
        </div>
        <div class="row">
        
            <div class="col-sm-9 left mob-mb">

                <div class="content"><?php the_content() ?></div>

            </div>

            <div class="col-sm-3 right">

                <div class="post-info-block">
                
                    <h3 class="post-title">Date & time</h3>

                    <h5 class="post-info"><?php the_field('date'); ?>
					<?php $enddate=get_field('date_end');
							if (!empty($enddate)){
								echo '- '.$enddate.'</h5>';
							} else { ?> </h5> <?php  } ;?>

                    <h5 class="post-info"><?php the_field('time'); ?></h5>
                                    
                </div>

                <div class="post-info-block">

                    <h3 class="post-title">Location</h3>

                    <h5 class="post-info"><?php the_field('location'); ?></h5>
                                    
                </div>

                <div class="post-info-block">

                    <h3 class="post-title">Type</h3>

                    <?php $post_ID = get_the_ID();
							
					$category_detail=get_the_category($post_ID);//$post->ID
							foreach($category_detail as $cd){
							echo '<li>'.$cd->cat_name.'</li>';
							} ?>
                                    
                </div>

                <div class="post-info-block">
					
					<?php $type = $cd->cat_name ;?>
					
					<?php if ($type=="Lecture"){?>
				
					<h3 class="post-title">Speaker:</h3>
					
					<?php } elseif ($type=="Virtual Visit"){ ?>

                    <h3 class="post-title">Speaker:</h3> 
					
					<?php } elseif ($type=="Visit"){ ?>

                    <h3 class="post-title">Accompanied by:</h3> 
					
					<?php } elseif ($type=="Trip"){ ?>

                    <h3 class="post-title">Accompanied by:</h3> 
					
					<?php } ?>	

                    <h5 class="post-info"><?php the_field('speaker__guide'); ?></h5>
                                    
                </div>
            
            </div>

        </div>
        
    </div>

<div class="dark-background">
    <div class="notice">
        <p><br><br>Please note, our events are accessible to members only.<br><br>
            Members will receive lecture and visit details on the monthly noticeboard email.<br><br>
            If you are not a member and would like to attend our events, please <u><a href="/become-a-member/">sign up for membership here.</a></u>
            </p>
        <br>
        <a href="/become-a-member/" class="site-button">Become a member</a>
        <br><br><br><br>
    </div>
</div>

    <?php

        endwhile;

        endif ?>


<?php get_footer(); ?>
    