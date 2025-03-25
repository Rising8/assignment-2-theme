<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#home">Home</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#live-streams">Live Streams</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#leaderboard">Leaderboard</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#upcoming-tournaments">Upcoming Tournaments</a>
                    </li>
                    <li class="nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo home_url(); ?>#follow-us">Follow Us</a>
                    </li>
                </ul>

                <!-- Search Bar -->
                <form class="d-flex search-form" action="<?php echo home_url('/'); ?>" method="get">
                    <input class="form-control me-2 search-input" type="search" placeholder="Search" aria-label="Search" name="s">
                    <button class="search-btn" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
