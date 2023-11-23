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
                            <form id="add_room_form" autocomplete="off">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Room</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Name</label>
                                                <input type="text" class="form-control shadow-none" require>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Area</label>
                                                <input type="number" min="1" class="form-control shadow-none" require>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Price</label>
                                                <input type="text" min="1" class="form-control shadow-none" require>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Quantity</label>
                                                <input type="text" min="1" class="form-control shadow-none" require>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Adult (Max.)</label>
                                                <input type="text" min="1" class="form-control shadow-none" require>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="" class="form-label fw-bold">Children (Max.)</label>
                                                <input type="text" min="1" class="form-control shadow-none" require>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="" class="form-label fw-bold">Features</label>
                                                <div class="row w-100">
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Balcony
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Kitchen
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="" class="form-label fw-bold">Facilities</label>
                                                <div class="row w-100">
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Wifi
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Air conditioner
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Televition
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Geyser
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Spa
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <label>
                                                            <input type="checkbox" value="1"
                                                                class="form-check-input shadow-none">
                                                            Room Heater
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="" class="form-label fw-bold">Description</label>
                                                <textarea rows="4" class="form-control shadow-none" require></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary shadow-none"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button"
                                            class="btn custom-bg text-white shadow-none">SUBMIT</button>
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
                                    <th class="bg-dark text-white" scope="col">Guests</th>
                                    <th class="bg-dark text-white" scope="col">Price</th>
                                    <th class="bg-dark text-white" scope="col">Quantity</th>
                                    <th class="bg-dark text-white" scope="col" width="17%">Status</th>
                                    <th class="bg-dark text-white" scope="col" width="12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>1</td>
                                    <td>Simple room</td>
                                    <td>
                                        <span class="badge rounded-pill bg-light text-dark">
                                            Adult: 8
                                        </span> <br>
                                        <span class="badge rounded-pill bg-light text-dark">
                                            Children: 3
                                        </span>
                                    </td>
                                    <td>$200</td>
                                    <td>20</td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Active</option>
                                            <option value="1">Inactive</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm shadow-none">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-info btn-sm shadow-none" data-bs-toggle="modal"
                                            data-bs-target="#add_image">
                                            <i class="bi bi-image"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm shadow-none">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="add_image" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Images</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row d-flex align-items-end w-100">
                                                        <div class="col-11">
                                                            <label>Add Image</label>
                                                            <input type="file" accept=".jpg, .png, .webp, .jpeg"
                                                                class="form-control shadow-none mt-1" required>
                                                        </div>
                                                        <div class="col-1">
                                                            <button type="button"
                                                                class="btn custom-bg text-white shadow-none">ADD</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="container-fluid table table-hover mt-3"
                                                    style="height: 350px; overflow-y: scroll">
                                                    <div
                                                        class="row border border-dark p-2 text-center text-white bg-dark fw-bold">
                                                        <div class="col-lg-6">Image</div>
                                                        <div class="col-lg-3 text-center">Thumb</div>
                                                        <div class="col-lg-3 text-center">Delete</div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-lg-6 ps-0">
                                                            <img src="../../../assets/images/rooms/1.jpg"
                                                                class="img-fluid p-0">
                                                        </div>
                                                        <div class="col-lg-3 text-center">Image</div>
                                                        <button type="button" class="btn btn-danger btn-sm shadow-none">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                        <!-- <div class="col-lg-3 text-center">
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn custom-bg text-white shadow-none">Save</button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>