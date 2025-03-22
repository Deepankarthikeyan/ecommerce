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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&family=Poppins:wght@300;400;500;600;700&display=swap");

    .user {
        width: 30px;
        height: 30px;
        background-image: url('assets/images/person_avatar.png');
        background-size: cover;
        background-position: center;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
        font-family: 'Roboto', sans-serif;

    }

    body {
        font-family: 'Roboto', sans-serif;
        /* Apply Roboto font */
    }


    .user:hover {
        cursor: pointer;
    }

    .top_bar {
        display: flex;
        justify-content: end;
        align-items: center;
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        padding: 10px 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        gap: 400px;
        width: 100%;
    }

    .top_bar h2 {
        margin: 0;
        font-size: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .user_menu {
        position: absolute;
        width: 200px;
        height: 0;
        overflow: hidden;
        background-color: whitesmoke;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        right: -80px;
        top: 60px;
        z-index: 1000;
        border-radius: 10px;
        transition: height 0.5s ease;
        /* background: #7844E8; */
        /* border:2px #7844E8 solid; */

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
        z-index: 5;
    }

    .sidebar {
        position: fixed !important;
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
        transition: all 0.4s ease;
        text-align: left;

    }

    .sidebar li .active {
        border-left: 7px #7844E8 solid;
        border-radius: none;
        transition: 0.5s;
    }

    .sidebar li .active .icons,
    .sidebar li .active .text {
        color: black;

    }

    .sidebar li a:hover {
        background-color: green;
        border-radius: 10px;
        border-left: transparent;
        transition: 0.5s ease;

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

    .user_name {
        font-family: 'Roboto', sans-serif;
    }

    .user_name_alternative {
        display: none;
    }

    .sidebar.close .search_input {
        display: none;
    }

    .inside_menu li {
        width: 100%;
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
            /* width: 100%; */
            scrollbar-width: 0;

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


    .ins {
        display: flex;
        position: relative;
    }

    @media (max-width:450px) {
        .ins {
            display: block;
        }

        .user_name {
            display: none !important;
        }

        .user_name_alternative {
            display: block;
        }
    }

    .menu-bar {
        overflow: auto;
        /* border: 1px solid #ccc; */
        scrollbar-width: none;
        scrollbar-color: #888 #f1f1f1;
        background: #f1f1f1;

    }

    .menu-bar:hover {
        scrollbar-width: thin;

    }

    .menu-bar::-webkit-scrollbar {
        width: 12px;
    }

    .menu-bar::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .menu-bar::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    .menu-bar::-webkit-scrollbar-thumb:hover {
        background: #555;
    }


    .bell_border,
    .btn_bell {

        border-radius: 50%;

        position: absolute;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);
    }



    .bell_alter,
    .bell_border_alter,
    .btn_bell_alter {

        border-radius: 50%;

        position: absolute;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);

    }

    .bell {
        position: absolute;
        border-radius: 50%;
        top: 20%;
        right: 130%;
        height: 30px;
        width: 30px;
        box-shadow: -1px 2px 10px #999;
        background: #7844E8;
        animation-name: col;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        cursor: pointer;

    }

    .bell_alter {
        position: absolute;
        border-radius: 50%;
        margin-left: -95px;
        margin-top: 2px;
        height: 30px;
        width: 30px;
        box-shadow: -1px 2px 10px #999;
        background: #7844E8;
        cursor: pointer;
    }

    .bell_border {

        height: 28px;
        width: 28px;
        border: 1px solid #7844E8 !important;
        animation-name: bord-pop;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        box-shadow: 2px 2px 5px #ccc, -2px -2px 5px #ccc;
        cursor: pointer;

    }

    .bell_border_alter {

        height: 28px;
        width: 28px;
        border: 1px solid #7844E8 !important;
        cursor: pointer;

    }

    .btn_bell {

        color: white;
        font-size: 15px;
        animation-name: bell-ring;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        cursor: pointer;

    }

    .btn_bell_alter {
        color: white;
        font-size: 15px;
        cursor: pointer;
    }


    @keyframes bord-pop {

        0% {

            transform: translate(-50%, -50%);

        }

        50% {

            transform: translate(-50%, -50%) scale(1.9);

            opacity: 0.1;

        }

        100% {

            transform: translate(-50%, -50%) scale(1.9);

            opacity: 0;

        }

    }

    @keyframes col {

        0% {

            transform: scale(1) translate(0, 0);

        }

        10% {

            transform: scale(1.1) translate(0, 0);

        }

        75% {

            transform: scale(1) translate(0, 0);

        }

        100% {

            transform: scale(1) translate(0, 0);

        }

    }

    @keyframes bell-ring {

        0% {

            transform: translate(-50%, -50%);

        }

        5%,
        15% {

            transform: translate(-50%, -50%) rotate(25deg);

        }

        10%,
        20% {

            transform: translate(-50%, -50%) rotate(-25deg);

        }

        25% {

            transform: translate(-50%, -50%) rotate(0deg);

        }

        100% {

            transform: translate(-50%, -50%) rotate(0deg);

        }

    }


    .notification_sidebar {
        position: absolute;
        width: 0;
        height: 90vh;
        /* background-color: white;  */
        right: 0;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        overflow-y: auto;
        border-left: 1px solid #ccc;
        transition: 0.5s ease;
        background-color: rgba(68, 0, 255, 0.1);
        backdrop-filter: blur(10px);

    }

    .notification_sidebar h1 {
        font-size: 16px;
        margin: 10px 0;
    }

    .notification_sidebar.active {
        width: 300px;
        transition: 0.5s ease;

    }

    .notifi_contain {
        padding: 10px;
    }

    .msg_div {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: black;
        color: white;
        padding: 5px;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);

    }

    .msg_div p {
        margin-top: 5px;
        margin: 5px;
    }

    .msg_div::before {
        content: '';
        position: absolute;
        top: -50%;
        left: 0;
        right: 0;
        height: 100%;
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
        pointer-events: none;
        opacity: 0.5;
        transform: rotate(-10deg);
    }

    .msg_div:hover {
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);
    }

    .trash {
    position: relative; 
}

