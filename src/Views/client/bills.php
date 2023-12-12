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
            <div class="col-md-4 col-sm-12 mb-4 rounded">
                <div class="card border-0 bg-white p-3 shadow">
                    <div class="mb-2 fs-4">
                        <span class="badge bg-info">
                            <span class="fw-bold">Order-id:</span> ORD_
                            <?= $bill['orderId'] ?>
                        </span> <br>
                    </div>
                    <?php foreach ($bookings as $booking) {
                        if ($booking['id_bill'] == $bill['id_bill']) {
                            foreach ($rooms as $room) {
                                if ($room['id'] == $booking['id_room']) {
                                    ?>
                                    <p class="mb-0"><span class="fw-bold">
                                            <?= $room['name'] ?>:
                                        </span>
                                        <?= number_format($room['price'], 0, ',', '.') ?><sup>VND</sup> per night
                                    </p>
                                    <p class="mb-3">
                                        <span class="fw-bold">Detail:</span>
                                        Adult:
                                        <?= $booking['adult'] ?>,
                                        Children:
                                        <?= $booking['children'] ?>
                                    </p>
                                    <?php
                                }
                            }
                        }

                    } ?>
                    <p class="mb-0"><span class="fw-bold">Amount:</span>
                        <?= number_format($bill['totalPrice'], 0, ',', '.') ?> <sup>VND</sup>
                    </p>
                    <p class="mb-3"><span class="fw-bold">Date:</span>
                        <?= $bill['time'] ?>
                    </p>
                    <div>
                        <?php
                        if ($bill['payment_status'] == 2) {
                            echo '
                                    <div class="mb-2">
                                        <span class="badge bg-success">Paid</span> <br>
                                    </div>
                                    <div>
                                        <form method="post">
                                            <button class="btn btn-dark">View detail</button>
                                            <input type="hidden" name="id_cancel" value="' . $bill['id_bill'] . '">  
                                            <button type="submit" name="cancel" class="btn btn-outline-danger" onclick="return confirm(\'Bạn có chắc chắn hủy?\');">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                                Cancel
                                            </button>
                                        </form>
                                    </div>
                                ';
                        } else if ($bill['payment_status'] == 4) {
                            echo '
                                    <div class="mb-2">
                                        <span class="badge bg-warning">Payment Failed</span> <br>
                                    </div>
                                    <button class="btn btn-dark">View detail</button>
                                ';
                        } else if ($bill['payment_status'] == 5) {
                            echo '
                                    <div class="mb-2">
                                        <span class="badge bg-danger">Declined</span> <br>
                                    </div>
                                    <div>
                                        <button class="btn btn-dark">View detail</button>
                                        <button class="btn btn-dark">Rebook</button>
                                    </div>
                                ';
                        } else if ($bill['payment_status'] == 6) {
                            echo '
                                    <div class="mb-2">
                                        <span class="badge bg-danger">Cancelled</span> <br>
                                    </div>
                                    <div>
                                        <button class="btn btn-dark">View detail</button>
                                        <button class="btn btn-dark">Rebook</button>
                                    </div>
                                ';
                        } else if ($bill['payment_status'] == 7) {
                            echo '
                                    <div class="mb-2">
                                        <span class="badge bg-primary">Requested cancel</span> <br>
                                    </div>
                                    <button class="btn btn-dark">View detail</button>
                                ';
                        } else if ($bill['payment_status'] == 9) {
                            echo '
                                    <div class="mb-2">
                                        <span class="badge bg-success">Booked</span> <br>
                                    </div>
                                    <div>
                                        <button class="btn btn-dark">View detail</button>
                                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#rating' . $bill['id_bill'] . '">Rate & Review</button>
                                    </div>
                                ';
                        } else if ($bill['payment_status'] == 10) {
                            echo '
                                    <div class="mb-2">
                                        <span class="badge bg-info">Refunded</span> <br>
                                    </div>
                                    <div>
                                        <button class="btn btn-dark">View detail</button>
                                        <button class="btn btn-dark">Rebook</button>
                                    </div>
                                ';
                        }
                        ?>

                        <!-- <button class="btn btn-dark">Download PDF</button>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Rate & Review</button> -->
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="rating<?= $bill['id_bill'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <form method="post">
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
                                        <select name="rating" class="form-select form-select-lg mb-3">
                                            <option value="Bad">Bad</option>
                                            <option value="Good">Good</option>
                                            <option value="Excellent" selected>Excellent</option>
                                        </select>
                                        <input type="hidden" name="id_user" value="<?= $bill['id_user'] ?>">
                                        <?php foreach ($bookings as $booking) {
                                            if ($booking['id_bill'] == $bill['id_bill']) {
                                                foreach ($rooms as $room) {
                                                    if ($room['id'] == $booking['id_room']) {
                                                        ?>
                                                        <input type="hidden" name="id_room[]" value="<?= $room['id'] ?>">
                                                        <?php
                                                    }
                                                }
                                            }

                                        } ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" name="review" rows="4" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="rate" class="btn btn-primary custom-bg">Send message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>