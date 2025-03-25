<?php get_header(); ?>

<section class="arena" id="home">
    <h1>Welcome to Esports Arena</h1>
    <p>Your ultimate destination for gaming news, leaderboards, and live tournaments.</p>
</section>

<?php quote_of_the_day(); ?>

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
    <h2>Tournaments</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Upcoming Matches</h5>
            <div class="accordion" id="tournamentAccordion">
            <ul>
                <li>
                    <a class="d-block" data-toggle="collapse" href="#tournament1" role="button" aria-expanded="false" aria-controls="tournament1">
                        <strong>Battle Royale Invitational - Fortnite</strong> - Date: May 25, 2025
                    </a>
                    <div class="collapse" id="tournament1" data-parent="#tournamentAccordion">
                        <div class="card card-body mt-2">
                            <p><strong>Description:</strong> The Battle Royale Invitational is an online-only event bringing together top competitive fortnite players from around the world. Contestants battle it out in a last-duo-standing format, where only the best duo survives to claim the grand prize.</p>
                            <p><strong>Location:</strong> Online</p>
                            <p><strong>Format:</strong> Last man standing with only duo teams allowed.</p>
                            <p><strong>Prize Pool:</strong> $100,000</p>
                            <p><strong>Player Requirements:</strong> Players must be ranked in the top 100 of the global leaderboard to qualify.</p>
                            <p><strong>Registration Deadline:</strong> May 7, 2025</p>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="d-block" data-toggle="collapse" href="#tournament2" role="button" aria-expanded="false" aria-controls="tournament2">
                        <strong>Champion's League - Valorant</strong> - Date: June 18, 2025
                    </a>
                    <div class="collapse" id="tournament2" data-parent="#tournamentAccordion">
                        <div class="card card-body mt-2">
                            <p><strong>Description:</strong> The Champion's League is an annual tournament featuring the world’s best valorant players. This tournament is played in a series of group stages followed by knockout rounds.</p>
                            <p><strong>Location:</strong> Perth Stadium </p>
                            <p><strong>Format:</strong> Group stages followed by single-elimination knockout rounds.</p>
                            <p><strong>Prize Pool:</strong> $500,000</p>
                            <p><strong>Player Requirements:</strong> Players must be part of an accredited esports team or organization.</p>
                            <p><strong>Registration Deadline:</strong> June 1, 2025</p>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="d-block" data-toggle="collapse" href="#tournament3" role="button" aria-expanded="false" aria-controls="tournament3">
                        <strong>Esports Championship - League of Legends</strong> - Date: July 28, 2025
                    </a>
                    <div class="collapse" id="tournament3" data-parent="#tournamentAccordion">
                        <div class="card card-body mt-2">
                            <p><strong>Description:</strong> The Esports Championship brings together elite players, competing for the title of best overall league of legends esports team. The tournament will span over several weeks.</p>
                            <p><strong>Location:</strong> Las Vegas</p>
                            <p><strong>Format:</strong> Round-robin group stages, followed by best-of-three and best-of-five rounds in the knockout stages.</p>
                            <p><strong>Prize Pool:</strong> $750,000</p>
                            <p><strong>Player Requirements:</strong> Open to teams with at least five members from any esports discipline.</p>
                            <p><strong>Registration Deadline:</strong> July 15, 2025</p>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="d-block" data-toggle="collapse" href="#tournament4" role="button" aria-expanded="false" aria-controls="tournament4">
                        <strong>World Championship - Dota 2, Dead By Daylight, Rocket League</strong> - Date: September 29, 2025
                    </a>
                    <div class="collapse" id="tournament4" data-parent="#tournamentAccordion">
                        <div class="card card-body mt-2">
                            <p><strong>Description:</strong> The World Championship is the pinnacle of competitive gaming, featuring the top players across multiple genres. This tournament is considered the ultimate test for esports athletes, where the best of the best compete for international glory.</p>
                            <p><strong>Location:</strong> Tokyo </p>
                            <p><strong>Format:</strong> Best-of-five series for the final stage, with earlier rounds consisting of single-elimination matches.</p>
                            <p><strong>Prize Pool:</strong> $2,000,000</p>
                            <p><strong>Player Requirements:</strong> Only the top 10 ranked teams in each game will qualify.</p>
                            <p><strong>Registration Deadline:</strong> September 10, 2025</p>
                        </div>
                    </div>
                </li>
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
