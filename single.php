<?php get_header(); ?>
<section class="section" style="padding-top: 150px; min-height: 100vh;">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="section-header" style="max-width: 800px; text-align: left; margin: 0 auto 40px auto;">
                <span class="section-subtitle"><?php echo get_the_date(); ?></span>
                <h1 class="section-title" style="font-size: 3rem; margin-bottom: 20px;"><?php the_title(); ?></h1>
            </div>
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="max-width: 1000px; margin: 0 auto 40px auto; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" style="width: 100%; height: auto;">
                </div>
            <?php endif; ?>

            <div class="about-desc" style="max-width: 800px; margin: 0 auto; line-height: 1.8; color: var(--text-dark);">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>
