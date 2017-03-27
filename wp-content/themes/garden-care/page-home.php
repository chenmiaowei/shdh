<?php

?>

<section class="rev_slider_wrapper gardener-banner">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <?php
        global $wpdb;
        $sliderId = 1;
        $query = $wpdb->prepare("SELECT * FROM " . $wpdb->prefix . "huge_itslider_sliders where id = '%d' order by id ASC", $sliderId);
        $slider = $wpdb->get_results($query);
        $query = $wpdb->prepare("SELECT * FROM " . $wpdb->prefix . "huge_itslider_images where slider_id = '%d' order by ordering ASC", $sliderId);
        $images = $wpdb->get_results($query);
        if ($slider[0]->random_images == "on")
            shuffle($images);
        $query = "SELECT * FROM " . $wpdb->prefix . "huge_itslider_params";
        $rowspar = $wpdb->get_results($query);
        $paramssld = array();
        foreach ($rowspar as $rowpar) {
            $key = $rowpar->name;
            $value = $rowpar->value;
            $paramssld[$key] = $value;
        }
        ?>
        <ul>

            <?php

            foreach ($images as $image) {
                ?>
                <li data-transition="parallaxvertical">
                    <img src="<?php echo $image->image_url; ?>" alt="" width="1920"
                         height="705" data-bgposition="top center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">


                    <?php
                    $description = null;
                    if (strpos($image->name, ";") !== false) {
                        $nameA = explode(";", $image->name);
                        $image->name = $nameA[0];
                        $description = $nameA[1];
                    }
                    ?>
                    <div class="tp-caption sfl tp-resizeme gardener-caption-h1"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="190"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="500">
                        <?php echo $image->name; ?>
                    </div>
                    <?php if ($description) {
                        ?>
                        <div class="tp-caption sfr tp-resizeme gardener-caption-h1 bg-white font-light"
                             data-x="left" data-hoffset="0"
                             data-y="top" data-voffset="251"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="o:0"
                             data-transform_out="o:0"
                             data-start="1000">
                            <span class="bold"><?php echo $description; ?></span>
                        </div>
                        <?php
                    } ?>

                    <div class="tp-caption sfb tp-resizeme gardener-caption-p gardener-caption-p1"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="340"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="1500">
                        <?php echo $image->description; ?>
                    </div>
                    <div class="tp-caption sfb tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="505"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="o:0"
                         data-transform_out="o:0"
                         data-start="2000">
                        <a href="<?php echo $image->sl_url; ?>" class="banner-btn">learn more <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </li>
                <?php
            }
            ?>

        </ul>
    </div>
</section>

<!-- #promotional-text -->
<section id="promotional-text" class="gardener">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p>We will be free to provide you with the relevant information</p>
                <a class="contact-button" href="<?php echo esc_url(get_permalink(get_page_by_title('Contact Us'))); ?>">
                    <div class="contact-us-button">contact us</div>
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /#promotional-text -->


<section class="soft-hard-wood">
    <div class="container">
        <div class="section-title3">
            <h1>SOFTWOOD AND HARDWOOD</h1>
            <p>At present our company operating timber can be divided into 2 categories:softwood and hardwood</p>
        </div>
        <div class="row">
            <?php
            $original_query = $wp_query;
            $wp_query = null;
            $args = array('posts_per_page' => 2, 'tag' => 'home-recommend', 'category_name' => 'softwood');
            $wp_query = new WP_Query($args);
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <a class="dedicated-team-img-holder" href="<?= get_permalink(); ?>">
                            <?php if (class_exists('MultiPostThumbnails')) :
                                MultiPostThumbnails::the_post_thumbnail(
                                    get_post_type(),
                                    'secondary-image',
                                    null,
                                    array(270, 560)
                                );
                            endif; ?>
                        </a>
                        <div class="dedicated-team-member-name">
                            <h4><?php the_title(); ?><br><span>
                                    (<?php $tags = get_the_category(get_the_ID());
                                    echo $tags[0]->name; ?>)
                                </span></h4>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            $wp_query = null;
            $wp_query = $original_query;
            wp_reset_postdata();
            ?>
            <?php
            $original_query = $wp_query;
            $wp_query = null;
            $args = array('posts_per_page' => 2, 'tag' => 'home-recommend', 'category_name' => 'hardwood');
            $wp_query = new WP_Query($args);
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <a class="dedicated-team-img-holder" href="<?= get_permalink(); ?>">
                            <?php if (class_exists('MultiPostThumbnails')) :
                                MultiPostThumbnails::the_post_thumbnail(
                                    get_post_type(),
                                    'secondary-image',
                                    null,
                                    array(270, 560)
                                );
                            endif; ?>
                        </a>
                        <div class="dedicated-team-member-name">
                            <h4><?php the_title(); ?><br><span>
                                    (<?php $tags = get_the_category(get_the_ID());
                                    echo $tags[0]->name; ?>)
                                </span></h4></h4>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            $wp_query = null;
            $wp_query = $original_query;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

