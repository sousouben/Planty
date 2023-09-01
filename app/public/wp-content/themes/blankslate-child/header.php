<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
                <!--Ajout du logo avec redirection vers page home'/'-->
                <div id="site-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo">
                    </a>
                </div>                
                <div id="site-description" <?php if (!is_single()) {
                                                echo ' itemprop="description"';
                                            } ?>><?php bloginfo('description'); ?></div>
            </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'link_before' => '<span itemprop="name">',
                    'link_after' => '</span>'
                )); ?>
            </nav>
            
            
        </header>
        <div id="container">
            <main id="content" role="main">