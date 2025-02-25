<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature Product Details</title>
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
    <style>
    .product {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        position:relative;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .card {
        width: 60%;
        margin-top: 20px;
        z-index:-1;
        position:absolute;
    }
    @media (max-width:500px){
        .card {
        width: 75%;
        margin-left: 15px;
    }
    }

    .card-img-top {
        cursor: pointer;

    }

    #imageUpload {
        display: none;
    }
    </style>
</head>

<body>
    <div class="product">

        <div class="card">
        <h3 class="text-center">FEATURE PRODUCT DETAILS</h3>
        <div class="alert alert-success d-none" id="succ_div"> 
             <h3 id="succ_txt" class="text-center"></h3>
              </div>
              <div class="alert alert-danger d-none" id="err_div"> 
             <h3 id="err_txt" class="text-center"></h3>
              </div>
            <div class="card-body">
                <form action="<?php echo base_url("edit_feature_product"); ?>" id="product_form" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" hidden name="fp_id" id="fp_id" class="fp_id" value="<?php echo $feature_product['fp_id']; ?>">
                            <label for="p_name" class="form-label"><b>Product Name</b></label>
                            <input type="text" name="fp_name" id="fp_name" class="fp_name form-control" placeholder="Enter product name"
                                required value="<?php echo $feature_product['fp_name'] ?>">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <?php if($feature_product['fp_image'] != '') { ?>
                            <?php 
                   $image = "assets/images/" . $feature_product['fp_image']; 
                
                           ?>

                            <label for="fp_image" class="form-label"><b>Product Image</b></label>
                            <?php if($feature_product['fp_image']) { ?>
                            <img id="productImage" src="<?php echo base_url($image) ; ?>" class="card-img-top form-control" 
                                alt="Product Image" onclick="document.getElementById('imageUpload').click();" style="width:50%;">
                            <input type="file" id="imageUpload" name="fp_image" accept="image/*" onchange="previewImage(event)"
                                style="display: none;">
                                <?php } ?>
                                <?php } else { ?>
                                    <label for="fp_image" class="form-label"><b>Product Image</b></label>
                                    <input type="file" class="form-control" id="fp_image" name="fp_image">
                                    <?php }  ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="fp_price" class="form-label"><b>Product Price</b></label>
                            <input type="number" name="fp_price" id="fp_price" class="fp_price form-control"
                                placeholder="Enter product price" value="<?php echo $feature_product['fp_price'] ?>" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const imgElement = document.getElementById("productImage");
            imgElement.src = e.target.result; 
            imgElement.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
}
</script>

<script>
    $(document).ready(function () {
        $('#product_form').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('edit_feature_product')?>",
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
                        $('#succ_txt').text('Feature product Updated successfully');
                        setTimeout(() => {
                            $('#succ_div').addClass('d-none');
                        }, 3000);
                    }
                    else if(response == 3){
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Product update error');
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