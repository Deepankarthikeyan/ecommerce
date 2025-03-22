<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&family=Poppins:wght@300;400;500;600;700&display=swap");

    .trans {
        transform: translateX(5%);
        transition: 0.5s ease;
        margin-left: 5%;
        width: 70%;
        position: absolute;
        z-index: -1000;

    }

    .trans_alter {
        transform: translateX(20%);
        transition: 0.5s ease;
        width: 70% !important;
        margin-left: 10%;
        position: absolute;
        z-index: -1000;

    }

    .prod {
        background-color: #FFFFFF;
        padding: 10px;
        border-radius: 15px;
        font-family: 'Rajdhani' sans-serif;
        margin: 10px 0;
        width: 300px;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }
    .product_txt{
        color:#000000;
    }
    .product_val{
    color: #7E57E2 ;
    }

    .prod:hover{
        background-color: #7E57E2 ;
        color: #FFFFFF;
    }
    .prod:hover .product_txt{
          color: #FFFFFF;

    }
    .prod:hover .product_val{
          color: #FFFFFF;

    }

    body {
        background-color: #EDE9ED;

    }

    .over {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .product {
        width: 100%;
    }

    @media (max-width:1075px) {
        .trans {
            transform: translateX(5%);
            transition: 0.5s ease;
            margin-left: 15%;
            width: 70%;
            position: absolute;
            z-index: -1000;

        }

        .trans_alter {
            transform: translateX(20%);
            transition: 0.5s ease;
            width: 70% !important;
            margin-left: 20%;
            position: absolute;
            z-index: -1000;

        }

    }

    .last_month {
        padding: 2px;
    }
    </style>
</head>

<body>
    <div id="txt" class="trans_alter">
        <div class="product">
            <h1>Overview</h1>
            <div class="over row">
                <div class="prod col-lg-4 col-md-6 col-sm-12">
                    <h5 class="product_txt">Product Viewed</h5>
                    <h5 class="product_val"><b><?php echo $view_count; ?></b></h5>
                    <div class="row last_month">
                        <p class="col col-6">vs . Last month</p>
                        <p class="col col-4 badge bg-danger">418.8K</p>
                    </div>
                </div>
                <div class="prod col-lg-4 col-md-6 col-sm-12">
                    <h5 class="product_txt">Product Added to Cart</h5>
                    <h5 class="product_val"><b><?php echo $add_count; ?></b></h5>
                    <div class="row last_month">
                        <p class="col col-6">vs . Last month</p>
                        <p class="col col-4 badge bg-warning">413.8K</p>
                    </div>
                </div>
                <div class="prod col-lg-4 col-md-6 col-sm-12">
                    <h5 class="product_txt">Product Checkout</h5>
                    <h5 class="product_val"><b>411.4K</b></h5>
                    <div class="row last_month">
                        <p class="col col-6">vs . Last month</p>
                        <p class="col col-4 badge bg-warning">419.8K</p>
                    </div>

                </div>
            </div>
        </div>

        <div>
        </div>


    </div>

    <script>
    $(document).ready(function() {
        const toggle = $(".toggle");
        toggle.on('click', function() {
            $('#txt').toggleClass('trans_alter trans');
        });
        const search = $(".bx-search");
        search.on('click', function() {
            toggle.click();
        });

    });
    </script>
    <script>
    function formatNumber(num) {
        if (num >= 1000000) {
            console.log((num / 1000000).toFixed(1) + 'M');
        } else if (num >= 1000) {
            console.log((num / 1000).toFixed(1) + 'k');
        } else {
            console.log(num.toString());
        }
    }
    formatNumber(1200);
    </script>
    
</body>

</html>