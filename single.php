<?php get_header() ?>

<div class="container single">

    <div class="row">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="col-sm-12">

            <?php the_post_thumbnail('full'); ?>

            <h2 class="main-title"><?php the_title(); ?></h2>

            <h5 class="post-title"><?php echo get_the_date( 'jS F Y' ); ?></h5>

            <div class="content"><?php the_content() ?></div>
                
        </div>

        <?php endwhile;

        endif; ?>
    
    </div>


    <div class="flex-button">
        <a href="<?php site_url() ?>" class="site-button">Back to Home</a>
    </div>


</div>


<?php get_footer() ?>