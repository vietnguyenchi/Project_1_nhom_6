<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper d-flex">
            <div class="swiper-slide">
                <img src="assets/images/carousel/1.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="assets/images/carousel/2.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="assets/images/carousel/3.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="assets/images/carousel/4.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="assets/images/carousel/5.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="assets/images/carousel/6.png" class="w-100 d-block" />
            </div>
        </div>
    </div>
</div>
<!-- End Carousel -->

<!-- Check availability form -->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500">Check-in</label>
                        <input type="date" class="form-control shadow-none" />
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500">Check-out</label>
                        <input type="date" class="form-control shadow-none" />
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500">Adult</label>
                        <select class="form-select shadow-none">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500">Children</label>
                        <select class="form-select shadow-none">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custom-bg">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End availability form -->

<!-- Our rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
    <div class="row">
        <?php foreach ($rooms as $room): ?>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <?php 
                        foreach ($image_room as $image) {
                            if(($image['id_room'] == $room['id']) && ($image['thumb'] == 1)) {
                    ?>
                                <img src="../../..<?= $image['image'] ?>" style="max-height: 200px;" class="card-img-top"/>
                    <?php
                            }
                        }
                    ?>
                    
                    <div class="card-body">
                        <h5>
                            <?= $room['name'] ?>
                        </h5>
                        <h6 class="mb-3">$
                            <?= $room['price'] ?> per night
                        </h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <?php
                                foreach ($room_features as $feature) {
                                    if ($feature['id_room'] == $room['id']) {
                                        ?>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base mb-1">
                                            <?= $feature['name_feature'] ?>
                                        </span>
                                    <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <?php
                                foreach ($room_facilities as $facility) {
                                    if ($facility['id_room'] == $room['id']) {
                                        ?>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base mb-1">
                                            <?= $facility['name_facility'] ?>
                                        </span>
                                    <?php
                                    }
                                }
                            ?>
                        </div>
                        <div class="guests mb-3">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                <?= $room['max_adult'] ?> Adult
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                <?= $room['max_children'] ?> Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="/room_details?id=<?= $room['id'] ?>" class="btn btn-sm btn-outline-dark text-darkshadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


        <!-- <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="assets/images/rooms/1.jpg" class="card-img-top" />
                <div class="card-body">
                    <h5>Simple Room</h5>
                    <h6 class="mb-4">$200 per night</h6>
                    <div class="features mb-4">
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
                    <div class="facilities mb-4">
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
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            4 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark text-darkshadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="assets/images/rooms/1.jpg" class="card-img-top" />
                <div class="card-body">
                    <h5>Simple Room</h5>
                    <h6 class="mb-4">$200 per night</h6>
                    <div class="features mb-4">
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
                    <div class="facilities mb-4">
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
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                            4 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark text-darkshadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="col-lg-12 text-center mt-5">
            <a href="/rooms" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
</div>
<!-- End Our rooms -->

<!-- Our Facilites -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="assets/images/facilities/IMG_47816.svg" width="80px" />
            <h5 class="mt-3">Spa</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="assets/images/facilities/IMG_27079.svg" width="80px" />
            <h5 class="mt-3">Greyser</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="assets/images/facilities/IMG_41622.svg" width="80px" />
            <h5 class="mt-3">Television</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="assets/images/facilities/IMG_49949.svg" width="80px" />
            <h5 class="mt-3">Air conditioner</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="assets/images/facilities/IMG_96423.svg" width="80px" />
            <h5 class="mt-3">Room Heater</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
        </div>
    </div>
</div>
<!-- End Facilities -->

<!-- Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <i class="bi bi-star-fill fs-5"></i>
                    <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                    odio quasi tenetur autem pariatur asperiores illo quas delectus
                    consectetur quis.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <i class="bi bi-star-fill fs-5"></i>
                    <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                    odio quasi tenetur autem pariatur asperiores illo quas delectus
                    consectetur quis.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <i class="bi bi-star-fill fs-5"></i>
                    <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                    odio quasi tenetur autem pariatur asperiores illo quas delectus
                    consectetur quis.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
</div>
<!-- End Testimonials -->

<!-- Reach us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe height="320" class="w-100 rounded"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863418373378!2d105.74603150823312!3d21.038150294282907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1sen!2s!4v1700065634495!5m2!1sen!2s"
                loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call us</h5>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                        class="bi bi-telephone-fill"></i>+8409890890</a>
                <br />
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
    </div>
</div>
<!-- End Reach us -->