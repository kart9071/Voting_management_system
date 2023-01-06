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
    // include 'Register2.php';
    // echo $did;
    session_start();

        if ($_SESSION["Registration_id"] == 1) {
            //$q1=$conn->query("SELECT candidates_name from candidates");
            $query11 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=1 AND DEPARTMENT_ID=1");
            if ($query11->num_rows > 0) {
                while ($row = $query11->fetch_assoc()) {
                    $candidate11 = $row["CANDIDATES_NAME"];
                    $party_name_11 = $row["PARTY_NAME"];
                }
            }
            $query21 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=2 AND DEPARTMENT_ID=1");
            if ($query21->num_rows > 0) {
                while ($row = $query21->fetch_assoc()) {
                    $candidate21 = $row["CANDIDATES_NAME"];
                    $party_name_21 = $row["PARTY_NAME"];
                }
            }
            $query31 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=3 AND DEPARTMENT_ID=1");
            $query41 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=4 AND DEPARTMENT_ID=1");
            if ($query31->num_rows > 0) {
                while ($row = $query31->fetch_assoc()) {
                    $candidate31 = $row["CANDIDATES_NAME"];
                    $party_name_31 = $row["PARTY_NAME"];
                }
            }
            if ($query41->num_rows > 0) {
                while ($row = $query41->fetch_assoc()) {
                    $candidate41 = $row["CANDIDATES_NAME"];
                    $party_name_41 = $row["PARTY_NAME"];
                }
            }
            echo $candidate11 . $candidate21 . $candidate31 . $candidate41;
        }
        if ($_SESSION['Registration_id'] == 2) {
            $query12 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=5 AND DEPARTMENT_ID=2");
            $query22 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=6 AND DEPARTMENT_ID=2");
            $query32 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=7 AND DEPARTMENT_ID=2");
            $query42 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=8 AND DEPARTMENT_ID=2");
            if ($query12->num_rows > 0) {
                while ($row = $query1->fetch_assoc()) {
                    $candidate12 = $row['CANDIDATES_NAME'];
                    $party_name_12 = $row['PARTY_NAME'];
                }
            }
            if ($query22->num_rows > 0) {
                while ($row = $query2->fetch_assoc()) {
                    $candidate22 = $row['CANDIDATES_NAME'];
                    $party_name_22 = $row['PARTY_NAME'];
                }
            }
            if ($query32->num_rows > 0) {
                while ($row = $query3->fetch_assoc()) {
                    $candidate32 = $row['CANDIDATES_NAME'];
                    $party_name_32 = $row['PARTY_NAME'];
                }
            }
            if ($query42->num_rows > 0) {
                while ($row = $query4->fetch_assoc()) {
                    $candidate42 = $row['CANDIDATES_NAME'];
                    $party_name_42 = $row['PARTY_NAME'];
                }
            }
            echo $candidate12 . $candidate22 . $candidate32 . $candidate42;
        }
        // echo $candidate1."<br>".$candidate2;
        if ($_SESSION['Registration_id'] == 3) {
            $query13 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=9 AND DEPARTMENT_ID=3");
            $query23 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=10 AND DEPARTMENT_ID=3");
            $query33 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=11 AND DEPARTMENT_ID=3");
            $query43 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=12 AND DEPARTMENT_ID=3");
            if ($query13->num_rows > 0) {
                while ($row = $query13->fetch_assoc()) {
                    $candidate13 = $row['CANDIDATES_NAME'];
                    $party_name_13 = $row['PARTY_NAME'];
                }
            }
            if ($query23->num_rows > 0) {
                while ($row = $query23->fetch_assoc()) {
                    $candidate23 = $row['CANDIDATES_NAME'];
                    $party_name_23 = $row['PARTY_NAME'];
                }
            }
            if ($query33->num_rows > 0) {
                while ($row = $query33->fetch_assoc()) {
                    $candidate33 = $row['CANDIDATES_NAME'];
                    $party_name_33 = $row['PARTY_NAME'];
                }
            }
            if ($query43->num_rows > 0) {
                while ($row = $query43->fetch_assoc()) {
                    $candidate43 = $row['CANDIDATES_NAME'];
                    $party_name_43 = $row['PARTY_NAME'];
                }
            }
            echo $candidate13 . $candidate23 . $candidate33 . $candidate43;
        }
        if ($_SESSION['Registration_id'] == 4) {
            $query14 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=13 AND DEPARTMENT_ID=4");
            $query24 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=14 AND DEPARTMENT_ID=4");
            $query34 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=15 AND DEPARTMENT_ID=4");
            $query44 = $conn->query("SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE CANDIDATES_ID=16 AND DEPARTMENT_ID=4");
            if ($query14->num_rows > 0) {
                while ($row = $query14->fetch_assoc()) {
                    $candidate14 = $row['CANDIDATES_NAME'];
                    $party_name_14 = $row['PARTY_NAME'];
                }
            }
            if ($query24->num_rows > 0) {
                while ($row = $query24->fetch_assoc()) {
                    $candidate24 = $row['CANDIDATES_NAME'];
                    $party_name_24 = $row['PARTY_NAME'];
                }
            }
            if ($query34->num_rows > 0) {
                while ($row = $query34->fetch_assoc()) {
                    $candidate34 = $row['CANDIDATES_NAME'];
                    $party_name_34 = $row['PARTY_NAME'];
                }
            }
            if ($query44->num_rows > 0) {
                while ($row = $query44->fetch_assoc()) {
                    $candidate44 = $row['CANDIDATES_NAME'];
                    $party_name_44 = $row['PARTY_NAME'];
                }
            }
            echo $candidate14 . $candidate24 . $candidate34 . $candidate44;
        }
    ?>
</body>

</html>