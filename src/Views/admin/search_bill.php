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
                                            <b>Price:</b> $200 -->
            </td>
            <td>
                <b>Amount:</b>
                <?= number_format($bill['price_total'], 0, ',', '.') ?> <sup>VND</sup>
                <br>
                <b>Date: </b>
                <?= $bill['time'] ?>
            </td>
            <td>
                <?php
                if ($bill['payment_status'] == 2) {
                    echo '
                                                    <div class="mb-2">
                                                        <span class="badge bg-success">Paid</span> <br>
                                                    </div>
                                                ';
                } else if ($bill['payment_status'] == 4) {
                    echo '
                                                    <div class="mb-2">
                                                        <span class="badge bg-warning">Payment Failed</span> <br>
                                                    </div>
                                                ';
                } else if ($bill['payment_status'] == 5) {
                    echo '
                                                    <div class="mb-2">
                                                        <span class="badge bg-danger">Declined</span> <br>
                                                    </div>
                                                ';
                } else if ($bill['payment_status'] == 6) {
                    echo '
                                                    <div class="mb-2">
                                                        <span class="badge bg-danger">Cancelled</span> <br>
                                                    </div>
                                                ';
                } else if ($bill['payment_status'] == 7) {
                    echo '
                                                    <div class="mb-2">
                                                        <span class="badge bg-primary">Requested cancel</span> <br>
                                                    </div>
                                                ';
                } else if ($bill['payment_status'] == 9) {
                    echo '
                                                    <div class="mb-2">
                                                        <span class="badge bg-success">Booked</span> <br>
                                                    </div>
                                                ';
                } else if ($bill['payment_status'] == 10) {
                    echo '
                                                    <div class="mb-2">
                                                        <span class="badge bg-info">Refunded</span> <br>
                                                    </div>
                                                ';
                }
                ?>
            </td>
            <td>
                <button type="button" class="btn btn-outline-danger bg-white text-danger btn-sm fw-bold shadow-none">
                    <i class="bi bi-trash"></i>
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>