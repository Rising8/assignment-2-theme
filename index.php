<?php get_header(); ?>

<section class="hero">
    <h1>Welcome to Esports Arena</h1>
    <p>Your ultimate destination for gaming news, leaderboards, and live tournaments.</p>
</section>

<section class="live-streams">
    <h2>Live Streams</h2>
    <div class="streams">
        <!-- Embed Twitch/YouTube iframe here -->
        <iframe src="https://www.twitch.tv/riotgames" frameborder="0" allowfullscreen></iframe>
    </div>
</section>

<section class="leaderboard">
    <h2>Current Rankings</h2>
    <!-- Later, we will fetch ranking data dynamically -->
    <ul>
        <li>1. Team Alpha - 500 Points</li>
        <li>2. Team Bravo - 450 Points</li>
        <li>3. Team Omega - 400 Points</li>
    </ul>
</section>

<?php get_footer(); ?>