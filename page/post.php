<?php

/*** Template Name: Custom: post */
?>
<?php include get_template_directory() . '/header-use.php'; ?>

<head>
    <title>หน้าบทความ</title>
</head>
<!--section1-->
<div class="row justify-content-center g-0 p-0 m-0">
    <div class="col-11 col-sm-11 col-xl-10 col-xxl-10 col-lg-11 col-md-11">
        <div class="row justify-content-center g-3 p-0 m-0">
            <div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8  p-0 m-0">
                <div class="card p-3">
                    <?php
                    $args = array(
                        'category_name' => 'news',
                        'posts_per_page' => 1
                    );
                    $the_query = new WP_Query($args);

                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                    <?php the_content();

                    endwhile;

                    wp_reset_postdata();
                    ?>
                </div>
                <br>
            </div>
            <!--aside-->
            <div class="col-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 col-xxl-4">
                <div class="col-12 sticky-items1">
                    <div class="row g-0 p-0 justify-content-center">
                        <div class="col-8">
                            <h4><span class="underline-title"><strong style="font-size: 18px;">Most
                                        popular</strong></span>
                            </h4>
                        </div>
                        <div class="col-4 d-flex align-items-end justify-content-end">
                            <div class="af-trending-navcontrols ">
                            </div>
                        </div>
                    </div>
                    <div class="picks" style="height: 425px; overflow: hidden;">
                        <div class="trending-posts-carousel">
                            <div class="slick-item">
                                <div class="card m-0 p-0 g-0" style="border-radius: 0%;">
                                    <div class="row g-0 p-0 align-items-center">
                                        <div class="col-md-4 col-4 col-sm-4 card box-trending" style="border-radius: 0%;">
                                            <div class="card-header p-0" style="border-radius: 0%;">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="...">
                                                <div class="card-img-overlay items-trending" style="border-radius: 0%;">
                                                    <p class="text-white bg-danger" style="width: 20px; height: 20px; text-align: center;">
                                                        1
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-8 col-sm-8">
                                            <div class="card-body" style="border-radius: 0%;">
                                                <h6 class="text-danger">มือถือ</h6>
                                                <p class="card-text" style="border-radius: 0%;">oppo a33
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-item">
                                <div class="card m-0 p-0 g-0" style="border-radius: 0%;">
                                    <div class="row g-0 p-0 align-items-center">
                                        <div class="col-md-4 col-4 col-sm-4 card box-trending" style="border-radius: 0%;">
                                            <div class="card-header p-0" style="border-radius: 0%;">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                <div class="card-img-overlay" style="border-radius: 0%;">
                                                    <p class="text-white bg-danger" style="width: 20px; height: 20px; text-align: center;">
                                                        2
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-8 col-sm-8">
                                            <div class="card-body" style="border-radius: 0%;">
                                                <h6 class="text-danger">มือถือ</h6>
                                                <p class="card-text" style="border-radius: 0%;">oppo a33
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-item">
                                <div class="card m-0 p-0" style="border-radius: 0%;">
                                    <div class="row p-0 g-0 align-items-center">
                                        <div class="col-md-4 col-4 col-sm-4 card box-trending" style="border-radius: 0%;">
                                            <div class="card-header p-0" style="border-radius: 0%;">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                <div class="card-img-overlay" style="border-radius: 0%;">
                                                    <p class="text-white bg-danger" style="width: 20px; height: 20px; text-align: center;">
                                                        3
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-8 col-sm-8">
                                            <div class="card-body" style="border-radius: 0%;">
                                                <h6 class="text-danger">มือถือ</h6>
                                                <p class="card-text" style="border-radius: 0%;">oppo a33
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-item">
                                <div class="card m-0 p-0" style="border-radius: 0%;">
                                    <div class="row g-0 p-0 align-items-center">
                                        <div class="col-md-4 col-4 col-sm-4 card box-trending" style="border-radius: 0%;">
                                            <div class="card-header p-0" style="border-radius: 0%;">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                <div class="card-img-overlay" style="border-radius: 0%;">
                                                    <p class="text-white bg-danger" style="width: 20px; height: 20px; text-align: center;">
                                                        4
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-8 col-sm-8">
                                            <div class="card-body" style="border-radius: 0%;">
                                                <h6 class="text-danger">มือถือ</h6>
                                                <p class="card-text" style="border-radius: 0%;">oppo a33
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-item">
                                <div class="card m-0 p-0" style="border-radius: 0%;">
                                    <div class="row g-0 p-0 align-items-center">
                                        <div class="col-md-4 col-4 col-sm-4 card box-trending" style="border-radius: 0%;">
                                            <div class="card-header p-0" style="border-radius: 0%;">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                <div class="card-img-overlay" style="border-radius: 0%;">
                                                    <p class="text-white bg-danger" style="width: 20px; height: 20px; text-align: center;">
                                                        5
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-8 col-sm-8">
                                            <div class="card-body" style="border-radius: 0%;">
                                                <h6 class="text-danger">มือถือ</h6>
                                                <p class="card-text" style="border-radius: 0%;">oppo a33
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4 pb-5 g-0 m-0 justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-11 col-xxl-12">
            </div>
        </div>
    </div>
</div>
<br>
<?php include get_template_directory() . '/footer-use.php'; ?>