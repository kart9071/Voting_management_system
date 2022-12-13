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
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['confirm_pass'];
        $student_id =$_POST['student_id'];
        $query1="INSERT INTO VOTERS VALUES('$student_id','$username','$password')";
        if(mysqli_query($conn,$query1)){
            ?>
            <script>
               window.alert("The data submitted successfully") 
            </script>
            <?php
    }
    }
    ?>
</body>
</html>