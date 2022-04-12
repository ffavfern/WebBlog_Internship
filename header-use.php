<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&family=Prompt:wght@300;400&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1cf18f8f1.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/nav.scoll.js"'></script>

</head>

<body>
    <!--navbar&logo&menu-->
    <div class="container-fluid g-0">
        <!--menu-->
        <div id="navposition" class="row justify-content-center bg-menu navbar g-0 p-0">
            <div class="col-12 col-sm-11 col-xxl-10 col-xl-10 col-lg-11 col-md-11 g-0 bg-menu">
                <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-menu">
                    <a class="navbar-brand " href="#">
                        <button class="navbar-toggler" style="color: #fff;font-size: x-large; border: 0;" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon"><i class="bi bi-list"></i></span>
                        </button></a>
                    <a href="index.html">
                        <span id="nav-logo" class="navbar-toggler" style="border: 0;" aria-expanded="false">
                            <span class="logo"><img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_200x200.png"
                                    sizes="(max-width: 200px)"></span>
                        </span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-logo" style="margin-right: 20px;">
                                <a href="<?php echo get_site_url(); ?>/?page_id=6/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_200x200.png" alt=""
                                        style="width: 50px;height: 50px;"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/?page_id=9/">ข่าวสาร e-sport</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">เกมคอมพิวเตอร์</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/?page_id=160/">เกมออนไลน์</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">เกมมือถือ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">เทคนิคการเล่นเกม</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Easter Egg</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Gadgets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">มือถือ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">sitemap</a>
                            </li>
                        </ul>
                    </div>
                    <span class="icon">
                        <i class="fas fa-search " id="search-btn" style="color: white; padding-right: 2rem;"
                            aria-hidden="true"></i>
                    </span>
                    <form action="" class="search-bar-container">
                        <input type="search" id="search-bar" placeholder="ค้นหา...">
                        <input type="submit" class="search-submit" value="ค้นหา" style="border: 0%;">
                    </form>
                </nav>

            </div>
        </div>
        <!--bg-top-->
        <div class="row justify-content-center bg-logo g-0 p-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-logo.png" class="col-12 col-xxl-2 col-xl-2 col-lg-3 col-md-12" style="height: 400px; width: 100%;">
        </div>
        <br>