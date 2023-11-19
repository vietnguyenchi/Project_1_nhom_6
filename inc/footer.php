<div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">FPT Hotel</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis cum ut mollitia beatae officia excepturi, rem
          aliquid dicta veritatis iure laudantium necessitatibus sunt sit iusto eum saepe, reprehenderit, neque
          expedita.
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilites</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow us</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter me-2"></i>Twitter
        </a> <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-2"></i>Facebook
        </a> <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-instagram me-2"></i>Instagram
        </a>
      </div>
    </div>
    <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Nhom6-WD8342</h6>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <br/><br/><br/>
    <br/><br/><br/>

    <!-- Bootstrap JS -->
   

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>