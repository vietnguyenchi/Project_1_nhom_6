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
                            <input type="text" name="name" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Phone number</label>
                            <input type="text" name="phoneNumber" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Date of birth</label>
                            <input type="date" name="dob" class="form-control shadow-none" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nationality</label>
                            <input type="text" name="nationality" class="form-control shadow-none" />
                        </div>
                        <div class="col-md-8 mb-4">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control shadow-none" rows="1"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn text-white custom-bg shadow-none">Save Changes</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-5 px-4">
            <div class="bg-white p-3 p-md-4 rounded shadow-sm">
                <form method="POST">
                    <h5 class="mb-3 fw-bold">Picture</h5>
                    <img src="../../../uploads/person-circle.svg" width="100" class="rounded-circle img-fluid mb-3">
                    <div>
                        <label class="form-label">New Picture</label>
                        <input type="file" name="avatar" class="mb-4 form-control shadow-none" />
                    </div>

                    <button type="submit" class="btn text-white custom-bg shadow-none">Save Changes</button>
                </form>
            </div>
        </div>

        <div class="col-md-8 mb-5 px-4">
            <div class="bg-white p-3 p-md-4 rounded shadow-sm">
                <form method="POST">
                    <h5 class="mb-3 fw-bold">Change Password</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">New Password</label>
                            <input type="password" name="new_password" class="form-control shadow-none" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Confirm Password</label>
                            <input type="confirm_password" name="new_password" class="form-control shadow-none" required>
                        </div>
                    </div>
                    <button type="submit" class="btn text-white custom-bg shadow-none">Save Changes</button>
                </form>
            </div>
        </div>

    </div>
</div>