<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="icon" href="<?php echo base_url('assets/images/leaf_logo.png') ?>" type="image/png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    * {
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.login-form h2 {
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input {
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

button {
    width: 100%;
    padding: 10px;
    background-color: #6a11cb;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #2575fc;
}

.message {
    margin-top: 15px;
    font-size: 14px;
    color: #777;
}

.message a {
    color: #6a11cb;
    text-decoration: none;
}

.message a:hover {
    text-decoration: underline;
}
</style>
<body>
<div class="login-container">
    <div class="alert alert-danger d-none" id="error">
             <h5 id="error_txt"></h5>
        </div>
        <div class="alert alert-success d-none" id="succ">
             <h5 id="succ_txt"></h5>
        </div>
        <form class="login-form" action="<?php echo base_url('login_into_website') ?>" id="loginForm" method="POST">
            <h2>Login</h2>
            <div class="form-group">
                <label for="emailOrNumber">Email</label>
                <input type="text" name="emailOrNumber" id="emailOrNumber" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p class="message">Not registered? <a href="<?php echo base_url('create_account_page') ?>">Create an account</a></p>
            <button type="button" class="btn btn" data-toggle="modal" data-target="#forgotPasswordModal">
  Forgot Password?
</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- The Modal -->
<div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="forgotPasswordForm">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">We'll send you a link to reset your password.</small>
          </div>
          <button type="submit" class="btn btn-primary">Send Reset Link</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
        $(document).ready(function() {
            $("#loginForm").submit(function(event) {
                event.preventDefault(); 

        var emailOrNumber = $('#emailOrNumber').val();
        var password = $('#password').val();
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url('login_into_website'); ?>", 
                    data: {
                        emailOrNumber: emailOrNumber,
                        password: password
                    },
                    success: function(response) {
                        if (response == 5) {
                            window.location.href = "<?php echo base_url('website'); ?>"; 
                        } else if(response == 6) {
                            $('#error').removeClass('d-none');
                            $('#error_txt').text('Incorrect password');
                            setTimeout(() => {
                            $('#error').addClass('d-none');
                            }, 3000);
                        } else if (response == 7) {
                            $('#error').removeClass('d-none');
                            $('#error_txt').text('User  not found Please check your email or number');
                            setTimeout(() => {
                            $('#error').addClass('d-none');
                            }, 3000);
                        } else if (response == 1) {
                            $('#error').removeClass('d-none');
                            $('#error_txt').text('Email or number is required');
                            setTimeout(() => {
                            $('#error').addClass('d-none');
                            }, 3000);
                        } else if (response == 2) {
                            $('#error').removeClass('d-none');
                            $('#error_txt').text('Password is required and must be at least 6 characters');
                            setTimeout(() => {
                            $('#error').addClass('d-none');
                            }, 3000);
                        } else {
                            alert("An error occurred. Please try again.");
                        }
                    },
                    error: function() {
                        alert("An error occurred while processing your request.");
                    }
                });
            });
        });
    </script>

</body>
</html>