<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
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
.toggle-password {
    cursor: pointer;
    color: #3498db;
    font-size: 0.9em;
    margin-top: 5px;
    display: inline-block;
}
#pass {
    position: relative;
}

#eye_icon {
    position: absolute;
    right: 10px;
    top: 50%;
}

#eye_icon i {
    font-size: 20px;
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
        <form class="login-form" action="<?php echo base_url('login_account') ?>" id="login_form" method="POST">
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group" id="pass">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span class="toggle-password" id="eye_icon"><i class="fa-solid fa-eye"></i><i
                class="fa-solid fa-eye-slash d-none"></i></span>
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
          <small class="form-text text-muted"></small>
        </form>
      </div>
    </div>
  </div>
</div>


    <script>
        $(document).ready(function () {
            $('#login_form').on('submit',function(event){
                event.preventDefault();
                var email = $('#email').val();
                var password = $('#password').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('login_account') ?>",
                data: {
                    email:email,
                    password:password
                },
                success: function (response) {
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
                }   else if (response == 5){
                    $('#succ').removeClass('d-none');
                  $('#succ_txt').text('Login Successfully');
                  $('#username').val('');
                  $('#email').val('');
                 $('#password').val('');
                  setTimeout(() => {
                    $('#succ').addClass('d-none');
                  },2000);
                  window.location.href = "<?php echo base_url('dasboard') ?>"; 
                }  else if (response == 6){
                    $('#error').removeClass('d-none');
                  $('#error_txt').text('Password not match');
                  setTimeout(() => {
                    $('#error').addClass('d-none');
                  },2000);
                }  else if (response == 7) {
                    $('#error').removeClass('d-none');
                  $('#error_txt').text('Username not match');
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
                }
            });
            });
            
        });
    </script>
<script>
  $(document).ready(function() {
    $('#forgotPasswordForm').on('submit', function(event) {
      event.preventDefault(); 

      var email = $('#email').val();

      $.ajax({
        url: '<?php echo base_url() ?>', 
        type: 'POST',
        data: { email: email },
        success: function(response) {
          alert('Password reset link sent to ' + email);
          $('#forgotPasswordModal').modal('hide'); 
        },
        error: function() {
          alert('Error sending password reset link. Please try again.');
        }
      });
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
</body>
</html>