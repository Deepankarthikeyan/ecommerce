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

    .user {
        width: 50px;
        height: 50px;
        background-color: grey;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
    }

    .user:hover {
        cursor: pointer;
    }

    .top_bar {
        display: flex;
        justify-content:end;
        align-items:center;
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        padding: 10px 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        gap:400px;
    }
    .top_bar h2 {
    margin: 0; 
    font-size: 24px; 
display:flex;
justify-content:center; 
align-items:center;
}

    .user_menu {
        position: absolute;
        width: 200px;
        height: 0;
        overflow: hidden;
        background-color: whitesmoke;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        right: 0;
        top: 60px;
        z-index: 1000;
        transition: height 0.5s ease;
    }

    .user_menu.show {
        height: 120px;
    }

    .inside_menu {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        gap: 10px;
        padding: 10px;
        margin: 0;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 300px;
        background-color: white;
        padding: 5px 5px;
        transition: all 0.5s ease;
    }

    .sidebar .text {
        font-size: 16px;
        font-weight: 500;
        color: #707070;
        white-space: unset;
        opacity: 1;
    }

    .sidebar .image {
        min-width: 60px;
        display: flex;
        align-items: center;
    }

    .sidebar header {
        position: relative;
    }

    .sidebar .image-text img {
        width: 40px;
        height: 40px;
        border-radius: 10px;
    }

    .sidebar header .image-text {
        display: flex;
        align-items: center;
    }

    .header .image-text .header-text {
        display: flex;
        flex-direction: column;
    }

    .header-text .main {
        font-weight: 600;
    }

    .header-text .sub {
        margin-top: -2px;
    }

    .sidebar header .toggle {
        position: absolute;
        top: 50%;
        right: -15px;
        transform: translateY(-50%) rotate(180deg);
        height: 30px;
        width: 30px;
        background-color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        font-size: 28px;
        cursor: pointer;
    }

    .sidebar li {
        height: 50px;
        margin-top: 10px;
        list-style: none;
        display: flex;
        align-items: center;
        padding-left: 10px;
        /* Add padding to align icons */
    }

    .sidebar li .icons {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 60px;
        font-size: 20px;
    }

    .sidebar li .icons,
    .sidebar li .text {
        color: #707070;
        transition: all 0.3s ease;
    }

    .sidebar .search-bar input {
        width: 100%;
        height: 100%;
        outline: none;
        border: none;
        border-radius: 6px;
        background-color: #f4f2f2;
    }

    .sidebar .search-bar {
        background-color: #f4f2f2;
    }

    .sidebar li a {
        height: 100%;
        width: 100%;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding-right: 40px;
        border-radius: 6px;
        transition: all 0.4s ease;
        text-align: left;
    }

    .sidebar li a:hover {
        background-color: green;
    }

    .sidebar li a:hover .icons,
    .sidebar li a:hover .text {
        color: white;
    }

    .sidebar.close li a:hover .icons {
        color: black;
        font-size: 40px;
    }

    .sidebar .menu-bar {
        height: calc(100% - 50px);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .switch::before {
        content: "";
        position: absolute;
        height: 15px;
        width: 15px;
        border-radius: 50%;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
    }

    .sidebar.close {
        width: 70px;
    }

    .sidebar.close .text {
        opacity: 0;
    }

    .sidebar.close .search-bar {
        background-color: #fff;
    }

    .sidebar.close .image .leaf_logo_full {
        display: none;
    }

    .leaf_logo {
        opacity: 0;
        margin-left: 5px;
        transition: 0.5s ease;
    }

    .sidebar.close .leaf_logo {
        opacity: 1;
        transition: 0.5s ease;
    }

    .sidebar.close .icons {
        font-size: 35px;

    }

    .sidebar.close li a:hover {
        background-color: transparent;

    }

    body.dark .search-bar input {
        color: white;
    }

    .sidebar.close .toggle {
        transform: translateY(-50%);
    }

    .sidebar li {
        padding-left: 0;
    }

    .sidebar.close li {
        justify-content: center;
    }

    .sidebar.close li .text {
        display: none;
    }

    .menu-links {
        padding: 0;
    }

    .inside_menu a {
        text-decoration: none;
        color: grey;
        width: 100%;
        /* background-color:grey; */

    }
    .user_name_alternative{
        display:none;
    }

    .sidebar.close .search_input {
        display: none;
    }

    .inside_menu li {
        width: 100%;
    }

    @media (max-width:800px) {
        .top_bar {
            display: flex;
            justify-content: end;
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            padding: 10px;
            gap: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    }

    @media (max-width:500px) {
        .sidebar.close {
            width: 35px;

        }

        .sidebar.close .icons {
            font-size: 18px;
            width: 100%;
            padding: 0px;

        }

        .sidebar.close li i {
            font-size: 18px;
            width: 100%;

        }

        .sidebar.close .toggle {
            font-size: 18px;
            height: 22px !important;
            width: 22px !important;
            position: absolute;
            right: -30px !important;

        }

        .sidebar.close .leaf_logo {
            width: 25px !important; 
            height: 25px !important;
        }
    }


.ins{
    display:flex;
}
    @media (max-width:450px){
        .ins{
            display:block;
        }
        .user_name{
            display:none !important;
        }
        .user_name_alternative{
            display:block;
        }
    }
    .menu-bar{
        overflow:scroll;
    }
    </style>
</head>

<body>
    <?php if($this->session->userdata('user_name')) {
       $user_name = $this->session->userdata('user_name');
     
        }?>
            <?php if($this->session->userdata('user_email')) {
       $user_email = $this->session->userdata('user_email');
     
        }?>
    <div class="top_bar">
        <h2 class="mt-2"><?php echo("PANELS") ?></h2>
        <div class="user_name_account">
            <div class="ins">
        <div class="mt-4 mx-2 user_name"><h5><?php echo $user_name ?></h5></div>
        <div class="user mt-2">
            <i class="fa-solid fa-user"></i>
            <div class="user_menu">
                <ul class="inside_menu">
                    <li><a href="">Account Details</a></li>
           <li><a href="<?php echo base_url("change_password_page"); ?>">Change Password</a></li>
                    <li><a href="<?php echo base_url('logout') ?>">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-2 user_name_alternative"><h5><?php echo $user_name ?></h5></div>
        </div>
        </div>
    </div>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="<?php echo base_url('assets/images/logo.png')?>"  alt="Logo" class="leaf_logo_full"
                        style="width: 100%; height: 50px ;">
                    <img src="<?php echo base_url('assets/images/leaf_logo.png')?>" alt="Logo" class="leaf_logo"
                        style="width: 40px; height: 50px;">
                </span>
            </div>
            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="search-bar">
                        <i class="bx bx-search icons"></i>
                        <input type="search" placeholder="Search..." class="search_input" />
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('dasboard');?>">
                            <i class="bx bx-home-alt icons"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url("our_product_page"); ?>">
                            <i class="fa-brands fa-product-hunt icons"></i>
                            <span class="text nav-text">Our Products</span>
                        </a>
                    </li>
                    <li class="nav-link">   
                        <a href="<?php echo base_url('our_product_List') ?>">
                            <i class="bx bx-bell icons"></i>
                            <span class="text nav-text">Our Product List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('feature_product_page') ?>">
                            <i class="bx bx-pie-chart-alt icons"></i>
                            <span class="text nav-text">Feature Products</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('feature_product_list') ?>">
                            <i class="bx bx-heart icons"></i>
                            <span class="text nav-text text-nowrap">Feature Products List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                    <a href="<?php echo base_url('Testimonial_page') ?>">
                    <i class="fas fa-quote-left icons"></i>
                            <span class="text nav-text text-nowrap">Testimonials</span>
                        </a>
                    </li>
                    <li class="nav-link">
                    <a href="<?php echo base_url('Testimonial_list') ?>">
                    <i class="fas fa-quote-left icons"></i>
                            <span class="text nav-text text-nowrap">Testimonials List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                    <a href="<?php echo base_url('coupon_form') ?>">
                    <i class="fa-solid fa-ticket icons"></i>
                            <span class="text nav-text text-nowrap">Coupon</span>
                        </a>
                    </li>
                    <li class="nav-link">
                    <a href="<?php echo base_url('coupon_list') ?>">
                    <i class="fa-solid fa-ticket icons"></i>
                            <span class="text nav-text text-nowrap">Coupon List</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <a href="<?php echo base_url('logout') ?>">
                        <i class="bx bx-log-out icons"></i>
                        <span class="text nav-text">logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <script>
    $(document).ready(function() {
        $('.user').click(function(event) {
            event.stopPropagation();
            $('.user_menu').toggleClass('show');
        });

        $(document).click(function() {
            $('.user_menu').removeClass('show');
        });
    });
    </script>

    <script>
    const body = document.querySelector("body"),
        sidebar = document.querySelector(".sidebar"),
        toggle = document.querySelector(".toggle"),
        searchBtn = document.querySelector(".search-bar");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    });
    </script>
</body>

</html>