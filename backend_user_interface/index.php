<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Youre a backend user then
    <form method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" name="submit">
    </form>
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
        }
        else{
            echo "your password is wrong...";
        }
    }
    ?>

</html>