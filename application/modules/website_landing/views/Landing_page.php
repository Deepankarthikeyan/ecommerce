<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400&display=swap" rel="stylesheet"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://biati-digital.github.io/glightbox/dist/css/glightbox.min.css">
    <script src="https://biati-digital.github.io/glightbox/dist/js/glightbox.min.js"></script>

    <style>
    .row {
        margin: 0;
    }

    .col {
        padding: 0;
    }

    .img-fluid {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .mb-2 {
        margin-bottom: 0.5rem;
    }


    @media (max-width: 768px) {
        .col-md-6 {
            margin-bottom: 20px;
        }
    }

    section {
        background-color: #fff6e9;
        padding: 20px 0;
        position: relative;
    }

    .info-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    ul {
        padding: 0;
        margin: 0;
    }

    ul li {
        text-decoration: none;
        list-style-type: none;
        font: 14px sans-serif;
        color: #071C1F;
    }

    a {
        text-decoration: none;
        color: black;
        font: 14px sans-serif;
    }

    i {
        color: green;
    }

    @media(max-width: 1000px) {
        #sections {
            display: none !important;
        }
    }

    @media(min-width: 1001px) {
        #toggleSidebar {
            display: none !important;
        }
    }

    @media(max-width: 770px) {
        #toggleSidebar {
            display: block;
        }

        #head1 {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 50px !important;
        }

        .info-container {
            display: flex;
            flex-direction: column;
        }

        #lang_soc {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        #icon_sections {
            margin-top: 20px;
        }
    }

    @media(max-width: 450px) {
        #head1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px !important;
        }
    }

    .icon-container {
        width: 50px;
        height: 50px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .icon {
        font-size: 20px;
        color: black;
    }



    .sidebar {
        height: 500px;
        width: 250px;
        background-color: whitesmoke;
        position: absolute;
        top: 0;
        left: -250px;
        transition: left 0.3s ease;
    }

    .sidebar.open {
        left: 0;
    }

    .item {
        text-align: center;
        padding: 20px;
    }

    .item img {
        max-width: 100%;
        height: auto;
    }

    .product1_text1 {
        font: 16px Rajdhani, sans-serif;
        margin: 0px 0px 20px;

    }

    .text_section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: start;
        gap: 20px;
    }

    .product1_text2 {
        font: 56px Rajdhani, sans-serif;
        margin: 0px 0px 20px;
    }

    .wrap-btn {
        display: inline-block;
        position: relative;
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

    #learn_btn {
        font: 16px Rajdhani, sans-serif;
        background: white;
        color: #212529;
        padding: 15px 40px;
    }

    .wrap_learn {
        font: "Open-Sans", sans-serif;
        border: 1px #ddd;
    }

    .wrap2_btn {
        display: flex;
        gap: 20px;

    }

    #img_fruit {
        height: 28px;
        width: 30px;
    }

    .item2 {
        margin-top: 50px;

    }

    .text_section2 {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    @media(max-width:770px) {
        .text_section {
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            text-align: center;
            gap: 20px;
            margin-top: 50px;
        }

        .head_text1 {
            display: flex;
            justify-content: center;
        }

        #text_section_two {
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            text-align: center;
            gap: 20px;
            margin-top: 30px;
        }

        .head_text_two {
            display: flex;
            flex-direction: column !important;
            justify-content: center;
            text-align: center;
        }

        .product1_text2 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font: 56px Rajdhani, sans-serif !important;

        }

        .product2_text2 {
            display: flex !important;
            flex-direction: row !important;
            justify-content: center !important;
            font: 25px Rajdhani, sans-serif !important;
            margin: 0px 0px 20px;
            text-align: center !important;
        }

        .wrap-btn1 {
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
        }

    }

    .product2_text2 {
        display: flex;
        flex-direction: column;
        justify-content: end;
        text-align: end;
        font: 56px Rajdhani, sans-serif !important;
        margin: 0px 0px 20px;
    }

    .wrap-btn1 {
        display: flex;
        flex-direction: row;
        justify-content: end;
        gap: 30px;
    }

    @media(max-width:400px) {
        .product2_text2 {
            font: 28px Rajdhani, sans-serif !important;
        }

        .product1_text2 {
            font: 28px Rajdhani, sans-serif !important;

        }
    }

    #prev_div:hover {
        background-color: #80B500;
    }

    #next_div:hover {
        background-color: #80B500;
    }

    #prev_div:hover .icon {
        color: white;
    }

    #next_div:hover .icon {
        color: white;
    }


    #prev_div {
        background-color: transparent;
        position: absolute;
        top: 50%;
        left: 0;
        opacity: 0;
        transform: translate(100%);
        transition: 0.5s ease;
    }

    #next_div {
        background-color: transparent;
        position: absolute;
        top: 50%;
        right: 0;
        opacity: 0;
        transform: translate(-100%);
        transition: 0.5s ease;
    }

    .banner_container:hover #prev_div {
        opacity: 1;
        transform: translate(0%);


    }

    .banner_container:hover #next_div {
        opacity: 1;
        transform: translate(0%);

    }

    .get_quote {
        background: #80B500;
        color: white;
        font: 16px Rajdhani, sans-serif !important;
        padding: 12px 30px;

    }

    .get_quote:hover {
        background: white;
    }

    .head_text1 {
        font-size: 2rem;
        opacity: 0;
        animation: slideUp 1s forwards;

    }

    @keyframes slideUp {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .head_text2 {
        font-size: 2rem;
        opacity: 0;
        animation: slideUp 2s forwards;
        animation-delay: 0.5s;
    }

    .wrap-btn {
        font-size: 2rem;
        opacity: 0;
        animation: slideUp 2s forwards;
        animation-delay: 1s;
    }



    .icon {
        transition: transform 0.3s ease;
    }

    .icon.rotate {
        transform: rotate(180deg);
    }


    /* Tabs css
    --------- */
    .tabs-container {
        width: 100%;
        height: auto;
        background-color: white;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        overflow: hidden;

    }

    .tabs {
        padding: 10px 20px 15px 20px;
    }

    .tab-links {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #f0f0f0;
    }

    .tab-link {
        background: none;
        border: none;
        font-size: 16px;
        font-weight: 500;
        padding: 15px 30px;
        color: #ccc;
        cursor: pointer;
        position: relative !important;
        transition: color 0.3s ease;
    }

    .tab-link.active,
    .tab-link:hover {
        color: #b84de5;
    }

    .tab-link i {
        margin-right: 10px;
    }

    .tab-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: -1px;
        left: 50%;
        background: linear-gradient(45deg, #b84de5, #7d41ff);
        transition: all 0.4s ease;
    }

    .tab-link.active::after {
        width: 100%;
        left: 0;
    }

    .tab-content {
        display: none;
        animation: fadeInUp 0.5s ease;
        padding: 5px 10px 15px 10px;
    }

    .tab-content.active {
        display: block;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


    .cta-btn {
        display: inline-block;
        padding: 12px 25px;
        background: linear-gradient(45deg, #b84de5, #7d41ff);
        color: white;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: background 0.4s ease;
        font-weight: 500;
        margin-top: 20px;
    }

    .cta-btn:hover {
        background: linear-gradient(45deg, #9c3bce, #6b3ee8);
        /* Darker gradient on hover */
    }


    .contact-form {
        display: flex;
        flex-direction: column;
    }

    .contact-form label {
        margin-bottom: 5px;
        font-weight: 500;
    }

    .contact-form input,
    .contact-form textarea {
        padding: 12px 15px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        transition: border 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #b84de5;
        outline: none;
    }

    /* FAQ List */
    .faq-list {
        padding: 0;
        list-style: none;
    }

    .faq-list li {
        margin-bottom: 10px;
    }

    .faq-list li strong {
        font-weight: 600;
    }

    /* Responsive Design */
    @media screen and (max-width: 600px) {
        .tab-links {
            flex-direction: column;
            align-items: center;
        }

        .tab-link {
            text-align: center;
            width: 100%;
            padding: 15px 0;
        }
    }

    .zoom {
        transition: transform 0.5s ease;
        display: block;
        max-width: 100%;
        height: auto;
    }

    .zoom:hover {
        transform: scale(95%);
    }

    .meat_next_btn {
        position: absolute;
        top: 48%;
        right: 0;
        z-index: 1;
        opacity: 0;
        transform: translate(-100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;
    }

    .meat_prev_btn {
        position: absolute;
        top: 48%;
        left: 0;
        z-index: 1;
        background-color: transparent;
        opacity: 0;
        transform: translate(100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;
    }

    .meat_next_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;
    }

    .meat_prev_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;
    }

    .meat_prev_btn :hover i {
        color: white;
    }

    .meat_next_btn:hover i {
        color: white;
    }

    #tab-5:hover .meat_prev_btn {
        opacity: 1;
        transform: translate(0%);
    }

    #tab-5:hover .meat_next_btn {
        opacity: 1;
        transform: translate(0%);

    }


    .bread_next_btn {
        position: absolute;
        top: 48%;
        right: 0;
        z-index: 1;
        opacity: 0;
        transform: translate(-100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;
    }

    .bread_prev_btn {
        position: absolute;
        top: 48%;
        left: 0;
        z-index: 1;
        background-color: transparent;
        opacity: 0;
        transform: translate(100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;

    }

    .bread_next_btn:hover {
        background-color: #80B500;
        color: white;
    }

    .bread_prev_btn:hover {
        background-color: #80B500;
        color: white;
    }

    .bread_prev_btn:hover i {
        color: white;
    }

    .bread_next_btn:hover i {
        color: white;
    }

    #tab-4:hover .bread_prev_btn {
        opacity: 1;
        transform: translate(0%);
    }

    #tab-4:hover .bread_next_btn {
        opacity: 1;
        transform: translate(0%);

    }


    .fruit_next_btn {
        position: absolute;
        top: 48%;
        right: 0;
        z-index: 1;
        opacity: 0;
        transform: translate(-100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;
    }

    .fruit_prev_btn {
        position: absolute;
        top: 48%;
        left: 0;
        z-index: 1;
        background-color: transparent;
        opacity: 0;
        transform: translate(100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;
    }

    .fruit_next_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;
    }

    .fruit_prev_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;
    }

    .fruit_prev_btn :hover i {
        color: white;
    }

    .fruit_next_btn :hover i {
        color: white;
    }

    #tab-3:hover .fruit_prev_btn {
        opacity: 1;
        transform: translate(0%);
    }

    #tab-3:hover .fruit_next_btn {
        opacity: 1;
        transform: translate(0%);

    }

    .vegetable_prev_btn {
        position: absolute;
        top: 48%;
        left: 0;
        z-index: 1;
        background-color: transparent;
        opacity: 0;
        transform: translate(100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;
    }

    .vegetable_next_btn {
        position: absolute;
        top: 48%;
        right: 0;
        z-index: 1;
        opacity: 0;
        transform: translate(-100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        padding: 7px 5px 7px;
        border-radius: 50%;
    }

    .vegetable_next_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;
    }

    .vegetable_prev_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;

    }

    .vegetable_prev_btn :hover i {
        color: white;
    }

    .vegetable_next_btn :hover i {
        color: white;
    }

    #tab-2:hover .vegetable_prev_btn {
        opacity: 1;
        transform: translate(0%);
    }

    #tab-2:hover .vegetable_next_btn {
        opacity: 1;
        transform: translate(0%);

    }

    .our_product_next_btn {
        position: absolute;
        top: 48%;
        right: 0;
        z-index: 1;
        opacity: 0;
        transform: translate(-100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        padding: 7px 5px 7px;

    }

    .our_product_prev_btn {
        position: absolute;
        top: 48%;
        left: 0;
        z-index: 1;
        background-color: transparent;
        opacity: 0;
        transform: translate(100%);
        transition: 0.5s ease;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        padding: 7px 5px 7px;

    }

    .our_product_next_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;

    }

    .our_product_next_btn:hover i {
        color: white;
    }

    .our_product_prev_btn:hover i {
        color: white;
    }

    .our_product_prev_btn:hover {
        background-color: #80B500;
        color: white;
        border-radius: 50%;

    }

    .our_product_prev_btn :hover i {
        color: white;
    }

    #tab-1:hover .our_product_prev_btn {
        opacity: 1;
        transform: translate(0%);
    }

    #tab-1:hover .our_product_next_btn {
        opacity: 1;
        transform: translate(0%);

    }

    .btn:focus {
        outline: none;
        box-shadow: none;
    }

    .my-card {
        position: relative;
        border: none;

    }

    .my-card:hover .icon {
        opacity: 1;
        transition: 0.5s ease;
        transform: translateY(0%);

    }

    .my-card:hover {
        box-shadow: 2px 2px 2px 5px whitesmoke;

    }

    .my-card .icon {
        display: flex;
        justify-content: center;
        position: absolute;
        top: 20%;
        left: 15%;
        gap: 10px;
        opacity: 0;
        transform: translateY(300%);

    }

    #view_icon {
        width: 50px;
        height: 50px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        border-radius: 50%;
    }

    #cart_icon {
        width: 50px;
        height: 50px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        border-radius: 50%;

    }

    #whistlist_icon {
        width: 50px;
        height: 50px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        border-radius: 50%;

    }

    #navbar {
        position: fixed;
        top: 0;
        background-color: white;
        width: 100%;
        height: 80px;
        left: 0;
        display: flex;
        justify-content: space-around;
        z-index: 2;
        opacity: 0;
        transform: translateY(-100%);
        transition: 0.5s ease-out;
        delay: 1s;
    }

    #navbar.visible {
        opacity: 1;
        transform: translateY(0%);
        transition: 0.5s ease-in;
        delay: 1s;
    }

    #our_product_icons .p_icon:hover {
        background-color: #80B500;
    }

    #our_product_icons .p_icon:hover i {
        color: white;
    }

    @media(max-width:650px) {
        #navbar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 200px;
        }
    }


    .shop_details {
        opacity: 0;
        transition: 0.5s ease;
        position: absolute;
        top: 100px;
        left: 380px;
        width: 200px;
        height: 0;
        background-color: white;
        z-index: 1;
    }

    #shop:hover .shop_details {
        opacity: 1;
        z-index: 5;
        height: 200px;

    }

    .shop_content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font: 20px solid;
    }

    .hot_deals {
        background-color: #fff6e9;
        padding: 20px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .col {
        flex: 1;
        padding: 20px;
        box-sizing: border-box;
    }

    .honey-image-division {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .honey-image-division img {
        max-width: 100%;
        height: auto;
    }

    .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 20px;
    }



    .circular-counts {
        display: flex;
        justify-content: start;
        gap: 20px;
    }

    .circular-count {
        width: 70px;
        height: 70px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
    }

    .wrap-btn {
        display: flex;
        justify-content: start;
    }


    @media (max-width: 768px) {
        .row {
            flex-direction: column;
            align-items: center;
        }

        .col {
            width: 100%;
            padding: 10px;
        }

        .circular-count {
            width: 50px;
            height: 50px;
            padding: 15px;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .circular-count {
            width: 60px;
            height: 60px;
            padding: 20px;
        }
    }

    @media (min-width: 1025px) {
        .circular-count {
            width: 70px;
            height: 70px;
            padding: 25px;
        }
    }

    body {
        position: relative;
    }

    .scroll_up {
        position: fixed;
        bottom: 65px;
        right: 30px;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        z-index: 30;
        transition: 0.5s ease;
        border-radius: 10px;
    }

    #scroll_up_btn i {
        margin-left: -3px;
        margin-top: 1px;
        /* background-color:white; */
        color: black;
        transition: 0.5s ease;
    }

    .scroll_up:hover {
        background-color: #80B500;
        rotate: 45deg;
        transition: 0.5s ease;
        border-radius: 0;
    }

    .scroll_up:hover #scroll_up_btn i {
        color: white;
        transition: 0.5s ease;
        rotate: -50deg;
    }

    .circular_counts_alternative {
        display: flex;
        justify-content: start;
        gap: 20px;
    }

    .circular_count_alternative {
        width: 70px;
        height: 70px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .letters {
        position: absolute;
        transform: translateY(-200%);
        transition: transform 0.5s ease;
    }

    .animate {
        transform: translateY(25%);
    }

    .circular_count_alternative p {
        font: 30px bold;
        color: #E79A3F;

    }

    .hot_deals h1,
    p {
        font-family: 'Rajdhani', serif;
        font-weight: 400;
        font-style: normal;
    }

    #circular_counts p {
        font-family: 'Rajdhani', serif;
        font-weight: 400;
        font-style: normal;
        color: #E79A3F;
    }

    .whist_btn {
        border: none;
        background-color: white;
    }

    #whistlist_icon:hover {
        background-color: #80B500;
    }

    .whist_btn:hover {
        background-color: #80B500;
    }

    #whistlist_icon:hover .whist_btn {
        background-color: #80B500;
    }

    .garden_img img {
        width: 100%;
        height: auto;
    }

    .garden_img {
        position: relative;
    }

    #play_btn {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 100px;
        border: 4px white solid;
        background-color: transparent;
        padding: 11px;
        cursor: pointer;
    }

    @media (max-width: 700px) {
        #play_btn {
            width: 70px;
            height: 70px;
        }

        #play_btn i {
            font-size: 20px !important;
        }

        .play_inside_btn {
            height: 70px;
            width: 70px;
        }
    }

    #play_btn i {
        font-size: 30px;
    }

    .play_inside_btn {
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
        box-shadow: inset 0 0 0 200px rgba(255, 255, 255, 0.5);
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #play_btn:hover {
        border: 3px #80B500 solid;
    }

    .footer_insider {
        display: flex;
        justify-content: space-around;
    }

    .footer {
        background-color: #fff6e9;
        width: 100%;
        padding: 20px;
    }

    .footer_insider a,
    p {
        font: 20px 'Rajdhani', serif;
    }

    .footer_insider a {
        position: relative;
        display: flex;
        gap: 10px;
        transition: transform 0.3s ease;
        white-space: nowrap;
    }

    .footer_insider a:hover {
        transform: translateX(10%);
        color: #80B500;
    }

    .footer_insider a:hover .slash {
        opacity: 1;

    }

    .slash {
        opacity: 0;
        /* font-size:0; */
    }

    .email_input {
        display: flex;
    }

    #email_input_box {
        width: 250px;
        height: 60px;
        border: 2px #D3D3D3 solid;
        outline: none;
        padding: 20px;

    }

    #email_send_btn {
        background-color: #80B500;
        width: 50px !important;
        border: none;

    }

    #email_send_btn:hover {
        background-color: #0d6efd;

    }

    @media (max-width:1075px) {
        #email_input_box {
            width: 180px;
        }
    }

    #email_send_btn i {
        color: white;
    }

    .testimonials {
        background-color: #fff6e9;
        position: relative;
        padding-top: 80px;

        &:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 30%;
            background-color: #ddd;
        }
    }

    #customers-testimonials {

        .item-details {
            background-color: #333333;
            color: #fff;
            padding: 20px 10px;
            text-align: left;

            h5 {
                margin: 0 0 15px;
                font-size: 18px;
                line-height: 18px;

                span {
                    color: red;
                    float: right;
                    padding-right: 20px;
                }
            }

            p {
                font-size: 14px;
            }
        }

        .test_item {
            text-align: center;
            padding: 20px;
            margin-bottom: 80px;

        }

    }

    .owl-carousel .owl-nav [class*='owl-'] {
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
    }

    .owl-carousel .owl-nav [class*='owl-'].disabled:hover {
        background-color: #D6D6D6;
    }

    .owl-carousel {
        position: relative;
    }

    .owl-carousel .owl-next,
    .owl-carousel .owl-prev {
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 50%;
        position: absolute;
        top: 30%;
        font-size: 30px;
        color: #fff;
        border: 1px solid #ddd;
        text-align: center;
    }

    .owl-carousel .owl-prev {
        left: 0;
    }

    .owl-carousel .owl-next {
        right: 0;
    }

    #test_prev_btn {
        width: 50px;
        height: 50px;
        background-color: whitesmoke;
        border-radius: 50%;
        padding: 18px;
    }

    #test_prev_btn:hover {
        background-color: #80B500;
        color: white;
        transform: scale(0.7);
    }

    #test_next_btn:hover {
        background-color: #80B500;
        color: white;
        transform: scale(0.7);
    }

    #test_next_btn {
        width: 50px;
        height: 50px;
        background-color: whitesmoke;
        border-radius: 50%;
        padding: 18px;
    }


    .terms_conditions {
        background-color: black;

        padding: 30px;
    }

    .inside_t_c p {
        color: white;
        margin: 0;
    }

    .inside_t_c a p {
        color: white;
        text-decoration: none;
        font: 16px 'Rajdhani', sans-serif;
    }

    .inside_t_c a p:hover {
        color: #80B500;

    }

    #right_tc {
        display: flex;
        flex-direction: row;
        justify-content: end;
        gap: 30px !important;

    }

    @media (max-width:765px) {
        #right_tc {
            display: flex;
            flex-direction: row;
            justify-content: center !important;
        }

        #left_tc {
            display: flex;
            flex-direction: row;
            justify-content: center !important;
        }

        .scroll_up {
            bottom: 125px;
            width: 35px;
            height: 35px;
        }

    }

    @media (max-width:420px) {
        .inside_t_c p {
            font: 18px 'Rajdhani', sans-serif;
            white-space: nowrap;
        }

        .inside_t_c a p {
            font: 13px 'Rajdhani', sans-serif;
        }

        .scroll_up {
            bottom: 120px;
        }
    }

    .view_whislist:hover {
        border: 1px solid;
    }

    .cart {
        position: fixed;
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        transition: width 0.5s ease;
        background-color: white;
        z-index: 10;
        overflow: hidden;
    }

    .cart_open {
        width: 400px;
        transition: width 0.5s ease;
        z-index: 20;
    }

    .cart_header {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid rgb(73, 139, 101);
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

    @media (max-width:420px) {
        .cart_open {
            width: 100%;
        }
    }

    .cart_body {
        border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: auto;
        height: 300px;
        padding: 5px;
    }

    #cart_body_icon {
        width: 30px;
        height: 30px;
        background-color: whitesmoke;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;

    }

    #cart_body_icon i {
        font-size: 12px;
        color: black;
    }

    #cart_body_icon:hover,
    #cart_body_icon:hover i {
        background-color: red;
        color: white;
    }

    .cart_body::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }

    .cart_body::-webkit-scrollbar-track {
        background: grey;
        border-radius: 10px;
        height: 10px;
    }

    .cart_body::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
    }


    .cart_body::-webkit-scrollbar-thumb {
        height: 10px;
    }

    .sub_total {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        border-bottom: 2px solid;
    }

    .cart_buttons {
        display: flex;
        justify-content: space-between;

    }

    .cart_btn {
        width: 140px;
        height: 60px;
        border-radius: 0;
        margin-top: 20px;
        font: 18px 'Rajdhani', sans-serif;
    }

    @media (max-width:385px) {
        .cart_btn {
            width: 120px;
            height: 60px;
            font: 18px 'Rajdhani', sans-serif;
        }
    }

    .cart_footer {
        margin-top: 20px;
        font: 16px 'Rajdhani', sans-serif;
    }

    .search {
        position: absolute;
        left: 780px;
        top: 110px;
        border: none;
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.96);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        height: 0;
        padding: 20px;
        z-index: 10;
        opacity: 0;
        transition: 0.5s ease;

    }

    .search_alternative {
        opacity: 1;
        height: 90px;
        width: 300px;
        transition: 0.5s ease;
        position: absolute;
        padding: 20px;
        left: 780px;
        top: 110px;
        z-index: 10;
        border: none;
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.96);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    #search_input {
        height: 50px;
        width: 100%;
        outline: none;

    }

    #search_input:focus {
        border: 1px solid;
    }

    .car_btn {
        border: none;
        background-color: white;

    }

    .car_btn:hover {
        background-color: #80B500;

    }

    .view_btn {
        border: none;
        background-color: white;
    }

    .view_btn:hover {
        background-color: #80B500;

    }

    #view_icon:hover .view_btn {
        background-color: #80B500;

    }

    #cart_icon:hover .car_btn {
        background-color: #80B500;

    }

    .fa-minus,
    .fa-plus {
        cursor: pointer;
    }

    .reduce:hover,
    .increase:hover {
        background-color: grey;
    }

    .reduce:hover i,
    .increase:hover i {
        color: white;
    }

    .icon-container:hover {
        background-color: #80B500;
    }

    .icon-container:hover i,
    .icon-container:hover sup {
        color: white;
    }

    sup {
        color: black;
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
        justify-content: center;
    }

    .reduce {
        border-radius: 50%;
    }

    .add_to_whist {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    #whist {
        background: none;
        border: none;
        padding: 0;
        margin-right: 8px;
        font-size: 20px;
        color: #80B500;
        transition: color 0.3s;
        display: flex;
        justify-content: Center;
    }

    #whist:hover i {
        color: red;
    }

    #whist i {
        font-size: 18px;
        margin-top: 20px !important;
    }

    .user_list {
        position:absolute;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
            margin-top: 10px;
            display: none;
            top:16%;
            left:82%;
            z-index:20;
            align-items:center;
            text-align:center;
        }

        .user_list p {
            margin: 15px 0;
            
        }

        .user_list a {
            text-decoration: none;
            color:black; 
            font-size:18px ;
        }

        .user_list a:hover {
            text-decoration: underline;
            color:#80B500;
            
        }

    .account {
        display: flex;
        justify-content: center;
    }

    .account_cont {
        padding: 20px;

    }
    #toggleUser:hover .user_f_l{ 
         color:white;
    }
    .username{

    }
    </style>
