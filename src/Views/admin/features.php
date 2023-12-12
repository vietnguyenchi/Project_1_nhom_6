<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">FEATURES</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-end mb-3">
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#feature-s">
                            <i class="bi bi-plus-square me-1"></i>Add
                        </button>
                    </div>

                    <div class="modal fade" id="feature-s" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="feature_s_form" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Feature</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                            <input type="text" name="feature_name" class="form-control shadow-none" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary shadow-none"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn custom-bg text-white shadow-none"
                                            name="add_feature">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive-md" style="height: 550px; overflow-y: scroll;">
                        <table class="table table-hover border table-bordered">
                            <thead class="sticky-top">
                                <tr>
                                    <th class="bg-dark text-white" scope="col" width="5%">#</th>
                                    <th class="bg-dark text-white" scope="col">Name</th>
                                    <th class="bg-dark text-white" scope="col" width="30%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($features as $index => $feature): ?>
                                    <tr>
                                        <td>
                                            <?= $index + 1 ?>
                                        </td>
                                        <td>
                                            <?= $feature['name_feature'] ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm shadow-none" data-bs-toggle="modal"
                                                data-bs-target="#feature<?= $feature['id'] ?>">
                                                <i class="bi bi-pencil me-1"></i>Edit
                                            </button>
                                            <a href="/admin/features/delete?id=<?= $feature['id'] ?>"
                                                class="btn btn-danger btn-sm shadow-none" onclick="return confirm('Bạn có chắc chắn xóa?');">
                                                <i class="bi bi-trash me-1"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Mỗi một bản ghi đều có 1 cửa sổ popup update riêng -->
                                    <div class="modal fade" id="feature<?= $feature['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">Name</label>
                                                            <input type="hidden" name="feature_id" value="<?= $feature['id'] ?>">
                                                            <input type="text" name="name_update" class="form-control shadow-none" value="<?= $feature['name_feature'] ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary shadow-none"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn custom-bg text-white shadow-none"
                                                            name="update_feature">Update</button>
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