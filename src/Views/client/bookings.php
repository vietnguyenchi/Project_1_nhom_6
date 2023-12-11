<div class="container">
    <div class="col-lg-12 p-4 overflow-hiddens">
        <h3 class="mb-4">BOOKINGS</h3>

        <div class="card border-0 shadow-sm sm-4">
            <div class="card-body">
                <form method="post">
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
                                    <!-- <th class="bg-dark text-white" scope="col">Status</th> -->
                                    <th class="bg-dark text-white" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                <?php foreach ($bookings as $booking): ?>
                                    <tr>
                                        <td style="vertical-align: middle;">
                                            <img src="" alt="">
                                            <input type="checkbox" name="id[]" value="<?= $booking['id_booking'] ?>"
                                                class="d-none">
                                            <input type="checkbox" value="<?= $booking['total_price'] ?>" name="price[]"
                                                class="btn-check" id="<?= $booking['id_booking'] ?>" autocomplete="off">
                                            <label class="btn btn-outline-success p-0 px-1"
                                                for="<?= $booking['id_booking'] ?>">
                                                <i class="bi bi-check-lg"></i>
                                            </label>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <?php
                                            foreach ($images as $image) {
                                                if ($image['id_room'] == $booking['id_room']) {
                                                    ?>
                                                        <img src="<?= $image['image'] ?>" width="70" class="float-start">
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <div class="ms-2 float-start">
                                                <p class="fw-bold mb-0"><?= $booking['name'] ?></p>
                                                <?= number_format($booking['price'], 0, ',', '.') ?><sup>vnd</sup> per night
                                            </div>
                                        </td>
                                        <td>
                                            <p class="badge bg-primary-subtle text-dark fs-6 mb-1"><span
                                                    class="fw-bold">Check-in:</span>
                                                <?= $booking['check_in'] ?>
                                            </p><br>
                                            <p class="badge bg-primary-subtle text-dark fs-6 mb-0"><span
                                                    class="fw-bold">Check-out:</span>
                                                <?= $booking['check_out'] ?>
                                            </p><br>
                                        </td>
                                        <td class="fw-medium">
                                            <?= $booking['duration_in_day'] ?> days
                                        </td>
                                        <td class="fw-medium"><span id="price">
                                                <?= number_format($booking['total_price'], 0, ',', '.') ?><sup>vnd</sup>
                                            </span></td>
                                        <!-- <td>
                                            <p class="mb-0">02/12/2023</p>
                                        </td> -->
                                        <!-- <td>
                                            <div>
                                                <span class="badge bg-warning">Pending</span> 
                                            </div>
                                        </td> -->
                                        <td>
                                            <a href="/bookings/deleteBooking?id=<?= $booking['id_booking'] ?>"
                                                class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <div class="container-fluid border w-100 sticky-bottom bg-light p-0">
                            <table class="container-fluid table bg-light m-0">
                                <tr class="align-middle">
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
                                    <td width="20%">
                                        <p class="fw-bold m-0 d-inline fs-5">Total booking: <span id="totalBooking"
                                                class="fw-medium bg-none text-danger me-4">0</span></p>
                                    </td>
                                    <td width="25%">
                                        <p class="fw-bold m-0 d-inline fs-5">Total price: <span id="totalPrice"
                                                class="fw-medium bg-none text-danger me-4">0</span></p>
                                    </td>
                                    <td class="text-end" width="10%">
                                        <input type="hidden" name="totalPrice" id="hiddenPrice">
                                        <button type="button" class="btn custom-bg text-white fw-medium"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">Pay now</button>

                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Select
                                            payment method</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row m-0">
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit"
                                                            name="payUrl">Momo</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit"
                                                            name="">VNpay</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit"
                                                            name="">ViettelPay</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-3">
                                                    <div class="card">
                                                        <button class="btn custom-bg text-white fw-medium" type="submit"
                                                            name="">ZaloPay</button>
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
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>