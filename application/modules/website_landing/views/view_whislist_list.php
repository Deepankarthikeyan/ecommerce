<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-..."
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."
        crossorigin="anonymous"></script>

    <style>
    body {
        background-color: #f8f9fa;
        /* Light background for contrast */
    }

    .card {
        border: none;
        /* Remove card border */
        border-radius: 10px;
        /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
        transition: transform 0.2s;
        /* Smooth hover effect */
    }

    .card:hover {
        transform: scale(1.05);
        /* Scale up on hover */
    }

    .card-img-top {
        height: 200px;
        width: 100%;
        object-fit: contain;
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        text-align: center;
    }

    .btn-remove {
        background-color: #dc3545;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .btn-remove:hover {
        background-color: #c82333;
    }

    #close_cart {
        cursor: pointer;
        position: absolute;
        right: 5px;
        top: 5px;
        width: 30px;
        height: 30px;
        background-color: #80B500;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    #close_cart i {
        color: white;
        font-size: 10px;
    }

    #close_cart:hover {
        background-color: red;
    }

    .card-text {
        color: #80B500;
    }

    #explore_btn {
        display: inline-block;
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

    .succ_msg {
        color: #80B500
    }
    .error_msg{
       color:red;
    }
    </style>
</head>

<body>
    <?php  $web_userid = $this->session->userdata('web_user_ref_id')  ?> 

    <div class="container mt-5">
        
        <h2 class="text-center mb-4">Your Wishlist</h2>
        <?php if(!empty($web_userid))  { ?>
        <div class="search_input mb-5">
            <input type="search" class="form-control" name="search" id="search"
                value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
                placeholder="PLEASE SEARCH HERE">
         
        </div>
        <?php } else{ ?>
            
            <?php }  ?>
        <div class="contain">
            <div class="row">
                <?php if (!empty($whislist)) { ?>
                <?php foreach ($whislist as $whis) { ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <p id="close_cart" onclick="delete_whislist(<?php echo $whis['wl_id']; ?>)"><i
                                class="fa-solid fa-x"></i></p>
                        <?php $image_path = 'assets/images/' . $whis['wl_image']; ?>
                        <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top img-fluid"
                            id="ct_image-<?php echo $whis['wl_id']; ?>" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($whis['wl_name']); ?></h5>
                            <p class="card-text"><b><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <?php echo htmlspecialchars($whis['wl_price']); ?></b></p>
                            <button class="btn btn-success" onclick="add_cart(<?php echo $whis['wl_id'] ?>)"
                                id="add_cart">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="text-center">
                    <img src="assets\images\nodata.jpg" class="card-img-top img-fluid" style="background-color:white;"
                        alt="Product Image">

                </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <div class="modal fade example" style="margin-top:200px;" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="wishlist_model row  text-center mt-4 mb-5">
                    <div class="col-md-4">
                        <img src="assets/images/7.png" style="width:150px; height:140px;" alt="Vegetable Juices">
                    </div>

                    <div class="col-md-6" style="">
                        <p><strong></strong>
                        </p>

                        <p class="succ_msg"><i class="fa-solid fa-circle-check"></i> <b>Successfully Added to your
                                Cart</b></p>


                        <button class="view_whislist btn" id="explore_btn"><span>View Cart</span></button>
                    </div>


                    <div class="col-md-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
    function delete_whislist(wl_id) {
        $.ajax({
            type: "post",
            url: "<?php echo base_url('delete_whislist');?>",
            data: {
                wl_id: wl_id
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
            url: '<?php echo base_url("get_whislist_datas") ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('.contain').empty();

                if (data.whislist && data.whislist.length > 0) {

                    let row = $('<div class="row d-flex"></div>');

                    $.each(data.whislist, function(index, whis) {
                        const image_path = 'assets/images/' + whis.wl_image;


                        const col = $(`
                        <div class="col-md-3 mb-4"> 
                            <div class="card">
                                <p id="close_cart" onclick="delete_whislist(${whis.wl_id})"><i class="fa-solid fa-x"></i></p>
                                <img src="${image_path}" class="card-img-top img-fluid" id="ct_image-${whis.wl_id}" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">${whis.wl_name}</h5>
                                    <p class="card-text"><b><i class="fa-solid fa-indian-rupee-sign"></i>${whis.wl_price}</b></p>
                                       <button class="btn btn-success" onclick="add_cart(${whis.wl_id})"
                                id="add_cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    `);

                        row.append(col);
                    });

                    $('.contain').append(row);
                } else {
                    $('.contain').append(` 
                    <div class="text-center">
                        <img src="assets/images/nodata.jpg" class="card-img-top img-fluid" alt="No Data Image">
                    </div>
                `);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    }
    </script>

    <script>
    $("#search").on('keyup', function() {
        var search = $('#search').val();
        $.ajax({
            type: "get",
            url: "<?php echo base_url('search_whislist');?>",
            data: {
                search: search
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                    updatewhis(response.whislist);
                } else {
                    console.error("Delete failed: " + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: ", status, error);
            }
        });
    });

    function updatewhis(whis) {
        console.log(whis);
        $('.contain').empty();

        if (Array.isArray(whis) && whis.length > 0) {
            let row = $('<div class="row d-flex"></div>');

            whis.forEach(item => {
                const image_path = 'assets/images/' + item.wl_image;

                const col = $(`
                <div class="col-md-3 mb-4"> 
                    <div class="card">
                        <p id="close_cart" onclick="delete_whislist(${item.wl_id})"><i class="fa-solid fa-x"></i></p>
                        <img src="${image_path}" class="card-img-top img-fluid" id="ct_image-${item.wl_id}" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">${item.wl_name}</h5>
                            <p class="card-text"><b><i class="fa-solid fa-indian-rupee-sign"></i>${item.wl_price}</b></p>
                               <button class="btn btn-success" onclick="add_cart(<?php echo $whis['wl_id'] ?>)"
                                id="add_cart">Add To Cart</button>
                        </div>
                    </div>
                </div>
            `);

                row.append(col);
            });
            $('.contain').append(row);
        } else {
            $('.contain').append(` 
            <div class="text-center">
                <img src="assets/images/nodata.jpg" class="card-img-top img-fluid" alt="No Data Image">
            </div>
        `);
        }
    }
    </script>

    <script>
    function add_cart(id) {
        $.ajax({
            type: "post",
            url: "<?php echo base_url('add_cart_and_delete_whis')?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                if(response.status == 1){
                    updateCart();
                    updatemodel(response.our_product);
                }
                else{
                    updateerrormodel(response.our_product);
                }
                
            }
        });
    }

    function updatemodel(product) {
        $('.modal-content').empty();

        $('.modal-content').append(
            '<div class="wishlist_model row text-center mt-4 mb-5">' +
            '<div class="col-md-4">' +
            '<img src="assets/images/' + product.p_image +
            '" style="width:150px; height:140px;" alt="' + product.p_name + '">' +
            '</div>' +
            '<div class="col-md-6">' +
            '<p><strong>' + '<b>' + product.p_name + '</b>' + '</strong></p>' +
            '<p><i class="fa-solid fa-circle-check"></i><b> Successfully added to your Cart</b></p>' +
            '<button class="cart_btn btn" onclick="view_cart_page()" id="explore_btn">' + '<span><b>View Cart</b></span></button>' +
            '</div>' +
            '<div class="col-md-2">' + 
            '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
            '</div>' +
            '</div>'
        );

        $('#exampleModal').modal('show');

    }

    function view_cart_page(){
        window.location.href = "<?php echo base_url('view_cart_page'); ?>"; 
    }
    </script>

    <script>
         function updateerrormodel(product) {
        $('.modal-content').empty();

        $('.modal-content').append(
            '<div class="wishlist_model row text-center mt-4 mb-5">' +
            '<div class="col-md-4">' +
            '<img src="assets/images/' + product.p_image +
            '" style="width:150px; height:140px;" alt="' + product.p_name + '">' +
            '</div>' +
            '<div class="col-md-6">' +
            '<p><strong>' + '<b>' + product.p_name + '</b>' + '</strong></p>' +
            '<p class="error_msg"><i class="fa-solid fa-circle-xmark"></i> <b>Sorry Its Already added to your Cart</b></p>' +
            '<button class="cart_btn btn" onclick="view_cart_page()" id="explore_btn">' + '<span><b>View Cart</b></span></button>' +
            '</div>' +
            '<div class="col-md-2">' + 
            '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
            '</div>' +
            '</div>'
        );

        $('#exampleModal').modal('show');

    }

    </script>
</body>

</html>