<div class="container">
    <div class="row">

        <div class="col-12 my-5 px-4">
            <h2 class="fw-medium">BOOKINGS</h2>
            <div style="font-size: 14px;">
                <a href="#" class="text-secondary text-decoration-none">HOME</a>
                <span> > </span>
                <a href="#" class="text-secondary text-decoration-none">BOOKINGS</a>
            </div>
        </div>

        <!-- <div class="col-4 mb-4 rounded">
            <div class="card border-0 bg-white p-3 shadow">
                <div class="mb-2 fs-4">
                    <span class="badge bg-info">
                        <span class="fw-bold">Order-id:</span> ORD_132190321
                    </span> <br>
                </div>
                <p class="mb-0"><span class="fw-bold">Simle Room:</span> $200 per night</p>
                <p class="mb-3"><span class="fw-bold">Super deluxe room:</span> $500 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Amount:</span> $300</p>
                <p class="mb-3"><span class="fw-bold">Date:</span> 02/12/2023</p>
                <div class="mb-2">
                    <span class="badge bg-danger">Cancelled</span> <br>
                </div>

                <div>
                    <button class="btn btn-dark">Download PDF</button>
                </div>
            </div>
        </div> -->
        <?php foreach ($bills as $bill): ?>
            <div class="col-4 mb-4 rounded">
                <div class="card border-0 bg-white p-3 shadow">
                    <div class="mb-2 fs-4">
                        <span class="badge bg-info">
                            <span class="fw-bold">Order-id:</span> ORD_
                            <?= $bill['orderId'] ?>
                        </span> <br>
                    </div>
                    <?php foreach ($bookings as $booking) {

                        if ($booking['id'] == $bill['id_booking']) {
                    ?>
                            <?php 
                                foreach($rooms as $room) {
                                    if($room['id'] == $booking['id_room']) {
                            ?>
                                        <p class="mb-0"><span class="fw-bold"><?= $room['name'] ?>:</span> <?= $room['price'] ?>VND per night</p>
                            <?php            
                                    }
                                }
                            ?>
                            <p class="mb-0"><span class="fw-bold">Check-in:</span> <?= $booking['check_in'] ?></p>
                            <p class="mb-3"><span class="fw-bold">Check-out:</span> <?= $booking['check_out'] ?></p>
                    <?php
                        }

                    } ?>

                    <!-- <p class="mb-0"><span class="fw-bold">Super deluxe room:</span> $500 per night</p>
                    <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                    <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p> -->
                    <!-- <p class="mb-0"><span class="fw-bold">Simle Room:</span> $200 per night</p>
                    <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                    <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p> -->
                    <p class="mb-0"><span class="fw-bold">Amount:</span> $
                        <?= $bill['total_price'] ?>
                    </p>
                    <p class="mb-3"><span class="fw-bold">Date:</span>
                        <?= $bill['start_date'] ?>
                    </p>
                    <div class="mb-2">
                        <span class="badge bg-success">Booked</span> <br>
                    </div>

                    <div>
                        <button class="btn btn-dark">Download PDF</button>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Rate & Review</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- <div class="col-4 mb-4 rounded">
            <div class="card border-0 bg-white p-3 shadow">
                <div class="mb-2 fs-4">
                    <span class="badge bg-info">
                        <span class="fw-bold">Order-id:</span> ORD_132190321
                    </span> <br>
                </div>
                <p class="mb-0"><span class="fw-bold">Super deluxe room:</span> $500 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Simle Room:</span> $200 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Amount:</span> $300</p>
                <p class="mb-3"><span class="fw-bold">Date:</span> 02/12/2023</p>
                <div class="mb-2">
                    <span class="badge bg-success">Booked</span> <br>
                </div>

                <div>
                    <button class="btn btn-dark">Download PDF</button>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Rate & Review</button>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-4 mb-4 rounded">
            <div class="card border-0 bg-white p-3 shadow">
                <div class="mb-2 fs-4">
                    <span class="badge bg-info">
                        <span class="fw-bold">Order-id:</span> ORD_132190321
                    </span> <br>
                </div>
                <p class="mb-0"><span class="fw-bold">Simle Room:</span> $200 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Amount:</span> $300</p>
                <p class="mb-3"><span class="fw-bold">Date:</span> 02/12/2023</p>
                <div class="mb-2">
                    <span class="badge bg-warning">Payment Failed</span> <br>
                </div>

                <div>
                    <button class="btn btn-dark">Download PDF</button>
                </div>
            </div>
        </div>
        <div class="col-4 mb-4 rounded">
            <div class="card border-0 bg-white p-3 shadow">
                <div class="mb-2 fs-4">
                    <span class="badge bg-info">
                        <span class="fw-bold">Order-id:</span> ORD_132190321
                    </span> <br>
                </div>
                <p class="mb-0"><span class="fw-bold">Super deluxe room:</span> $500 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Simle Room:</span> $200 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Amount:</span> $300</p>
                <p class="mb-3"><span class="fw-bold">Date:</span> 02/12/2023</p>
                <div class="mb-2">
                    <span class="badge bg-success">Booked</span> <br>
                </div>

                <div>
                    <button class="btn btn-dark">Download PDF</button>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Rate & Review</button>
                </div>
            </div>
        </div>
        <div class="col-4 mb-4 rounded">
            <div class="card border-0 bg-white p-3 shadow">
                <div class="mb-2 fs-4">
                    <span class="badge bg-info">
                        <span class="fw-bold">Order-id:</span> ORD_132190321
                    </span> <br>
                </div>
                <p class="mb-0"><span class="fw-bold">Super deluxe room:</span> $500 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Simle Room:</span> $200 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Amount:</span> $300</p>
                <p class="mb-3"><span class="fw-bold">Date:</span> 02/12/2023</p>
                <div class="mb-2">
                    <span class="badge bg-success">Booked</span> <br>
                </div>

                <div>
                    <button class="btn btn-dark">Download PDF</button>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Rate & Review</button>
                </div>
            </div>
        </div>
        <div class="col-4 mb-4 rounded">
            <div class="card border-0 bg-white p-3 shadow">
                <div class="mb-2 fs-4">
                    <span class="badge bg-info">
                        <span class="fw-bold">Order-id:</span> ORD_132190321
                    </span> <br>
                </div>
                <p class="mb-0"><span class="fw-bold">Super deluxe room:</span> $500 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Simle Room:</span> $200 per night</p>
                <p class="mb-0"><span class="fw-bold">Check-in:</span> 02/12/2023</p>
                <p class="mb-3"><span class="fw-bold">Check-out:</span> 05/12/2023</p>
                <p class="mb-0"><span class="fw-bold">Amount:</span> $300</p>
                <p class="mb-3"><span class="fw-bold">Date:</span> 02/12/2023</p>
                <div class="mb-2">
                    <span class="badge bg-success">Booked</span> <br>
                </div>

                <div>
                    <button class="btn btn-dark">Download PDF</button>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Rate & Review</button>
                </div>
            </div>
        </div> -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Rate & Review </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="col-form-label">Rate:</label>
                                <select class="form-select form-select-lg mb-3">
                                    <option selected></option>
                                    <option value="1">Bad</option>
                                    <option value="2">Good</option>
                                    <option value="3">Excellent</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" rows="4" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>