<section id="welcome-to-gardener">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <p><img src="<?php echo get_template_directory_uri(); ?>/img/welcome.png" height="80"></p>
                <h2>Forest Corporation New South Wales (FCNSW)。</h2>

                <p>Forestry Corporation of NSW is the largest manager of commercial native and plantation forests in NSW. Managing more than two million hectares of forests for the economic, environmental and social benefit of the people of NSW and Australia. FCNSW is a major force in the state's timber industry which contributes nearly $3 billion to the NSW economy annually. <br/>
                    Forestry Corporation came into being on 1 January 2013 when Forests NSW was corporatised. As a state owned corporation FCNSW are publicly owned and under the direction of a skilled commercial board. Forestry Corporation focuses on its core business of growing and harvesting timber to meet the community's needs for hardwood and softwood products while ensuring the environment is protected and the forests offer recreation opportunities for community.</p>
            </div>
            <div class="col-lg-5 hidden-md">
                <div class="img-holder hvr-rectangle-out">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-to-gardener/1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="landscaping-design-gardener">
    <div class="container">
        <?php
        $original_query = $wp_query;
        $wp_query = null;
        $args = array('pagename' => 'sample-page');
        $wp_query = new WP_Query($args);
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="img-border">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <h2 class="t1"><span><?php echo implode(get_post_custom_values('title')); ?></span></h2>
                        <h1 class="t2">
                            <span><?php echo implode(get_post_custom_values('summary', get_the_ID())); ?></span></h1>
                        <?php the_content(); ?>
                        <ul>
                            <li><a href="<?php echo get_page_link(get_the_ID()); ?>">LEARN MORE<span
                                        class="read-more"></span></a></li>
                        </ul>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        $wp_query = null;
        $wp_query = $original_query;
        wp_reset_postdata();
        ?>
    </div>
</section>


<!-- gallery Modal -->
<div class="modal fade" id="single-gallery-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabelTwo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabelTwo">Details of <span class="item-name">Landscaping Project</span>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-holder item-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/latest-project-gardener/1.jpg"
                                 alt="">
                        </div>
                    </div>
                    <div class="col-md-6 item-text">
                        <!-- content loading via jQuery -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /gallery Modal -->


<!--Start dedicated team area-->
<section id="dedicated-team-area" class="home dedicated-team-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title2">
                    <h1><span>Awards</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="dedicated-team-items owl-carousel owl-theme">

                <?php
                $original_query = $wp_query;
                $wp_query = null;
                $args = array('posts_per_page' => 5, 'category_name' => 'Awards');
                $wp_query = new WP_Query($args);
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>
                        <!--Start dedicated team single item-->
                        <div class="item">
                            <div class="dedicated-team-single-item">
                                <div class="dedicated-team-img-holder">
                                    <?php the_post_thumbnail(array(270, 328)); ?>
                                </div>
                                <div class="dedicated-team-member-name">
                                    <h4><?php the_title(); ?><br><span><?php the_excerpt() ?></span></h4>
                                </div>
                            </div>
                        </div>
                        <!--End dedicated team single item-->
                        <?php
                    endwhile;
                endif;
                $wp_query = null;
                $wp_query = $original_query;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>
