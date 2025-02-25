<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    width: 400px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s;
}

input:focus {
    border-color: #6a11cb;
    outline: none;
}

.toggle-password {
    cursor: pointer;
    color: #3498db;
    font-size: 0.9em;
    margin-top: 5px;
    display: inline-block;
}

.create {
    background-color: #6a11cb;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.create:hover {
    background-color: #2575fc;
}
#password{
    position:relative;
}
#eye_icon{
    position:absolute;
    right:10px; 
    top:50%;
}
#eye_icon i{
    font-size:20px;
}
.foot_buttons{
    display:flex;
    flex-direction:column;
    gap:10px;
}
</style>
<body>
    <div class="form-container">
        <div class="alert alert-danger d-none" id="error">
             <h5 id="error_txt"></h5>
        </div>
        <div class="alert alert-success d-none" id="succ">
             <h5 id="succ_txt"></h5>
        </div>
        <h2>Create Your Account</h2>
        <form action="<?php echo base_url('create_account') ?>" id="accountForm" method="POST">
            <div class="input-group">
                <label for="username"><b>Username</b></label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="email"><b>Email</b></label>
                <input type="email" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" >
                <span class="toggle-password" onclick="togglePassword()" id="eye_icon"><i class="fa-solid fa-eye"></i><i class="fa-solid fa-eye-slash d-none"></i></span>
            </div>
            <div class="foot_buttons">
            <button class="btn create" type="submit">Create Account</button>
            <div>
            <a href="<?php echo base_url('login') ?>" class="btn btn-primary">Login</a>
            </div>
 
            </div>
        </form>
    </div>
</body>
<script>
    $("#accountForm").on("submit", function(event) {
        event.preventDefault(); 

        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('create_account') ?>",
            data: {
                username: username,
                email: email,
                password: password
            },
            success: function (response) {
                // console.log(response);
                if (response == 1) {
                  $('#error').removeClass('d-none');
                  $('#error_txt').text('Username is invalid');
                  setTimeout(() => {
                    $('#error').addClass('d-none');
                  },2000);

                } else if (response == 2) {
                    $('#error').removeClass('d-none');
                  $('#error_txt').text('Email is invalid');
                  setTimeout(() => {
                    $('#error').addClass('d-none');
                  },2000);

                } else if (response == 3) {
                    $('#error').removeClass('d-none');
                  $('#error_txt').text('Password is invalid');
                  setTimeout(() => {
                    $('#error').addClass('d-none');
                  },2000);

                } else if (response == 4){
                    alert("Success: " + response);
                }   else if (response == 6){
                    $('#succ').removeClass('d-none');
                  $('#succ_txt').text('Account Created Successfully');
                  $('#username').val('');
                  $('#email').val('');
                 $('#password').val('');
                  setTimeout(() => {
                    $('#succ').addClass('d-none');
                  },2000);
                }  else if (response == 7){
                    $('#error').removeClass('d-none');
                  $('#error_txt').text('error occured');
                  setTimeout(() => {
                    $('#error').addClass('d-none');
                  },2000);
                }  else {
                    $('#error').removeClass('d-none');
                  $('#error_txt').text('Please Enter All Details');
                  setTimeout(() => {
                    $('#error').addClass('d-none');
                  },2000);
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error: " + status + ": " + error);
            }
        });
    });
</script>
<script>
$(document).ready(function() {
    $(".toggle-password").click(function() {
        const passwordField = $("#password");
        const toggleText = $(this);
        
        if (passwordField.attr("type") === "password") {
            passwordField.attr("type", "text");
           $('.fa-eye').addClass('d-none');
           $('.fa-eye-slash').removeClass('d-none');
        } else {
            passwordField.attr("type", "password");
            $('.fa-eye-slash').addClass('d-none');
           $('.fa-eye').removeClass('d-none');

        }
    });
});

</script>
</html>