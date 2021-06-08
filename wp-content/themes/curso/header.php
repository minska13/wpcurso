<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-sm-7 col-6">
                        <?php
                        if( is_active_sidebar( 'social-media' ) ) {
                            dynamic_sidebar( 'social-media' );
                        }
                        ?>
                    </div>
                    <div class="search col-xl-3 col-sm-5 col-6 text-end"><?php get_search_form(); ?></div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <section class="logo col-md-2 col-12 text-center">
                        <?php the_custom_logo(); ?>
                    </section>
                    <nav class="main-menu col-md-10 text-end">
                        <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>
                    </nav>
                </div>
            </div>
        </section>
    </header>