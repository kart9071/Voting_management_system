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
    $query1=$conn->query("SELECT CANDIDATES_NAME,CANDIDATES_ID,PARTY_NAME FROM CANDIDATES");
    if ($query1->num_rows > 0) {
        while ($row = $query1->fetch_assoc()){
            $name=$row["CANDIDATES_NAME"];
            $id=$row["CANDIDATES_ID"];
            $party_name=$row["PARTY_NAME"];
            echo $name."<br>".$id."<br>".$party_name."<br>";
        }
    }
    ?>
</body>
</html>