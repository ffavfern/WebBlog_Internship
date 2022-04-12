<?php

/*** Template Name: Custom: blog1 */
get_header(); ?>

<head>
    <title>เกมออนไลน์</title>
</head>
<br>
<!--section-->
<div class="row justify-content-center bg-section g-0 p-0">
    <div class="col-11 col-xl-10 col-xxl-10 col-lg-11 col-md-11 justify-content-center">
        <!--box-article-->
        <div class="row g-0 p-0 justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 g-0">
                <!--article -->
                <div class="row g-2 p-0 justify-content-center">
                    <div class="col-12 col-md-12 col-xl-12 col-lg-12 col-xxl-12">
                        <div class="col-12" style="padding-top: 10px; padding-bottom: 10px;">
                            <h4 class="move-text"><span class="underline-title1"><strong style="font-size: 18px;">เกมออนไลน์</strong></span>
                            </h4>
                        </div>
                        <br>
                        <div class="row p-0 g-3">
                            <?php $args = array('post_type' => 'post', 'orderby' => 'ID', 'post_status' => 'publish', 'order' => 'DESC', 'posts_per_page' => -1, 'category_name' => 'gameonline', 'showposts' => ''); ?>
                            <?php $result = new WP_Query($args); ?>
                            <?php if ($result->have_posts()) : ?>
                                <?php while ($result->have_posts()) : $result->the_post(); ?>
                                    <div class="col-12 col-md-6 col-xl-3 col-lg-3 col-xxl-3">
                                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;color:#000 ">
                                            <div class="card">
                                                <img class="card-img-top" src="" alt="Card image cap" <?php the_post_thumbnail('medium'); ?>
                                                <div class="card-body">
                                                <h5 class="card-text p-0 m-0" style="font-weight: bold;"><?php echo get_the_title(); ?></h5>
                                                <i class="bi bi-clock card-text" style="font-size: 10px;"></i><span style="font-size: 10px; font-style: small;"> <?php echo get_the_time(); ?></span>
                                                <p style="font-size: 10px;"><?php echo get_the_excerpt(1); ?></p>
                                            </div>
                                    </div>
                                    </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>