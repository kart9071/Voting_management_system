<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style1.css" type="text/css">
</head>

<body>
    <div class="wrapper">
    <form class="p-3 mt-3" method="post" >
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="password" placeholder="Enter your name">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Enter your password">
            </div>
            <button class="btn mt-3" type="submit" name="submit">Register</button>

    </form>
    </div>

    <?php
    include_once "../Users_interface/mysql.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $passwd = $_POST['password'];
        $realname = 'karthik';
        $realpassword = 'karthik@123';
        if ($name == $realname and $passwd == $realpassword) {
    ?>
            <script>
                window.location.assign("http://localhost/Voting_management_system/backend_user_interface/Entry.php");
            </script>
    <?php
        } else {
            echo "your password is wrong...";
        }
    }
    ?>

</html>