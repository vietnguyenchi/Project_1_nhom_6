<div class="container">
    <div class="col-lg-12 p-4 overflow-hiddens">
        <h3 class="mb-4">BOOKINGS</h3>

        <div class="card border-0 shadow-sm sm-4">
            <div class="card-body">
                <div class="table-responsive-md d-flex flex-column justify-content-between"
                    style="height: 500px; overflow-y:scroll;">
                    <table class="table table-hover border table-bordered postion-relative">
                        <thead>
                            <tr class="sticky-top" style="z-index: 1;">
                                <th class="bg-dark text-white" scope="col">#</th>
                                <th class="bg-dark text-white" scope="col">Room Details</th>
                                <th class="bg-dark text-white" scope="col">Booking Details</th>
                                <th class="bg-dark text-white" scope="col">Duration</th>
                                <th class="bg-dark text-white" scope="col">Total Price</th>
                                <!-- <th class="bg-dark text-white" scope="col">Date</th> -->
                                <th class="bg-dark text-white" scope="col">Status</th>
                                <th class="bg-dark text-white" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table">
                            <?php foreach ($bookings as $booking): ?>
                                <tr>
                                    <td style="vertical-align: middle;">
                                        <input type="checkbox" value="<?= $booking['total_price'] ?>" class="btn-check" id="<?= $booking['id_booking'] ?>" autocomplete="off">
                                        <label class="btn btn-outline-success p-0 px-1" for="<?= $booking['id_booking'] ?>">
                                            <i class="bi bi-check-lg"></i>
                                        </label>
                                    </td>
                                    <td>
                                        <p class="mb-0"><span class="fw-bold">Room:</span> <?= $booking['name'] ?></p>
                                        <p class="mb-0"><span class="fw-bold">Price:</span> <?= $booking['price'] ?>VND per night</p>
                                    </td>
                                    <td>
                                        <p class="badge bg-primary-subtle text-dark fs-6 mb-1"><span
                                                class="fw-bold">Check-in:</span> <?= $booking['check_in'] ?></p><br>
                                        <p class="badge bg-primary-subtle text-dark fs-6 mb-0"><span
                                                class="fw-bold">Check-out:</span> <?= $booking['check_out'] ?></p><br>
                                    </td>
                                    <td class="fw-medium"><?= $booking['duration_in_day'] ?> days</td>
                                    <td class="fw-medium">$<span id="price"><?= $booking['total_price'] ?></span></td>
                                    <!-- <td>
                                        <p class="mb-0">02/12/2023</p>
                                    </td> -->
                                    <td>
                                        <div>
                                            <?php 
                                                foreach($booking_status as $status) {
                                                    if(($status['id'] == 1) && ($status['id'] == $booking['status'])) {
                                                        echo '<span class="badge bg-warning">'.$status['booking_status'].'</span> <br>';
                                                    } elseif (($status['id'] == 2) && ($status['id'] == $booking['status'])) {
                                                        echo '<span class="badge bg-success">'.$status['booking_status'].'</span> <br>';
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="container-fluid border w-100 sticky-bottom bg-light p-0">
                        <table class="container-fluid table bg-light m-0">
                            <tr>
                                <td>
                                    <div class="bg-light rounded" style="width: fit-content;">
                                        <input type="checkbox" value="200" class="btn-check" id="selectAll"
                                            autocomplete="off">
                                        <label class="btn btn-outline-success bg-success text-white p-1"
                                            for="selectAll">
                                            <i class="bi bi-check-square"></i> Select All
                                        </label>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Delete All Selected
                                        </button>
                                    </div>
                                </td>
                                <td class="text-end" style="width: fit-content;">
                                    <input type="hidden" name="totalPrice" id="hiddenPrice">
                                    <p class="fw-bold m-0 d-inline">Total price: <span id="totalPrice"
                                            class="fw-medium bg-none text-danger me-4">0</span></p>
                                    <button class="btn custom-bg text-white fw-medium">Pay now</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>