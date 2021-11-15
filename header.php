<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Parrocchia_San_Pietro
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="site-header">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-9 col-lg-2">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col-lg-8 col-1 d-flex justify-content-center align-items-center" id="nav-menu">
                <?php wp_nav_menu(
                        array(
                           'menu' => '2',
                            'menu_class' => 'primary_menu'
                        )
                ); ?>
            </div>
            <div class="col-3 col-lg-2 d-flex justify-content-end align-items-center">
                <a href="" class="btn btn-primary donate px-3 py-2">Dona ora</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNavBar" aria-controls="mobileNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="d-none container-fluid " id="mobileNavBar">
        <div class="row">
            <?php wp_nav_menu(
                array(
                    'menu' => '2',
                    'menu_class' => 'mobile_menu'
                )
            ); ?>
        </div>
        <div class="row m-1">
            <a href="" class="btn btn-primary donate-mobile px-3 py-2">Dona ora</a>
        </div>
    </div>
</section>

<script type="text/javascript">

    $(window).ready(function (){
        $('.navbar-toggler').on('click', function (){
            let navBar = $('#mobileNavBar');

            if(navBar.hasClass('d-none')){
                navBar.removeClass('d-none');
                $('.navbar-toggler i').removeClass('fa-bars');
                $('.navbar-toggler i').addClass('fa-times');
            }else {
                navBar.addClass('d-none');
                $('.navbar-toggler i').removeClass('fa-times');
                $('.navbar-toggler i').addClass('fa-bars');
            }
        })
    })

</script>