<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $upi_no = $_POST['upi_no'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //save to database
        $user_id = random_num(20);
        $query = "insert into upi_user (user_id,user_name,password,upi_id) values('$user_id','$user_name','$password','$upi_no')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streampix India - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="icon" type="image/x-icon" href="android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="pay.css?v=<?php echo time(); ?>">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

</head>

<body>
    <div class="step1">
        <div class="navbar">
            <div class="navbar_left">
                <img src="Xfinity-Streampix-Logotype-696x392-removebg-preview.png" alt="logo" class="logo">
            </div>
            <div class="navbar_right">
                <a href="login.php" style="text-decoration:none;color:#000;"> <button class="btn">Log </button></a>
            </div>
            <hr>
        </div>
        <a href="step3.php" class="previous" style="
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;"><button style=" background-color: #f1f1f1;
    color: black;
    width:80px;
    height:40px;
    background:none;
    cursor: pointer;">&laquo; Back</button></a>
        <div class="content">
            <div class="content_details">
                <form action="" method="post">
                    <table>
                        <tr>
                            <h5>STEP 3.2 of 3</h5>
                        </tr>
                        <tr>
                            <h2>Set up UPI AutoPay</h2>
                        </tr>
                        <tr>
                            <p>You can change this recurring payment at any <br> time in your settings.</p>
                        </tr>
                        <tr><button class="text">
                                <h2><i class="fa fa-cc-paypal" style="color:blue;">PAYPAL</i></h2>
                            </button></tr><br><br>


                        <tr>
                            <div>
                                <input type="text" placeholder="Name" name="user_name" id="form_fname" class="text">
                                <span class="error_form" id="fname_error_message"></span>
                            </div>
                        </tr><br>
                        <tr>
                            <div>
                                <input type="text" placeholder="password" name="password" id="form_password" class="text" required="">
                                <span class="error_form" id="password_error_message"></span>
                            </div>
                        </tr><br>
                        <tr>
                            <div>
                                <input type="text" id="form_email" placeholder="UPI id" name="upi_no" class="text" required="">
                                <span class="error_form" id="email_error_message"></span>
                            </div>
                        </tr>
                        <a href="#">
                            <p> How do I find my UPI ID?</p>
                        </a>
                        <tr>
                            <div><br><input type="text" class="text"></div>
                        </tr><br>
                        <tr><input type="submit" value="Start Membership" class="text btnstart"></tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function() {

            $("#fname_error_message").hide();
            $("#sname_error_message").hide();
            $("#sname_error_messag").hide();
            $("#email_error_message").hide();
            $("#password_error_message").hide();
            $("#retype_password_error_message").hide();
            var error_fname = false;
            var error_sname = false;
            var error_email = false;
            var error_password = false;
            var error_retype_password = false;
            $("#form_fname").focusout(function() {
                check_fname();
            });
            $("#form_sname").focusout(function() {
                check_sname();
            });
            $("#form_email").focusout(function() {
                check_email();
            });
            $("#form_password").focusout(function() {
                check_password();
            });
            $("#form_retype_password").focusout(function() {
                check_retype_password();
            });

            function check_fname() {
                var pattern = /^[a-zA-Z]*$/;
                var fname = $("#form_fname").val();
                if (pattern.test(fname) && fname !== '') {
                    $("#fname_error_message").hide();
                    $("#form_fname").css("border-bottom", "2px solid #34F458");
                } else {
                    $("#fname_error_message").html("Should contain only Characters");
                    $("#fname_error_message").show();
                    $("#form_fname").css("border-bottom", "2px solid #F90A0A");
                    error_fname = true;
                }
            }

            function check_sname() {
                var pattern = /^[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}$/;
                var sname = $("#form_sname").val()
                if (pattern.test(sname) && sname !== '') {
                    $("#sname_error_message").hide();
                    $("#form_sname").css("border-bottom", "2px solid #34F458");
                } else {
                    $("#sname_error_message").html("Invalid Aadhar Number");
                    $("#sname_error_message").show();
                    $("#form_sname").css("border-bottom", "2px solid #F90A0A");
                    error_sname = true;
                }
            }

            function check_password() {
                var password_length = $("#form_password").val().length;
                if (password_length < 8) {
                    $("#password_error_message").html("Atleast 8 Characters");
                    $("#password_error_message").show();
                    $("#form_password").css("border-bottom", "2px solid #F90A0A");
                    error_password = true;
                } else {
                    $("#password_error_message").hide();
                    $("#form_password").css("border-bottom", "2px solid #34F458");
                }
            }

            function check_retype_password() {
                var password_length = $("#form_retype_password").val().length;
                if (password_length < 4) {
                    $("#retype_password_error_message").html("Atleast 3 Characters");
                    $("#retype_password_error_message").show();
                    $("#form_retype_password").css("border-bottom", "2px solid #F90A0A");
                    error_password = true;
                } else {
                    $("#retype_password_error_message").hide();
                    $("#form_retype_password").css("border-bottom", "2px solid #34F458");
                }
            }

            function check_email() {
                var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var email = $("#form_email").val();
                if (pattern.test(email) && email !== '') {
                    $("#email_error_message").hide();
                    $("#form_email").css("border-bottom", "2px solid #34F458");
                } else {
                    $("#email_error_message").html("Enter UPI");
                    $("#email_error_message").show();
                    $("#form_email").css("border-bottom", "2px solid #F90A0A");
                    error_email = true;
                }
            }
        });
    </script>
</body>

</html>