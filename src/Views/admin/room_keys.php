<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">BOOKING RECORDS</h3>

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
                                    <th class="bg-dark text-white" scope="col">Room Number</th>
                                    <th class="bg-dark text-white" scope="col">Guest</th>
                                    <th class="bg-dark text-white" scope="col">Bookings Details</th>
                                    <th class="bg-dark text-white" scope="col" width="30%">Message</th>
                                    <th class="bg-dark text-white" scope="col">Status</th>
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
                                            <p class="fw-bold">
                                                <?= $booking['room_key'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <b>Name:</b>
                                            <?= $booking['name_guest'] ?>
                                            <br>
                                            <b>Phone:</b>
                                            <?= $booking['phone_number'] ?>
                                            <br>
                                            <b>Detail:</b> Adult:
                                            <?= $booking['adult'] ?>, Children
                                            <?= $booking['children'] ?>
                                        </td>
                                        <td>
                                            <p class="badge bg-primary-subtle text-dark fs-6 mb-1 fw-medium">
                                                <span class="fw-bold">Check-in: </span>
                                                <?= $booking['check_in'] ?>
                                            </p><br>
                                            <p class="badge bg-primary-subtle text-dark fs-6 mb-0 fw-medium">
                                                <span class="fw-bold">Check-out: </span>
                                                <?= $booking['check_out'] ?>
                                            </p><br>
                                        </td>
                                        <td>
                                            <?= $booking['message'] ?>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">
                                                Check-in
                                            </span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm fw-bold shadow-none"
                                                data-bs-toggle="modal" data-bs-target="#edit<?= $booking['id'] ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit<?= $booking['id'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit booking</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">Check-out</label>
                                                            <input type="date" id="check_out" name="check_out"
                                                                class="form-control shadow-none" required>
                                                            <input type="hidden" name="id_booking"
                                                                value="<?= $booking['id'] ?>">
                                                        </div>
                                                        <label class="col-form-label">Status:</label>
                                                        <select class="form-select form-select-md mb-3">
                                                            <option selected></option>
                                                            <option value="1">Check-in</option>
                                                            <option value="2">Check-out</option>
                                                        </select>
                                                        <span
                                                            class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                                            Note: Check-out early or extra day!
                                                        </span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary shadow-none"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" name="submit"
                                                            class="btn custom-bg text-white shadow-none"
                                                            name="add_feature">Update</button>
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