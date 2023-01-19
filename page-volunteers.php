<?php
/*
Template Name: Volunteers
*/
?>

<?php get_header() ?>

    <div class="container volunteers">

        <div class="col-sm-12">

            <h2 class="main-title"><?php the_title();?></h2>

            <!--<div class="row">

                <div class="position-col post-title">Position & Volunteer</div>

                <div class="duties-col post-title">Duites & Responsibilities</div>

            </div>-->

            <?php if(have_rows('volunteer')) : while(have_rows('volunteer')) : the_row(); ?>

                <div class="row">

                    <div class="position-col">

                        <p class="position"><?php echo get_sub_field('position'); ?></p>

                        <p class="name"><?php echo get_sub_field('name'); ?></p>
                    
                    </div>
                    
                    <div class="duties-col">

                        <p><?php echo get_sub_field('duties') ?></p>
                    
                    </div>

                </div>

                <?php endwhile;
                endif; ?>
        		<br><br>
				<h2 class="main-title"><?php the_field('secondary_committee_name');?></h2>
        		
				<?php if(have_rows('secondary_committee')) : while(have_rows('secondary_committee')) : the_row(); ?>

                <div class="row">

                    <div class="position-col">

                        <p class="position"><?php echo get_sub_field('position'); ?></p>

                        <p class="name"><?php echo get_sub_field('name'); ?></p>
                    
                    </div>
                    
                    <div class="duties-col">

                        <p><?php echo get_sub_field('duties') ?></p>
                    
                    </div>

                </div>

                <?php endwhile;
                endif; ?>
        </div>

    </div>

<?php get_footer() ?>