<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
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
    .product {
        max-width: 500px; 
        margin: auto;
    }
    @media (max-width:680px){
        .product{
            width:400px;
            margin-left:50px;
        }
    }
    
    @media (max-width:460px){
        .product{
            width:80%;
            margin-left:50px;
        }
    }

</style>
<body>
    <div class="container mt-5">
        
        <div class="product">     

            <h2 class="text-center">OUR PRODUCT</h2>
        <div class="d-none alert alert-success" id="succ_div"> 
             <h3 id="succ_txt" class="text-center"></h3>
              </div>
              <div class="d-none alert alert-danger" id="err_div"> 
             <h3 id="err_txt" class="text-center"></h3>
              </div>
            <form action="<?php echo base_url('our_product') ?>" id="product_form" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="p_category" class="form-label"><b>Product Category</b></label>
                    <select name="p_category" id="p_category" class="form-control">
                    <option value="" hidden>Select Your Category</option>
                        <option value="1">Foods & Drinks</option>
                        <option value="2">Vegetables</option>
                        <option value="3">Fruits</option>
                        <option value="4">Bread & Cake</option>
                        <option value="5">Fish & Meat</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="p_name" class="form-label"><b>Product Name</b></label>
                    <input type="text" class="form-control" id="p_name" name="p_name">
                </div>
                <div class="mb-3">
                    <label for="p_image" class="form-label"><b>Product Image</b></label>
                    <input type="file" class="form-control" id="p_image" name="p_image">
                </div>
                <div class="mb-3">
                    <label for="p_price" class="form-label"><b>Product Price</b></label>
                    <input type="number" class="form-control" id="p_price" name="p_price">
                </div>
                <div class="mb-3">
                    <label for="p_others" class="form-label"><b>Others</b></label>
                    <textarea name="p_others" id="p_others"  class="form-control" ></textarea>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $('#product_form').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('our_product')?>",
                data: formData,
                contentType: false, 
                processData: false, 
                success: function(response) {
                    if(response == 1){
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Please give the correct image');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);
                    }
                    else if(response == 2){
                        $('#succ_div').removeClass('d-none');
                        $('#succ_txt').text('Our product Inserted successfully');
                        setTimeout(() => {
                            $('#succ_div').addClass('d-none');
                        }, 3000);
                        $("#p_category").val('');
                        $("#p_name").val('');
                        $("#p_image").val('');
                        $("#p_price").val('');
                        $("#p_others").val('');
                    }
                    else if(response == 3){
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Product insert error');
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