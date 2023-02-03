<!DOCTYPE html>
<html>
  <head>
    <title>Time is over</title>
    <style>
      
      h1 {
        text-align: center;
        font-size: 36px;
        font-weight: bold;
        padding: 50px 0;
        color: burlywood;
      }
      
      .container {
        width: 50%;
        margin: 0 auto;
        text-align: center;
      }
      
      img {
        width: 300px;
        height: 300px;
        margin: 20px auto;
        display: block;
      }
      body {
            background-color: black;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <img src="../images/timeover.jpg" alt="Time is over">
      <h1>Time is over, you cannot vote</h1>
      <?php     
                // sleep(10000);
                include_once "mysql.php";
                $query1=$conn->query("SELECT CANDIDATES_NAME,MAX(NO_OF_VOTES) FROM CANDIDATES WHERE DEPARTMENT_ID=1");
                $query2=$conn->query("SELECT CANDIDATES_NAME,MAX(NO_OF_VOTES) FROM CANDIDATES WHERE DEPARTMENT_ID=2");
                $query3=$conn->query("SELECT CANDIDATES_NAME,MAX(NO_OF_VOTES) FROM CANDIDATES WHERE DEPARTMENT_ID=3");
                $query4=$conn->query("SELECT CANDIDATES_NAME,MAX(NO_OF_VOTES) FROM CANDIDATES WHERE DEPARTMENT_ID=4");
                if ($query1->num_rows > 0) {
                    while ($row = $query1->fetch_assoc()) {
                        $department_name1 = $row['CANDIDATES_NAME'];
            
                    }
                }
                if ($query2->num_rows > 0) {
                    while ($row = $query2->fetch_assoc()) {
                        $department_name2 = $row['CANDIDATES_NAME'];
            
                    }
                }
                if ($query3->num_rows > 0) {
                    while ($row = $query3->fetch_assoc()) {
                        $department_name3 = $row['CANDIDATES_NAME'];
            
                    }
                }
                if ($query4->num_rows > 0) {
                    while ($row = $query4->fetch_assoc()) {
                        $department_name4 = $row['CANDIDATES_NAME'];
            
                    }
                }
                $sql="INSERT INTO WINNER VALUES('$department_name1','$department_name2','$department_name3','$department_name4');";
                if (mysqli_query($conn, $sql)){
                    // echo "new record added successfully!!!";
                    // header("http://localhost/Voting_management_system/Users_interface/result.php");
                }
                else{
                    echo "there is an error!!..";
                }
                ?>
    </div>
  </body>
</html>
