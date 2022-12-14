<?php
    include_once 'mysql.php';
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['confirm_pass'];
        $student_id = $_POST['student_id'];
        $query1 = "INSERT INTO VOTERS VALUES('$student_id','$username','$password')";
        if (mysqli_query($conn, $query1)) {
    ?>
            <script>
                window.alert("The data submitted successfully");
                window.location.assign("http://localhost/Voting_management_system/Users_interface/Login.php");
            </script>
    <?php
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		 * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ecf0f3;
        }

        .wrapper {
            max-width: 350px;
            min-height: 500px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 0.8rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #555;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 0.8rem;
            color: #666;
            padding: 10px 15px 10px 10px;
            /*border: 1px solid red; */
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }
        .wrapper a{
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
        .Register_1{
            padding-top: 50px;
        }
	</style>
</head>

<body>
	<form class="p-3 mt-3" method="post" action="loginpost.php">
	<div class="wrapper">
	<div class="logo">
            <img src="../images/council.jpeg" alt="">
        </div>
	<div class="text-center mt-4 name">
            VOTING MANAGEMENT SYSTEM
        </div>
		<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="text" name="login_username" id="login_usename" placeholder="Enter your username">
		</div>
		<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="password" name="login_password" id="login_password" placeholder="Enter your password">
		</div>
		<button class="btn mt-3" type="submit" name="submit">Login</button>
      <div class="Register_1">
        not have a account?
        <a href="http://localhost/Voting_management_system/Users_interface/Register1.php"> Register</a>
      </div>
	</div>
	</form>

	

</body>

</html>