<?php 
    session_start();
    if (isset($_SESSION['shelly_student'])) {
        header('location: account');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Shelly School</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Shelly - Website">
  <meta name="author" content="merkulove">
  <meta name="keywords" content="">
  <link rel="icon" href="assets/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
</head>

<body>
  <div class="wrapper">
    <div class="main-section">
      <?php include "includes/header.php"; ?>

      <section class="main-banner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
              <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
                <h2>The Smarter Way to mark <span>Attendance</span></h2>
                <p>Mauris malesuada enim eget blandit gravida. Duis hendrerit cursus turpis, id mollis est rutrum nec. Sed interdum nisi id libero tincidunt, sit amet vestibulum tortor porttitor. Cras ligula lacus, ullamcorper sed</p>
                <div class="lnk-dv text-center">
                  <a href="#login-section" title="" class="btn-default">Login <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5">
              <div class="banner-img wow zoomIn" data-wow-duration="1000ms"><img src="assets/img/banner-img.png" alt=""></div>
              <!--banner-img end-->
              <div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
            </div>
          </div>
        </div>
      </section>
      <!--main-banner end-->
      <h2 class="main-title d-none d-md-flex">Shelly</h2>
    </div>
    <!--main-section end-->
    <section class="about-us-section">
      <div class="container">
        <div class="section-title text-center">
          <h2>Welcome to <span>Shelly</span></h2>
          <p>Nunc consectetur ex nunc, id porttitor leo semper eget. Vivamus interdum, mauris quis cursus sodales, urn</p>
        </div>
        <!--section-title end-->
        <div class="about-sec">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
                  <img src="assets/img/icon5.png" alt="">
                  <h3>Awesome Teachers</h3>
                  <p>Vivamus interdum, mauris interdum quis curdum sodales</p>
                </div>
                <!--abt-col end-->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                  <img src="assets/img/icon7.png" alt="">
                  <h3>Synchronized</h3>
                  <p>Pelleneget tespharetra que fringilla egugue id eget pharetra</p>
                </div>
                <!--abt-col end-->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                  <img src="assets/img/icon8.png" alt="">
                  <h3>Best Technology</h3>
                  <p>Etiam risus neque, volutpat vel laoreet a, finibus volutpat non</p>
                </div>
                <!--abt-col end-->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                  <img src="assets/img/icon9.png" alt="">
                  <h3>Student Support Service</h3>
                  <p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p>
                </div>
                <!--abt-col end-->
              </div>
            </div>
          </div>
        </div>
        <!--about-rw end-->
        <div class="abt-img">
          <ul class="masonary">
            <li class="width1 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery1.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery1.jpg" alt=""></a></li>
            <li class="width2 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery2.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery2.jpg" alt=""></a></li>
            <li class="width3 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery4.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery4.jpg" alt=""></a></li>
            <li class="width4 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery6.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery6.jpg" alt=""></a></li>
            <li class="width5 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery8.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery8.jpg" alt=""></a></li>
            <li class="width6 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery7.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery7.jpg" alt=""></a></li>
            <li class="width7 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery9.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery9.jpg" alt=""></a></li>
            <li class="width8 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery10.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery10.jpg" alt=""></a></li>
            <li class="width9 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery3.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery3.jpg" alt=""></a></li>
            <li class="width10 wow zoomIn" data-wow-duration="1000ms"><a href="assets/img/gallery5.jpg" data-group="set1" title="" class="html5lightbox"><img src="assets/img/gallery5.jpg" alt=""></a></li>
          </ul>
        </div>
        <!-- abt-img end-->
      </div>
    </section>

    <section class="course-section d-none d-md-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="find-course">
              <div class="sec-title">
                <h2>Find Your Course</h2>
                <p>ullam fringilla ipsum sed enim scelerisque, ac porttitor libero egestas. Donec iaculis nisi eget bibendum efficitur. Lorem ipsum dolor sit</p>
                <h3><img src="assets/img/icon11.png" alt="">Call: <strong>+2 342 5446 67</strong></h3>
              </div>
              <!--sec-title end-->
              <div class="course-img"><img src="assets/img/course-img.png" alt=""></div>
              <!--course-img end-->
            </div>
            <!--find-course end-->
          </div>
          <div class="col-lg-6">
            <div class="courses-list">
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="assets/img/icon12.png" alt=""> 29/07/2020</li>
                    <li>11AM to 15PM</li>
                  </ul>
                  <span>FREE</span>
                </div>
                <h3><a href="event-single" title="">Digital Transformation Conference</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a href="#" title="">Amanda Kern</a></div>
                  <span class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517 district</span>
                </div>
              </div>
              <!--course-card end-->
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="assets/img/icon12.png" alt=""> 29/07/2020</li>
                    <li>11AM to 15PM</li>
                  </ul>
                  <span>$16</span>
                </div>
                <h3><a href="event-single" title="">Environment conference</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a href="#" title="">Cvita Doleschall</a></div>
                  <span class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517 district</span>
                </div>
              </div>
              <!--course-card end-->
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="assets/img/icon12.png" alt=""> 29/07/2020</li>
                    <li>11AM to 15PM</li>
                  </ul>
                  <span>$8</span>
                </div>
                <h3><a href="event-single" title="">Campus clean workshop</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a href="#" title="">Helena Brauer</a></div>
                  <span class="locat"><img src="assets/img/loct.png" alt="">43 castle road 517 district</span>
                </div>
              </div>
              <!--course-card end-->
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
    <!--course-section end-->

    <section class="newsletter-section" id="login-section">
      <div class="container">
        <div class="newsletter-sec">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="newsz-ltr-text">
                <h2>Login to<br> Get Started!</h2>
              </div>
              <!--newsz-ltr-text end-->
            </div>
            <div class="col-lg-8">
              <form class="newsletter-form" action="account" id="loginForm">
                <div id="result"></div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group"><input type="text" name="email" placeholder="Email Address"></div>
                    <!--form-group end-->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><input type="password" name="password" placeholder="*******"></div>
                    <!--form-group end-->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group text-center">
                      <button class="btn-default">Login<i class="fa fa-long-arrow-alt-right"></i></button>

                    </div>
                    <!--form-group end-->
                  </div>

                </div>
            </div>
            </form>
            <!--newsletter-form end-->
          </div>
        </div>
      </div>
      <!--newsletter-sec end-->
  </div>
  </section>
  <!--newsletter-sec end-->
  <?php include "includes/footer.php"; ?>

  <!--footer end-->
  </div>
  <script src="assets/js/bundle.min.js"></script>
</body>

</html>

<script>
    $('#loginForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'ajax/login.php',
            type: 'POST',
            data : $(this).serialize(),
            cache: false,
            beforeSend: function() {
                $('#spinner').show();
                $('#result').hide();
                $('#btnText').hide();
            },
            success: function(data){
                if (data == 1) {
                    location.href = 'account';
                }
                else{
                    $('#result').html(data);
                    $('#result').fadeIn();
                    $('#spinner').hide();
                    $('#btnText').show();
                }
            }
        })
    })
</script>