.trash:hover {
    color: red;
    cursor: pointer;
    /* transform: scale(1.5);  */
}

.trash i {
    font-size: 18px;
    transition: transform 0.5s ease; 
}

.trash:hover #trash_icon_alter {
    transform: translateY(150%); 
    transform:translateX(-140%);
    transition: transform 0.5s ease; 

}
.trash:hover #trash_icon{
    transform:translateY(200%);
    /* transform:translateX(-140%); */
}
#trash_icon_alter{
    transform:translateY(200%);
    transform:translateX(-140%);
}
    </style>
</head>

<body>

    <?php
$current_page = basename($_SERVER['REQUEST_URI']); 
?>
    <?php if($this->session->userdata('user_name')) {
       $user_name = $this->session->userdata('user_name');
     
        } ?>
    <?php if($this->session->userdata('user_email')) {
       $user_email = $this->session->userdata('user_email');
     
        }?>
    <div class="top_bar">
        <h2 class="mt-2"><?php echo $side ?></h2>
        <div class="user_name_account">
            <div class="ins">
                <div class="notification_bell">
                    <?php
           $currentDateTime = date('Y-m-d H:i:s');
                      ?>
                    <?php
$allInactive = false;

foreach ($notify as $not) {
    if ($not['not_activity'] < 1 ) {
        $allInactive = true;
        break;
    }
}


