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
    .pop :hover{
      border-top-color:var(--teal) !important;
      transform:scale(1.03);
      transition:all 0.3s;
    }
  </style>
  
</head>

<body class="bg-light">
    <?php require ('inc/header.php')?>

 
<div class="my-5 px-4">
 <h2 class="fw-bold h-font text-center"> OUR FACILITIES</h2>
 <div class="h-line bg-drak"></div>
 <p class="text-center mt-3">
  lorem ipsum dolor
 </p>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark">
        <div class="d-flex align-items-center mb-2">
        <img src="images/facilities/wifi.svg" alt="" width="40px">
        <h5 class="m-0 ms-3 ">wifi</h5>
        </div>
        <p>
          lorem ipsum dolor
        </p>
      </div>
    </div>
  </div>
</div>
</div>
  <!-- Footer -->
    <?php require ('inc/footer.php')?>
</body>

</html>