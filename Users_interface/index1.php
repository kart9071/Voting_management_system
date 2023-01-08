<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Enter the student id: <input type="number" name="name">
submit: <input type="submit" name="submit">
<?php
include_once 'mysql.php';
if(isset($_POST['submit'])){
    $id=$_POST['name'];
    $query00=$conn->query("SELECT DEPARTMENT_ID FROM USERS WHERE STUDENT_ID='$id'");
    if($query00->num_rows>0){
        while($row = $query00->fetch_assoc()){
            $department_id=$row['DEPARTMENT_ID'];
        }
    }
    ?>
    <br>
    <?php
   if($department_id==1){
    echo "you are 1st department";
   }
}
?>
</form>    
</body>

</html>