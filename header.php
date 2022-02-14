<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
    <div id="section_header">
        <header id="header1">
            <nav id="primary-navbar" class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid">
                    <a href="<?php echo get_home_url(); ?>" class="logo">
                        <img
                        src="<?php echo get_template_directory_uri(); ?>/media/logo1.png"
                        alt=""
                        class="logo-white"
                        />
                        <img
                        src="<?php echo get_template_directory_uri(); ?>/media/logo2.png"
                        alt=""
                        class="logo-default"
                        />
                    </a>
                    <button class="nav-toggler" type="button">
                        <span></span>
                    </button>
                    <div class="navbar-collapse float-right" id="navmenu">
                        <ul id="main-menu" class="navbar-nav ms-auto">
                            <li class="nav-item menu-item">
                                <a href="#" class="nav-link"
                                >Dịch vụ
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="subnav">
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li><a href="#">Phát triển phần mềm</a></li>
                                    <li><a href="#">Tư vấn & dịch vụ</a></li>
                                    <li><a href="#">Thiết kế website</a></li>
                                </ul>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="<?php echo home_url(); ?>/about" class="nav-link">Giới thiệu</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="<?php echo home_url(); ?>/contact" class="nav-link">Liên hệ</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="<?php echo home_url(); ?>/blog" class="nav-link">Tin tức</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="<?php echo home_url(); ?>/recruitment" class="nav-link">Tuyển dụng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
