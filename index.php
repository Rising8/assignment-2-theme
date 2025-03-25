<?php get_header(); ?>

<section class="arena" id="home">
    <h1>Welcome to Esports Arena</h1>
    <p>Your ultimate destination for gaming news, leaderboards, and live tournaments.</p>
</section>

<!-- Live Streams Section with Bootstrap Cards -->
<section class="live-streams" id="live-streams">
    <h2>Live Streams</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">No live streams currently available.</h5>
            <p class="card-text">Stay tuned for upcoming events!</p>
        </div>
    </div>
</section>

<!-- Leaderboard Section with Bootstrap Cards -->
<section class="leaderboard" id="leaderboard">
    <h2>Current Rankings</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Leaderboard</h5>
            <ul>
                <li>1. Team Alpha - 500 Points</li>
                <li>2. Team Beta - 450 Points</li>
                <li>3. Team Omega - 400 Points</li>
                <li>4. Team Gamma - 350 Points</li>
            </ul>
        </div>
    </div>
</section>

<!-- Upcoming Tournaments Section with Bootstrap Cards -->
<section class="upcoming-tournaments" id="upcoming-tournaments">
    <h2>Upcoming Tournaments</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tournaments</h5>
            <ul>
                <li><strong>Battle Royale Invitational</strong> - Date: May 25, 2025</li>
                <li><strong>Champion's League</strong> - Date: June 10, 2025</li>
                <li><strong>Esports Championship</strong> - Date: July 15, 2025</li>
                <li><strong>World Championship</strong> - Date: September 29, 2025</li>
            </ul>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="social-media" id="follow-us">
    <h2>Follow Us</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Connect with us on social media</h5>
            <ul>
                <li><a href="https://facebook.com/esportsarena" target="_blank" class="social-icon facebook">Facebook</a></li>
                <li><a href="https://twitter.com/esportsarena" target="_blank" class="social-icon twitter">Twitter</a></li>
                <li><a href="https://instagram.com/esportsarena" target="_blank" class="social-icon instagram">Instagram</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Posts Section -->
<section class="posts-section">
    <h2>Latest Posts</h2>
    <?php if (have_posts()) : ?>
        <?php if (is_search()) : ?>
            <section class="search-results">
                <h2>Search Results for: <?php echo get_search_query(); ?></h2>
            </section>
        <?php endif; ?>

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
