<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">Users</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">
                    <div class="text-end mb-4">
                        <input placeholder="Search here" style="width: 250px;" type="text"
                            class="form-control shadow-none ms-auto">
                    </div>
                    <div class="table-responsive-md" style="height: 500px; overflow-y: scroll;">
                        <table class="text-center table table-hover border table-bordered">
                            <thead class="sticky-top">
                                <tr>
                                    <th class="bg-dark text-white" scope="col">#</th>
                                    <th class="bg-dark text-white" scope="col">Name</th>
                                    <th class="bg-dark text-white" scope="col">Password</th>
                                    <th class="bg-dark text-white" scope="col">Email / Phone number</th>
                                    <th class="bg-dark text-white" scope="col">Address</th>
                                    <th class="bg-dark text-white" scope="col">Nationality</th>
                                    <th class="bg-dark text-white" scope="col">Role</th>
                                    <th class="bg-dark text-white" scope="col">Status</th>
                                    <th class="bg-dark text-white" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $index => $user): ?>
                                    <tr>
                                        <td>
                                            <?= $index + 1 ?>
                                        </td>
                                        <td>
                                            <img src="../../..<?= $user['avatar'] ?>" width="50"> <br>
                                            <?= $user['name_user'] ?>
                                        </td>
                                        <td>
                                            <?= $user['password'] ?>
                                        </td>
                                        <td>
                                            <p>
                                                <?= $user['email'] ?>
                                            </p>
                                            <p>
                                                <?= $user['phone'] ?>
                                            </p>
                                        </td>
                                        <td>
                                            <?= $user['address'] ?>
                                        </td>
                                        <td>
                                            <?= $user['nationality'] ?>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <?php
                                                foreach ($roles as $role) {
                                                    if ($role['id'] == $user['id_role']) {
                                                        echo $role['role'];
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <?php
                                                foreach ($account_status as $status) {
                                                    if ($status['id'] == $user['id_status']) {
                                                        echo $status['status'];
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#edit_account<?= $user['idUser'] ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <a href="/admin/users/delete?id=<?= $user['idUser'] ?>"
                                                class="btn btn-danger btn-sm shadow-none"
                                                onclick="return confirm('Bạn có chắc chắn xóa?');">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_account<?= $user['idUser'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="post">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Account
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Role:</label>
                                                            <select name="role_update"
                                                                class="form-select form-select-md mb-3">
                                                                <?php foreach ($roles as $role): ?>
                                                                    <option value="<?= $role['id'] ?>"
                                                                        <?= ($user['id_role'] == $role['id']) ? 'selected' : '' ?>>
                                                                        <?= $role['role'] ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Status:</label>
                                                            <select name="status_update"
                                                                class="form-select form-select-md mb-3">
                                                                <?php foreach ($account_status as $status): ?>
                                                                    <option value="<?= $status['id'] ?>"
                                                                        <?= ($user['id_status'] == $status['id']) ? 'selected' : '' ?>>
                                                                        <?= $status['status'] ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="id_update" value="<?= $user['idUser'] ?>">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="update_account"
                                                            class="btn custom-bg text-white">Save changes</button>
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