<!--End dedicated team area-->


<section id="video-section-gardener">
    <?php
    $original_query = $wp_query;
    $wp_query = null;
    $args = array('posts_per_page' => 1, 'category_name' => 'Gallery', 'tag' => 'home-recommend');
    $wp_query = new WP_Query($args);
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <div class="container">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 video-preview">
                    <a href="http://www.youtube.com/watch?v=hMHAcYsvxHE" data-toggle="modal"
                       data-target=".video-popup-modal-<?php the_ID(); ?>">
                        <?php the_post_thumbnail(array(421, 248)); ?>
                    </a>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 video-text">
                    <h2><?php the_title(); ?></h2>

                    <p class="green">
                        <?php
                        $get_post_custom_values1 = get_post_custom_values("summary");
                        foreach ($get_post_custom_values1 as $item) {
                            echo $item;
                        }
                        ?>
                    </p>

                    <p class="white">
                        <?php
                        $get_post_custom_values1 = get_post_custom_values("content");
                        foreach ($get_post_custom_values1 as $item) {
                            echo $item;
                        }
                        ?>
                    </p>
                    <a class="contact-button"
                       href="<?php echo esc_url(get_permalink(get_page_by_title('Gallery'))); ?>">
                        <div class="contact-us-button">see videos</div>
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade video-popup-modal  video-popup-modal-<?php the_ID(); ?>"
                 id="video-popup-modal-<?php the_ID(); ?>" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center"
                                id="myModalLabel"><?php the_title(); ?></h4>
                            <button type="button" class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"><span
                                    aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="content" style="width: 569px;height: 317px; position: relative;">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    endif;
    $wp_query = null;
    $wp_query = $original_query;
    wp_reset_postdata();
    ?>

</section>


<section class="wood-collection-process">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/wood-collection-process.png">
    </div>
</section>


<section id="career-section-gardener">
    <div class="container">
        <h1>CAREER</h1>
        <div class="row">
            <?php
            $original_query = $wp_query;
            $wp_query = null;
            $args = array('posts_per_page' => 5, 'category_name' => 'Career');
            $wp_query = new WP_Query($args);
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <h3><?php the_title(); ?></h3>
                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                        <h3>
                            Qualifications :
                        </h3>
                        <div>
                            <?php
                            $get_post_custom_values = get_post_custom_values("Qualifications");
                            foreach ($get_post_custom_values as $get_post_custom_value) {
                                echo "<p>{$get_post_custom_value}</p>";
                            }
                            ?>
                        </div>
                        <p class="apply-for"><a href="<?php echo get_permalink(); ?>">APPLY FOR</a></p>
                    </div>
                    <?php
                endwhile;
            endif;
            $wp_query = null;
            $wp_query = $original_query;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>


<section id="blog-gardener">
    <div class="container">
        <div class="section-title2">
            <h1><span>NEWS</span></h1>
        </div>
        <div class="row">

            <?php
            $original_query = $wp_query;
            $wp_query = null;
            $args = array('posts_per_page' => 3, 'tag' => 'home-recommend', 'category_name' => 'Article');
            $wp_query = new WP_Query($args);
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-blog-post">
                        <div class="img-holder">
                            <?php
                            the_post_thumbnail(array(370, 200));
                            ?>

                            <div class="overlay">
                                <div class="inner-holder">
                                    <ul class="button">
                                        <li><a href="<?php echo get_permalink(); ?>"><i class="fa fa-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="date">
                                <b><?php the_modified_date("d"); ?></b> <br> <?php the_modified_date("M"); ?>
                            </div>
                        </div>
                        <ul>
                            <li><a href="<?php echo get_permalink(); ?>">Read More<span
                                        class="read-more"></span></a></li>
                        </ul>
                        <a href="blog-details.html"><h2><?php the_title(); ?></h2></a>

                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <?php
                endwhile;
            endif;
            $wp_query = null;
            $wp_query = $original_query;
            wp_reset_postdata();
            ?>


        </div>
    </div>
</section>
