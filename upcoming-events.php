<div class="dark-background">

    <div class="container">

        <h2 class="main-title">Upcoming events</h2>

        <div class="row event-row">

        <?php $upcomingPosts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'events',
            'meta_key'     => 'date',
            'meta_value'   => date( "Ymd" ),
            'meta_compare' => '>=',
            'orderby' => 'meta_value',
            'order' => 'ASC'
        ));

        if($upcomingPosts->have_posts()) : while($upcomingPosts->have_posts()) : $upcomingPosts->the_post(); ?>

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
                            <?php echo wp_trim_words( get_the_content(), 22) ?>
                        </p>

                        <a href="<?php the_permalink(); ?>" class="link">
                            Find out more<i class="fas fa-chevron-right"></i>
                        </a>
                    </div>

                    <?php $post_ID = get_the_ID();
                    $category = get_the_category($post_ID); ?>
                    <p class="site-button tag"><?php echo $category[0]->name; ?></p>
                </div>
            </div>

        <?php endwhile;
        endif; ?>

        </div>

        <div class="flex-button">
        <a href="/diary/" class="site-button">View the diary</a>
        </div>

    </div>

</div>