<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <style>
        /* Importing fonts from Google */

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        /* Reseting */
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="../images/council.jpeg" alt="">
        </div>
        <div class="text-center mt-4 name">
            VOTING MANAGEMENT SYSTEM
        </div>
        <form class="p-3 mt-3" method="post" action="Register2.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="Registration_name" id="Registration_name" placeholder="Enter your name">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="number" name="Registration_id" id="Registration_id" placeholder="Enter student id">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="tel" name="Registration_phono" id="Registration_phono" placeholder="Enter student phone number">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="number" name="Registration_did" id="Registration_did" placeholder="Enter student Department ID">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="Registration_dname" id="Registration_dname" placeholder="Enter student Department name">
            </div>
            <button class="btn mt-3" type="submit" name="submit">Register</button>
            <div class="login_1">
                already have a account?
                <a href="http://localhost/Voting_management_system/Users_interface/login.php">Login</a>
            </div>
        </form>
    </div>
</body>

</html>