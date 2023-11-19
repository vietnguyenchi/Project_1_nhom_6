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
    <div class="my-5 px-4">
 <h2 class="fw-bold h-font text-center">ROOMS</h2>
 <div class="h-line bg-drak"></div>
</div>
 <div class="container">
    <div class="row">

        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch ">
                    <h4 class="mt-2">FILTERS</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse flex-lg-column  align-items-stretch mt-2" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3"style="font-size:18px;">check Availability</h5>
                            <label for="" class="form-label">check-in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label for="" class="form-label">check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3"style="font-size:18px;">Facilities</h5>
                            <div class="mb-2">
                            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                            <label for="" class="form-check-label" for="f1">Facility one</label>
                            </div>
                            <div class="mb-2">
                            <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                            <label for="" class="form-check-label" for="f2">Facility one</label>
                            </div>
                            <div class="mb-2">
                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label for="" class="form-check-label" for="f3">Facility one</label>
                            </div>
                        
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3"style="font-size:18px;">GUESTS</h5>
                            <div class="d-flex">
                            <div class="me-2">
                                <label class="form-label">Adults</label>
                                <input type="number" class="form-control showdow-none">
                            </div>
                            <div class="me-2">
                                <label class="form-label">children</label>
                                <input type="number" class="form-control showdow-none">
                            </div>
                           
                            </div>
                           
                        
                        </div>
                        

                    </div>
                </div>
            </nav>
        </div>
        <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow">
              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg"  class="img-fluid rounded-start"alt="..." width=1100px>
                </div>
                <div class="col-md-5 px-lq-3 px-md-3">
                    <h5 class="mb-3">simple room name</h5>

                    <div class="features mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            3 Sofa
                        </span>
                    </div>
                    
                    <div class="facilities mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room heater
                            </span>
                    </div>
                    <div class="Guests mb-3">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 adults
                            </span>
                           
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 children
                            </span>
                    </div>
                </div>
                
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 ">$200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                </div>
              </div>
                
            </div>
            <div class="card mb-4 border-0 shadow">
              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/rooms/1.jpg"  class="img-fluid rounded-start"alt="..." width=1100px>
                </div>
                <div class="col-md-5 px-lq-3 px-md-3">
                    <h5 class="mb-3">simple room name</h5>

                    <div class="features mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            3 Sofa
                        </span>
                    </div>
                    
                    <div class="facilities mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room heater
                            </span>
                    </div>
                    <div class="Guests mb-3">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 adults
                            </span>
                           
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 children
                            </span>
                    </div>
                </div>
                
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 ">$200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                </div>
              </div>
                
            </div>
        </div>
        
    </div>
          
 </div>
  <!-- Footer -->
    <?php require ('inc/footer.php')?>

</body>

</html>