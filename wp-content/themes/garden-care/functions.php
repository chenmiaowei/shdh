<?php

/**
 * Created by PhpStorm.
 * User: air
 * Date: 3/15/16
 * Time: 10:22 PM
 */
/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */

/**
 * Proper way to enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts()
{
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('js.js', get_template_directory_uri() . '/js/js.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('isotope.pkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow', array('jquery'), '1.0.0', true);
    wp_enqueue_script('themepunch.tools', get_template_directory_uri() . '/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('themepunch.revolution', get_template_directory_uri() . '/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.actions', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.actions.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.carousel', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.kenburn', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.layeranimation', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.migration', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.migration.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.navigation', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.parallax', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.slideanims', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('revolution.extension.video', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.video.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/js/validate.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom.js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true);

//    wp_enqueue_style('main.style', get_template_directory_uri() . '/css/style.css', ['wp-mediaelement']);

}


function my_init_method()
{
//    wp_enqueue_style('main.style', get_template_directory_uri() . '/css/style.css', ['wp-mediaelement']);
//
//    wp_enqueue_style('theme-print', get_template_directory_uri() . '/print.css', false, false, 'print');


//    @import url(../revolution/css/settings.css);
//@import url('bootstrap.min.css');
//@import url('animate.css');
//@import url('font-awesome.min.css');
//@import url('hover.css');
//@import url('jquery.bxslider.css');
//@import url('owl.carousel.css');
//@import url('owl.theme.default.min.css');
//@import url('strocke-gap-icons-style.css');
//@import url('jquery.fancybox.css');
//@import url('../fonts/flaticon/flaticon.css');

    wp_enqueue_style('main.settings', get_template_directory_uri() . '/revolution/css/settings.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.animate', get_template_directory_uri() . '/css/animate.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.awesome', get_template_directory_uri() . '/css/font-awesome.min.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.hover', get_template_directory_uri() . '/css/hover.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.carousel', get_template_directory_uri() . '/css/owl.carousel.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.owl.theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.strocke', get_template_directory_uri() . '/css/strocke-gap-icons-style.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.flaticon', get_template_directory_uri() . '/fonts/flaticon/flaticon.css', ['wp-mediaelement'], false);
    wp_enqueue_style('main.style', get_template_directory_uri() . '/css/style.css', ['wp-mediaelement'], false);
}

add_action('init', 'my_init_method');
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');


function gardenCare_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('header-menu', __('Header Menu'));
    if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Homepage recommend Image',
                'id' => 'secondary-image',
                'post_type' => 'post'
            )
        );
    }
}

add_action("after_setup_theme", "gardenCare_setup");


function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<div class=\"post-pagination blog-left-pagination\"><ul>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link(1) . "'>&laquo; First</a>";
        if ($paged > 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo; Previous</a>";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<li class=\"active\"><a href=\"#\">" . $i . "</a></li>" : "<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
            }
        }

        if ($paged + 1 <= $pages) {
            echo "<li><a href=\"" . get_pagenum_link($paged + 1) . "\"><i class=\"fa fa-angle-double-right\"></i></a></li>";
        }
        if ($paged < $pages && $showitems < $pages) echo "<a href=\"" . get_pagenum_link($paged + 1) . "\">Next &rsaquo;</a>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($pages) . "'>Last &raquo;</a>";
        echo "</ul></div>\n";
    }
}


function twentythirteen_wp_title($title, $sep)
{
    global $paged, $page;

    if (is_feed())
        return $title;

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if (($paged >= 2 || $page >= 2) && !is_404())
        $title = "$title $sep " . sprintf(__('Page %s', 'twentythirteen'), max($paged, $page));

    return $title;
}

add_filter('wp_title', 'twentythirteen_wp_title', 10, 2);