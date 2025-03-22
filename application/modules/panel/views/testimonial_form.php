<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
.testimonial {
    max-width: 500px;
    margin: auto;
}

@media (max-width:680px) {
    .testimonial {
        width: 400px;
        margin-left: 50px;
    }
}

@media (max-width:460px) {
    .testimonial {
        width: 80%;
        margin-left: 50px;
    }
}

.fa-star {
        cursor: pointer;
        color: gray; 
        transition: color 0.2s; 
        font-size:30px;
    }
    .fa-star.checked {
        color: gold; 
    }
    .fa-star.hover {
        color: gold;
    }

</style>

<body>
    <div class="container mt-5">

        <div class="testimonial">

            <h2 class="text-center">TESTIMONIALS</h2>
            <div class="alert alert-success d-none" id="succ_div">
                <h3 id="succ_txt" class="text-center"></h3>
            </div>
            <div class="alert alert-danger d-none" id="err_div">
                <h3 id="err_txt" class="text-center"></h3>
            </div>
            <form action="<?php echo base_url('insert_testimonial') ?>" id="testimonial_form" method="post"
                enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="t_name" class="form-label"><b>Client Name</b></label>
                    <input type="text" class="form-control" id="t_name" name="t_name">
                </div>
                <div class="mb-3">
                    <label for="t_image" class="form-label"><b>Client Image</b></label>
                    <input type="file" class="form-control" id="t_image" name="t_image">
                </div>
                <div class="mb-3">
                    <label for="t_others" class="form-label"><b>Client Feedback</b></label>
                    <textarea name="t_others" id="t_others" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="t_ratings" class="form-label"><b>Client Ratings</b></label><br>
                    <input type="text" name="t_rating" id="t_rating" value="0" hidden>
                    <i class="fa fa-star" id="t_ratings_1" onmouseover="hoverStar(1)" onmouseout="resetStars()"
                        onclick="selectStar(1)" data-value="1" name="t_rating"></i>
                    <i class="fa fa-star" id="t_ratings_2" onmouseover="hoverStar(2)" onmouseout="resetStars()"
                        onclick="selectStar(2)" data-value="2" name="t_rating"></i>
                    <i class="fa fa-star" id="t_ratings_3" onmouseover="hoverStar(3)" onmouseout="resetStars()"
                        onclick="selectStar(3)" data-value="3" name="t_rating"></i>
                    <i class="fa fa-star" id="t_ratings_4" onmouseover="hoverStar(4)" onmouseout="resetStars()"
                        onclick="selectStar(4)" data-value="4" name="t_rating"></i>
                    <i class="fa fa-star" id="t_ratings_5" onmouseover="hoverStar(5)" onmouseout="resetStars()"
                        onclick="selectStar(5)" data-value="5" name="t_rating"></i>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
        </div>
    </div>


    <script>
    $(document).ready(function() {
        $('#testimonial_form').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('insert_testimonial')?>",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 1) {
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Please give the correct image');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);
                    } else if (response == 2) {
                        $('#succ_div').removeClass('d-none');
                        $('#succ_txt').text('Testimonials Inserted successfully');
                        setTimeout(() => {
                            $('#succ_div').addClass('d-none');
                        }, 3000);
                        $("#t_name").val('');
                        $("#t_image").val('');
                        $("#t_others").val('');
                    } else if (response == 3) {
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Testimonials insert error');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);
                    } else {
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Please enter all the data');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);

                    }
                }
            });
        });
    });
    </script>

<script>
    let selectedRating = 0;

    function hoverStar(rating) {
        const stars = document.querySelectorAll('.fa-star');
        stars.forEach((star, index) => {
            if (index < rating) {
                star.classList.add('hover'); 
            } else {
                star.classList.remove('hover'); 
            }
        });
    }


    function resetStars() {
        const stars = document.querySelectorAll('.fa-star');
        stars.forEach((star, index) => {
            if (index < selectedRating) {
                star.classList.add('checked'); 
            } else {
                star.classList.remove('checked'); 
            }
            star.classList.remove('hover'); 
        });
    }

    function selectStar(rating) {
        selectedRating = rating; 
        document.getElementById('t_rating').value = selectedRating;
        resetStars();
    }
</script>

</body>

</html>