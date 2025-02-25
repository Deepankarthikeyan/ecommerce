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
    .coupon {
        max-width: 500px; 
        margin: auto;
    }
    @media (max-width:680px){
        .coupon{
            width:400px;
            margin-left:50px;
        }
    }
    @media (max-width:460px){
        .coupon{
            width:80%;
            margin-left:50px;
        }
    }

</style>
<body>
    <div class="container mt-5">
        
        <div class="coupon">     

            <h2 class="text-center">COUPON</h2>
        <div class="alert alert-success d-none" id="succ_div"> 
             <h3 id="succ_txt" class="text-center"></h3>
              </div>
              <div class="alert alert-danger d-none" id="err_div"> 
             <h3 id="err_txt" class="text-center"></h3>
              </div>
            <form action="<?php echo base_url('insert_coupon') ?>" id="coupon_form" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="cp_name" class="form-label"><b>Coupon Name</b></label>
                    <input type="text" class="form-control" id="cp_name" name="cp_name">
                </div>
                <div class="mb-3">
                    <label for="cp_price" class="form-label"><b>Coupon Price</b></label>
                    <input type="text" class="form-control" id="cp_price" name="cp_price">
                </div>
                <div class="mb-3">
                    <label for="cp_min_price" class="form-label"><b>Coupon Minimum Price</b></label>
                    <input type="text" class="form-control" id="cp_min_price" name="cp_min_price">
                </div>
                <div class="mb-3">
                    <label for="cp_details" class="form-label"><b>Coupon Details</b></label>
                    <textarea name="cp_details" id="cp_details"  class="form-control" ></textarea>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $('#coupon_form').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('insert_coupon')?>",
                data: formData,
                contentType: false, 
                processData: false, 
                success: function(response) {
                    // console.log(response);
                   if(response == 2){
                        $('#succ_div').removeClass('d-none');
                        $('#succ_txt').text('Coupon Inserted successfully');
                        setTimeout(() => {
                            $('#succ_div').addClass('d-none');
                        }, 3000);
                        $("#cp_name").val('');
                        $("#cp_price").val('');
                        $("#cp_details").val('');
                        $("#cp_min_price").val('');
                    }
                    else if(response == 3){
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Coupon insert error');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);
                    }
                    else {
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
</body>
</html>