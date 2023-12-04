<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">ROOMS</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="text-end mb-4">
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#add-room-s">
                            <i class="bi bi-plus-square me-1"></i>Add
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="add-room-s" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Room</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Name</label>
                                                <input type="text" name="name" class="form-control shadow-none"
                                                    requiredd>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Area (m&#178)</label>
                                                <input type="number" min="15" name="area"
                                                    class="form-control shadow-none" requiredd>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Price</label>
                                                <input type="number" min="100" name="price"
                                                    class="form-control shadow-none" requiredd>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Quantity</label>
                                                <input type="number" min="1" name="quantity"
                                                    class="form-control shadow-none" requiredd>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Adult (Max.)</label>
                                                <input type="number" min="1" name="adult"
                                                    class="form-control shadow-none" requiredd>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Children (Max.)</label>
                                                <input type="text" min="1" name="children"
                                                    class="form-control shadow-none" requiredd>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="" class="form-label fw-bold">Features</label>
                                                <div class="row w-100">
                                                    <?php foreach ($features as $feature): ?>
                                                        <div class="col-md-4 mb-1">
                                                            <label>
                                                                <input type="checkbox" name="features[]"
                                                                    value="<?= $feature['id'] ?>"
                                                                    class="form-check-input shadow-none">
                                                                <?= $feature['name_feature'] ?>
                                                            </label>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="" class="form-label fw-bold">Facilities</label>
                                                <div class="row w-100">
                                                    <?php foreach ($facilities as $facility): ?>
                                                        <div class="col-md-4 mb-1">
                                                            <label>
                                                                <input type="checkbox" name="facilities[]"
                                                                    value="<?= $facility['id'] ?>"
                                                                    class="form-check-input shadow-none">
                                                                <?= $facility['name_facility'] ?>
                                                            </label>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="" class="form-label fw-bold">Description</label>
                                                <textarea rows="4" name="description"
                                                    class="form-control shadow-none"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary shadow-none"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn custom-bg text-white shadow-none"
                                            name="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                        <table class="table table-hover border table-bordered">
                            <thead class="sticky-top">
                                <tr>
                                    <th class="bg-dark text-white" scope="col" width="5%">#</th>
                                    <th class="bg-dark text-white" scope="col">Name</th>
                                    <th class="bg-dark text-white" scope="col">Area</th>
                                    <th class="bg-dark text-white" scope="col">Guests</th>
                                    <th class="bg-dark text-white" scope="col">Price</th>
                                    <th class="bg-dark text-white" scope="col" width="8%">Quantity</th>
                                    <!-- <th class="bg-dark text-white" scope="col">Features</th>
                                    <th class="bg-dark text-white" scope="col">Facilities</th> -->
                                    <th class="bg-dark text-white" scope="col" width="12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rooms as $room): ?>
                                    <tr class="align-middle fs-5 fw-medium">
                                        <td>
                                            <?= $room['id_rooms'] ?>
                                        </td>
                                        <td>
                                            <?= $room['name'] ?>
                                        <td>
                                            <!-- <span class="badge rounded-pill bg-light text-dark">
                                            </span> -->
                                            <?= $room['area'] ?> m&#178
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-light text-dark">
                                                Adult:
                                                <?= $room['max_adult']  ?>
                                            </span> <br>
                                            <span class="badge rounded-pill bg-light text-dark">
                                                Children:
                                                <?= $room['max_children'] ?>
                                            </span>
                                        </td>
                                        <td>
                                            $
                                            <?= $room['price'] ?>
                                        </td>
                                        <td>
                                            <?= $room['quantity'] ?>
                                        </td>
                                        <!-- <td>
                                            <?php foreach ($room_features as $feature): ?>

                                                <?php
                                                if ($room['id_rooms'] == $feature['id_room']) { ?>
                                                    <span class="badge rounded-pill bg-light text-dark">
                                                        <?= $feature['name_feature'] ?>
                                                    </span> <br>

                                                    <?php
                                                }
                                                ?>

                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($room_facilities as $facility): ?>

                                                <?php
                                                if ($room['id_rooms'] == $facility['id_room']) { ?>
                                                    <span class="badge rounded-pill bg-light text-dark">
                                                        <?= $facility['name_facility'] ?>
                                                    </span> <br>

                                                    <?php
                                                }
                                                ?>

                                            <?php endforeach; ?>
                                        </td> -->
                                        <td>
                                            <button class="btn btn-primary btn-sm shadow-none" data-bs-toggle="modal"
                                                data-bs-target="#update_room<?= $room['id_rooms'] ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-info btn-sm shadow-none" data-bs-toggle="modal"
                                                data-bs-target="#add_image<?= $room['id_rooms'] ?>">
                                                <i class="bi bi-image"></i>
                                            </button>
                                            <a href="/admin/rooms/delete?id=<?= $room['id_rooms'] ?>" class="btn btn-danger btn-sm shadow-none" onclick="return confirm('Bạn có chắc chắn xóa?');">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Update -->
                                    <div class="modal fade" id="update_room<?= $room['id_rooms'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Room</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="" class="form-label fw-bold">Name</label>
                                                                <input type="hidden" name="id_room_update" value="<?= $room['id_rooms'] ?>">
                                                                <input type="text" name="name_update" value="<?= $room['name'] ?>"
                                                                    class="form-control shadow-none" requiredd>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="" class="form-label fw-bold">Area</label>
                                                                <input type="number" min="15" name="area_update"
                                                                    value="<?= $room['area'] ?>"
                                                                    class="form-control shadow-none" requiredd>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="" class="form-label fw-bold">Price</label>
                                                                <input type="number" min="100" name="price_update"
                                                                    value="<?= $room['price'] ?>"
                                                                    class="form-control shadow-none" requiredd>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="" class="form-label fw-bold">Quantity</label>
                                                                <input type="number" min="1" name="quantity_update"
                                                                    value="<?= $room['quantity'] ?>"
                                                                    class="form-control shadow-none" requiredd>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="" class="form-label fw-bold">Adult
                                                                    (Max.)</label>
                                                                <input type="number" min="1" name="adult_update"
                                                                    value="<?= $room['max_adult'] ?>"
                                                                    class="form-control shadow-none" requiredd>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="" class="form-label fw-bold">Children
                                                                    (Max.)</label>
                                                                <input type="text" min="1" name="children_update"
                                                                    value="<?= $room['max_children'] ?>"
                                                                    class="form-control shadow-none" requiredd>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <label for="" class="form-label fw-bold">Features</label>
                                                                <div class="row w-100">
                                                                    <?php foreach ($features as $feature): ?>
                                                                        <div class="col-md-4 mb-1">
                                                                            <label>
                                                                                <input type="checkbox" name="features_update[]"
                                                                                    value="<?= $feature['id'] ?>"
                                                                                    class="form-check-input shadow-none" <?php
                                                                                    foreach ($room_features as $row) {
                                                                                        if (($feature['id'] == $row['id_features']) && ($room['id_rooms'] == $row['id_room'])) {
                                                                                            echo 'checked';
                                                                                        }
                                                                                    }
                                                                                    ?>>
                                                                                <?= $feature['name_feature'] ?>
                                                                            </label>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <label for="" class="form-label fw-bold">Facilities</label>
                                                                <div class="row w-100">
                                                                    <?php foreach ($facilities as $facility): ?>
                                                                        <div class="col-md-4 mb-1">
                                                                            <label>
                                                                                <input type="checkbox" name="facilities_update[]"
                                                                                    value="<?= $facility['id'] ?>"
                                                                                    class="form-check-input shadow-none" <?php
                                                                                    foreach ($room_facilities as $row) {
                                                                                        if (($facility['id'] == $row['id_facilities']) && ($room['id_rooms'] == $row['id_room']))
                                                                                            echo 'checked';
                                                                                    }
                                                                                    ?>>
                                                                                <?= $facility['name_facility'] ?>
                                                                            </label>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <label for="" class="form-label fw-bold">Description</label>
                                                                <textarea rows="4" name="description_update"
                                                                    class="form-control shadow-none">
                                                                    <?= $room['description']; ?>
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary shadow-none"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn custom-bg text-white shadow-none"
                                                            name="update">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Add image -->
                                    <div class="modal fade" id="add_image<?= $room['id_rooms'] ?>" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Images</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row d-flex align-items-end w-100">
                                                            <div class="col-11">
                                                                <label>Add Image</label>
                                                                <input type="file" name="image_room"
                                                                    accept=".jpg, .png, .webp, .jpeg"
                                                                    class="form-control shadow-none mt-1" multiple>
                                                                <input type="hidden" name="id_room_image"
                                                                    value="<?= $room['id_rooms'] ?>">
                                                            </div>
                                                            <div class="col-1">
                                                                <button type="submit" name="add_image"
                                                                    class="btn custom-bg text-white shadow-none">
                                                                    ADD
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="container-fluid mt-3"
                                                            style="height: 350px; overflow-y: scroll">
                                                            <div
                                                                class="row border border-dark p-2 text-center text-white bg-dark fw-bold">
                                                                <div class="col-lg-6">Image</div>
                                                                <div class="col-lg-3 text-center">Thumb</div>
                                                                <div class="col-lg-3 text-center">Delete</div>
                                                            </div>

                                                            <?php
                                                            foreach ($image_room as $images) {

                                                                if ($images['id_room'] == $room['id_rooms']) {
                                                            ?>

                                                                    <div class="row d-flex align-items-center mt-2">
                                                                        <div class="col-lg-6 ps-0">
                                                                            <img src="../../..<?= $images['image'] ?>"
                                                                                class="img-fluid p-0">
                                                                        </div>
                                                                        <div class="col-lg-3 text-center">
                                                                            <input type="radio" class="btn-check" name="thumb"
                                                                                value="<?= $images['id'] ?>"
                                                                                id="btncheck<?= $images['id'] ?>"
                                                                                autocomplete="off"
                                                                                <?= ($images['thumb'] == 1) ? 'checked' : '' ?>>
                                                                            <label class="btn btn-outline-secondary py-0 px-1"
                                                                                for="btncheck<?= $images['id'] ?>">
                                                                                <i class="bi bi-check-lg"></i>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-lg-3 text-center">
                                                                            <a href="/admin/rooms/delete_image?id=<?= $images['id'] ?>" class="btn btn-danger btn-sm shadow-none" onclick="return confirm('Bạn có chắc chắn xóa?');">
                                                                                <i class="bi bi-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                            <?php
                                                                }

                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="save"
                                                            class="btn custom-bg text-white shadow-none">Save</button>
                                                    </div>
                                                </form>
                                            </div>
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