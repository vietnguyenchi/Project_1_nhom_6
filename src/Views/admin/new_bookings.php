<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">New Bookings</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="text-end mb-4">
                        <input placeholder="Search here" style="width: 250px;" type="text"
                            class="form-control shadow-none ms-auto">
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover border table-bordered">
                            <thead class="sticky-top">
                                <tr>
                                    <th class="bg-dark text-white" scope="col">#</th>
                                    <th class="bg-dark text-white" scope="col">User Detail</th>
                                    <th class="bg-dark text-white" scope="col">Room Details</th>
                                    <th class="bg-dark text-white" scope="col">Bookings Details</th>
                                    <th class="bg-dark text-white" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bookings as $index => $booking): ?>
                                    <tr>
                                        <td>
                                            <?= $index + 1 ?>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">
                                                Order ID: ORD_
                                                <?= $booking['orderId'] ?>
                                            </span>
                                            <br>
                                            <b>Name:</b>
                                            <?= $booking['name_guest'] ?>
                                            <br>
                                            <b>Phone:</b>
                                            <?= $booking['phone_number'] ?>
                                        </td>
                                        <td>
                                            <b>Room:</b>
                                            <?= $booking['name'] ?>
                                            <br>
                                            <b>Price:</b>
                                            <?= number_format($booking['price'], 0, ',', '.') ?> <sup>vnd</sup> per night
                                        </td>
                                        <td>
                                            <b>Check-in:</b>
                                            <?= $booking['check_in'] ?>
                                            <br>
                                            <b>Check-out:</b>
                                            <?= $booking['check_out'] ?>
                                            <br>
                                            <b>Paid:</b>
                                            <?= number_format($booking['totalPrice'], 0, ',', '.') ?> <sup>vnd</sup>
                                            <br>
                                            <b>Date: </b>
                                            <?= $booking['start_date'] ?>
                                        </td>
                                        <td>
                                            <form method="POST">
                                                <button type="button"
                                                    class="btn text-white btn-sm fw-bold custom-bg shadow-none mb-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#assign-room<?= $booking['idBooking'] ?>">
                                                    <i class="bi bi-check2-square"></i>
                                                    Assign Room <br>
                                                </button>
                                                <br>
                                                <input type="hidden" name="id_cancel" value="<?= $booking['idBill'] ?>">
                                                <button type="submit" name="cancel"
                                                    class="btn btn-outline-danger bg-white text-danger btn-sm fw-bold shadow-none">
                                                    <i class="bi bi-trash"></i>
                                                    Cancel Booking <br>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Assign Room Number Modal -->
                                    <div class="modal fade" id="assign-room<?= $booking['idBooking'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Assign Room</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">Room Number</label>
                                                            <input type="text" name="room_number"
                                                                class="form-control shadow-none" required>
                                                            <input type="hidden" name="id_booking"
                                                                value="<?= $booking['idBooking'] ?>">
                                                            <input type="hidden" name="idBill"
                                                                value="<?= $booking['idBill'] ?>">
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                                            Note: Assign Room number only when user has been arrived!
                                                        </span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary shadow-none"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" name="submit"
                                                            class="btn custom-bg text-white shadow-none"
                                                            name="add_feature">ASSIGN</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>