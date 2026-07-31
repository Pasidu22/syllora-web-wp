<?php get_header(); ?>
<section class="section section-bg-light" style="padding-top: 150px; min-height: 100vh;">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Our Updates</span>
            <h2 class="section-title">Latest Vlogs</h2>
        </div>
        <div class="destinations-grid"> <!-- Reusing grid styles for blog posts -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="dest-card reveal active">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="dest-img">
                    <?php else : ?>
                        <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?auto=format&fit=crop&q=80&w=800" alt="Placeholder" class="dest-img">
                    <?php endif; ?>
                    <div class="dest-overlay">
                        <h3 class="dest-title"><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>" class="dest-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p>No vlogs found. Please check back later!</p>
            <?php endif; ?>
        </div>
        
        <!-- Pagination (Basic) -->
        <div style="margin-top: 40px; text-align: center;">
            <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