</head>

<body>
<?php if(!empty($this->session->userdata("web_user_name"))) { 
     $username =  $this->session->userdata("web_user_name");
     $user_f_l = substr($username, 0, 1);
 } ?>
    <div class="scroll_up">
        <button class="btn" id="scroll_up_btn"> <i class="fa-solid fa-angle-up icon"></i></button>
    </div>

    <section>
        <div class="container">
            <div class="row info-container">
                <ul class="col-4 col-lg-4 col-sm-12 col-md-6 d-flex gap-5" id="head1">
                    <li class="text-nowrap"><i class="fa-solid fa-location-dot"></i> <a href=""><b>15/A, Nest Tower,
                                NYC</b></a></li>
                    <li class="text-nowrap"><i class="fa-regular fa-envelope"></i> <a
                            href=""><b>info@webmail.com</b></a></li>
                </ul>
                <div class="col-4 col-sm-6 d-flex justify-content-end gap-4" id="lang_soc">
                    <ul class="d-flex gap-4" id="social_medias">
                        <li><a href=""><b>English</b></a></li>
                        <li><a href=""><b><i class="fa-brands fa-facebook-f"></i></b></a></li>
                        <li><a href=""><b><i class="fa-brands fa-x-twitter"></i></b></a></li>
                        <li><a href=""><b><i class="fa-brands fa-instagram"></i></b></a></li>
                    </ul>
                </div>
            </div>
            <div class="header2 d-flex flex-column flex-md-row justify-content-between align-items-center mt-2">
                <ul class="brand-image mb-3 mb-md-0">
                    <li><img src="assets/images/logo.png" alt="Logo" style="max-width: 100%; height: auto;"></li>
                </ul>
                <ul class="d-flex gap-4 mb-3 mb-md-0" id="sections">
                    <li><a href=""><b>Home <i class="fa-solid fa-plus"></i></b></a></li>
                    <li id="shop">
                        <a href=""><b>Shop <i class="fa-solid fa-plus"></i></b></a>
                        <div class="shop_details">
                            <div style="background-color:#80B500;width:100%;height:7px;"></div>
                            <div class="shop_content">
                                <p>sdsdsd</p>
                                <p>sdsdsd</p>
                                <p>sdsdsd</p>
                                <p>sdsdsd</p>
                            </div>
                        </div>
                    </li>
                    <li id="about"><a href=""><b>About <i class="fa-solid fa-plus"></i></b></a></li>
                    <li><a href=""><b>News <i class="fa-solid fa-plus"></i></b></a></li>
                    <li><a href=""><b>Page <i class="fa-solid fa-plus"></i></b></a></li>
                </ul>
                <ul>
                    <li><a href="" class="btn get_quote"><b>GET A QUOTE</b></a></li>
                </ul>
                <ul class="d-flex gap-4 mb-3 mb-md-0" id="icon_sections">
                    <li class="icon-container d-flex justify-content-center align-items-center" id="toggleSidebar"
                        style="padding:15px;">
                        <a href="#" class="d-flex justify-content-center align-items-center" id="bar-icon">
                            <i class="fa-solid fa-bars icon"></i>
                        </a>
                    </li>
                    <li class="icon-container" id="whislist_list">
                        <a href="<?php echo base_url('whislist_list') ?>"
                            class="d-flex justify-content-center align-items-center">
                            <i class="fa-regular fa-heart icon"></i>
                        </a>
                        <sup class="whislist_count">
                            <h6><b><?php echo count($whislist) ?></b></h6>
                        </sup>
                    </li>
                    <li class="icon-container" id="search-toggle">
                        <a href="#" class="d-flex justify-content-center">
                            <i class="fa-solid fa-magnifying-glass icon" id="search-icon"></i>
                            <i class="fa-solid fa-xmark icon d-none" id="search-icon"></i>
                        </a>
                    </li>
             
                    <div class="user_list" id="user_list">
                        <h5 class="username badge bg-danger"><b>Hi <?php echo $username ?></b></h5>
                        <p><a href="<?php echo base_url('login_website') ?>">Login</a></p>
                        <p><a href="<?php echo base_url('create_account_page') ?>">Create Account</a></p>
                        <p><a href="<?php echo base_url('logout') ?>">logout</a></p>
                    </div>
                    <li class="icon-container" id="toggleUser">
                        <a href="#" class="d-flex justify-content-center align-items-center" >
                            <?php if(empty($this->session->userdata("web_user_name"))) { ?>
                                 <i class="fa-regular fa-user icon"></i>
                          <?php  } else { ?>
                           <h3 class="mt-2 user_f_l"><?php  echo $user_f_l ?></h3> 
                            <?php  }  ?>
                        
                        </a>
                    </li>

                    <li class="icon-container" id="shopping_cart">
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-cart-shopping icon"></i>
                        </a>

                        <sup class="cartlist_count">
                            <h6><b><?php echo count($cartlist) ?></b></h6>
                        </sup>

                    </li>
                </ul>
            </div>
        </div>
        <div class="search" id="search-form">
            <input type="search" id="search_input">
        </div>

        <div class="container banner_container">
            <div id="prev_div" class="icon-container" style="">
                <button class="btn" id="prevBtn"><i class="fa-solid fa-arrow-left icon"></i></button>
            </div>
            <div id="next_div" class="icon-container">
                <button class="btn" id="nextBtn"><i class="fa-solid fa-arrow-right icon"></i></button>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="row item d-flex">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <img src="assets/images/21.png" alt="Image 1">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 text_section">
                        <div class="d-flex head_text1">
                            <div class="img_fruit">
                                <img src="assets\images\1.png" alt="" id="fruit_img">
                            </div>
                            <h1 class="product1_text1"><b>100% Genuine Products</b></h1>
                        </div>

                        <div class="head_text2">
                            <h1 class="product1_text2"><b>Tasty and Healthy Organic Foods</b></h1>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="btn" id="explore_btn"><span>Explore Products</span></a>
                        </div>

                    </div>
                </div>
                <div class="row item2 d-flex">
                    <div class="col-md-6 col-lg-6 col-sm-12  order-2 order-md-1" id="text_section_two">
                        <div class="d-flex justify-content-end align-items-center head_text_two">
                            <div class="img_fruit">
                                <img src="assets/images/1.png" alt="" id="fruit_img">
                            </div>
                            <h1 class="product1_text1 text-end"><b>100% Genuine Products</b></h1>
                        </div>

                        <div class="product2_text2">
                            <h1 class="product2_text2"><b>Our Garden's Most Favorite Food</b></h1>
                        </div>
                        <div class="wrap-btn1">
                            <div class="wrap-btn">
                                <a href="#" class="btn" id="explore_btn"><span>Explore Products</span></a>
                            </div>
                            <div>
                                <a href="" class="btn" id="learn_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 order-1 order-md-2">
                        <img src="assets/images/23.png" alt="Image 1">
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>

    <!-- drinks and seeds
    ---------------- -->
    <div class="container">
        <div class="row align-items-start mt-5">
            <div class="col-md-6">
                <a href=""><img src="assets/images/13.png" alt="Image 1" class="img-fluid zoom"></a>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-12 mb-2">
                        <a href="">
                            <img src="assets/images/almond.png" alt="Almond" class="img-fluid zoom">
                        </a>
                    </div>
                    <div class="col-12 mt-4">
                        <a href="">
                            <img src="assets/images/mango.png" alt="Mango" class="img-fluid zoom">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our products
        ------------ -->
    <div class="mt-5">
        <div class="tabs-container container-fluid ">
            <h1 class="text-center">Our Products </h1>
            <div class="tabs">
                <div class="tab-links">
                    <button class="tab-link active" data-tab="tab-1"><i class="fa-solid fa-mug-hot"></i>FOOD &
                        DRINKS</button>
                    <button class="tab-link" data-tab="tab-2"><i class="fa-solid fa-carrot"></i> VEGETABLES</button>
                    <button class="tab-link" data-tab="tab-3"><i class="fa-solid fa-apple-whole"></i> FRUITS</button>
                    <button class="tab-link" data-tab="tab-4"><i class="fa-solid fa-bread-slice"></i> BREAD &
                        CAKE</button>
                    <button class="tab-link" data-tab="tab-5"><i class="fa-solid fa-fish"></i> FISH & MEAT</button>
                </div>
                <div class="tab-content" id="tab-1" style="position:relative;">
                    <?php if (count($foods_and_drink) > 8): ?>
                    <div class="owl-carousel owl-theme" id="our_product">
                        <?php
            for ($i = 0; $i < count($foods_and_drink); $i += 2) { ?>
                        <div class="item" style="widht:250px;">
                            <?php
                    if (isset($foods_and_drink[$i])) {
                        $image_path = 'assets/images/' . $foods_and_drink[$i]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo htmlspecialchars($foods_and_drink[$i]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($foods_and_drink[$i]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($foods_and_drink[$i]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $foods_and_drink[$i]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>

                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $foods_and_drink[$i]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $foods_and_drink[$i]['p_id']; ?>" class="whist_btn">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                    if (isset($foods_and_drink[$i + 1])) {
                        $image_path = 'assets/images/' . $foods_and_drink[$i + 1]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo htmlspecialchars($foods_and_drink[$i + 1]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($foods_and_drink[$i + 1]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($foods_and_drink[$i + 1]['p_others']); ?></b>
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $foods_and_drink[$i + 1]['p_id']; ?>"
                                            class="view_btn"><i class="fa-solid fa-eye"></i></div>
                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $foods_and_drink[$i + 1]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                            data-bs-toggle="modal"
                                            data-id="<?php echo $foods_and_drink[$i + 1]['p_id']; ?>">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        <?php } ?>

                    </div>
                    <div class="our_product_next_btn">
                        <button class="btn" data-target="#our_product"><i
                                class="fa-solid fa-arrow-right icon"></i></button>
                    </div>
                    <div class="our_product_prev_btn">
                        <button class="btn" data-target="#our_product"><i
                                class="fa-solid fa-arrow-left icon"></i></button>
                    </div>

                    <?php else: ?>
                    <div class="static-product-list"
                        style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                        <?php foreach ($foods_and_drink as $item): ?>
                        <div class="card my-card mt-5" style="width: 15rem;">
                            <?php
                    $image_path = 'assets/images/' . $item['p_image']; ?>
                            <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top uniform-image"
                                alt="..." style="width:220px;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['p_name']); ?></h5>
                                <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <b><?php echo ($item['p_price']); ?></b>
                                </p>
                                <p class="card-text"><b><?php echo ($item['p_others']); ?></b></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="icon" id="our_product_icons">
                                <div id="view_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="view_btn"><i
                                            class="fa-solid fa-eye"></i></div>
                                <div id="cart_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="car_btn" data-bs-toggle="modal"><i
                                            class="fa-solid fa-cart-shopping"></i></button></div>
                                <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                        data-bs-toggle="modal" data-id="<?php echo $item['p_id']; ?>">
                                        <i class="fa-regular fa-heart"></i></button></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>



                <div class="tab-content" id="tab-2" style="position:relative;">
                    <?php if (count($vegetable) > 8): ?>
                    <div class="owl-carousel owl-theme" id="vegetable">
                        <?php
            for ($i = 0; $i < count($vegetable); $i += 2) { ?>
                        <div class="item" style="widht:250px;">
                            <?php
                    if (isset($vegetable[$i])) {
                        $image_path = 'assets/images/' . $vegetable[$i]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($vegetable[$i]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($vegetable[$i]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($vegetable[$i]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $vegetable[$i]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>

                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $vegetable[$i]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $vegetable[$i]['p_id']; ?>" class="whist_btn">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                    if (isset($vegetable[$i + 1])) {
                        $image_path = 'assets/images/' . $vegetable[$i + 1]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($vegetable[$i + 1]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($vegetable[$i + 1]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($vegetable[$i + 1]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $vegetable[$i + 1]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>
                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $vegetable[$i + 1]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                            data-bs-toggle="modal" data-id="<?php echo $vegetable[$i + 1]['p_id']; ?>">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        <?php } ?>

                    </div>
                    <div class="vegetable_next_btn">
                        <button class="btn" data-target="#vegetable"><i
                                class="fa-solid fa-arrow-right icon"></i></button>
                    </div>
                    <div class="vegetable_prev_btn">
                        <button class="btn" data-target="#vegetable"><i
                                class="fa-solid fa-arrow-left icon"></i></button>
                    </div>

                    <?php else: ?>
                    <div class="static-product-list"
                        style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                        <?php foreach ($vegetable as $item): ?>
                        <div class="card my-card mt-5" style="width: 15rem;">
                            <?php
                    $image_path = 'assets/images/' . $item['p_image']; ?>
                            <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                style="width:290px;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['p_name']); ?></h5>
                                <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <b><?php echo $item['p_price']; ?></b>
                                </p>
                                <p class="card-text"><b><?php echo $item['p_others']; ?></b></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="icon" id="our_product_icons">
                                <div id="view_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="view_btn"><i
                                            class="fa-solid fa-eye"></i></div>
                                <div id="cart_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="car_btn" data-bs-toggle="modal"><i
                                            class="fa-solid fa-cart-shopping"></i></button></div>
                                <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                        data-bs-toggle="modal" data-id="<?php echo $item['p_id']; ?>">
                                        <i class="fa-regular fa-heart"></i></button></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>



                <div class="tab-content" id="tab-3" style="position:relative;">
                    <?php if (count($fruit) > 8): ?>
                    <div class="owl-carousel owl-theme" id="fruit">
                        <?php
            for ($i = 0; $i < count($fruit); $i += 2) { ?>
                        <div class="item" style="widht:250px;">
                            <?php
                    if (isset($fruit[$i])) {
                        $image_path = 'assets/images/' . $fruit[$i]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($fruit[$i]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($fruit[$i]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($fruit[$i]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fruit[$i]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>

                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fruit[$i]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fruit[$i]['p_id']; ?>" class="whist_btn">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                    if (isset($fruit[$i + 1])) {
                        $image_path = 'assets/images/' . $fruit[$i + 1]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($fruit[$i + 1]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($fruit[$i + 1]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($fruit[$i + 1]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fruit[$i + 1]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>
                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fruit[$i + 1]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                            data-bs-toggle="modal" data-id="<?php echo $fruit[$i + 1]['p_id']; ?>">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        <?php } ?>

                    </div>
                    <div class="fruit_next_btn">
                        <button class="btn" data-target="#fruit"><i class="fa-solid fa-arrow-right icon"></i></button>
                    </div>
                    <div class="fruit_prev_btn">
                        <button class="btn" data-target="#fruit"><i class="fa-solid fa-arrow-left icon"></i></button>
                    </div>

                    <?php else: ?>
                    <div class="static-product-list"
                        style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                        <?php foreach ($fruit as $item): ?>
                        <div class="card my-card mt-5" style="width: 15rem;">
                            <?php
                    $image_path = 'assets/images/' . $item['p_image']; ?>
                            <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                style="width:290px;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['p_name']); ?></h5>
                                <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <b><?php echo ($item['p_price']); ?></b>
                                </p>
                                <p class="card-text"><b><?php echo ($item['p_others']); ?></b></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="icon" id="our_product_icons">
                                <div id="view_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="view_btn"><i
                                            class="fa-solid fa-eye"></i></div>
                                <div id="cart_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="car_btn" data-bs-toggle="modal"><i
                                            class="fa-solid fa-cart-shopping"></i></button></div>
                                <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                        data-bs-toggle="modal" data-id="<?php echo $item['p_id']; ?>">
                                        <i class="fa-regular fa-heart"></i></button></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>



                <div class="tab-content" id="tab-4" style="position:relative;">
                    <?php if (count($bread_and_cake) > 8): ?>
                    <div class="owl-carousel owl-theme" id="bread">
                        <?php
            for ($i = 0; $i < count($bread_and_cake); $i += 2) { ?>
                        <div class="item" style="widht:250px;">
                            <?php
                    if (isset($bread_and_cake[$i])) {
                        $image_path = 'assets/images/' . $bread_and_cake[$i]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo htmlspecialchars($bread_and_cake[$i]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($bread_and_cake[$i]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($bread_and_cake[$i]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $bread_and_cake[$i]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>

                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $bread_and_cake[$i]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $bread_and_cake[$i]['p_id']; ?>" class="whist_btn">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                    if (isset($bread_and_cake[$i + 1])) {
                        $image_path = 'assets/images/' . $bread_and_cake[$i + 1]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo htmlspecialchars($bread_and_cake[$i + 1]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($bread_and_cake[$i + 1]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($bread_and_cake[$i + 1]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $bread_and_cake[$i + 1]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>
                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $bread_and_cake[$i + 1]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                            data-bs-toggle="modal"
                                            data-id="<?php echo $bread_and_cake[$i + 1]['p_id']; ?>">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        <?php } ?>

                    </div>
                    <div class="bread_next_btn">
                        <button class="btn" data-target="#bread"><i class="fa-solid fa-arrow-right icon"></i></button>
                    </div>
                    <div class="bread_prev_btn">
                        <button class="btn" data-target="#bread"><i class="fa-solid fa-arrow-left icon"></i></button>
                    </div>

                    <?php else: ?>
                    <div class="static-product-list"
                        style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                        <?php foreach ($bread_and_cake as $item): ?>
                        <div class="card my-card mt-5" style="width: 15rem;">
                            <?php
                    $image_path = 'assets/images/' . $item['p_image']; ?>
                            <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                style="width:290px;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['p_name']); ?></h5>
                                <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <b><?php echo ($item['p_price']); ?></b>
                                </p>
                                <p class="card-text"><b><?php echo ($item['p_others']); ?></b></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="icon" id="our_product_icons">
                                <div id="view_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="view_btn"><i
                                            class="fa-solid fa-eye"></i></div>
                                <div id="cart_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="car_btn" data-bs-toggle="modal"><i
                                            class="fa-solid fa-cart-shopping"></i></button></div>
                                <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                        data-bs-toggle="modal" data-id="<?php echo $item['p_id']; ?>">
                                        <i class="fa-regular fa-heart"></i></button></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>




                <div class="tab-content" id="tab-5" style="position:relative;">
                    <?php if (count($fish_and_meat) > 8): ?>
                    <div class="owl-carousel owl-theme" id="meat">
                        <?php
            for ($i = 0; $i < count($fish_and_meat); $i += 2) { ?>
                        <div class="item" style="widht:250px;">
                            <?php
                    if (isset($fish_and_meat[$i])) {
                        $image_path = 'assets/images/' . $fish_and_meat[$i]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($fish_and_meat[$i]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($fish_and_meat[$i]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($fish_and_meat[$i]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fish_and_meat[$i]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>
                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fish_and_meat[$i]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                            data-bs-toggle="modal" data-id="<?php echo $fish_and_meat[$i]['p_id']; ?>">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                    if (isset($fish_and_meat[$i + 1])) {
                        $image_path = 'assets/images/' . $fish_and_meat[$i + 1]['p_image']; ?>
                            <div class="card my-card mt-5" style="width: 15rem;">
                                <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                    style="width:290px;height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo htmlspecialchars($fish_and_meat[$i + 1]['p_name']); ?>
                                    </h5>
                                    <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        <b><?php echo ($fish_and_meat[$i + 1]['p_price']); ?></b>
                                    </p>
                                    <p class="card-text"><b><?php echo ($fish_and_meat[$i + 1]['p_others']); ?></b></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="icon" id="our_product_icons">
                                    <div id="view_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fish_and_meat[$i + 1]['p_id']; ?>" class="view_btn"><i
                                                class="fa-solid fa-eye"></i></div>
                                    <div id="cart_icon" class="p_icon"><button type="button"
                                            data-id="<?php echo $fish_and_meat[$i + 1]['p_id']; ?>" class="car_btn"
                                            data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                    <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                            data-bs-toggle="modal"
                                            data-id="<?php echo $fish_and_meat[$i + 1]['p_id']; ?>">
                                            <i class="fa-regular fa-heart"></i></button></div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        <?php } ?>

                    </div>
                    <div class="meat_next_btn">
                        <button class="btn" data-target="#meat"><i class="fa-solid fa-arrow-right icon"></i></button>
                    </div>
                    <div class="meat_prev_btn">
                        <button class="btn" data-target="#meat"><i class="fa-solid fa-arrow-left icon"></i></button>
                    </div>

                    <?php else: ?>
                    <div class="static-product-list"
                        style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                        <?php foreach ($fish_and_meat as $item): ?>
                        <div class="card my-card mt-5" style="width: 15rem;">
                            <?php
                    $image_path = 'assets/images/' . $item['p_image']; ?>
                            <img src="<?php echo htmlspecialchars($image_path); ?>" class="card-img-top" alt="..."
                                style="width:290px;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['p_name']); ?></h5>
                                <p class="card-text"><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <b><?php echo ($item['p_price']); ?></b>
                                </p>
                                <p class="card-text"><b><?php echo ($item['p_others']); ?></b></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="icon" id="our_product_icons">
                                <div id="view_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="view_btn"><i
                                            class="fa-solid fa-eye"></i></div>
                                <div id="cart_icon" class="p_icon"><button type="button"
                                        data-id="<?php echo $item['p_id']; ?>" class="car_btn" data-bs-toggle="modal"><i
                                            class="fa-solid fa-cart-shopping"></i></button></div>
                                <div id="whistlist_icon" class="p_icon"><button type="button" class="whist_btn"
                                        data-bs-toggle="modal" data-id="<?php echo $item['p_id']; ?>">
                                        <i class="fa-regular fa-heart"></i></button></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <navbar id="navbar">
                    <ul class="brand-image d-flex justify-center mb-md-0 mt-3 ">
                        <li><img src="assets/images/logo.png" alt="Logo" style="max-width: 100%; height: auto;"></li>
                    </ul>
                    <ul class="d-flex gap-4  mb-md-0 mt-4 p-2" id="sections">
                        <li><a href=""><b>Home <i class="fa-solid fa-plus"></i></b></a></li>
                        <li><a href=""><b>About <i class="fa-solid fa-plus"></i></b></a></li>
                        <li><a href=""><b>Shop <i class="fa-solid fa-plus"></i></b></a></li>
                        <li><a href=""><b>News <i class="fa-solid fa-plus"></i></b></a></li>
                        <li><a href=""><b>Page <i class="fa-solid fa-plus"></i></b></a></li>
                    </ul>
                    <ul>
                        <li><a href="" class="btn get_quote mt-3"><b>GET A QUOTE</b></a></li>
                    </ul>
                    <ul class="d-flex gap-4 mt-3 mb-md-0" id="icon_sections">
                        <li class="icon-container d-flex justify-content-center align-items-center" id="toggleSidebar"
                            style="padding:15px;">
                            <a href="#" class="d-flex justify-content-center align-items-center" id="bar-icon">
                                <i class="fa-solid fa-bars icon"></i>
                            </a>
                        </li>
                        <li class="icon-container" id="whislist_list">
                            <a href="<?php echo base_url('whislist_list') ?>"
                                class="d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-heart icon"></i>
                            </a>
                            <sup class="whislist_count">
                                <h6><b><?php echo count($whislist) ?></b></h6>
                            </sup>
                        </li>
                        <li class="icon-container" id="search-toggle">
                            <a href="#" class="d-flex justify-content-center">
                                <i class="fa-solid fa-magnifying-glass icon" id="search-icon"></i>
                                <i class="fa-solid fa-xmark icon d-none" id="search-icon"></i>
                            </a>
                        </li>

                        <li class="icon-container">
                            <a href="#" class="d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-user icon"></i>
                            </a>
                        </li>
                        <li class="icon-container" id="shopping_cart_alternative">
                            <a href="#" class="d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-cart-shopping icon"></i>
                            </a>
                            <sup class="cartlist_count">
                                <h6><b><?php echo count($cartlist) ?></b></h6>
                            </sup>
                        </li>
                    </ul>
            </div>
            </navbar>



            <div class="hot_deals">
                <div class="row">
                    <div class="col honey-image-division">
                        <img src="assets/images/honey.png"
                            alt="Honey Combo Package - A selection of original stock honey" />
                    </div>
                    <div class="col content">
                        <div>
                            <p><b>Todays Hot Deals</b></p>
                        </div>
                        <div>
                            <h1><b>Original Stock Honey Combo Package</b></h1>
                        </div>

                        <div class="circular-counts" id="circular_counts">
                            <div>
                                <p class="circular-count" id="days">00</p>
                                <h6 class="mx-3"><b>DAYS</b></h6>
                            </div>
                            <div>
                                <p class="circular-count" id="hours">00</p>
                                <h6 class="mx-3"><b>HRS</b></h6>
                            </div>
                            <div>
                                <p class="circular-count" id="minutes">00</p>
                                <h6 class="mx-3"><b>MINS</b></h6>
                            </div>
                            <div>
                                <p class="circular-count" id="seconds">00</p>
                                <h6 class="mx-3"><b>SECS</b></h6>
                            </div>
                        </div>

                        <div class="circular_counts_alternative" id="circular_counts_alternative">
                            <div class="circular_count_alternative">
                                <p class="letters" id="letter_1"><b>S</b></p>
                                <p class="letters" id="letter_2"><b>L</b></p>
                            </div>
                            <div class="circular_count_alternative">
                                <p class="letters" id="letter_3"><b>A</b></p>
                                <p class="letters" id="letter_4"><b>I</b></p>
                                <p class="letters" id="letter_5"><b>I</b></p>
                            </div>
                            <div class="circular_count_alternative">
                                <p class="letters" id="letter_6"><b>L</b></p>
                                <p class="letters" id="letter_7"><b>S</b></p>
                                <p class="letters" id="letter_8"><b>V</b></p>
                            </div>
                            <div class="circular_count_alternative">
                                <p class="letters" id="letter_9"><b>E</b></p>
                                <p class="letters" id="letter_0"><b>E</b></p>
                            </div>
                        </div>


                        <div class="wrap-btn">
                            <a href="#" class="btn" id="explore_btn"><span>SHOP NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Feature Products -->
            <div class="container mt-5 mb-5">
                <h1 class="text-center">Feature Products</h1>
                <div class="row">
                    <?php foreach($feature_product as $product) {  ?>
                    <div class='col-md-3 col-sm-6'>
                        <div class='card product-card'>
                            <?php 
                   $image = "assets/images/" . $product['fp_image']; 
                  ?>
                            <img id="productImage" src="<?php echo base_url($image) ; ?>" class="card-img-top"
                                alt="Product Image">

                            <div class='card-body'>
                                <?php $stars = 4;
                         if($stars >= 1 && $stars <= 5 ) { ?>
                                <p class="stars">
                                    <?php  for ($i = 1; $i <= $stars; $i++) {  ?>
                                    <i class="fa-solid fa-star"></i>
                                    <?php } ?>
                                </p>
                                <?php } ?>
                                <h5 class='card-title'><?php echo $product['fp_name'] ?></h5>
                                <p class='card-text'>Price: $<?php echo $product['fp_price'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>



            <!-- Sample video -->
            <div class="container">
                <a href="https://youtu.be/ATI7vfCgwXE" data-glightbox="youtube" class="garden_img">
                    <img src="assets/images/garden.jpeg" alt="Video Thumbnail">

                    <button id="play_btn">
                        <div class="play_inside_btn">
                            <i class="fa-solid fa-play"></i>
                        </div>
                    </button>
                </a>
            </div>

            <!-- TESTIMONIALS -->
            <div class="testimonials mt-5">
                <p class="text-center">TESTIMONIALS</p>
                <h1 class="text-center" style="font:70px 'Rajdhani',sans-serif;"><b>Clients Feedback</b></h1>
                <div class="">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="customers-testimonials" class="owl-carousel">

                                <!--TESTIMONIAL 1 -->
                                <?php $dishes = [
    [
        "name" => "Chicken for two Roasted",
        "description" => "There was a time when Chinese food in this country meant (Americanized) Cantonese food",
        "amount" => 21
    ],
    [
        "name" => "Beef Stir Fry",
        "description" => "There was a time when Chinese food in this country meant (Americanized) Cantonese food",
        "amount" => 18
    ],
    [
        "name" => "Vegetable Spring Rolls",
        "description" => "There was a time when Chinese food in this country meant (Americanized) Cantonese food",
        "amount" => 10
    ],
    [
        "name" => "Shrimp Fried Rice",
        "description" => "There was a time when Chinese food in this country meant (Americanized) Cantonese food",
        "amount" => 15
    ],

]; ?>
                                <?php foreach($dishes as $dish) { ?>
                                <div class="test_item">
                                    <div class="shadow-effect">
                                        <img class="img-responsive"
                                            src="https://image.freepik.com/free-photo/spaghetti-with-carbonara-sauce_1216-324.jpg"
                                            alt="">
                                        <div class="item-details">
                                            <h5><?php echo $dish['name'] ?> <span>$<?php echo $dish['amount'] ?></span>
                                            </h5>
                                            <p><?php echo $dish['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF TESTIMONIALS -->




            <!-- footer -->
            <div class="footer mt-5">
                <div class="footer_insider row mt-5">
                    <div class="brocolli col-lg-2 col-md-6">
                        <img src="assets/images/logo.png" alt="Logo" style="max-width: 100%; height: auto;">
                        <p class="mt-3">
                            Lorem Ipsum is simply dummy text of the and typesetting industry.Lorem Ipsum is dummy text
                            of the
                            printing.
                        </p>
                        <p><i class="fa-solid fa-location-dot"></i> Brooklyn, New York, United States</p>
                        <p><i class="fa-solid fa-phone"></i> +0123-456789</p>
                        <p class="text-nowrap"><i class="fa-regular fa-envelope"></i> example@example.com</p>
                        <div class="d-flex gap-5">
                            <p><a href=""><b><i class="fa-brands fa-facebook-f"></i></b></a></p>
                            <p><a href=""><b><i class="fa-brands fa-x-twitter"></i></b></a></p>
                            <p><a href=""><b><i class="fa-brands fa-instagram"></i></b></a></p>
                        </div>
                    </div>
                    <ul class="col-lg-2 col-md-6">
                        <h3 class="mx-4"> Company</h3>
                        <a href="" class="mt-3">
                            <p class="slash">//</p>
                            <p>About</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Contact Us</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Blog</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>All Product</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Location Map</p>
                        </a>
                    </ul>
                    <div class="col-lg-2 col-md-6">
                        <h3 class="mx-4"> Services</h3>
                        <a href="" class="mt-3">
                            <p class="slash">//</p>
                            <p>Order Tracking</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Wishlist</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Login</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>My Account</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Terms and conditions</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h3 class="mx-4 text-nowrap"> Customer Care</h3>
                        <a href="" class="mt-3">
                            <p class="slash">//</p>
                            <p>Order Tracking</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Wishlist</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Login</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>My Account</p>
                        </a>
                        <a href="">
                            <p class="slash">//</p>
                            <p>Terms and conditions</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h3>News Letter</h3>
                        <p class="mt-3">Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <form class="email_input" id="email_input" method="post">
                            <input type="text" id="email_input_box" placeholder="Email">
                            <button type="submit" id="email_send_btn"><i class="fa-solid fa-paper-plane"></i></button>
                        </form>
                        <span id="sub_err_msg"></span>
                        <span id="sub_succ_msg"></span>
                        <p class="mt-3">We Accept</p>
                        <div style="width:50px!important;">
                            <img src="assets\images\payments.png" style="width:260px;height:40px;" alt="">
                        </div>
                    </div>
                </div>
            </div>


            <!-- Terms and Conditions -->
            <div class="terms_conditions">
                <div class="inside_t_c row">
                    <div class="col-md-6 col-sm-12" id="left_tc">
                        <p>All Rights Reserved @ Company 2025</p>
                    </div>
                    <div class="col-md-6 col-sm-12" id="right_tc">
                        <a href="#">
                            <p><b>Terms and Conditions</b></p>
                        </a>
                        <a href="#">
                            <p><b>Claim</b></p>
                        </a>
                        <a href="#">
                            <p><b>Privacy Policy</b></p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <!-- modal fade -->
            <div class="modal fade example" style="margin-top:200px;" id="exampleModal" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="wishlist_model row  text-center mt-4 mb-5">
                            <div class="col-md-4">
                                <img src="assets/images/7.png" style="width:150px; height:140px;"
                                    alt="Vegetable Juices">
                            </div>

                            <div class="col-md-6" style="">


                                <p><strong>Your Wishlist:</strong></p>
                                <p><strong></strong>
                                </p>

                                <p><i class="fa-solid fa-circle-check"></i> Successfully added to your Wishlist</p>


                                <button class="view_whislist btn" id="explore_btn"><span>View Wishlist</span></button>
                            </div>


                            <div class="col-md-2 text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



            <!-- cart -->
            <div class="cart">
                <div style="padding:40px;">


                    <div class="cart_header">
                        <h3>Cart</h3>
                        <p id="close_cart"><i class="fa-solid fa-x"></i></p>
                    </div>
                    <div class="cart_body">

                        <?php foreach($whishlist as $wish) { ?>
                        <div class="d-flex mt-4">
                            <p id="cart_body_icon"><i class="fa-solid fa-x"></i></p>
                            <img src="assets/images/7.png" style="width:100px; height:100px;" alt="Vegetable Juices">
                            <div>

                                <p><?php echo $wish['wl_name'] ?></p>
                                <p><?php echo count($whishlist);  ?> X <?php echo $wish['wl_price'] ?></p>
                                <p><i class="fa-solid fa-minus"></i> count <i class="fa-solid fa-plus"></i> </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="sub_total">
                        <p><b>Subtotal:</b></p>
                        <p></p>
                    </div>
                    <div class="cart_buttons">
                        <a href="<?php echo base_url('view_cart_page') ?>"> <button class="cart_btn btn"
                                id="explore_btn"><span><b>View Cart</b></span></button></a>
                        <button class="cart_btn btn " id="explore_btn"><span><b>Check Out</b></span></button>
                    </div>

                    <p class="cart_footer">Free Shipping on All Orders Over $100 !</p>
                </div>
            </div>




            <div class="container">
                <div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="largeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Large Modal Title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>This is a large modal. You can put any content you want here, such as forms, images,
                                    or text.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="mt-5 d-flex justify-content-center border-bottom">
                    <ul class="brand-image mb-3 mb-md-0">
                        <li><img src="assets/images/logo.png" alt="Logo" style="max-width: 100%; height: auto;"></li>
                    </ul>
                </div>
                <div>
                    <input type="search" class="form-control">
                </div>

            </div>
            <script>
            const toggleSidebar = document.getElementById('toggleSidebar');
            const sidebar = document.getElementById('sidebar');

            toggleSidebar.addEventListener('click', function(event) {
                event.preventDefault();
                sidebar.classList.toggle('open');
            });
            </script>

            <script>
            $(document).ready(function() {
                var owl = $(".owl-carousel").owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 10,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true

                });


                $("#prevBtn").click(function() {
                    owl.trigger('prev.owl.carousel');
                });

                $("#nextBtn").click(function() {
                    owl.trigger('next.owl.carousel');
                });
            });
            </script>


            <script>
            $('#tab_5').click(function(e) {
                e.preventDefault();
                $('#tab_5').removeClass('d-none');

            });
            </script>
            <script>
            document.addEventListener('DOMContentLoaded', () => {
                const tabLinks = document.querySelectorAll('.tab-link');
                const tabContents = document.querySelectorAll('.tab-content');
                const tab_5 = document.getElementById('tab-5');

                if (tabLinks.length > 0) {
                    tabLinks[0].classList.add('active');
                    tabContents[0].classList.add('active');

                    tab_5.classList.add('d-none');

                }


                tabLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        tabLinks.forEach(link => link.classList.remove('active'));
                        link.classList.add('active');

                        tabContents.forEach(content => content.classList.remove('active'));

                        const targetTab = document.getElementById(link.dataset.tab);
                        targetTab.classList.add('active');
                        tab_5.classList.remove('d-none');
                    });
                });
            });
            </script>

            <!-- our product -->
            <script>
            var foodowl = $('#our_product').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });


            $(".our_product_next_btn").click(function() {
                foodowl.trigger('next.owl.carousel');
                console.log("Next button clicked");
            });


            $(".our_product_prev_btn").click(function() {
                foodowl.trigger('prev.owl.carousel');
                console.log("Previous button clicked");
            });
            </script>

            <script>
            var vegetableOwl = $('#vegetable').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $(".vegetable_next_btn").click(function() {
                vegetableOwl.trigger('next.owl.carousel');
                console.log("Next button clicked");
            });


            $(".vegetable_prev_btn").click(function() {
                vegetableOwl.trigger('prev.owl.carousel');
                console.log("Previous button clicked");
            });
            </script>

            <script>
            var fruitowl = $('#fruit').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $(".fruit_next_btn").click(function() {
                fruitowl.trigger('next.owl.carousel');
                console.log("Next button clicked");
            });


            $(".fruit_prev_btn").click(function() {
                fruitowl.trigger('prev.owl.carousel');
                console.log("Previous button clicked");
            });
            </script>

            <script>
            var breadowl = $('#bread').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $(".bread_next_btn").click(function() {
                breadowl.trigger('next.owl.carousel');
                console.log("Next button clicked");
            });


            $(".bread_prev_btn").click(function() {
                breadowl.trigger('prev.owl.carousel');
                console.log("Previous button clicked");
            });
            </script>

            <script>
            var meatowl = $('#meat').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $(".meat_next_btn").click(function() {
                meatowl.trigger('next.owl.carousel');
                console.log("Next button clicked");
            });


            $(".meat_prev_btn").click(function() {
                meatowl.trigger('prev.owl.carousel');
                console.log("Previous button clicked");
            });
            </script>

            <script>
            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    $('#navbar').removeClass('d-none').addClass('visible');
                } else {
                    $('#navbar').removeClass('visible');
                }
            });
            </script>
            <script>
            var shop = document.getElementById('shop');
            var shop_details = document.getElementById('shop_details');
            shop.style.color = "blue";
            </script>
            <script>
            $('.scroll_up').click(function() {
                $('html,body').animate({
                    scrollTop: 0
                }, 400);
            });
            </script>


            <script>
            const countdowndate = new Date('janauary 20, 2025 23:59:59').getTime();
            const countdownfunction = setInterval(function() {
                const now = new Date().getTime();
                const distance = countdowndate - now;
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
                const minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
                const seconds = Math.floor(distance % (1000 * 60) / 1000);

                document.getElementById('days').innerText = String(days).padStart(2, '0');
                document.getElementById('hours').innerText = String(hours).padStart(2, '0');
                document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
                document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
                document.getElementById('circular_counts_alternative').classList.add('d-none');
                document.getElementById('circular_counts').classList.remove('d-none');



                if (distance < 0) {
                    clearInterval(countdownfunction);
                    document.getElementById("days").innerText = "00";
                    document.getElementById("hours").innerText = "00";
                    document.getElementById("minutes").innerText = "00";
                    document.getElementById("seconds").innerText = "00";
                    document.getElementById('circular_counts').classList.add('d-none');
                    document.getElementById('circular_counts_alternative').classList.remove('d-none');


                    console.log("Countdown finished!");
                }
            }, 1000);
            </script>



            <script>
            function displayWords() {
                const words = [
                    ['letter_1', 'letter_3', 'letter_6', 'letter_9'],
                    ['letter_4', 'letter_7'],
                    ['letter_2', 'letter_5', 'letter_8', 'letter_0']
                ];

                let index = 0;

                function showNextWord() {
                    document.querySelectorAll('.letters').forEach(letter => {
                        letter.classList.remove('animate');
                    });


                    words[index].forEach(letterId => {
                        document.getElementById(letterId).classList.add('animate');
                    });


                    index = (index + 1) % words.length;

                    setTimeout(showNextWord, 2000);
                }

                showNextWord();
            }


            window.onload = displayWords;
            </script>

            <script>
            const lightbox = GLightbox({
                selector: 'data-glightbox',
                autoplayVideos: true,
                width: 800,
                height: 450
            });
            </script>
            <script>
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 2,
                margin: 5,
                autoplay: true,
                dots: true,
                nav: true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                navText: ['<i class="fa fa-angle-left" id="test_prev_btn"></i>',
                    '<i class="fa fa-angle-right" id="test_next_btn"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
            </script>

            <script>
            $(document).ready(function() {
                $('#shopping_cart').click(function(event) {
                    event.preventDefault();
                    $('.cart').toggleClass('cart_open');
                });

                $('#close_cart').click(function(event) {
                    event.preventDefault();
                    $('.cart').removeClass('cart_open');
                });
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#shopping_cart_alternative').click(function(event) {
                    event.preventDefault();
                    $('.cart').toggleClass('cart_open');
                });

                $('#close_cart').click(function(event) {
                    event.preventDefault();
                    $('.cart').removeClass('cart_open');
                });
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#search-toggle').click(function() {
                    $('.fa-magnifying-glass').toggleClass('d-none');
                    $('.fa-xmark').toggleClass('d-none');

                    if ($('.fa-magnifying-glass').hasClass('d-none')) {
                        $('#search-form').removeClass('search');
                        $('#search-form').addClass('search_alternative');
                    } else {
                        $('#search-form').addClass('search');
                        $('#search-form').removeClass('search_alternative');
                    }
                });
            });
            </script>



            <script>
            $('.car_btn').on("click", function() {
                var id = $(this).data('id');

                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('get_cart_detail'); ?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        if (response.status === 1) {
                            updateCartModal(response.whis);
                            updateCart();

                        } else if (response.status === 3) {
                            account();

                        } else {
                            alert("Failed to add item to Cart.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + error);
                        alert("An error occurred while processing your request.");
                    }
                });

            });

            function updateCartModal(cartData) {

                if (!cartData || typeof cartData !== 'object') {
                    console.error("Invalid Cart data");
                    return;
                }

                $('.modal-content').empty();
                if (cartData.ct_name && cartData.ct_image) {
                    $('.modal-content').append(
                        '<div class="wishlist_model row text-center mt-4 mb-5">' +
                        '<div class="col-md-4">' +
                        '<img src="assets/images/' + cartData.ct_image +
                        '" style="width:150px; height:140px;" alt="' + cartData.ct_name + '">' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<p><strong>' + cartData.ct_name + '</strong></p>' +
                        '<p><i class="fa-solid fa-circle-check"></i> Successfully added to your Cart</p>' +
                        '<div class="d-flex gap-2">' +
                        '<button class="cart_btn btn" id="explore_btn" onclick="viewCart()"><span class="text-nowrap"><b>View Cart</b></span></button>' +
                        '<button  class="cart_btn btn" id="explore_btn"><b><span>CheckOut</span></b></button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-2 text-end">' +
                        '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                        '</div>' +
                        '</div>'
                    );
                } else {
                    console.error("Invalid Cart item data");
                }

                $('#exampleModal').modal('show');
            }

            function viewCart() {
                window.location.href =
                    "<?php echo base_url('view_cart_page'); ?>";
            }
            </script>


            <script>
            function updateCart() {
                $.ajax({
                    url: '<?php echo base_url("get_cart_datas") ?>',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('.cart_body').empty();

                        if (data.cartlist.length === 0) {

                            $('.cart_body').append(
                                '<img src="assets/images/cart_empty.png" style="width:300px; height:250px;" alt="image">'
                            );
                            $('.sub_total p:last').html('<i class="fa-solid fa-indian-rupee-sign"></i>0');
                            return;
                        }

                        $.each(data.cartlist, function(index, cart) {
                            $('.cart_body').append(`
                        <div class="d-flex mt-4">
                            <p id="cart_body_icon" onclick="delete_cart(${cart.ct_id})"><i class="fa-solid fa-x"></i></p>
                            <img src="assets/images/${cart.ct_image}" style="width:120px; height:100px;" alt="${cart.ct_name}">
                            <div>
                                <input value="${cart.ct_id}" name="wl_id[]" class="wl_ids" hidden>
                                <p>${cart.ct_name}</p>
                                <p><i class="fa-solid fa-indian-rupee-sign"></i>${cart.ct_price}</p>
                                <p>
                                    <button class="reduce btn" onclick="reducefunction(${cart.ct_id})"><i class="fa-solid fa-minus"></i></button> 
                                    ${cart.ct_quantity} 
                                    <button class="increase btn" onclick="increasefunction(${cart.ct_id})"><i class="fa-solid fa-plus"></i></button> 
                                </p>
                            </div>
                        </div>
                    `);
                        });

                        $('.sub_total p:last').html(
                            `<i class="fa-solid fa-indian-rupee-sign"></i>${data.subtotal}`);
                        $('.cartlist_count b').text(data.count);
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                    }
                });
            }

            function reducefunction(ct_id) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('reduce_product_count');?>",
                    data: {
                        ct_id: ct_id
                    },
                    success: function(response) {
                        if (response.status === 1) {

                            if (response.ct_quantity !== 0 && response.ct_quantity !== null) {
                                updateCart();

                            } else {
                                delete_cart(response.ct_id);


                            }
                        } else {
                            console.error("Error: Could not reduce product count. Status: " + response
                                .status);
                            alert("Error: Could not reduce product count.");
                        }

                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                    }
                });
            }

            $(document).ready(function() {
                updateCart();

            });
            </script>


            <script>
            function reduceviewfunction(ct_id) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('reduce_count_in_view');?>",
                    data: {
                        ct_id: ct_id
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status === 1) {

                            if (response.ct_quantity !== 0 && response.ct_quantity !== null) {
                                updateCart();
                                updateViewModal(response.details, response.item, response.ct_quantity);

                            } else {
                                delete_cart(response.ct_id);
                                updateViewModal(response.details, response.item, response.ct_quantity);


                            }
                        } else {
                            console.error("Error: Could not reduce product count. Status: " + response
                                .status);
                            alert("Error: Could not reduce product count.");
                        }

                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                    }
                });

            }
            </script>
            <script>
            function increasefunction(ct_id) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url("increase_product_count") ?>",
                    data: {
                        ct_id: ct_id
                    },
                    dataType: "json",
                    success: function(response) {
                        // console.log(response.details);
                        // console.log(response.cart);
                        if (response.status == 1) {
                            updateCart();

                        }
                    }
                });
            }
            </script>

            <script>
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

                        }
                    }
                });
            }
            </script>

            <script>
            function add_to_cart(cartId) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('add_to_cart') ?>",
                    data: {
                        cartId: cartId
                    },
                    dataType: "json",

                    success: function(response) {
                        if (response.status === 1 || response.status === 2) {
                            updateViewModal(response.details, response.cart, response.quantity);
                            updateCart();

                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error);
                    }
                });
            }
            </script>

            <!-- viewCart -->
            <script>
            $('.view_btn').on("click", function() {
                var id = $(this).data('id');

                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('get_product_detail'); ?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {

                        if (response.status === 1) {
                            updateViewModal(response.details, response.cart);

                        } else {
                            alert("Failed to add item to Cart.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + error);
                        alert("An error occurred while processing your request.");
                    }
                });

            });

            function updateViewModal(viewData, cart, quant) {
                if (!viewData || typeof viewData !== 'object') {
                    console.error("Invalid viewData: ", viewData);
                    return;
                }

                $('.modal-content').empty();

                if (viewData.p_name && viewData.p_image) {
                    const quantity = cart && cart.ct_quantity == 1 ? 1 : 0;
                    const cartId = cart ? cart.ct_id : null;

                    $('.modal-content').append(`
            <div class="wishlist_model row text-center mt-4 mb-5">
                <div class="col-md-4">
                    <img src="assets/images/${viewData.p_image}" style="width:300px; height:300px;" alt="${viewData.p_name}">
                </div>
                <div class="col-md-6">
                    <p><strong>${viewData.p_name}</strong></p>
                    <p><strong><i class="fa-solid fa-indian-rupee-sign"></i> ${viewData.p_price}</strong></p>
                        <?php if($this->session->userdata('web_user_ref_id') != '') {?>
                    <div class="item_quantity">
                        <div class="inner_quantity">
                            <button class="reduce btn" onclick="reduceviewfunction(${cartId})">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </div>
                        <div class="mt-2">
    <p><b>${cartId === null ? '0' : (quantity === 1 ? '1' : (quantity >= 2 ? cart.ct_quantity + 1 : cart.ct_quantity ))}</b></p>
                        </div>  
                        <div class="inner_quantity">        
                            ${quantity === 0 
                                ? `<button class="add btn" onclick="add_to_cart(${viewData.p_id})">
                                    <i class="fa-solid fa-plus"></i>
                                   </button>`
                                : `<button class="add btn" onclick="add_to_cart(${cartId})">
                                    <i class="fa-solid fa-plus"></i>
                                   </button>`
                            }
                        </div>
                    </div>
                        <?php } ?>
                    <div style="display:flex;justify-content:center;flex-direction:column">
                       <a href="<?php echo base_url('view_cart_page') ?>"> <button class="cart_btn btn"
                                id="explore_btn"><span><b>View Cart</b></span></button></a>
                                <div class="add_to_whist">
                               <button type="button" style="background:none;"
                                         onclick ="whislistmodel(${viewData.p_id})"  mx-5" id="whist">
                                            <i class="fa-solid fa-heart mt-3"></i><p class=" mx-2 mt-3">Add To Whislist</p></button>
                                            </div>
                                            </div>
                </div>
                <div class="col-md-2 text-end"> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        `);
                } else {
                    console.error("Invalid product data: ", viewData);
                }

                $('#largeModal').modal('show');
            }
            </script>


            <!-- whishlist -->
            <script>
            $('.whist_btn').on("click", function() {
                var id = $(this).data('id');
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('get_whislist_detail'); ?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {

                        if (response.status === 1) {
                            updatewhistlistmodel(response.product);
                            updatewhislistcount();

                        } else if (response.status === 2) {
                            alert("Failed to add item to Cart.");
                        } else if (response.status === 3) {
                            AlreadyInWishlist();
                        } else {
                            account();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + error);
                        alert("An error occurred while processing your request.");
                    }
                });

            });

            function whislistmodel(id) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('get_whislist_detail'); ?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {

                        if (response.status === 1) {
                            updatewhistlistmodelalter(response.product);

                        } else if (response.status === 2) {
                            alert("Failed to add item to Cart.");
                        } else if (response.status === 3) {
                            AlreadyInWishlistalter();
                        } else {
                            account_alter();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + error);
                        alert("An error occurred while processing your request.");
                    }
                });
            }


            function updatewhistlistmodel(product) {
                if (!product || typeof product !== 'object') {
                    console.error("Invalid product data");
                    return;
                }

                $('.modal-content').empty();

                $('.modal-content').append(
                    '<div class="wishlist_model row text-center mt-4 mb-5">' +
                    '<div class="col-md-4">' +
                    '<img src="assets/images/' + product.p_image +
                    '" style="width:150px; height:140px;" alt="' + product.p_name + '">' +
                    '</div>' +
                    '<div class="col-md-6">' +
                    '<p><strong>' + product.p_name + '</strong></p>' +
                    '<p><i class="fa-solid fa-circle-check"></i> Successfully added to your Wishlist</p>' +
                    '<button class="view_whislist btn" id="explore_btn"><span>View Wishlist</span></button>' +
                    '</div>' +
                    '<div class="col-md-2 text-end">' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '</div>'
                );

                $('#exampleModal').modal('show');
            }
            </script>


            <!-- alreadyinwhislist -->
            <script>
            function AlreadyInWishlist() {
                $('.modal-content').empty();

                $('.modal-content').append(
                    '<div class="wishlist_model row text-center mt-4 mb-5">' +
                    '<div class="col-md-12 text-end">' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '<div class="col-md-12">' +
                    '<p><i style="color:red" class="fa-solid fa-circle-xmark"></i> <b>Sorry, this item is already added to your Wishlist</b></p>' +
                    '</div>' +
                    '<div class="col-md-12 text-center">' +
                    '<button class="view_whislist btn" id="explore_btn"><span>View Wishlist</span></button>' +
                    '</div>' +
                    '</div>'
                );


                $('#exampleModal').modal('show');
            }

            function AlreadyInWishlistalter() {
                $('.modal-content').empty();

                $('.modal-content').append(
                    '<div class="wishlist_model row text-center mt-4 mb-5">' +
                    '<div class="col-md-12 text-end">' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '<div class="col-md-12">' +
                    '<p><i style="color:red" class="fa-solid fa-circle-xmark"></i> <b>Sorry, this item is already added to your Wishlist</b></p>' +
                    '</div>' +
                    '<div class="col-md-12 text-center">' +
                    '<button class="view_whislist btn" id="explore_btn"><span>View Wishlist</span></button>' +
                    '</div>' +
                    '</div>'
                );


                // $('#exampleModal').modal('show');
            }
            </script>

            <script>
            function updatewhistlistmodelalter(product) {
                if (!product || typeof product !== 'object') {
                    console.error("Invalid product data");
                    return;
                }

                $('.modal-content').empty();

                $('.modal-content').append(
                    '<div class="wishlist_model row text-center mt-4 mb-5">' +
                    '<div class="col-md-4">' +
                    '<img src="assets/images/' + product.p_image +
                    '" style="width:150px; height:140px;" alt="' + product.p_name + '">' +
                    '</div>' +
                    '<div class="col-md-6">' +
                    '<p><strong>' + product.p_name + '</strong></p>' +
                    '<p><i class="fa-solid fa-circle-check"></i> Successfully added to your Wishlist</p>' +
                    '<button class="view_whislist btn" id="explore_btn"><span>View Wishlist</span></button>' +
                    '</div>' +
                    '<div class="col-md-2 text-end">' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '</div>'
                );


            }
            </script>
            <script>
            function whislist_btn_header() {
                $('#all_whistlist_model').modal("show");
            }

            $('#whislist_list').on('click', function() {
                window.location.href =
                    "<?php echo base_url('whislist_list') ?>";
            });


            function updatewhislistcount() {
                $.ajax({
                    type: "get",
                    url: "<?php echo base_url('get_whislist_datas')?>",
                    dataType: "json",
                    success: function(response) {
                        const totalCount = response.whislist.length;
                        $('.whislist_count b').text(totalCount);
                    }
                });
            }
            </script>
            <script>
            function account() {

                $('.modal-content').empty();

                $('.modal-content').append(
                    '<div class="account_cont ">' +
                    '<div class="text-end ">' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '<div class="account mb-5 mt-3">' +
                    '<div class="d-flex flex-column">' +
                    '<div class="">' +
                    '<button class="cart_btn btn" id="explore_btn" onclick="login_website()"><span class="text-nowrap"><b>Login</b></span></button>' +
                    '</div>' +
                    '<div class="">' +
                    '<button  class="cart_btn btn" id="explore_btn" onclick="create_account_page()"><b><span>SignUp</span></b></button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'

                );

                $('#exampleModal').modal('show');
            }




            function account_alter() {

                $('.modal-content').empty();

                $('.modal-content').append(
                    '<div class="account_cont ">' +
                    '<div class="text-end ">' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '<div class="account mb-5 mt-3">' +
                    '<div class="d-flex flex-column">' +
                    '<div class="">' +
                    '<button class="cart_btn btn" id="explore_btn" onclick="login_website()"><span class="text-nowrap"><b>Login</b></span></button>' +
                    '</div>' +
                    '<div class="">' +
                    '<button  class="cart_btn btn" id="explore_btn" onclick="create_account_page()"><b><span>SignUp</span></b></button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'

                );

                // $('#exampleModal').modal('show');
            }


            function login_website() {
                window.location.href =
                    "<?php echo base_url('login_website'); ?>";
            }

            function create_account_page() {
                window.location.href =
                    "<?php echo base_url('create_account_page'); ?>";
            }
            </script>

            <script>
            $('#email_input').on('submit', function(event) {
                event.preventDefault();
                var mailid = $('#email_input_box').val();
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('send_email_to_subscribe') ?>",
                    data: {
                        mailid: mailid
                    },
                    success: function(response) {

                        if (response == 1) {
                            $('#sub_err_msg').text("Please Give Valid Mail Id*");
                            $('#sub_err_msg').css('font-size', '13px');
                            $('#sub_err_msg').css('color', 'red');
                            $('#email_input_box').css('border', '2px solid red');
                        } else if (response == 2) {
                            $('#sub_err_msg').text(" ");
                            $('#sub_succ_msg').text("sent successfully !");
                            $('#sub_succ_msg').css('font-size', '13px');
                            $('#sub_succ_msg').css('color', 'green');
                            $('#email_input_box').val('');
                            $('#email_input_box').css('border', '2px  #D3D3D3 solid');
                            setTimeout(() => {
                                $('#sub_succ_msg').text(" ");
                                $('#email_input_box').css('border', '2px  #D3D3D3 solid');
                            }, 3000);
                        } else if (response == 3) {
                            $('#sub_err_msg').text("Database Error*");
                            $('#sub_err_msg').css('font-size', '13px');
                            $('#sub_err_msg').css('color', 'red');
                            setTimeout(() => {
                                $('#sub_err_msg').text(" ");
                                $('#email_input_box').css('border', '2px  #D3D3D3 solid');
                            }, 3000);

                        } else if (response == 4) {
                            $('#sub_err_msg').text("Already Subscribed*");
                            $('#sub_err_msg').css('font-size', '13px');
                            $('#sub_err_msg').css('color', 'red');
                            setTimeout(() => {
                                $('#sub_err_msg').text(" ");
                                $('#email_input_box').css('border', '2px  #D3D3D3 solid');
                            }, 3000);

                        } else {
                            $('#sub_err_msg').text("Please Enter Your MailId*");
                            $('#sub_err_msg').css('font-size', '13px');
                            $('#sub_err_msg').css('color', 'red');
                            setTimeout(() => {
                                $('#sub_err_msg').text(" ");
                                $('#email_input_box').css('border', '2px  #D3D3D3 solid');
                            }, 3000);
                        }
                    }
                });

            });
            </script>
            <script>
  $(document).ready(function() {
        $('#toggleUser ').on('click', function(event) {
            event.preventDefault(); 
            $('#user_list').toggle();
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#toggleUser ').length) {
                $('#user_list').hide(); 
            }
        });
    });
    
</script>
</body>

</html>