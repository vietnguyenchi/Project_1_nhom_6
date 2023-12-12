<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    function setActive() {
        let navbar = document.getElementById("dashboard-menu");
        let a_tags = navbar.getElementsByTagName('a');

        for (let i = 0; i < a_tags.length; i++) {
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];
            if (document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add('active');
            }
        }
    }
    setActive();

    let today = new Date();

    let day = today.getDate();
    let month = today.getMonth() + 1;
    let year = today.getFullYear();

    let formattedDate = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;

    // document.getElementById("check_out").min = formattedDate;
</script>

<!-- <script>
    $(document).ready(function(){

        $("#search_bill").keyup(function(){

            var input = $(this).val();

            if(input != "") {
                $.ajax({
                    url:"/admin/search_bill",
                    method: "POST",
                    data: {input:input},

                    success:function(data) {
                        $("#resultBill").html(data);
                    }
                });

            } else {
                $('#resultBill').css("display","none");
            }
            
        });

    });
</script> -->