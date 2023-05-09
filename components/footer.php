<footer id="footer" class="footer">
    <div class="footer-content position-relative mt-4">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="footer-info">
              <h3>Najmat Al Engineering Ltd.</h3>
              <p>
                Head Office <br>
                3/1-3/2-Saraqu Mac<br>
                Appt.No - 7/c Bijoynagar<br>
                Paltan, Dhaka-1000, Bangladesh
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer-info">
              <h3>Corrosponde Office</h3>
              <p>
                Bayan Business Center <br>
                Dubai Investment Park First<br>
                Plot No : 290-0<br>
                Property No : 601-0567<br>
                Dubai, UAE <br>
                Tel : +971509849403
              </p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="footer-info">
              <h3>Selling Center</h3>
              <p>
                32/B Nawab Yousuf Road <br>
                Abdul Khair Market, <br>
                Show Room No : 64 <br>
                Nayabazar, Dhaka -1100 , Bangladesh
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 footer-links text-center">
            <h5>Social Links</h5>
            <div class="social-links d-flex mt-3" style="margin-left: 74px;">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/najmatalengineeringltd" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    function submitForm(event) {
      event.preventDefault();
      let data = new FormData(event.target);
      fetch('https://script.google.com/macros/s/AKfycbybdgCwMDSiZHP1htO5j_hezqVA5Z4_0SIdPyoLwEUjuQ4_PfSlC8DWuUVk3YRTSNin/exec', {
        method: "POST",
        body: data
      }).then(res => res.text())
        .then(data => {
          alert("Thanks For message us, we will contact you soon!")
          document.getElementById('notification').innerHTML = 'Thank you for your message!';
          document.getElementById("contactForm").reset();
        });
    }
  </script>