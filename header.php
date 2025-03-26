<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Optimization -->
    <meta name="description" content="The ultimate destination for competitive gaming and esports tournaments.">
    <meta name="keywords" content="esports, gaming, tournaments, live streams">

    <!-- Dynamic Title -->
    <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>

    <!-- Word Press Head Hook -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            
            <!-- Brand Logo and Name -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>

            <!-- Navbar Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#home">Home</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#live-streams">Live Streams</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#game-leaderboard">Leaderboard</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#upcoming-tournaments">Upcoming Tournaments</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#follow-us">Follow Us</a>
                    </li>
                </ul>

                <!-- Search Bar -->
                <form class="search-form form-inline my-2 my-lg-0 ml-3" action="<?php echo home_url('/'); ?>" method="get">
                    <input class="form-control search-input mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s">
                    <button class="search-btn btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
