<?php get_header(); ?>

<section class="search-results">
    <h2>Search Results for: <?php echo get_search_query(); ?></h2>
    <?php if (have_posts()) : ?>
        <div class="posts">
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <section class="no-results">
            <p>No results found. Please try a different search.</p>
        </section>
    <?php endif; ?>
</section>

<?php get_footer(); ?>