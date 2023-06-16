<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Najmat Al Engineering Ltd.</title>
  <?php
  include('./components/header.php')
    ?>
</head>

<body>
<?php
  include('components/navbar.php')
  ?>
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Product Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Product Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/products/steel_sheet.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/products/steel_sheet2.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/products/steel_sheet3.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/products/steel_sheet4.jpeg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4 mb-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>Galvanized steel plate</h2>
              
              <p style="text-align: justify;">
              ① hot dip galvanized steel plate.Dip the sheet steel into a molten zinc bath and make it adhere to a sheet of zinc.At present, the main use of continuous galvanized process production, that is, the roll of steel plate continuous immersion in the melting of zinc plating tank made of galvanized steel plate;
              ② alloyed galvanized steel plate.This kind of steel plate is also made by hot dip, but immediately after the trough, it is heated to about 500℃, so that it produces zinc and iron alloy film.The galvanized sheet has good coating density and weldability;
              ③ electric galvanized steel plate.The galvanized steel plate produced by electroplating method has good processability.But the coating is thin, corrosion resistance is not as good as hot dip galvanized sheet;
              ④ single-sided plating and double-sided galvanized steel plate.Single-sided galvanized steel, i.e. galvanized on only one side of the product.In welding, coating, anti-rust treatment, processing and other aspects, with better adaptability than double-sided galvanized sheet.In order to overcome the shortcomings of not coated zinc on one side, there is a galvanized sheet coated with thin layer of zinc on the other side, that is, double-sided difference galvanized sheet;
              ⑤ alloy, composite galvanized steel plate.It is made of zinc and other metals such as aluminum, lead, zinc alloy and composite plating into the steel plate.This kind of steel plate has not only excellent rust resistance, but also good coating performance;
              In addition to the above five, there are color galvanized steel plate, printing coated galvanized steel plate, polyvinyl chloride laminated galvanized steel plate, etc.But at present the most commonly used is still hot dip galvanized sheet.
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Selling Center</h3>
              <h5>Naya Bazar Office</h5>
              <p>
                32/B Nawab Yousuf Road <br>
                Abdul Khair Market, <br>
                Show Room No : 64 <br>
                Nayabazar, Dhaka -1100 , Bangladesh <br> <br>
                <strong>Tel :</strong> +88-02-22666-4541, +8801744-194948, +880187355972 <br>
                <strong>Email :</strong> sales@najmatalengineering.com
              </p> 
            </div>
            <div class="mt-5">
              <h5 class="mb-3">Need consultation?</h5>
              <p>We will contact you as soon as possible</p>
              <!-- <form onsubmit="submitForm(event)" id="contactForm"> -->
              <form id="contactForm" action="./forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone No." required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
                <div class="text-center"><button class="btn btn-info" type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main --><!-- End #main -->

  <?php
    include('./components/footer.php')
    ?>
</body>

</html>