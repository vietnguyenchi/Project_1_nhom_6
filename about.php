<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TJ-holtel</title>
  <?php require('inc/link.php') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="css/common.css"/>
  <style>
    .box{
        border-top-color:(--teal) !important;
    }
  </style>
  
</head>

<body class="bg-light">
    <?php require ('inc/header.php')?>

 
<h2 class="fw-bold h-font text-center">about us</h2>
 <div class="h-line bg-drak"></div>
 <p class="text-center mt-3">
  lorem ipsum dolor
 </p>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center ">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">lorem ipsum dolor sit</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Cumque neque quod sint facere, blanditiis illum possimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Cumque neque quod sint facere, blanditiis illum possimus.
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images/about/about.jpg" alt="" class="w-100">
           
        </div>  
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="images/about/hotel.svg" alt="" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="images/about/customers.svg" alt="" width="70px">
                <h4 class="mt-3">100+ CUSTOMERS</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="images/about/rating.svg" alt="" width="70px">
                <h4 class="mt-3">100+ REVIEWS</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="images/about/staff.svg" alt="" width="70px">
                <h4 class="mt-3">100+ STAFFS</h4>
            </div>

        </div>
    </div>

    
</div>
<h3 class="my-5 fw-bold h-font text-center"> Manager team</h3>
<div class="container px-4">
    <div class="swiper-mySwiper">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="images/about/about.jpg"  class="w-100"alt="">
                <h5 class="nt-2"> random name</h5>
            </div>
            
         <div class="swiper-pagination"> </div>
        </div>
    </div>
</div><div class="my-5 px-4">
 
  <!-- Footer -->
    <?php require ('inc/footer.php')?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper",{
            slidePerView:4,
            spaceBetween:40,
            pagination:{
                el:".swiper-pagination",
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
</body>

</html>