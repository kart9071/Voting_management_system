<?php
        include_once "mysql.php";
        if(isset($_POST['submit'])){
            $name=$_POST['username'];
            $passwd=$_POST['pass']; 
            $query1 = $conn->query("SELECT PASSWORD FROM VOTERS WHERE USERNAME='$name' "); 
            if($query1->num_rows > 0){
                while($row = $query1->fetch_assoc()){
                    $password=$row['PASSWORD'];
                 
                }
            }
            echo $password;
         
          
        }
        ?>