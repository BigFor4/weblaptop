<?php require_once('./Views/header_view.php');?>
  
  <header style="display: none;" id="header" class="header fixed-top">
  
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <img src="" alt="logo">
        <span class="nav-link scrollto active" href="#hero">Trang Chủ Bán Hàng</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="./../dangnhap/dangnhap.html">Đăng Nhập</a></li>
          <li><a class="getstarted scrollto" href="./../dangki/dangki.php">Đăng Kí</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
    <h1 style="color: #2961f3; text-align: center; margin-top: -100px; margin-bottom: 20px;">Giới Thiệu</h1>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Chúng Tôi Cung Cấp Các loại máy tính mới và chính hãng cho các bạn</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Nhóm 2</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Bắt Đầu</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Chúng tôi Là Ai</h3>
              <h2>Tất cả những thú vui và mong muốn đến từ chúng ta ngày nay đều đi kèm với những chiếc máy tính thông minh vì vậy nó là một phần không thể thiếu cho cuộc sống</h2>
              <p>
                chúng tôi mang đến cho các bạn những chiếc máy tính giá rẻ và chính hãng mà không có ở đâu được như vậy hãy đến với chúng tôi để trải nghiệm ưu đã tốt nhất.
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>GIÁ TRỊ và lợi ích</h2>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Lợi ích của các bạn</h3>
              <p>Được những ưu đãi giảm giá  mà các thị trường / trang web khác không có.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Giá trị của chúng tôi</h3>
              <p>Một phần không thể thiếu cho cuộc sống của các bạn.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Mục Tiêu Của chúng ta</h3>
              <p>Phát triển công nghệ nâng cao tri thức.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="2320" data-purecounter-duration="1" class="purecounter"></span>
                <p>Khách hàng Vui Vẻ</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="52100" data-purecounter-duration="1" class="purecounter"></span>
                <p>Sản Phẩm Đã Bán</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Gọi Hỗ Trợ</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
                <p>Nhân Viên Chăm Chỉ</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <?php  require_once('./Views/footter_view.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



