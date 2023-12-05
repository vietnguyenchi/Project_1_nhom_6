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
                <span> > </span>
                <a href="#" class="text-secondary text-decoration-none">BOOKING</a>
            </div>
        </div>

        <div class="col-lg-7 col-md-12 px" style="height: fit-content; overflow: hidden;">
            <div class="card p-3 shadow-sm rounded">
                <?php
                foreach ($image_room as $image) {
                    if (($image['id_room'] == $room['id']) && ($image['thumb'] == 1)) {
                        ?>
                        <img src="../../..<?= $image['image'] ?>" style="max-height: 415px;" class="w-100 mb-3 rounded-3">
                        <?php
                    }
                }
                ?>
                <h5>
                    <?= $room['name'] ?>
                </h5>
                <h6>$
                    <?= $room['price'] ?> per night
                </h6>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow-sm rounded-3">
                <div class="card-body">
                    <form method="post">
                        <h6 class="mb-3">BOOKING DETAILS</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" value="<?= $user['name_user'] ?>" name="name"
                                    class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Phone number</label>
                                <input type="text" value="<?= $user['phone'] ?>" name="phone"
                                    class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Adult</label>
                                <input type="number" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Children</label>
                                <input type="number" name="children" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label">Message</label>
                                <textarea name="message" class="form-control shadow-none text-start"
                                    rows="1"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Check-in</label>
                                <input type="date" name="check-in" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="" class="form-label">Check-out</label>
                                <input type="date" name="check-out" class="form-control shadow-none" required>
                            </div>
                            <h6 class="mb-3 text-danger" id="pay_info">Provide check-in & check-out date !</h6>
                            <div class="col-md-6">
                                <button type="button" class="btn w-100 fw-medium text-white custom-bg shadow-none mb-1"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-credit-card"></i>
                                    PAY NOW
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button name="save" type="submit"
                                    class="btn w-100 fw-medium text-secondary border border-dark border-1 bg-bg-dark-subtle shadow-none mb-1">
                                    <svg style="width: 18px;" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                    </svg>
                                    SAVE
                                </button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Select payment method</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row m-0">
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit" name="payUrl">Momo</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit" name="">VNpay</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit" name="">ViettelPay</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit" name="">ZaloPay</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>