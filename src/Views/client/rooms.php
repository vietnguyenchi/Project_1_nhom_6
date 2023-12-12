<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <form method="post">
                        <h4 class="mt-2 ms-2">FILTERS</h4>
                        <!-- <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 px-2"
                            id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" name="check_in" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" name="check_out" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 class="mb-3" style="font-size: 18px;">FEATURES</h5>
                                <?php foreach ($features as $feature): ?>
                                    <div class="mb-2">
                                        <input type="checkbox" name="features[]" id="feature<?= $feature['id'] ?>"
                                            value="<?= $feature['id'] ?>"
                                            class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="feature<?= $feature['id'] ?>">
                                            <?= $feature['name_feature'] ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <?php foreach ($facilities as $facility): ?>
                                    <div class="mb-2">
                                        <input type="checkbox" name="facilities[]" id="facility<?= $facility['id'] ?>"
                                            value="<?= $facility['id'] ?>"
                                            class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="facility<?= $facility['id'] ?>">
                                            <?= $facility['name_facility'] ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" name="adult" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" name="children" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container p-0 row mx-auto">
                            <div class="col-md-6">
                                <button type="submit" name="search" class="btn w-100 fw-medium text-white custom-bg shadow-none mb-1">
                                    Search
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button name="reset" type="submit"
                                    class="btn w-100 fw-medium text-secondary border border-dark border-1 bg-bg-dark-subtle shadow-none mb-1">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <!-- Content -->
        <div class="col-lg-9 col-md-12 px-4">
            <?php foreach ($rooms as $room): ?>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <?php
                            foreach ($images as $image) {
                                if ($image['id_room'] == $room['id_rooms']) {
                                    ?>
                                    <img src="../../..<?= $image['image'] ?>" class="img-fluid rounded">
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1 fw-semibold text-warning">
                                <?= $room['name'] ?>
                            </h5>
                            <div class="features mb-3">
                                <h6 class="mb-1 text-success">Features</h6>
                                <?php
                                foreach ($room_features as $room_feature) {
                                    if ($room_feature['id_room'] == $room['id_rooms']) {
                                        foreach ($features as $feature) {
                                            if ($feature['id'] == $room_feature['id_features']) {
                                                ?>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                                    <?= $feature['name_feature'] ?>
                                                </span>
                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1 text-success">Facilities</h6>
                                <?php
                                foreach ($room_facilities as $room_facility) {
                                    if ($room_facility['id_room'] == $room['id_rooms']) {
                                        foreach ($facilities as $facility) {
                                            if ($facility['id'] == $room_facility['id_facilities']) {
                                                ?>
                                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                                    <?= $facility['name_facility'] ?>
                                                </span>
                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1 text-success">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    <?= $room['max_adult'] ?> Adult
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    <?= $room['max_children'] ?> Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">
                                <?= number_format($room['price'], 0, ',', '.') ?> <sup>VND</sup> <br> per night
                            </h6>
                            <a href="/confirm_booking?id=<?= $room['id_rooms'] ?>"
                                class="btn btn-sm w-100 mb-2 text-white custom-bg shadow-none">Book Now</a>
                            <a href="/room_details?id=<?= $room['id_rooms'] ?>"
                                class="btn btn-sm w-100 btn-outline-dark text-darkshadow-none">More
                                details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="assets/images/rooms/IMG_11892.png" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-1 fw-semibold">Simple Room Name</h5>
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
                        <div class="guests">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h6 class="mb-4">$200 per night</h6>
                        <a href="#" class="btn btn-sm w-100 mb-2 text-white custom-bg shadow-none">Book Now</a>
                        <a href="/room_details" class="btn btn-sm w-100 btn-outline-dark text-darkshadow-none">More
                            details</a>
                    </div>
                </div>
            </div>
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="assets/images/rooms/IMG_39782.png" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-1 fw-semibold">Simple Room Name</h5>
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
                        <div class="guests">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h6 class="mb-4">$200 per night</h6>
                        <a href="#" class="btn btn-sm w-100 mb-2 text-white custom-bg shadow-none">Book Now</a>
                        <a href="/room_details" class="btn btn-sm w-100 btn-outline-dark text-darkshadow-none">More
                            details</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>