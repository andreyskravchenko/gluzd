<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div>
            <a href="<?php echo site_url() ?>">
                <img src="<?php echo get_theme_file_uri('images/gluzd-logo-primary.svg'); ?>" alt="GLUZD WordPress Development Agency logo" width="100">
            </a>
        </div>
        <nav>
            
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
            ?>
            
        </nav>
    </header>