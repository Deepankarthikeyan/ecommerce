<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
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
        justify-content: end;
        gap: 40%;
        backdrop-filter: blur(10px); 
        background-color: rgba(255, 255, 255, 0.5); 
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
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

    li {
        list-style-type: none;
    }

    a {
        text-decoration: none;
        color: #333;
        padding: 8px;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #f0f0f0;
    }
</style>
<body>
<div class="top_bar">
        <h2 class="mt-2">DashBoard</h2>
        <div class="user mt-2">
            <i class="fa-solid fa-user"></i>
            <div class="user_menu">
                <ul class="inside_menu">
                    <li><a href="">Account Details</a></li>
                    <li><a href="<?php echo base_url('change_password_page') ?>">Change Password</a></li>
                    <li><a href="<?php echo base_url('logout') ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('.user').click(function(event){
            event.stopPropagation();
            $('.user_menu').toggleClass('show');
        });

        $(document).click(function(){
            $('.user_menu').removeClass('show');
        });
    });
</script>
</html>