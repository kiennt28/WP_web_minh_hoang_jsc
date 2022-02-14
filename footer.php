<footer id="page-footer" >
      <div class="footer-main" style="background: url(<?php echo get_template_directory_uri(); ?>/media/banner/4.png)">
        <div class="container-fluid">
          <div class="footer-items text-white">
            <div class="row footer-box">
              <div class="col-lg-4 col-md-4">
                <div class="footer-about">
                  <img src="<?php echo get_template_directory_uri(); ?>/media/logo2.png" alt="" />
                  <p>
                    Công Ty Cổ Phần Dịch Vụ <br />
                    & Phát Triển Công Nghệ Minh Hoàng
                  </p>
                  <div class="footer-social">
                    <a href=""
                      ><img
                        src="<?php echo get_template_directory_uri(); ?>/media/socials/linkedin-logo.png"
                        alt=""
                    /></a>
                    <a class="px-4" href=""
                      ><img
                        src="<?php echo get_template_directory_uri(); ?>/media/socials/facebook-logo.png"
                        alt=""
                    /></a>
                    <a href=""
                      ><img
                        src="<?php echo get_template_directory_uri(); ?>/media/socials/youtube-logo.png"
                        alt=""
                    /></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="footer-item">
                  <h4 class="widget-title">Liên hệ</h4>
                  <div class="address">
                    <ul>
                      <li>
                        <p>
                          <span>Địa chỉ: </span> Tầng 3 tòa nhà Tecco, đường Phủ
                          Liễn, phường Hoàng Văn Thụ, tp Thái Nguyên tỉnh Thái
                          Nguyên.
                        </p>
                      </li>
                      <li>
                        <p><span>Email: </span>info@minhhoangjsc.com</p>
                      </li>
                      <li>
                        <p><span>Điện thoại: </span>+84 886365481</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="footer-link">
                  <h4 class="widget-title">Dịch vụ</h4>
                  <p>Gia công phát triển phần mềm</p>
                  <p>Phát triển sản phẩm</p>
                  <p>Tư vấn & đào tạo</p>
                  <p>Thiết kế website</p>
                  <p>Dịch vụ DevOps</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row w-100 mx-0">
          <div class="col-lg-12">
            <p>
              Copyright © 2021. Designed by
              <a href="#">MinhHoangJSC. All Rights Reserved</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php  echo get_template_directory_uri(); ?>/plugin/js/bootstrap.min.js"></script>
    <script src="<?php  echo get_template_directory_uri(); ?>/plugin/js/jquery.min.js"></script>
    <script src="<?php  echo get_template_directory_uri(); ?>/plugin/js/owl.carousel.min.js"></script>
    <script src="<?php  echo get_template_directory_uri(); ?>/assets/js/uploadFile.js"></script>
    <script src="<?php  echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <script src="<?php  echo get_template_directory_uri(); ?>/plugin/js/carousel.js"></script>
    <script src="<?php  echo get_template_directory_uri(); ?>/plugin/js/particles.min.js"></script>
    <script src="<?php  echo get_template_directory_uri(); ?>/plugin/js/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="<?php  echo get_template_directory_uri(); ?>/plugin/js/particles.js"></script>
</div>
<script>
  if(document.getElementById("particles-js")!==null){
  particlesJS("particles-js", {
        particles: {
          number: { value: 33, density: { enable: true, value_area: 800 } },
          color: { value: "#ffffff" },
          shape: {
            type: "circle",
            stroke: { width: 0, color: "#000000" },
            polygon: { nb_sides: 5 },
            image: { src: "img/github.svg", width: 100, height: 100 },
          },
          opacity: {
            value: 0.5,
            random: false,
            anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
          },
          size: {
            value: 3,
            random: true,
            anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
          },
          line_linked: {
            enable: true,
            distance: 94.69771699587272,
            color: "#ffffff",
            opacity: 0.4,
            width: 2,
          },
          move: {
            enable: true,
            speed: 1.5,
            direction: "none",
            random: false,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: { enable: false, rotateX: 600, rotateY: 1200 },
          },
        },
        interactivity: {
          detect_on: "canvas",
          events: {
            onhover: { enable: false, mode: "repulse" },
            onclick: { enable: false, mode: "push" },
            resize: true,
          },
          modes: {
            grab: { distance: 400, line_linked: { opacity: 1 } },
            bubble: {
              distance: 400,
              size: 40,
              duration: 2,
              opacity: 8,
              speed: 3,
            },
            repulse: { distance: 200, duration: 0.4 },
            push: { particles_nb: 4 },
            remove: { particles_nb: 2 },
          },
        },
        retina_detect: true,
      });
  }
    
    </script>

</body>
</html>
