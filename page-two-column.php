<?php
/*
Template Name: Two Column
*/
?>


<?php get_header(); ?>

    <div class="container">

        <?php if(have_posts()) : while(have_posts()) : the_post() ?>

        <h2 class="main-title"><?php the_title() ?></h2>
        
        <div class="row">

            <div class="col-sm-6 mob-mb">

                <div class="content two-col"><?php the_content() ?></div>

                <a href="<?php the_field('button_link') ?>" class="site-button"><?php the_field('button_text') ?></a>

            </div>

            <div class="col-sm-6">

                <?php if( have_rows('two_column_image') ): 
							
                    while( have_rows('two_column_image') ) : the_row(); ?>

                    <div class="two-col-img">

                        <img src="<?php echo get_sub_field('image') ?>" alt="">

                        <p class="caption"><?php echo get_sub_field('caption') ?></p>
                    
                    </div>
                    


                <?php endwhile;

                endif; ?>

            </div>

        </div>



        <?php endwhile;

        endif; ?>


    </div>




<?php include 'upcoming-events.php'; ?>





<?php get_footer(); ?>