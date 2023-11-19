<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TJ-ConTact</title>
  <?php require('inc/link.php') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="css/common.css"/>
</head>

<body class="bg-light">
    <?php require ('inc/header.php')?>

 

<h2 class="fw-bold h-font text-center">about us</h2>
 <div class="h-line bg-drak"></div>
 <p class="text-center mt-3">
  lorem ipsum dolor
 </p>

 <div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe height="320" class="w-100 rounded mb-4"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863418373378!2d105.74603150823312!3d21.038150294282907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1sen!2s!4v1700065634495!5m2!1sen!2s"
          loading="lazy"></iframe>
          <h5>address</h5>
          <a href="#">
          </a>
          <h5>Call us</h5>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"><i
              class="bi bi-telephone-fill"></i>+8409890890</a>
          <br/>
          <a href="#" class="d-inline-block text-decoration-none text-dark"><i
              class="bi bi-telephone-fill"></i>+8409890890</a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter"></i>
              Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook"></i>
              Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram"></i>
              Instagram
            </span>
          </a>

    </div>
      </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4 ">
        <form>
          <h5>send messger</h5>
          <div class="mt-3">
          <label for="" class="form-label" style="font-weight:500;">Name</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
          <label for="" class="form-label" style="font-weight:500;">Email</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
          <label for="" class="form-label" style="font-weight:500;">subject</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
          <label for="" class="form-label" style="font-weight:500;">message</label>
          <textarea  class="form-control shadow-none" rown="5" style="resize:none;"></textarea>
          </div>
          <button type="submit" name="tbn" class="btn text-white custom-bg mt-3">Login</button>
        </form>
      </div>
      </div>
  </div>
</div>
  <!-- Footer -->
    <?php require ('inc/footer.php')?>
</body>

</html>