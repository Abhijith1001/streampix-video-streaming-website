<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
    <link rel="stylesheet" href="si.css">
</head>

<body>
    <div class="full">
        <div class="top ">
            <div class="top-left">
                <img id="logo" src="img5/Xfinity-Streampix-Logotype-696x392-removebg-preview.png" alt="logo">
            </div>

            <div class="top-right">
                <button type="button" class="btn_log"><a href="step1.php" style="text-decoration:none;color:#fff;">Sign In</a></button>
            </div>
        </div>

        <main>
            <div class="bg_img ">
                <img src="img5/background.jpg" alt="bg_img" class="bg">
            </div>
            <div class="bg_overlay"></div>

            <div class="box">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>
                                <h1>Log In</h1>
                            </td>
                        </tr><br>
                        <tr>
                            <td> <input type="text" placeholder="Email or Phone number" name="user_name" class="field"></td>
                        </tr><br>
                        <tr>
                            <td> <input type="password" placeholder="Password" name="password" class="field"></td>
                        </tr>
                        <tr>
                            <td> <input type="submit" value="Log In" id="btn" class="field"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox">Remember me</td>
                            <td id="help">Need help?</td>
                        </tr>
                    </table>
                    <br><br><br>
                    <div class="new">
                        <h5>New to Streampix?</h5>
                        <button id="btn2"><a href="step1.php" style="text-decoration:none;color:#fff;"> Sign up now</a></button><br><br>
                        <p>This page is protected by Google reCAPTCHA to ensure you're not a bot. <span
                                style="color: blue;"> Learn more.</span></p>
                    </div>
                </form>
            </div>
        </main>

    </div>

</body>

</html>