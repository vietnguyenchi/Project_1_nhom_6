<div class="container">
    <div class="row">

        <div class="col-12 my-5 px-4">
            <h2 class="fw-bold">PROFILE</h2>
            <div style="font-size: 14px;">
                <a href="/" class="text-decondary text-decoration-none">HOME</a>
                <span class="text-secondary"> > </span>
                <a href="#" class="text-secondary text-decoration-none">PROFILE</a>
            </div>
        </div>

        <div class="col-12 mb-5 px-4">
            <div class="bg-white p-3 p-md-4 rounded shadow-sm">
                <form method="POST">
                    <h5 class="mb-3 fw-bold">Basic Information</h5>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="<?= $users['name_user'] ?>" class="form-control shadow-none">
                            <input type="hidden" name="user_id" value="<?= $users['id'] ?>">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Phone number</label>
                            <input type="text" name="phone" value="<?= $users['phone'] ?>" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="<?= $users['email'] ?>" class="form-control shadow-none" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nationality</label>
                            <input type="text" name="nationality" value="<?= $users['nationality'] ?>" class="form-control shadow-none" />
                        </div>
                        <div class="col-md-8 mb-4">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control shadow-none" rows="1"><?= $users['address'] ?></textarea>
                        </div>
                    </div>
                    <button type="submit" name="update_info" class="btn text-white custom-bg shadow-none">Save Changes</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-5 px-4">
            <div class="bg-white p-3 p-md-4 rounded shadow-sm">
                <form method="POST" enctype="multipart/form-data">
                    <h5 class="mb-3 fw-bold">Avatar</h5>
                    <img src="../../..<?= $users['avatar'] ?>" width="150" class="rounded-circle border border-2 border-secondary img-fluid mb-3">
                    <div>
                        <label class="form-label">New Avatar</label>
                        <input type="file" name="avatar_update" class="mb-4 form-control shadow-none" />
                        <input type="hidden" value="<?= $users['avatar'] ?>" name="avatar_current">
                    </div>

                    <input type="hidden" value="<?= $users['id'] ?>" name="user_id">

                    <button type="submit" name="update_ava" class="btn text-white custom-bg shadow-none">Save Changes</button>
                </form>
            </div>
        </div>

        <div class="col-md-8 mb-5 px-4">
            <div class="bg-white p-3 p-md-4 rounded shadow-sm">
                <form method="POST">
                    <h5 class="mb-3 fw-bold">Change Password</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" name="new_password" class="form-control shadow-none">
                            <input type="hidden" name="user_id" value="<?= $users['id'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input name="confirm_password" type="password" class="form-control shadow-none">
                        </div>
                    </div>
                    <button type="submit" name="update_pass" class="btn text-white custom-bg shadow-none">Save Changes</button>
                </form>
            </div>
        </div>

    </div>
</div>