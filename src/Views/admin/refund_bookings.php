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
                                    <th class="bg-dark text-white" scope="col">Booking Details</th>
                                    <th class="bg-dark text-white" scope="col">Time</th>
                                    <th class="bg-dark text-white" scope="col">Refund Amount</th>
                                    <th class="bg-dark text-white" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bills as $index => $bill): ?>
                                    <tr>
                                        <td>
                                            <?= $index + 1 ?>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">
                                                Order ID: ORD_
                                                <?= $bill['orderId'] ?>
                                            </span>
                                            <br>
                                            <b>Name:</b>
                                            <?= $bill['name_user'] ?>
                                            <br>
                                            <b>Phone:</b>
                                            <?= $bill['phone'] ?>
                                        </td>
                                        <td>
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
                                                            <p class="mb-0">
                                                                <span class="fw-bold">Detail:</span>
                                                                Adult:
                                                                <?= $booking['adult'] ?>,
                                                                Children:
                                                                <?= $booking['children'] ?>
                                                            </p>
                                                            <p class="mb-2">
                                                                <b>Duration in day: </b>
                                                                <?= $booking['duration_in_day'] ?> days
                                                            </p>
                                                            <?php
                                                        }
                                                    }
                                                }

                                            } ?>
                                            <!-- <b>Room:</b> Simple Room
                                            <br>
                                            <b>Check-in:</b> 2023/12/2
                                            <br>
                                            <b>Check-out:</b> 2023/12/5
                                            <br>
                                            <b>Date: </b> 2023/12/2 -->
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($bookings as $booking) {
                                                if ($booking['id_bill'] == $bill['id_bill']) {
                                                    ?>
                                                    <p class="badge bg-primary-subtle text-dark fs-6 mb-1 fw-medium">
                                                        <span class="fw-bold">Check-in: </span>
                                                        <?= $booking['check_in'] ?>
                                                    </p><br>
                                                    <p class="badge bg-primary-subtle text-dark fs-6 mb-0 fw-medium">
                                                        <span class="fw-bold">Check-out: </span>
                                                        <?= $booking['check_out'] ?>
                                                    </p><br>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </td>
                                        <td>
                                            <b class="fs-5 fw-medium">
                                                <?= number_format($bill['price_total'], 0, ',', '.') ?>
                                            </b> <sup>VND</sup>
                                        </td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name="refund_id" value="<?= $bill['id_bill'] ?>">
                                                <button type="submit" name="refund" onclick="return confirm('Bạn có chắc chắn muốn hoàn trả?');"
                                                    class="btn btn-success text-white btn-sm fw-bold shadow-none mb-2">
                                                    <i class="bi bi-cash-stack"></i>
                                                    Refund <br>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>