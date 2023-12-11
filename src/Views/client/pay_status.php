<div class="container">
    <h4 class="fw-medium my-4">PAYMENT STATUS</h4>
    <?php 
        if($_GET['message'] == 'Successful.') {
            echo '
            <div class="alert alert-success fw-bold " role="alert">
                <div class="mb-4">
                    <i class="bi bi-check-circle me-1"></i>
                    Payment done. Booking successful
                </div>
                <a href="/">Go to Bookings</a>
            </div>
            ';
        } else {
            echo '
            <div class="alert alert-danger fw-bold " role="alert">
                <div class="mb-4">
                    <i class="bi bi-check-circle me-1"></i>
                    Payment Failed. Booking successful
                </div>
                <a href="/">Go to Bookings</a>
            </div>
            ';
        }
    ?>
</div>