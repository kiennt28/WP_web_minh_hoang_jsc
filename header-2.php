<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
      <nav
        id="primary-navbar-2"
        class="navbar navbar-expand-lg sticky fixed-top"
        data-aos="fade-down"
        data-aos-delay="50"
        data-aos-duration="3000"
      >
        <div class="container-fluid">
          <a href="<?php echo home_url(); ?>" class="logo">
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
                  <li><a href="<?php echo home_url(); ?>">Trang chủ</a></li>
                  <li><a href="#">Phát triển phần mềm</a></li>
                  <li><a href="#">Tư vấn & dịch vụ</a></li>
                  <li><a href="#">Thiết kế website</a></li>
                </ul>
              </li>
              <li class="nav-item menu-item">
                <a href="about.html" class="nav-link">Giới thiệu</a>
              </li>
              <li class="nav-item menu-item">
                <a href="contact.html" class="nav-link">Liên hệ</a>
              </li>
              <li class="nav-item menu-item">
                <a href="blog.html" class="nav-link">Tin tức</a>
              </li>
              <li class="nav-item menu-item">
                <a href="recruitment.html" class="nav-link">Tuyển dụng</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
