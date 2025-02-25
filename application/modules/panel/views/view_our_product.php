<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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
        position: relative;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .card {
        width: 60%;
        margin-top: 20px;
        z-index: -1;
        position: absolute;
    }

    @media (max-width:500px) {
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
            <h3 class="text-center">OUR PRODUCT DETAILS</h3>
            <div class="alert alert-success d-none" id="succ_div">
                <h3 id="succ_txt" class="text-center"></h3>
            </div>
            <div class="alert alert-danger d-none" id="err_div">
                <h3 id="err_txt" class="text-center"></h3>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url("edit_our_products"); ?>" id="product_form" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" hidden name="p_id" id="p_id" class="p_id"
                                value="<?php echo $product['p_id']; ?>">
                            <label for="p_name" class="form-label"><b>Product Name</b></label>
                            <input type="text" name="p_name" id="p_name" class="p_name form-control"
                                placeholder="Enter product name" required value="<?php echo $product['p_name'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="p_category" class="form-label"><b>Product Category</b></label>
                            <select id="p_category" name="p_category" class="p_category form-control" required>
                                <option value="1" <?php echo ($product['p_category'] == 1) ? 'selected' : ''; ?>>Foods &
                                    Drinks</option>
                                <option value="2" <?php echo ($product['p_category'] == 2) ? 'selected' : ''; ?>>
                                    Vegetables</option>
                                <option value="3" <?php echo ($product['p_category'] == 3) ? 'selected' : ''; ?>>Fruits
                                </option>
                                <option value="4" <?php echo ($product['p_category'] == 4) ? 'selected' : ''; ?>>Bread &
                                    Cake</option>
                                <option value="5" <?php echo ($product['p_category'] == 5) ? 'selected' : ''; ?>>Fish &
                                    Meat</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php 
                            if($product['p_image'] != ''){
                   $image = "assets/images/" . $product['p_image']; 
                
                           ?>

                            <label for="p_image" class="form-label"><b>Product Image</b></label>
                            <?php if($product['p_image']) { ?>
                            <img id="productImage" src="<?php echo base_url($image) ; ?>"
                                class="card-img-top form-control" alt="Product Image"
                                onclick="document.getElementById('imageUpload').click();" style="width:50%;">
                            <input type="file" id="imageUpload" name="p_image" accept="image/*"
                                onchange="previewImage(event)" style="display: none;">
                            <?php } ?>
                            <?php } else {?>
                                <label for="p_image" class="form-label"><b>Product Image</b></label>
                                <input type="file" class="form-control" id="p_image" name="p_image">
                                <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="p_price" class="form-label"><b>Product Price</b></label>
                            <input type="number" name="p_price" id="p_price" class="p_price form-control"
                                placeholder="Enter product price" value="<?php echo $product['p_price'] ?>" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3">Edit</button>
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
    $(document).ready(function() {
        $('#product_form').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('edit_our_products')?>",
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
                        $('html, body').animate({
                            scrollTop: 0
                        }, 1000);
                    } else if (response == 2) {
                        $('#succ_div').removeClass('d-none');
                        $('#succ_txt').text('Our product Updated successfully');
                        setTimeout(() => {
                            $('#succ_div').addClass('d-none');
                        }, 3000);
                        $('html, body').animate({
                            scrollTop: 0
                        }, 1000);
                    } else if (response == 3) {
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Product update error');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);
                        $('html, body').animate({
                            scrollTop: 0
                        }, 1000);
                    } else {
                        $('#err_div').removeClass('d-none');
                        $('#err_txt').text('Please enter all the data');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);
                        $('html, body').animate({
                            scrollTop: 0
                        }, 1000);
                    }
                }
            });
        });
    });
    </script>
</body>

</html>