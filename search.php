<?php get_header(); ?>

<!-- Search Results Section -->

<section class="search-results">

    <!-- Displays search query -->
    <h2>Search Results for: <?php echo get_search_query(); ?></h2>

    <!-- Checks if there is any posts matching the search query -->
    <?php if (have_posts()) : ?>
        <div class="posts">
            <!-- Checks, loops through the posts and displays -->
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-item">
                    <!-- Displays the post title with a link to the post -->
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <!-- Displays no results found message if there are no matching posts -->
        <section class="no-results">
            <p>No results found. Please try a different search.</p>
        </section>
    <?php endif; ?>
</section>

<?php get_footer(); ?>