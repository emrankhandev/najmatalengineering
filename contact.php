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

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container mt-4" data-aos="fade-up">
      <div class="section-header">
        <h2>Contact</h2>
      </div>
      <div class="row" style="margin-bottom: 65px;">
        <div class="col-md-4 px-1">
          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>3/1-3/2-Saraqu Mac
                  Appt.No - 7/c Bijoynagar
                  Paltan, Dhaka-1000, Bangladesh</p>
              </div>
            </div>

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>sales@najmatalengineering.com</p>
              </div>
            </div>

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+88-02-22666-541, +8801794194948,
                  +880187355972,
                  +8801780332657</p>
              </div>
            </div>

            <div class="info-item d-flex">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Open Hours:</h4>
                <p>Sun-Sat: 8AM - 11PM</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
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
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->


  <?php
    include('./components/footer.php')
    ?>
    
</body>

</html>