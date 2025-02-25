<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
        /* body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        } */
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width:50%;
        
        }
        form{
            display:flex;
            flex-direction:column;
        }
        @media (max-width:750px){
            .container{
                width:80%;
                margin-left:50px;
            }
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<?php if($this->session->userdata('user_name')) {
       $user_name = $this->session->userdata('user_name');
       $email = $this->session->userdata('email');
        }?>
    <div class="container">
        <div class="alert alert-success d-none" id="succ_div"> 
            <h3 id="succ_txt" class="text-center"></h3>
        </div>
        <div class="alert alert-danger d-none" id="err_div"> 
            <h3 id="err_txt" class="text-center"></h3>
        </div>
        <h2>Change Password</h2>
        <form id="changePasswordForm" action="<?php echo base_url('change_password') ?>" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo   $email ?>">
                <div class="error" id="emailerror"></div>
            </div>
            <div class="form-group">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword">
                <div class="error" id="newPasswordError"></div>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm New Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                <div class="error" id="confirmPasswordError"></div>
            </div>
            <input type="submit" value="Change Password">
        </form>
    </div>

   
    <script>
    $(document).ready(function () {
        $('#changePasswordForm').on('submit', function(event) {
            event.preventDefault(); 
            var email = $('#email').val();
            var new_psd = $('#newPassword').val();
            var confirm_psd = $('#confirmPassword').val();
            var email_error = $("#emailerror");
            var newPasswordError = $("#newPasswordError");
            var confirmPasswordError = $("#confirmPasswordError");

            email_error.text('');
            newPasswordError.text('');
            confirmPasswordError.text('');

            $('#email').css('border', ''); 
            $('#newPassword').css('border', ''); 
            $('#confirmPassword').css('border', ''); 


            if (email === '') {
                email_error.text('Please enter your email id.');
                $('#email').css('border', '1px solid red');
                return; 
            } else if (email.length < 6) {
                email_error.text('Please enter at least six characters.');
                $('#email').css('border', '1px solid red');
                return; 
            }


            if (new_psd === '') {
                newPasswordError.text('Please enter a password.');
                $('#newPassword').css('border', '1px solid red');
                return; 
            } else if (new_psd.length < 6) {
                newPasswordError.text('Password must be at least 6 characters long.');
                $('#newPassword').css('border', '1px solid red');
                return; 
            }


            if (confirm_psd === '') {
                confirmPasswordError.text('Please confirm your password.');
                $('#confirmPassword').css('border', '1px solid red'); 
                return;
            } else if (new_psd !== confirm_psd) {
                confirmPasswordError.text('Passwords do not match.');
                $('#confirmPassword').css('border', '1px solid red'); 
                return;
            }


            $.ajax({
                type: "POST",
                url: "<?php echo base_url('change_password'); ?>",
                data: {
                    email: email,
                    newPassword: new_psd,
                    confirmPassword: confirm_psd
                },
                success: function (response) {
                    // console.log(response);
                  if(response == 1){
                   $("#succ_div").removeClass('d-none');
                   $("#succ_txt").text('UPDATED SUCCESSFULLY');
                   setTimeout(() => {
                   $("#succ_div").addClass('d-none');
                   }, 3000);
                  } else if(response == 2){
                    $("#err_div").removeClass('d-none');
                    $("#err_txt").text('UPDATE ERROR');
                   setTimeout(() => {
                   $("#err_div").addClass('d-none');
                   }, 3000);

                  } else if(){
                    $("#err_div").removeClass('d-none');
                    $("#err_txt").text('THIS MAIL ID NOT REGISTERED');
                   setTimeout(() => {
                   $("#err_div").addClass('d-none');
                   }, 3000);
                  }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while changing the password. Please try again.');
                }
            });
        });
    });
</script>
</body>
</html>