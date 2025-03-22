<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart Page</title>
    <link rel="icon" href="<?php echo base_url('assets/images/leaf_logo.png') ?>" type="image/png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
    section {
        position: relative;
        background-color: black;
        width: 100%;
        height: 20vh;
        color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }

    .breadcrumb {
        background: transparent;
    }

    ol li a {
        text-decoration: none;
        list-style-type: none;
        color: white;
    }

    .cart-body {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border-bottom: 2px solid #ccc;
        margin-top: 20px;
        padding: 20px 0;
        align-items: center;
    }

    #close_cart {
        cursor: pointer;
        width: 35px;
        height: 35px;
        background-color: #80B500;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    #close_cart i {
        color: white;
        font-size: 14px;
    }

    #close_cart:hover {
        background-color: red;
    }

    .inner_quantity {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ccc;
        border-radius: 50%;
        /* padding: 10px; */
        margin: 0 10px;
    }

    .inner_quantity:hover {
        background-color: grey;
    }

    .inner_quantity:hover i {
        color: white;
    }

    .item_quantity {
        display: flex;
        align-items: center;
    }

    .cart-image {
        object-fit: cover;
    }

    .img {
        width: 100px;
    }

    p {
        font: 16px 'Rajdhani', sans-serif;
    }

    .table {
        display: flex;
        justify-content: end;
        width: 100%;
        /* background-color:blue     */
        margin-left: 80px;
    }

    .cart_font {
        font: 16px 'Rajdhani', sans-serif;
    }

    .cart_btn {
        width: 140px;
        height: 60px;
        border-radius: 0;
        margin-top: 20px;
        font: 18px 'Rajdhani', sans-serif;
    }

    #explore_btn {
        display: inline-block;
        width: 135%;
        padding: 10px 20px;
        color: white;
        text-decoration: none;
        background-color: #80B500;
        position: relative;
        overflow: hidden;
        transition: color 0.4s ease;
    }

    #explore_btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background-color: white;
        transition: left 0.4s ease;
        z-index: 1;
    }

    #explore_btn:hover::before {
        left: 0;
    }

    #explore_btn:hover {
        color: black;
        background-color: black;

    }

    #explore_btn span {
        position: relative;
        z-index: 1;
    }

    .no_data_image {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        width: 300px;
        margin: 0 auto;
    }

    .no_data_image img {
        max-width: 100%;
        height: auto;
    }

    #home:hover {
        color: #80B500;
    }

    .search {
        outline: none;
        border: 1px solid #80B500;
        width: 50px;
        height: 50px;
        transition: 0.5s ease;
        border-radius: 50%;
        padding-right: 30px;

    }

    .search_alter {
        outline: none;
        border: 1px solid #80B500;
        width: 100%;
        transition: 0.5s ease;
        box-shadow: 5px 5px 5px 5px #80B500;
    }

    .search_input {
        position: relative;

    }

    #search-icon {
        position: absolute;
        top: 30%;
        left: 12px;
        font-size: 25px;
        color: #80B500;
        cursor: pointer;
    }

    .coupon_input {
        width: 135%;
        height: 15%;
        border-radius: 0;
        border: 2px solid #80B500;
        padding: 10px;
    }

    .coupon_input:focus {
        outline: none;
    }

    #toggleButton {
        display: flex;
        justify-content: space-between;
        cursor: pointer;
        width: 135%;
    }

    .content {
        max-height: 0;
        overflow: scroll;
        transition: max-height 0.5s ease;
        width: 135%;
    }



    .content ul li {

        /* background-color:blue; */

    }



    .content::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }

    .content::-webkit-scrollbar-track {
        background: grey;
        border-radius: 10px;
        height: 10px;
    }

    .content::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
    }


    .content::-webkit-scrollbar-thumb {
        height: 10px;
    }

    .content ul {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 10px;

    }

    .content ul li {
        border-bottom: 2px solid;
        margin: 0;
        padding: 0;

    }

    .content.show {
        max-height: 250px;
        transition: max-height 0.5s ease;
        margin: 0;
        padding: 0;

    }

    .content.show ul li {
        margin: 0;
        padding: 0 !important;
    }

    .arrow_up,
    .arrow_down {
        margin-left: 10px;
        font-size: 30px;
        display: none;
    }

    .active .arrow_down {
        display: inline;
    }

    .active .arrow_up {
        display: none;
    }

    .inactive .arrow_up {
        display: inline;
    }

    .inactive .arrow_down {
        display: none;

    }

    .coupon_text {
        font: 24px solid black;
        color: #80B500;
    }

    ul,
    li {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .list {
        display: flex;
        justify-content: space-between;
    }

    .apply {
        cursor: pointer;
    }

    .strike-through {
        text-decoration: line-through;
        color: black;
        position: relative;
    }

    .strike-through:after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        height: 2px;
        background-color: #80B500;
        z-index: -1;
    }

    .free {
        color: #80B500;
    }

    .disabled {
        color: gray;
        cursor: not-allowed;
    }

    .unlock_coupon {
        color: red;
        font: 16px 'Rajdhani-sans-serif';
    }

    @media (max-width:1075px) {
        #contain {
            display: block;
        }

        table {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 400px;
        }

        .coups {
            width: 400px;
        }
    }

    .cart_empty_img {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 400px;
        width: 400px;
        margin: 0 auto;
        margin-top: 50px;
    }

    .cart_empty_img img {
        max-width: 100%;
        height: auto;
    }

    #cart_empty_text {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    #cart_text_empty {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
        color: grey;
    }

    #err_div {
        width: 135% !important;
    }

    #succ_div {
        width: 135% !important;
    }
    </style>
