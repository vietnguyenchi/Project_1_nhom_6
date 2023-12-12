<div class="container">
    <div class="row">

        <div class="col-12 my-5 px-4">
            <h2 class="fw-medium">
                <?= $room['name'] ?>
            </h2>
            <div style="font-size: 14px;">
                <a href="#" class="text-secondary text-decoration-none">HOME</a>
                <span> > </span>
                <a href="#" class="text-secondary text-decoration-none">ROOMS</a>
            </div>
        </div>

        <div class="col-lg-7 col-md-12 p-3 bg-white rounded-3" style="height: fit-content; overflow: hidden;">
            <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active">
                        <img src="../../../assets/images/rooms/IMG_11892.png" class="d-block w-100 rounded-3">
                    </div> -->
                    <?php
                    foreach ($image_room as $image) {
                        if ($image['id_room'] == $room['id']) {
                            ?>
                            <div class="carousel-item active">
                                <img src="../../../<?= $image['image'] ?>" style="max-height: 415px;"
                                    class="d-block w-100 rounded-3">
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <!-- <div class="carousel-item">
                        <img src="../../../assets/images/rooms/IMG_39782.png" class="d-block w-100 rounded-3">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../assets/images/rooms/IMG_65019.png" class="d-block w-100 rounded-3">
                    </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow-sm rounded-3">
                <div class="card-body">
                    <h4>
                        <?= number_format($room['price'], 0, ',', '.') ?> <sup>VND</sup> per night
                    </h4>

                    <div class="rating mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>


                    <div class="mb-3">
                        <h6 class="mb-1 text-success">Features</h6>
                        <?php
                        foreach ($room_features as $feature) {
                            if ($feature['id_room'] == $room['id']) {
                                ?>
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-1 mb-1">
                                    <?= $feature['name_feature'] ?>
                                </span>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <h6 class="mb-1 text-success">Facilities</h6>
                        <?php
                        foreach ($room_facilities as $facility) {
                            if ($facility['id_room'] == $room['id']) {
                                ?>
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-1 mb-1">
                                    <?= $facility['name_facility'] ?>
                                </span>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <h6 class="mb-1 text-success">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me-1 mb-1">
                            <?= $room['max_adult'] ?> Adult
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me-1 mb-1">
                            <?= $room['max_children'] ?> Children
                        </span>
                    </div>

                    <div class="mb-3">
                        <h6 class="mb-1 text-success">Area</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap me-1 mb-1">
                            <?= $room['area'] ?> m&#178
                        </span>
                    </div>

                    <form method="post">
                        <button type="submit" name="booking" class="btn w-100 text-while custom-bg shadow-none mb-1">
                            Book Now
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4 px-4">
            <div class="mb-5">
                <h5>Description</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt molestiae enim mollitia
                    voluptate illum. Vero quia blanditiis distinctio aut quidem? Esse consectetur est beatae qui
                    alias amet illo ab optio recusandae tempore ratione odio explicabo placeat expedita
                    exercitationem dignissimos accusamus, ipsum in, accusantium distinctio. Quaerat ipsum assumenda
                    eum eos dolore.
                </p>
            </div>
            <div>
                <h5 class="mb-2">Reviews & Ratings</h5>
                <div>
                    <div class="d-flex align-items-center mb-2">
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
        </div>

    </div>
</div>