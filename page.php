<?php get_header(); ?>


    <div class="container">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <h2 class="main-title"><?php the_title(); ?></h2>

            <div class="row">

                <div class="col-sm-12">
					
                    <div class="content"><?php the_content(); ?></div>
                		
                </div>       
                
            </div>


        <?php endwhile; 
        endif; ?>

    </div>



<?php get_footer(); ?>