if ($allInactive) { ?>
                    <div class="bell" id="bell">
                        <div class="bell_border"></div>
                        <i class="btn_bell fa-bell fas"></i>
                    </div>
                    <?php } else { ?>
                    <div class="bell_alter" id="bell_alter">
                        <div class="bell_border_alter"></div>
                        <i class="btn_bell_alter fa-bell fas"></i>
                    </div>
                    <?php } ?>
                </div>
                <div class="mt-2 user">
                    <div class="user_menu">
                        <ul class="inside_menu">
                            <li><a href=""><i class="fa-solid fa-user"></i> Account Details</a></li>
                            <li><a href="<?php echo base_url("change_password_page"); ?>"><i
                                        class="fa-key fa-solid"></i> Change Password</a></li>
                            <li><a href="<?php echo base_url('logout') ?>"><i
                                        class="fa-arrow-right-from-bracket fa-solid"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-2 user_name_alternative">
                    <h5><?php echo $user_name ?></h5>
                </div>
                <div class="mt-3 mx-2 user_name">
                    <h6><?php echo $user_name ?></h6>
                </div>

            </div>
        </div>
    </div>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="<?php echo base_url('assets/images/logo.png')?>" alt="Logo" class="leaf_logo_full"
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
                        <a href="<?php echo base_url('dasboard')?>"
                            class="nav-item <?php echo $current_page == "dasboard" ? 'active' : '';  ?>">
                            <i class="bx bx-home-alt icons"></i>
                            <span class="nav-text text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('our_product_page');?>"
                            class="nav-item <?php echo $current_page  === "our_product_page" ? 'active' : ''; ?>">
                            <i class="fa-brands fa-product-hunt icons"></i>
                            <span class="nav-text text">Our Products</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('our_product_List');?>"
                            class="nav-item <?php echo $current_page == "our_product_List" ? 'active' : ''; ?>">
                            <i class="bx bx-bell icons"></i>
                            <span class="nav-text text">Our Product List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('feature_product_page');?>"
                            class="nav-item <?php echo $current_page == "feature_product_page" ? 'active' : ''; ?>">
                            <i class="bx bx-pie-chart-alt icons"></i>
                            <span class="nav-text text">Feature Products</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('feature_product_list');?>"
                            class="nav-item <?php echo $current_page == "feature_product_list" ? 'active' : ''; ?>">
                            <i class="bx bx-heart icons"></i>
                            <span class="nav-text text-nowrap text">Feature Products List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('Testimonial_page');?>"
                            class="nav-item <?php echo $current_page == "Testimonial_page" ? 'active' : ''; ?>">
                            <i class="fa-quote-left fas icons"></i>
                            <span class="nav-text text-nowrap text">Testimonials</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('Testimonial_list');?>"
                            class="nav-item <?php echo $current_page == "Testimonial_list" ? 'active' : ''; ?>">
                            <i class="fa-quote-left fas icons"></i>
                            <span class="nav-text text-nowrap text">Testimonials List</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('coupon_form');?>"
                            class="nav-item <?php echo $current_page == "coupon_form" ? 'active' : ''; ?>">
                            <i class="fa-solid fa-ticket icons"></i>
                            <span class="nav-text text-nowrap text">Coupon</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="<?php echo base_url('coupon_list');?>"
                            class="nav-item <?php echo $current_page == "coupon_list" ? 'active' : ''; ?>">
                            <i class="fa-solid fa-ticket icons"></i>
                            <span class="nav-text text-nowrap text">Coupon List</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <a href="<?php echo base_url('logout') ?>">
                        <i class="bx bx-log-out icons"></i>
                        <span class="nav-text text">logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <div class="notification_sidebar">
        <div class="notifi_contain">
            <?php foreach($notify as $not) { ?>
            <div class="msg_div mt-2">
                <p class="text-nowrap"><?php echo $not['not_message'] ?></p>
                <p class="trash"><i class="fa-solid fa-trash" id="trash_icon"></i>
                <i class="fa-solid fa-trash-can-arrow-up" id="trash_icon_alter"></i>
            </p>
            </div>
            <?php } ?>
        </div>
    </div>


    <script>
    $(document).ready(function() {
        $('.user').click(function(event) {
            event.stopPropagation();
            $('.user_menu').toggleClass('show');

            if ($('.user_menu').hasClass('show')) {
                $('.user_menu').css('border', '2px #7844E8 solid');
            } else {
                setTimeout(() => {
                    $('.user_menu').css('border', 'none');
                }, 400);
            }
        });


        $(document).click(function() {
            $('.user_menu').removeClass('show');
            setTimeout(() => {
                $('.user_menu').css('border', 'none');
            }, 400);
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
    </script>


    <script>
    $('#bell').on('click', function() {
        updateNotificationBell();

    });
    </script>

    <script>
    function updateNotificationBell() {

        $.ajax({
            type: "post",
            url: "<?php echo base_url('update_notify_activity') ?>",
            dataType: "json",
            success: function(response) {
                if (response.status == 1) {
                    $('.notification_bell').empty();

                    let bellHtml;

                    if (response.notification == 0) {
                        bellHtml = `
                                <div class="bell" id="bell">
                                    <div class="bell_border"></div>
                                    <i class="btn_bell fa-bell fas"></i>
                                </div>
                            `;
                    } else {
                        bellHtml = `
                                <div class="bell_alter" id="bell_alter">
                                    <div class="bell_border_alter"></div>
                                    <i class="btn_bell_alter fa-bell fas"></i>
                                </div>
                            `;
                    }

                    $('.notification_bell').append(bellHtml);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: ", status, error);
            }
        });
    }
    </script>

    <script>
    $(document).ready(function() {
        const timeout = 5000;

        function fetchNotifications() {
            $.ajax({
                type: "get",
                url: "<?php echo base_url('get_notification_active_or_not') ?>",
                dataType: "json",
                success: function(response) {
                    const notifications = response.notification;
                    const activities = notifications.map(notification => notification.not_activity);
                    if (response.status == 1) {
                        $('.notification_bell').empty();
                        let bellHtml;

                        if (activities.some(activity => activity === '0')) {
                            bellHtml = `
                            <div class="bell" id="bell" onclick="myfunction()">
                                <div class="bell_border"></div>
                                <i class="btn_bell fa-bell fas"></i>
                            </div>
                        `;
                        } else {
                            bellHtml = `
                            <div class="bell_alter" id="bell_alter">
                                <div class="bell_border_alter"></div>
                                <i class="btn_bell_alter fa-bell fas"></i>
                            </div>
                        `;
                        }

                        $('.notification_bell').append(bellHtml);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching notifications:", error);
                }
            });
        }

        fetchNotifications();
        setInterval(fetchNotifications, timeout);

        $(document).on('click', '#bell, #bell_alter', function(event) {
            event.stopPropagation();
            $('.notification_sidebar').toggleClass('active');
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.notification_sidebar').length && !$(event.target).closest(
                    '#bell, #bell_alter').length) {
                $('.notification_sidebar').removeClass('active');
            }
        });
    });
    </script>
    <script>
    function myfunction() {
        updateNotificationBell();
    }
    </script>

</body>

</html>