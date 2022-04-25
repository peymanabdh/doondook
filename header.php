<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<header class="header">

    <div class="navigation-bar">
        <div class="navigation-menu hide-in-mobile">
            <div class="website-logo-wrapper">
                <?php
                $Doondook_general_logo =pishro_get_option('Doondook_general_logo');
                 
                ?>
                <a href="<?php echo site_url(); ?>"><img class="website-logo" src="<?php echo $Doondook_general_logo; ?>" /></a>
            </div>
            <div class="menu-items">
                <div class="menu-item contact-us">
                    <span><a class="popmake-11359" href="#">Contact Us</a></span>
                </div>
                <div class="menu-item">
                    <span><a href="#">About</a></span>
                </div>
                <div class="menu-item">
                    <span><a href="#">Games</a></span>
                </div>
                <div class="menu-item services">
                    <span><a href="JavaScript:void(0)">Services</a></span>
                    <div class="sub-menu-items">
                        <div class="sub-menu-item">
                            <a href="#">White-Label Games</a>
                        </div>
                        <div class="sub-menu-item">
                            <a href="#">Reskin Games</a>
                        </div>
                        <div class="sub-menu-item">
                            <a href="#">Lead Generation</a>
                        </div>
                        <div class="sub-menu-item">
                            <a href="#">Leaderboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-menu hide-in-desktop hide-in-tablet">
            <div class="mobile-menu-icon">
                <span class="open"></span>
            </div>
            <div class="menu-items">
                <div class="menu-item contact-us">
                    <span><a href="#">Contact Us</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-items hide-in-desktop hide-in-tablet">
        <div class="menu-item">
            <span><a href="#">Home</a></span>
        </div>
        <div class="menu-item services">
            <span><a href="JavaScript:void(0)">Services</a></span>
            <div class="sub-menu-items">
                <div class="sub-menu-item">
                    <a href="#">White-Label Games</a>
                </div>
                <div class="sub-menu-item">
                    <a href="#">Reskin Games</a>
                </div>
                <div class="sub-menu-item">
                    <a href="#">Lead Generation</a>
                </div>
                <div class="sub-menu-item">
                    <a href="#">Leaderboard</a>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <span><a href="#">Games</a></span>
        </div>
        <div class="menu-item">
            <span><a href="#">About</a></span>
        </div>
    </div>
</header>