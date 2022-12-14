<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "mysql.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['login_username'];
        $passwd = $_POST['login_password'];
        $query1 = $conn->query("SELECT USERNAME,PASSWORD FROM VOTERS WHERE USERNAME='$name' ");
        $check2 = mysqli_num_rows($query1);
        if ($check2 == 0) {
    ?>
            <script>
                window.alert("The data is incorrect");
                window.location.assign("http://localhost/Voting_management_system/Login1.php");
            </script>

    <?php
    // header("Location:http://localhost/Voting_management_system/login1.php");
        } elseif ($query1->num_rows > 0) {
            while ($row = $query1->fetch_assoc()) {
                $password = $row['PASSWORD'];
                $username = $row['USERNAME'];
                if ($passwd == $password) {
                  echo "Your password is correct";
                }
            }
        }
    }
    ?>
</body>

</html>