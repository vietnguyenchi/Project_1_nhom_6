<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">Users</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                        <table class="text-center table table-hover border table-bordered">
                            <thead class="sticky-top">
                                <tr>
                                    <th class="bg-dark text-white" scope="col">#</th>
                                    <th class="bg-dark text-white" scope="col">Name</th>
                                    <th class="bg-dark text-white" scope="col">Password</th>
                                    <th class="bg-dark text-white" scope="col">Email / Phone number</th>
                                    <th class="bg-dark text-white" scope="col">Address</th>
                                    <th class="bg-dark text-white" scope="col">Nationality</th>
                                    <th class="bg-dark text-white" scope="col" width="170px">Role</th>
                                    <th class="bg-dark text-white" scope="col" width="170px">Status</th>
                                    <th class="bg-dark text-white" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td>
                                            <?= $user['id'] ?>
                                        </td>
                                        <td>
                                            <img src="../../..<?= $user['avatar'] ?>" width="50"> <br>
                                            <?= $user['name_user'] ?>
                                        </td>
                                        <td>
                                            <?= $user['password'] ?>
                                        </td>
                                        <td>
                                            <p><?= $user['email'] ?></p>
                                            <p><?= $user['phone'] ?></p>
                                        </td>
                                        <td>
                                            <?= $user['address'] ?>
                                        </td>
                                        <td>
                                            <?= $user['nationality'] ?>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="inputGroupSelect01" style="width: 100px;">
                                                    <?php foreach ($role as $option): ?>

                                                        <option value="<?= $option['id'] ?>" <?= ($user['id_role'] == $option['id']) ? 'selected' : '' ?>>
                                                            <?= $option['role'] ?>
                                                        </option>

                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="inputGroupSelect01" style="width: 100px;">
                                                    <?php foreach ($account_status as $status): ?>

                                                        <option value="<?= $status['id'] ?>" <?= ($user['id_status'] == $status['id']) ? 'selected' : '' ?>>
                                                            <?= $status['status'] ?>
                                                        </option>

                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="/admin/users/delete?id=<?= $user['id'] ?>"
                                                class="btn btn-danger btn-sm shadow-none"
                                                onclick="return confirm('Bạn có chắc chắn xóa?');">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>