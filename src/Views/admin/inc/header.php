<!-- Nav -->
<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top z-3">
    <h3 class="mb-0 h-font">FPOLY WEBSITE</h3>
    <a href="#" class="btn btn-light btn-sm">LOG OUT</a>
</div>

<!-- Sidebar -->
<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 ms-2 text-light">ADMIM PANEL</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 px-2" id="adminDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <button
                            class="btn text-white px-3 w-100 shadow-none text-start d-flex align-items-center justify-content-between"
                            type="button" data-bs-toggle="collapse" data-bs-target="#bookingLinks">
                            <span>Bookings</span>
                            <span><i class="bi bi-caret-down-fill"></i></span>
                        </button>
                        <div class="collapse px-3 small mb-1" id="bookingLinks">
                            <ul class="nav nav-pills flex-column rounded border border-secondary">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/admin/new_bookings">New Bookings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/admin/refund_bookings">Refund Bookings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/admin/room_keys">Room Keys</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/admin/bills">Booking Records</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="rooms">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="facilities">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="user_queries">User Queries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>