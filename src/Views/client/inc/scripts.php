<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
</script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>

<script>
    let selectAll = document.getElementById('selectAll');
    let checkboxes = document.querySelectorAll('#table .btn-check');
    let total = 0;
    let bookings = 0;
    let hiddenPrice = document.getElementById('hiddenPrice');

    selectAll.addEventListener('change', function () {
        if (this.checked) {
            checkboxes.forEach((box) => {
                if (box.checked) {
                    total = total;
                } else {
                    box.checked = true;
                    box.previousElementSibling.checked = true;
                    total += parseInt(box.value);
                    bookings++;
                }
            })
        } else {
            checkboxes.forEach((box) => {
                box.checked = 0;
                box.previousElementSibling.checked = 0;
                total -= parseInt(box.value);
                bookings--;
            })
        }
        let formattedNumber = total.toLocaleString('en-US', { maximumFractionDigits: 0 });
        formattedNumber = formattedNumber.replace(/,/g, '.'); 
        document.getElementById('totalPrice').innerHTML = `${formattedNumber}<sup>vnd</sup>`;
        document.getElementById('totalBooking').innerHTML = bookings;
        hiddenPrice.getAttribute('id') = total;
    });

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            if (checkbox.checked) {
                checkbox.previousElementSibling.checked = true;
                total += parseInt(checkbox.value);
                bookings++;
            } else {
                checkbox.previousElementSibling.checked = 0;
                total -= parseInt(checkbox.value);
                bookings--;
            }

            let formattedNumber = total.toLocaleString('en-US', { maximumFractionDigits: 0 });
            formattedNumber = formattedNumber.replace(/,/g, '.'); 
            document.getElementById('totalPrice').innerHTML = `${formattedNumber}<sup>vnd</sup>`;
            document.getElementById('totalBooking').innerHTML = bookings;
            hiddenPrice.getAttribute('id') = total;
        });
    });
</script>