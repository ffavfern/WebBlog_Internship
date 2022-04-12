<?php
/*
Template Name: home
Template Post Type: post, page, event
*/ ?>
<?php include get_template_directory() . '/header-use.php'; ?>
<!--section-->
<div class="row justify-content-center bg-section g-0 p-0">
    <div class="col-11 col-xl-10 col-xxl-10 col-lg-11 col-md-11 justify-content-center">
        <div class="col-12 col-sm-11 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xxl-10 g-0 p-0">
            <!--flash slide-->
            <div class="row justify-content-center g-0 p-0">
                <div class="col-12 col-sm-12 col-xl-2 col-lg-2 col-md-3 col-xxl-2 p-2 flash bg-menu box-flash">
                    <div class="alert-spinner wong">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                    <h6 class="text-white"><strong style="font-weight: bold;">FLASH STORY</strong></h6>
                </div>
                <div class="col-12 col-xl-10 col-lg-10 col-xxl-10 col-md-9 flash bg-slide" style="align-items: center;">
                    <marquee class="justify-content-center" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                        <div class="box-content" style="font-size: 18px;">
                            ค้นหาบทความ ข่าวสารแวดวงไอที ได้รวดเร็วก่อนใครได้ที่นี่
                        </div>
                    </marquee>
                </div>
            </div>
            <!--section 1 บทความล่าสุด-->
            <div class="row g-0 p-0 m-0 justify-content-center">
                <div class="col-12 col-xl-12 col-lg-12">
                    <div class="row g-5 p-0 m-0">
                        <br>
                        <!--บทความล่าสุด-->
                        <div class="col-12 col-xl-8 col-md-12 col-sm-12 col-lg-8 g-0">
                            <div class="row g-0 p-0">
                                <div class="col-6" style="padding-top: 10px; padding-bottom: 10px;">
                                    <h4><span class="underline-title"><strong style="font-size: 18px;">บทความล่าสุด</strong></span>
                                    </h4>
                                </div>
                                <div class="col-6">
                                    <div class="row g-0 align-items-center justify-content-end p-0" style="margin-right: .5rem; margin-top: 35px;">
                                        <div class="col-2 d-flex justify-content-end">
                                            <div class="row g-0 p-0 align-items-center justify-content-end">
                                                <div class="col-6">
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <i class="fa-solid fa-angle-left"></i>
                                                    </button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-white card-rd">
                                <?php $args = array('category_name' => 'mobile', 'posts_per_page' => 1);
                                $the_query = new WP_Query($args);
                                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <img><?php the_post_thumbnail('full'); ?>
                                    <div class="card-img-overlay p-0">
                                        <div class="card-body-text p-3 card-items-1">
                                            <h3 class="card-title"><a href="<?php the_permalink(); ?>" style="color: #fff;text-decoration:none;">realme 9 5G
                                                    ด้วยหน้าจอสมาร์ทโฟนกว้าง 6.5 นิ้ว</a></h3>
                                            <i class="bi bi-clock card-text"> 3 ชั่วโมง ago</i>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <!--most popular-->
                        <div class="col-12 col-sm-12 col-lg-4 col-md-12 col-sm-12 col-xl-4 m-0 p-0">
                            <div class="row g-0 p-0 justify-content-center">
                                <div class="col-8" style="padding-top: 10px;padding-bottom: 10px;">
                                    <h4><span class="underline-title"><strong style="font-size: 18px;">Most
                                                popular</strong></span>
                                    </h4>
                                </div>
                                <div class="col-4 d-flex align-items-end justify-content-end">
                                    <div class="af-trending-navcontrols">
                                    </div>
                                </div>
                            </div>
                            <div class="picks" style="overflow: hidden;">
                                <div class="trending-posts-carousel">
                                    <div class="slick-item mb-2">
                                        <div class="card m-0 p-0 g-0" style="border-radius: 0%;">
                                            <div class="row g-0 p-0 align-items-center">
                                                <div class="col-md-4 card box-trending" style="border-radius: 0%;">
                                                    <div class="card-header p-0" style="border-radius: 0%;">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="...">
                                                        <div class="card-img-overlay items-trending" style="border-radius: 0%;">
                                                            <p class="text-white bg-danger" style="width: 30px; height: 25px;margin-top: 30px; text-align: center;">
                                                                1
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body" style="border-radius: 0%;">
                                                        <h6 class="text-danger">มือถือ</h6>
                                                        <p class="card-text" style="border-radius: 0%;">oppo a33
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item mb-2">
                                        <div class="card m-0 p-0 g-0" style="border-radius: 0%;">
                                            <div class="row g-0 p-0 align-items-center">
                                                <div class="col-md-4 card box-trending" style="border-radius: 0%;">
                                                    <div class="card-header p-0" style="border-radius: 0%;">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                        <div class="card-img-overlay" style="border-radius: 0%;">
                                                            <p class="text-white bg-danger" style="width: 30px; height: 25px;margin-top: 30px; text-align: center;">
                                                                2
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body" style="border-radius: 0%;">
                                                        <h6 class="text-danger">มือถือ</h6>
                                                        <p class="card-text" style="border-radius: 0%;">oppo a33
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item mb-2">
                                        <div class="card m-0 p-0" style="border-radius: 0%;">
                                            <div class="row p-0 g-0 align-items-center">
                                                <div class="col-md-4 card box-trending" style="border-radius: 0%;">
                                                    <div class="card-header p-0" style="border-radius: 0%;">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                        <div class="card-img-overlay" style="border-radius: 0%;">
                                                            <p class="text-white bg-danger" style="width: 30px; height: 25px;margin-top: 30px; text-align: center;">
                                                                3
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body" style="border-radius: 0%;">
                                                        <h6 class="text-danger">มือถือ</h6>
                                                        <p class="card-text" style="border-radius: 0%;">oppo a33
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item mb-2">
                                        <div class="card m-0 p-0" style="border-radius: 0%;">
                                            <div class="row g-0 p-0 align-items-center">
                                                <div class="col-md-4 card box-trending" style="border-radius: 0%;">
                                                    <div class="card-header p-0" style="border-radius: 0%;">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                        <div class="card-img-overlay" style="border-radius: 0%;">
                                                            <p class="text-white bg-danger" style="width: 30px; height: 25px;margin-top: 30px; text-align: center;">
                                                                4
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body" style="border-radius: 0%;">
                                                        <h6 class="text-danger">มือถือ</h6>
                                                        <p class="card-text" style="border-radius: 0%;">oppo a33
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item mb-2">
                                        <div class="card m-0 p-0" style="border-radius: 0%;">
                                            <div class="row g-0 p-0 align-items-center">
                                                <div class="col-md-4 card box-trending" style="border-radius: 0%;">
                                                    <div class="card-header p-0" style="border-radius: 0%;">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a33_2.jpeg" class="img-fluid rounded-start" alt="..." style="border-radius: 0% !important;">
                                                        <div class="card-img-overlay" style="border-radius: 0%;">
                                                            <p class="text-white bg-danger" style="width: 30px; height: 25px;margin-top: 30px; text-align: center;">
                                                                5
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
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
            </div>
        </div>
        <!--box-article-->
        <div class="row g-0 p-0 justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12">
                <!--section 2 -->
                <div class="row g-0 p-0 justify-content-center">
                    <div class="col-12 col-md-12 col-xl-8 col-lg-8 col-xxl-8">
                        <div class="row g-0 p-0 justify-content-between">
                            <h4><span class="underline-title"><strong style="font-size: 18px;">ข่าวสาร e-Sport</strong></span>
                            </h4>
                            <div class="row p-0 justify-content-between">
                                <?php $args = array('post_type' => 'post', 'orderby' => 'ID', 'post_status' => 'publish', 'order' => 'DESC', 'posts_per_page' => 3, 'category_name' => 'news'); ?>
                                <?php $result = new WP_Query($args); ?>
                                <?php if ($result->have_posts()) : ?>
                                    <?php while ($result->have_posts()) : $result->the_post(); ?>
                                        <div class="col-12 col-md-6 col-xl-4 col-lg-4 col-xxl-4">
                                            <a href="<?php the_permalink(); ?>" style="text-decoration: none;color:#000 ">
                                                <div class="card">
                                                    <img class="card-img-top" src="" alt="Card image cap" <?php the_post_thumbnail('medium'); ?> <div class="card-body">
                                                    <h5 class="card-text p-0 m-0"><?php echo get_the_title(); ?></h5>
                                                    <i class="bi bi-clock card-text" style="font-size: 10px;"></i><span style="font-size: 10px; font-style: small;"> <?php echo get_the_time(); ?></span>
                                                    <p><?php echo substr(get_the_excerpt(), 0, 30); ?></p>
                                                </div>
                                            </a>
                                        </div>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                        </div>

                        <div class="col-12">
                            <div class="row g-0 p-0 justify-content-between">
                                <h4><span class="underline-title"><strong style="font-size: 18px;">เกมคอมพิวเตอร์</strong></span>
                                </h4>
                                <div class="row p-0 justify-content-between">
                                    <?php $args = array('post_type' => 'post', 'orderby' => 'ID', 'post_status' => 'publish', 'order' => 'DESC', 'posts_per_page' => 3, 'category_name' => 'gamecomputer'); ?>
                                    <?php $result = new WP_Query($args); ?>
                                    <?php if ($result->have_posts()) : ?>
                                        <?php while ($result->have_posts()) : $result->the_post(); ?>
                                            <div class="col-12 col-md-6 col-xl-4 col-lg-4 col-xxl-4">
                                                <a href="<?php the_permalink(); ?>" style="text-decoration: none;color:#000 ">
                                                    <div class="card">
                                                        <img class="card-img-top" src="" alt="Card image cap" <?php the_post_thumbnail('medium'); ?> <div class="card-body">
                                                        <h5 class="card-text p-0 m-0"><?php echo get_the_title(); ?></h5>
                                                        <i class="bi bi-clock card-text" style="font-size: 10px;"></i><span style="font-size: 10px; font-style: small;"> <?php echo get_the_time(); ?></span>
                                                        <p><?php echo substr(get_the_excerpt(), 0, 30); ?></p>
                                                    </div>
                                                </a>
                                            </div>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4><span class="underline-title"><strong style="font-size: 18px;">เกมออนไลน์</strong></span>
                            </h4>
                            <div class="row p-0 justify-content-between">
                                <?php $args = array('post_type' => 'post', 'orderby' => 'ID', 'post_status' => 'publish', 'order' => 'DESC', 'posts_per_page' => 3, 'category_name' => 'gamecomputer'); ?>
                                <?php $result = new WP_Query($args); ?>
                                <?php if ($result->have_posts()) : ?>
                                    <?php while ($result->have_posts()) : $result->the_post(); ?>
                                        <div class="col-12 col-md-6 col-xl-4 col-lg-4 col-xxl-4">
                                            <a href="<?php the_permalink(); ?>" style="text-decoration: none;color:#000 ">
                                                <div class="card">
                                                    <img class="card-img-top" src="" alt="Card image cap" <?php the_post_thumbnail('medium'); ?> <div class="card-body">
                                                    <h5 class="card-text p-0 m-0"><?php echo get_the_title(); ?></h5>
                                                    <i class="bi bi-clock card-text" style="font-size: 10px;"></i><span style="font-size: 10px; font-style: small;"> <?php echo get_the_time(); ?></span>
                                                    <p><?php echo substr(get_the_excerpt(), 0, 30); ?></p>
                                                </div>
                                            </a>
                                        </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                        </div>

                        <div class="col-12">
                            <h4><span class="underline-title"><strong style="font-size: 18px;">เกมมือถือ</strong></span>
                            </h4>
                        </div>
                        <div class="col-12">
                            <h4><span class="underline-title"><strong style="font-size: 18px;">Easter
                                        Egg</strong></span>
                            </h4>
                        </div>
                        <div class="col-12">
                            <h4><span class="underline-title"><strong style="font-size: 18px;">Gadgets</strong></span>
                            </h4>
                        </div>
                        <div class="col-12">
                            <h4><span class="underline-title"><strong style="font-size: 18px;">มือถือ</strong></span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--aside-->
        <div class="col-12 col-md-12 col-xl-4 col-lg-4 col-xxl-4 pt-5 mt-4">
            <div class="col-12 sticky-items1">
                <!--ทอง-->
                <div class="col-12">
                    <div class="box-show1">
                        <div class="card-header head-box" style="border-radius: 10px;background-color: #FBD569;">
                            <table class="table g-0 m-0 p-0">
                                <thead>
                                    <div class="items-box-picks" style="border-style: hidden;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/moneybuffalo-gold1.png" width="75px" height="auto" alt=""></div>
                                    </tr>
                                    <th scope="col-11">
                                        <h5 style="margin-bottom: 15px;color: #845200;font-size: 18px;">
                                            ทองคำแท่ง</h5>
                                    </th>
                                </thead>
                                <tbody style="border-top-color: #DCB74E">
                                    <tr style="border-bottom: hidden;">
                                        <th scope="col-6 p-0 m-0" style="font-size: 10px;color: #988342;">รับซื้อ(บาท)<br class="m-0 p-0">
                                            <p class="m-0 p-0" style="color: #1F1E14;">30,250.00</p>
                                        </th>
                                        <th scope="col-6 p-0 m-0" style="font-size: 10px;color: #988342;">ขายออก(บาท)<br class="m-0 p-0">
                                            <p class="m-0 p-0" style="color: #1F1E14;">30,350.00</p>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <i style="font-size: 9px;font-family: sans-serif;color: #8C7727;">วันที่
                                1 เมษายน 2022 14.32 น. (ครั้งที่4)</i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <div class="card-header head-box" style="border-radius: 10px;background-color: #FBD569;">
                        <table class="table g-0 m-0 p-0">
                            <thead>
                                <th scope="col-12">
                                    <h5 style="color: #845200;font-size: 18px;">
                                        ทองรูปพรรณ</h5>
                                </th>
                            </thead>
                            <tbody style="border-top-color: #DCB74E">
                                <tr style="border-bottom: hidden;">
                                    <th scope="col-6 p-0 m-0" style="font-size: 10px;color: #988342;">รับซื้อ(บาท)<br class="m-0 p-0">
                                        <p class="m-0 p-0" style="color: #1F1E14;">30,250.00</p>
                                    </th>
                                    <th scope="col-6 p-0 m-0" style="font-size: 10px;color: #988342;">ขายออก(บาท)<br class="m-0 p-0">
                                        <p class="m-0 p-0" style="color: #1F1E14;">30,350.00</p>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <i style="font-size: 9px;font-family: sans-serif;color: #8C7727;">ข้อมูลจาก
                            สมาคมค้าทองคำ</i>
                    </div>
                </div>
                <br>
                <!--ราคาน้ำมัน-->
                <div class="col-12">
                    <div class="box-show2">
                        <div class="col-12">
                            <div class="card-header head-box2" style="border-radius: 10px;background-color: #fff;">
                                <table class="table g-0 m-0 p-0">
                                    <thead>
                                        <div class="items-box-picks2" style="border-style: hidden;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moneybuffalo-oil.png" width="87px" height="auto" alt="">
                                        </div>
                                        <th scope="col-11 p-0">
                                            <h5 class="text-box-show p-1" style="margin-bottom: 15px;font-size: 18px;">
                                                ราคาน้ำมัน</h5>
                                        </th>
                                    </thead>
                                    <tbody style="border-top-style: groove;">
                                        <tr style="border-bottom: hidden;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">

                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px;padding-right: 0;">
                                                <p class="m-0 p-0" style="color: #008DC6;text-align: end;">
                                                    ราคา (บาท/ลิตร)
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: start;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">
                                                    แก็สโซฮอล์ 95
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">40
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">
                                                    แก็สโซฮอล์ 91
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">39
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">ดีเซล
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">29
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">NGV
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">
                                                </p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <i style="font-size: 8px;font-family: sans-serif;color: gray;">ข้อมูลจาก
                                    บริษัท บางจาก คอปอเรชั่น จำกัด (มหาชน) วันที่ 30 มีนาคม
                                    2022</i><br>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/บางจาก.jpeg" width="100px" height="auto" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!--อัตราแลกเปลี่ยน-->
                <div class="col-12">
                    <div class="box-show3">
                        <div class="col-12">
                            <div class="card-header head-box3" style="border-radius: 10px;background-color: #fff;">
                                <table class="table g-0 m-0 p-0">
                                    <thead>
                                        <div class="items-box-picks3" style="border-style: hidden;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moneybuffalo-currency.png" width="83px" height="auto" alt="">
                                        </div>
                                        <th scope="col">
                                            <h5 class="text-box-show p-1" style="font-size: 18px;">
                                                อัตราแลกเปลี่ยน</h5>
                                        </th>
                                    </thead>
                                    <tbody style="border-top-style: groove;">
                                        <tr style="border-bottom: hidden;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">

                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px;">
                                                <p class="m-0 p-0" style="color: #008DC6;text-align: end;">
                                                    ซื้อ (บาท)
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px;">
                                                <p class="m-0 p-0" style="color: #008DC6;text-align: end;">
                                                    ขาย (บาท)
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: start;"><br class="m-0 p-0">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/usd.png" style="border-radius: 100%; width: 20px; height: 20px;" alt="">
                                                <span class="m-0 p-0" style="color: #1F1E14;">
                                                    USD
                                                </span>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">32.86
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">33.98
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: start;"><br class="m-0 p-0">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/GBp.png" style="border-radius: 100%; width: 20px; height: 20px;" alt="">
                                                <span class="m-0 p-0" style="color: #1F1E14;">
                                                    GBP
                                                </span>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">32.86
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">33.98
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: start;"><br class="m-0 p-0">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/eur.png" style="border-radius: 100%; width: 20px; height: 20px;" alt="">
                                                <span class="m-0 p-0" style="color: #1F1E14;">
                                                    EUR
                                                </span>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">32.86
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">33.98
                                                </p>
                                            </th>
                                        </tr>
                                        <tr style="border-bottom: groove;">
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: start;"><br class="m-0 p-0">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jpy.jpeg" style="border-radius: 100%; width: 20px; height: auto;" alt="">
                                                <span class="m-0 p-0" style="color: #1F1E14;">
                                                    JPY
                                                </span>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">32.86
                                                </p>
                                            </th>
                                            <th scope="col-6 p-0 m-0" style="font-size: 10px; text-align: end;"><br class="m-0 p-0">
                                                <p class="m-0 p-0" style="color: #1F1E14;">33.98
                                                </p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <i style="font-size: 8px;font-family: sans-serif;color: gray;">ข้อมูลจาก
                                    ธนาคารกรุงเทพ วันที่ 30 มีนาคม 2022 เวลา 13.50 น.</i><br>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bkb.png" width="150px" height="auto" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include get_template_directory() . '/footer-use.php'; ?>