</head>

<body>
    <section>
        <div>
            <p>// Welcome to Our Cart Page</p>
            <h2>Cart</h2>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a id="home" href="<?php echo base_url('website') ?>"><b>Home</b></a></li>
            </ol>
        </nav>
    </section>
    <div class="container">
        <!-- <php print_r($apply) ?> -->
        <?php $web_userid = $this->session->userdata('web_user_ref_id'); ?>
        <?php if(!empty($web_userid)) { ?>
        <div class="search_input mt-5 mb-5">
            <input type="search" class="form-control search" name="search" id="search"
                value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
                placeholder="PLEASE SEARCH HERE">
            <i class="fa-solid fa-magnifying-glass icon" id="search-icon"></i>
        </div>
        <?php } else { ?>

        <?php } ?>
        <div class="containing">
            <?php if($cartlist != ''){ ?>
            <?php foreach($cartlist as $cart) { ?>
            <div class="cart-body" id="cart-item-<?php echo $cart['ct_id']; ?>">
                <?php $image_path = 'assets/images/' . $cart['ct_image']; ?>

                <p id="close_cart" onclick="delete_cart(<?php echo $cart['ct_id']; ?>)"><i class="fa-solid fa-x"></i>
                </p>
                <div class="cart-image">
                    <img src="<?php echo htmlspecialchars($image_path); ?>" class="img"
                        id="ct_image-<?php echo $cart['ct_id']; ?>" alt="Product Image">
                </div>
                <p><b><?php echo $cart['ct_name'] ?></b></p>
                <p id="ct_price-<?php echo $cart['ct_id']; ?>"><i
                        class="fa-solid fa-indian-rupee-sign"></i><?php echo $cart['ct_price'] ?></p>
                <div class="item_quantity">
                    <div class="inner_quantity">
                        <button class="reduce btn" onclick="reducefunction(<?php echo $cart['ct_id']; ?>)"><i
                                class="fa-solid fa-minus"></i></button>
                    </div>
                    <div class="mt-3">
                        <p id="quantity-<?php echo $cart['ct_id']; ?>"><b><?php echo $cart['ct_quantity'] ?></b></p>
                    </div>
                    <div class="inner_quantity">
                        <button class="increase btn" onclick="increasefunction(<?php echo $cart['ct_id']; ?>)"><i
                                class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
                <?php $total_per_item = $cart['ct_quantity'] * $cart['ct_price'] ?>
                <p id="ct_total-<?php echo $cart['ct_id']; ?>"><i
                        class="fa-solid fa-indian-rupee-sign"></i><?php echo $total_per_item ?></p>
            </div>
            <?php } ?>
            <?php } else { ?>
            <div class="text-center cart_empty_img">
                <img src="assets/images/cart_empty_img.png" class="card-img-top img-fluid" alt="No Data Image">
            </div>
            <?php } ?>
        </div>

        <div class=" mt-5 row" id="contain">

            <div class="col-3 coups">
                <div>
                    <div class="d-flex inactive" id="toggleButton">
                        <p class="coupon_text mt-2"><i class="fa-solid fa-ticket icons"></i> Select Coupon</p>
                        <span class="arrow_up"><i class="fa-solid fa-circle-chevron-up"></i></span>
                        <span class="arrow_down"><i class="fa-solid fa-circle-chevron-down"></i></span>
                    </div>
                    <div class="content">
                        <ul>

                            <?php if(!empty($apply)) { ?>
                            <?php foreach($apply as $app) { ?>
                            <li>
                                <div class="list">
                                    <p><?php echo $app['cp_name'] ?></p>
                                    <?php if($app['applied_coupon_id'] != '') { ?>
                                    <p class="apply" id="apply-<?php echo $app['cp_id'] ?>" style="color:#80B500">
                                        <i class="fa-solid fa-check"></i> applied
                                    </p>
                                    <?php } else { ?>
                                    <p class="apply" id="apply-<?php echo $app['cp_id'] ?>"
                                        onclick="apply(<?php echo $app['cp_id'] ?>)">apply
                                    </p>

                                    <?php } ?>
                                </div>
                                <p><?php echo $app['cp_details'] ?></p>
                                <span class="unlock_coupon" id="unlock_coupon-<?php echo $app['cp_id'] ?>"></span>


                            </li>
                            <?php } ?>
                            <?php } else { ?>
                            <?php foreach($coupon as $cop) { ?>
                            <li>
                                <div class="list">
                                    <p><?php echo $cop['cp_name'] ?></p>
                                    <p class="apply" id="apply-<?php echo $cop['cp_id'] ?>"
                                        onclick="apply(<?php echo $cop['cp_id'] ?>)">apply</p>

                                </div>
                                <p><?php echo $cop['cp_details'] ?></p>
                            </li>
                            <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="alert alert-success d-none" id="succ_div">
                        <p style="height:0px;" id="succ_txt"></p>
                    </div>
                    <div class="alert alert-danger d-none" id="err_div">
                        <p style="height:0px" id="err_txt"></p>
                    </div>
                    <input type="text" class="coupon_input" name="coupon_input" id="coupon_input">
                    <a style="border-bottom:none" id="app_coupon"><button class="cart_btn btn"
                            id="explore_btn"><b><span>Apply
                                    Coupon</span></b></button></a>
                </div>
            </div>

            <table class="table col">
                <th style="border-bottom:none">
                    <h5>Cart Totals</h5>
                    <div id="coupon_applied"
                        class="alert alert-success d-flex align-items-center justify-content-between d-none">
                        <p class="mb-0">Applied</p>
                        <button class="btn-close" id="msg_close" aria-label="Close">
                        </button>
                    </div>
                </th>
                <tr>
                    <th style="width:400px">
                        <p class="cart_font">Cart Subtotal</p>
                    </th>
                    <th class="d-flex">
                        <p class="cart_font" id="cart_subtotal"><i class="fa-solid fa-indian-rupee-sign"></i> </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p id="cart_font" class="cart_font">Shipping and Handing</p>
                    </th>
                    <th>
                        <div id="shipping">
                            <p class="cart_font"><i class="fa-solid fa-indian-rupee-sign"></i>40</p>
                            <input type="text" id="shipping_fee" hidden value="40">
                        </div>

                    </th>

                </tr>
                <tr>
                    <th>
                        <h5>Order Total</h5>
                    </th>
                    <th id="order_total"></th>
                </tr>
                <tr class="app_row d-none">
                    <th class="app_msg"></th>
                </tr>
                <tr style="border-bottom:none">
                    <th style="border-bottom:none"><button class="cart_btn btn"
                            id="explore_btn"><b><span>CheckOut</span></b></button></th>
                </tr>
            </table>

        </div>
    </div>


    <div class="pract">

    </div>

</body>

<script>
function reducefunction(ct_id) {
    $.ajax({
        type: "post",
        url: "<?php echo base_url('reduce_product_count');?>",
        data: {
            ct_id: ct_id
        },
        success: function(response) {
            if (response.status == 1) {
                if (response.ct_quantity === 0) {
                    delete_cart(response.ct_id);
                    updateCart();

                } else {
                    updateCart();

                }
            } else {
                console.error("Update failed: " + response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });
}

function increasefunction(ct_id) {
    $.ajax({
        type: "post",
        url: "<?php echo base_url("increase_product_count") ?>",
        data: {
            ct_id: ct_id
        },
        success: function(response) {
            if (response.status == 1) {
                updateCart();

            } else {
                console.error("Update failed: " + response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });
}

function delete_cart(ct_id) {
    $.ajax({
        type: "post",
        url: "<?php echo base_url("delete_cart_item") ?>",
        data: {
            ct_id: ct_id
        },
        success: function(response) {
            if (response == 1) {
                updateCart();
            } else {
                console.error("Delete failed: " + response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });
}

function updateCart() {
    $.ajax({
        url: '<?php echo base_url("get_cart_datas") ?>',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('.containing').empty();
            if (data.cartlist != '') {

                $.each(data.cartlist, function(index, cart) {
                    const image_path = 'assets/images/' + cart.ct_image;
                    const total_per_item = cart.ct_quantity * cart.ct_price;

                    $('.containing').append(`
                    <div class="cart-body" id="cart-item-${cart.ct_id}">
                        <p id="close_cart" onclick="delete_cart(${cart.ct_id})"><i class="fa-solid fa-x"></i></p>
                        <div class="cart-image">
                            <img src="${image_path}" class="img" id="ct_image-${cart.ct_id}" alt="Product Image">
                        </div>
                        <p class="text-center"><b>${cart.ct_name}</b></p>
                        <p id="ct_price-${cart.ct_id}"><i class="fa-solid fa-indian-rupee-sign"></i>${cart.ct_price} (per)</p>
                        <div class="item_quantity">
                            <div class="inner_quantity">
                                <button class="reduce btn" onclick="reducefunction(${cart.ct_id})"><i class="fa-solid fa-minus"></i></button>
                            </div>
                            <div class="mt-3">
                                <p id="quantity-${cart.ct_id}"><b>${cart.ct_quantity} </b></p>
                            </div>
                            <div class="inner_quantity">
                                <button class="increase btn" onclick="increasefunction(${cart.ct_id})"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                        <p id="ct_total-${cart.ct_id}"><i class="fa-solid fa-indian-rupee-sign"></i>${total_per_item}</p>
                    </div>

                `);

                });
            } else {
                $('.container').empty();
                $('.container').append(`
                    <div class="text-center cart_empty_img">
                <img src="assets/images/cart_empty.png" class="card-img-top img-fluid" alt="No Data Image">
            <h3 id="cart_empty_text"><b>Your cart is empty</b></h3>
            <p id="cart_text_empty">You can go to home page to view more items</p>
            </div>
            `);

            }
            var subtotal = data.subtotal;

            data.coupon.forEach(coupon => {
                const couponElement = document.getElementById(`apply-${coupon.cp_id}`);
                if (subtotal > parseInt(coupon.cp_min_price)) {
                    if(localStorage.getItem('couponApplied') === 'false'){
                        $('#apply-' + coupon.cp_id).html('apply');
                    $('#apply-' + coupon.cp_id).css('color', 'black');
                    couponElement.classList.remove('disabled');
                    $(`#unlock_coupon-${coupon.cp_id}`).html('');

                    couponElement.onclick = function() {
                        apply(coupon.cp_id);
                    };
                    }
                 
                } else {
                    $('#apply-' + coupon.cp_id).html('apply');
                    $('#apply-' + coupon.cp_id).css('color', 'grey');
                    // $('#apply-' + coupon.cp_id).off('click');
                    couponElement.classList.add('disabled');
                    couponElement.onclick = null;
                    var min = coupon.cp_min_price - subtotal;
                    $(`#unlock_coupon-${coupon.cp_id}`).html(
                        'Add <i class="fa-solid fa-indian-rupee-sign"></i>' + min +
                        ' to Unlock this Coupon');
                }
            });
            if (data.applied != '' && data.applied != null) {
                if (subtotal > 199) {
                    $("#shipping").empty();
                    $("#shipping").append(`
                 <p class="cart_font strike-through"><i class="fa-solid fa-indian-rupee-sign"></i>40.00
                 </p>  <span class="free">FREE</span>
                        <input type="text" id="shipping_fee" hidden value="40">
                     `);
                    var ship = $('#shipping_fee').val();
                    var shippingFee = parseFloat(ship) || 0;
                    var total = subtotal - data.applied.applied_coupon_price;
                    $("#order_total").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + total.toFixed(
                        2));
                    $("#cart_subtotal").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + data.subtotal
                        .toFixed(2));

                } else {
                    $("#shipping").empty();
                    $("#shipping").append(`
                 <p class="cart_font"><i class="fa-solid fa-indian-rupee-sign"></i>40.00
                 </p> <span style="color:red">Add <i class="fa-solid fa-indian-rupee-sign"></i>${199 - (subtotal)} for Free Delivery</span>
                        <input type="text" id="shipping_fee" hidden value="40">
                     `);
                    var ship = $('#shipping_fee').val();
                    var shippingFee = parseFloat(ship) || 0;
                    var total = subtotal + shippingFee - data.applied.applied_coupon_price;

                    $("#order_total").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + total.toFixed(
                        2));
                    $("#cart_subtotal").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + data.subtotal
                        .toFixed(2));

                }


            } else if (subtotal > 199) {

                $("#shipping").empty();
                $("#shipping").append(`
                 <p class="cart_font strike-through"><i class="fa-solid fa-indian-rupee-sign"></i>40.00
                 </p>  <span class="free">FREE</span>
                        <input type="text" id="shipping_fee" hidden value="40">
                     `);
                var ship = $('#shipping_fee').val();
                var shippingFee = parseFloat(ship) || 0;
                var total = subtotal;
                $("#order_total").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + total.toFixed(2));
                $("#cart_subtotal").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + data.subtotal
                    .toFixed(2));
            } else {
                $("#shipping").empty();
                $("#shipping").append(`
                <p class="cart_font"><i class="fa-solid fa-indian-rupee-sign"></i>40.00</p>
                <span style="color:red">Add <i class="fa-solid fa-indian-rupee-sign"></i>${199 - (subtotal)} for Free Delivery</span>
                <input type="text" id="shipping_fee" hidden value="40">
                     `);
                var ship = $('#shipping_fee').val();
                var shippingFee = parseFloat(ship) || 0;
                var total = subtotal + shippingFee;
                $("#order_total").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + total.toFixed(2));
                $("#cart_subtotal").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + data.subtotal
                    .toFixed(2));

            }

        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
}

updateCart();
</script>

<script>
$("#search").on('keyup', function() {
    var search = $('#search').val();
    $.ajax({
        type: "get",
        url: "<?php echo base_url('search_cartlist');?>",
        data: {
            search: search
        },
        dataType: 'json',
        success: function(response) {
            if (response.status == 1) {
                updatecart(response.cartlist);
            } else {
                console.error("Delete failed: " + response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });
});

function updatecart(cart) {

    $('.containing').empty();

    if (Array.isArray(cart) && cart.length > 0) {
        cart.forEach(item => {
            const image_path = 'assets/images/' + item.ct_image;

            const col = $(`
                <div class="cart-body" id="cart-item-${item.ct_id}">
                    <p id="close_cart" onclick="delete_cart(${item.ct_id})"><i class="fa-solid fa-x"></i></p>
                    <div class="cart-image">
                        <img src="${image_path}" class="img" id="ct_image-${item.ct_id}" alt="Product Image">
                    </div>
                    <p><b>${item.ct_name}</b></p>
                    <p id="ct_price-${item.ct_id}"><i class="fa-solid fa-indian-rupee-sign"></i>${item.ct_price}</p>
                    <div class="item_quantity">
                        <div class="inner_quantity">
                            <button class="reduce btn" onclick="reducefunction(${item.ct_id})"><i class="fa-solid fa-minus"></i></button>
                        </div>
                        <div class="mt-3">
                            <p id="quantity-${item.ct_id}"><b>${item.ct_quantity}</b></p>
                        </div>
                        <div class="inner_quantity">
                            <button class="increase btn" onclick="increasefunction(${item.ct_id})"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                    <p id="ct_total-${item.ct_id}"><i class="fa-solid fa-indian-rupee-sign"></i>${item.ct_quantity * item.ct_price}</p>
                </div>
            `);

            $('.containing').append(col);
        });
    } else {
        $('.containing').append(` 
            <div class="text-center no_data_image">
                <img src="assets/images/nodata.jpg" class="card-img-top img-fluid" alt="No Data Image">
            </div>
    
        `);
    }
}
</script>
<script>
$(document).ready(function() {
    $('#search-icon').on('click', function() {
        $('#search').toggleClass('search_alter');
        $('#search').toggleClass('search');
        $('#search-icon').addClass('d-none');
    });
    $('#search').on('click', function() {
        $('#search').addClass('search_alter');
        $('#search').removeClass('search');
        $('#search-icon').addClass('d-none');
    });

    $(window).on('click', function(event) {
        if (!$(event.target).closest('.search_input').length) {
            $('#search').removeClass('search_alter').addClass('search');
            $('#search-icon').removeClass('d-none');
        }
    });
});
</script>

<script>
const toggleButton = document.getElementById('toggleButton');
const content = document.querySelector('.content');

toggleButton.addEventListener('click', function() {
    content.classList.toggle('show');

    toggleButton.classList.toggle('active');
    toggleButton.classList.toggle('inactive');
});
</script>

<script>
function apply(cp_id) {
    var id = cp_id;

    $.ajax({
        type: "post",
        url: "<?php echo base_url('apply_coupon_datas'); ?>",
        data: {
            id: id
        },
        dataType: "json",
        success: function(response) {
            if (response.status == 1) {
                $('#apply-' + id).html('<i class="fa-solid fa-check"></i> applied');
                $('#apply-' + id).css('color', '#80B500');
                $('#apply-' + id).off('click');

                // console.log(localStorage.getItem('couponApplied'));
                if (localStorage.getItem('couponApplied') === 'false') {
                    localStorage.setItem('couponApplied', 'true');
                    
                } else {
                    localStorage.setItem('couponApplied', 'true');
                    
                }
                localStorage.setItem('coupon_name', response.old.applied_coupon_name);

                update_total(response.subtotal, response.dis_price, response.cartlist.ct_id);
                update_total_msg(response.old);

            } else if (response.status == 3) {
                alert("Coupon already applied");
            } else {
                alert("Failed to apply coupon: " + response.message);
            }
        },
        error: function(xhr, status, error) {
            alert("An error occurred: " + error);
        }
    });
}

function update_total(sub, discount, ct_id) {
    var subtotal = sub;
    var ship = $('#shipping_fee').val();
    var shippingFee = parseFloat(ship) || 0;
    var shipe = shippingFee - discount;

    var total = subtotal + shipe;
    var app = subtotal - discount;


    if (total < 0) {
        total = 0;
    }

    if (subtotal < 199) {
        $("#order_total").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + total.toFixed(2));
        $("#cart_subtotal").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + sub.toFixed(2));
        $("#shipping_fee").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + shippingFee.toFixed(2));

    } else {
        $("#order_total").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + app.toFixed(2));
        $("#cart_subtotal").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + sub.toFixed(2));
        $("#shipping_fee").html('<i class="fa-solid fa-indian-rupee-sign"></i>' + shippingFee.toFixed(2));

    }

}



function update_total_msg(old) {

    if (localStorage.getItem('couponApplied') === 'true') {
        $('#coupon_applied').removeClass('d-none');
    }

    //   console.log(localStorage.getItem('couponApplied'));

    $('#coupon_applied').empty();
    $('#coupon_applied').append(`
        <p class="mb-0">${old.applied_coupon_name}  Applied</p>
        <button class="btn-close" aria-label="Close" id="msg_close"></button>
    `);




    $('#msg_close').on('click', function() {
        var ref_id = old.applied_ref_id;
        var id = old.applied_coupon_id;
        $.ajax({
            type: "post",
            url: "<?php echo base_url('remove_coupon_by_id') ?>",
            data: {
                ref_id: ref_id
            },
            success: function(response) {
                if (response == 1) {
                    $('#apply-' + id).html('apply');
                    $('#apply-' + id).css('color', 'black');
                    $('#apply-' + id).off('click');
                    // update_total(sub, discount);
                    updateCart();

                }
            }
        });
        $('#coupon_applied').addClass('d-none');
        localStorage.setItem('couponApplied', 'false');
        localStorage.removeItem('coupon_name');

    });
}

$(document).ready(function() {
    // console.log(localStorage.getItem('couponApplied'));
    if (localStorage.getItem('couponApplied') === 'false') {
        $('#coupon_applied').addClass('d-none');
        $('#coupon_applied').empty();
        $('#coupon_applied').append(`
        <p class="mb-0">${localStorage.getItem('coupon_name')} Applied </p>
        <button class="btn-close" aria-label="close" onclick="msg_close_alter()"></button>
        `);
     
    } else {
        $('#coupon_applied').removeClass('d-none');
        $('#coupon_applied').empty();
        $('#coupon_applied').append(`
        <p class="mb-0">${localStorage.getItem('coupon_name')} Applied </p>
        <button class="btn-close" aria-label="close" onclick="msg_close_alter()"></button>
         `);
    }


});



function msg_close_alter() {
    $.ajax({
        type: "post",
        url: "<?php echo base_url('get_applied_list')?>",
        dataType: "json",
        success: function(response) {
            msg_close_func(response.applied);
        }
    });
}





function msg_close_func(applied) {
    var ref_id = applied.applied_ref_id;
    var id = applied.applied_coupon_id;
    $.ajax({
        type: "post",
        url: "<?php echo base_url('remove_coupon_by_id') ?>",
        data: {
            ref_id: ref_id
        },
        success: function(response) {
            if (response == 1) {
                $('#apply-' + id).html('apply');
                $('#apply-' + id).css('color', 'black');
                $('#apply-' + id).off('click');
                localStorage.removeItem('coupon_name');
                localStorage.setItem('coupon_name', applied.applied_coupon_name);
                updateCart();

            }
        }
    });
    $('#coupon_applied').addClass('d-none');
    localStorage.setItem('couponApplied', 'false');
    if (localStorage.getItem('coupon_name')) {
        localStorage.removeItem('coupon_name');
    }
}
</script>


<script>
$(document).ready(function() {

    $('#app_coupon').on('click', function() {
        var cop = $('#coupon_input').val();

        $.ajax({
            type: "get",
            url: "<?php echo base_url("get_coupon_list_by_name") ?>",
            data: {
                cop: cop
            },
            dataType: "json",
            success: function(response) {
                if (response.status == 1) {
                    if (response.cop !== null) {
                        var min = response.cop.cp_min_price - response.subtotal;
                        if (response.cop.cp_min_price <= response.subtotal) {
                            apply(response.cop.cp_id);
                            $('#coupon_input').val('');
                        } else {
                            $('#err_div').removeClass('d-none');
                            $("#err_txt").html(
                                'Add <i class="fa-solid fa-indian-rupee-sign"></i>' +
                                min +
                                ' to Unlock this Coupon');
                            setTimeout(() => {
                                $('#err_div').addClass('d-none');
                            }, 3000);
                        }
                    } else {
                        $('#err_div').removeClass('d-none');
                        $("#err_txt").text('Please check coupon code');
                        setTimeout(() => {
                            $('#err_div').addClass('d-none');
                        }, 3000);
                    }
                } else if (response.status == 2) {
                    $('#err_div').removeClass('d-none');
                    $("#err_txt").text('Please enter coupon');
                    setTimeout(() => {
                        $('#err_div').addClass('d-none');
                    }, 3000);
                } else {
                    $('#err_div').removeClass('d-none');
                    $("#err_txt").text('Please insert Correct coupon');
                    setTimeout(() => {
                        $('#err_div').addClass('d-none');
                    }, 3000);
                }
            },
            error: function(xhr, status, error) {
                alert("sorry its error" + error);
            }
        });
    });
});
</script>

</html>