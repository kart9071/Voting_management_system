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
    include_once 'mysql.php';
    if (isset($_POST['submit'])) {
        $student_id=$_POST['student_id'];
        $name = $_POST['login_username'];
        $passwd = $_POST['login_password'];
        $query1 = $conn->query("SELECT USERNAME,PASSWORD FROM VOTERS WHERE USERNAME='$name'");
        $check2 = mysqli_num_rows($query1);
        if ($check2 == 0) {
    ?>
            <script>
                window.alert("The username is not found!!try with the correct username...");
                window.location.assign("http://localhost/Voting_management_system/Users_interface/Login.php");
            </script>

    <?php
            // header("Location:http://localhost/Voting_management_system/login1.php");
        } elseif ($query1->num_rows > 0) {
            while ($row = $query1->fetch_assoc()) {
                $password = $row['PASSWORD'];
                $username = $row['USERNAME'];
                if ($passwd == $password) {
                    session_start();
                    $_SESSION['student_id']=$student_id;
                    //   echo "Your password is correct";
                    header("Location:http://localhost/Voting_management_system/Users_interface/index1.php");
                }
            }
        }
        // $query2 = $conn->query("SELECT E.DEPARTMENT_ID FROM USERS E,VOTERS D WHERE E.STUDENT_ID=D.STUDENT_ID AND D.USERNAME='$name'");
        // if ($query2->num_rows > 0) {
        //     while ($row = $query2->fetch_assoc()) {
        //         $department_id = $row['DEPARTMENT_ID'];
        //         $_COOKIE['department_id']=$department_id;
        //     }
        // }
        
    }

    ?>
</body>

</html>