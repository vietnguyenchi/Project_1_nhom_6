  <!-- Footer -->
  <div class="container-fluid bg-white mt-5">
      <div class="row d-flex justify-content-between ps-5">
          <div class="col-lg-4 p-4 ms-5">
              <h3 class="h-font fw-bold fs-3 mb-2">FPOLY Hotel</h3>
              <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis cum ut mollitia beatae officia excepturi, rem
                  aliquid dicta veritatis iure laudantium necessitatibus sunt sit iusto eum saepe, reprehenderit, neque
                  expedita.
              </p>
          </div>
          <div class="col-lg-3 p-4">
              <h5 class="mb-3">Links</h5>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilites</a> <br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
              <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
          </div>
          <div class="col-lg-3 p-4">
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
  </div>
  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Nhom6-WD18342</h6>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
      function setActive() {
          let navbar = document.getElementById("nav-bar");
          let a_tags = navbar.getElementsByTagName("a");

          for (let i = 0; i < a_tags.length; i++) {
              let file = a_tag[i].href.split('/').pop();
              let file_name = file.split('.')[0];
              if (document.location.href.indexOf(file_name) >= 0) {
                  a_tags[i].classList.add('active');
              }
          }
      }
      setActive();
  </script>