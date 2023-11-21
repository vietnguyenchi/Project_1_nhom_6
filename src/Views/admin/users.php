<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hiddens">
            <h3 class="mb-4">Users</h3>

            <div class="card border-0 shadow-sm sm-4">
                <div class="card-body">

                    <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                        <table class="table table-hover border table-bordered">
                            <thead class="sticky-top">
                                <tr>
                                    <th class="bg-dark text-white" scope="col" width="5%">#</th>
                                    <th class="bg-dark text-white" scope="col" width="15%">Name</th>
                                    <th class="bg-dark text-white" scope="col" width="15%">Password</th>
                                    <th class="bg-dark text-white" scope="col" width="20%">Email</th>
                                    <th class="bg-dark text-white" scope="col">Address</th>
                                    <th class="bg-dark text-white" scope="col">Phone</th>
                                    <th class="bg-dark text-white" scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user) : ?>
                                    <tr>
                                        <td><?= $user['id'] ?></td>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['password'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['address'] ?></td>
                                        <td><?= $user['phone'] ?></td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>