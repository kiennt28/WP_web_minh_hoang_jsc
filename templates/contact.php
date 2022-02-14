<?php 
/*
    Template Name: Contact
*/
?>
<?php get_header("2"); ?>
<main
      id="contact-page"
      data-aos="fade-up"
      data-aos-delay="50"
      data-aos-duration="1000"
    >
      <div class="contact-content">
        <div class="container-fluid">
          <div class="contact-heading text-center mt-5">
            <p>Liên hệ với chúng tôi</p>
            <h2>Chúng tôi sắn sàng hỗ trợ bạn</h2>
          </div>
          <div class="row contact-box">
            <div class="col-lg-4 col-md-4 contact-items">
              <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/all/map.png" alt="" />
                <h5>Địa chỉ:</h5>
                <p>
                  Tầng 3, toà nhà Tecco, đường Phủ Liễn, Hoàng Văn Thụ tp Thái
                  Nguyên, tỉnh Thái Nguyên
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 contact-items">
              <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/all/phone.png" alt="" />
                <h5>Gọi cho chúng tôi:</h5>
                <p>+84 915563774</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 contact-items">
              <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/media/all/email.png" alt="" />
                <h5>Gửi Email cho chúng tôi:</h5>
                <p>info@minhhoangjsc.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-info">
        <div class="container-fluid">
          <div class="row contact-items">
            <div class="col-lg-6 contact-left">
              <h2 class="mb-4">Đăng ký nhận tư vấn giải pháp</h2>
              <form action="" class="contact-form">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="phone"
                        name="phone"
                        type="text"
                        placeholder="Phone"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        name="comments"
                        id="comments"
                        placeholder="Nhập nội dung bạn muốn gửi."
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <button type="submit" class="btn-submit">
                      Gửi đi <i class="fas fa-long-arrow-alt-right"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-6 contact-right">
              <img src="<?php echo get_template_directory_uri(); ?>/media/all/66.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div id="particles-js-2"></div>
    </main>
    <?php get_footer(); ?>