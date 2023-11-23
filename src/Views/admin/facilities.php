<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">FACILITIES</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-end mb-3">
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#facilities-s">
                            <i class="bi bi-plus-square me-1"></i>Add
                        </button>
                    </div>

                    <div class="modal fade" id="facilities-s" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Facilities</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                            <input name="facility_name" type="text" class="form-control shadow-none"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Image</label>
                                            <input type="file" name="facility_image" class="form-control shadow-none"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control shadow-none"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary shadow-none"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" name="add_facility"
                                            class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                        <table class="table table-hover border table-bordered">
                            <thead class="sticky-top">
                                <tr>
                                    <th class="bg-dark text-white" scope="col" width="5%">#</th>
                                    <th class="bg-dark text-white" scope="col" width="15%">Image</th>
                                    <th class="bg-dark text-white" scope="col" width="20%">Name</th>
                                    <th class="bg-dark text-white" scope="col">Description</th>
                                    <th class="bg-dark text-white" scope="col" width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($facilities as $facility): ?>
                                    <tr>
                                        <td>
                                            <?= $facility['id'] ?>
                                        </td>
                                        <td><img src="<?= $facility['image'] ?>" width="100"></td>
                                        <td>
                                            <?= $facility['name'] ?>
                                        </td>
                                        <td>
                                            <?= $facility['description'] ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm shadow-none d-block mb-1"
                                                data-bs-toggle="modal" data-bs-target="#facility<?= $facility['id'] ?>">
                                                <i class="bi bi-pencil me-1"></i>Edit
                                            </button>
                                            <a href="/admin/facilities/delete?id=<?= $facility['id'] ?>"
                                                onclick="return confirm('Bạn có chắc chắn xóa?');"
                                                class="btn btn-danger btn-sm shadow-none">
                                                <i class="bi bi-trash me-1"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="facility<?= $facility['id'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Facility</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">Name</label>
                                                            <input name="name_update" type="text"
                                                                class="form-control shadow-none"
                                                                value="<?= $facility['name'] ?>" required>
                                                            <input type="hidden" name="facility_id" value="<?= $facility['id'] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">Image</label>
                                                            <input type="file" name="image_update"
                                                                class="form-control shadow-none">
                                                            <input type="hidden" name="img_current" id="img_current"
                                                                class="form-control" value="<?= $facility['image'] ?>">
                                                            <img width="100" src="<?= $facility['image'] ?>" class="mt-2">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea name="desc_update" class="form-control shadow-none"
                                                                rows="3"><?= $facility['description'] ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-secondary shadow-none"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" name="update_facility"
                                                            class="btn custom-bg text-white shadow-none">Update</button>
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