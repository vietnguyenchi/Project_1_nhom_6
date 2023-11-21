<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">FEATURES & FACILITIES</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Features</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                            <i class="bi bi-plus-square me-1"></i>Add
                        </button>
                    </div>

                    <div class="modal fade" id="feature-s" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="feature_s_form" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Feature</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="" class="form-label fw-bold">Name</label>
                                            <input type="text" name="feature_name" class="form-control shadow-none" require>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn custom-bg text-white shadow-none" name="add_feature">SUBMIT</button>
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
                                    <th class="bg-dark text-white" scope="col">Name</th>
                                    <th class="bg-dark text-white" scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($features as $feature) : ?>
                                    <tr>
                                        <td><?= $feature['id'] ?></td>
                                        <td><?= $feature['name'] ?></td>
                                        <td>
                                            <button class="btn btn-success btn-sm shadow-none">
                                                <i class="bi bi-pencil me-1"></i>Edit
                                            </button>
                                            <button class="btn btn-danger btn-sm shadow-none">
                                                <i class="bi bi-trash me-1"></i>Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <!-- <tr>
                                    <td>2</td>
                                    <td>Badroom</td>
                                    <td>
                                        <button class="btn btn-success btn-sm shadow-none">
                                            <i class="bi bi-pencil me-1"></i>Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm shadow-none">
                                            <i class="bi bi-trash me-1"></i>Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sofa</td>
                                    <td>
                                        <button class="btn btn-success btn-sm shadow-none">
                                            <i class="bi bi-pencil me-1"></i>Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm shadow-none">
                                            <i class="bi bi-trash me-1"></i>Delete
                                        </button>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Facilities</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facilities-s">
                            <i class="bi bi-plus-square me-1"></i>Add
                        </button>
                    </div>

                    <div class="modal fade" id="facilities-s" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="feature_s_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Facilities</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                            <input type="text" class="form-control shadow-none" require>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Image</label>
                                            <input type="file" class="form-control shadow-none" require>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control shadow-none" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn custom-bg text-white shadow-none">SUBMIT</button>
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
                                    <th class="bg-dark text-white" scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="../../../assets/images/facilities/IMG_41622.svg" width="100"></td>
                                    <td>Televition</td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fuga exercitationem at quidem eligendi reprehenderit!</td>
                                    <td>
                                        <button class="btn btn-success btn-sm shadow-none">
                                            <i class="bi bi-pencil me-1"></i>Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm shadow-none">
                                            <i class="bi bi-trash me-1"></i>Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>