<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('../images/black.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .vote {
            display: inline-block;
            width: 200px;
            margin: 20px;
            text-align: left;
        }

        .vote img {
            width: 100%;
            /* border-radius: 50%; */
            margin-bottom: 10px;
        }

        .candidate11 {
            background-color: lightblue;
        }

        .candidate12 {
            background-color: lightgreen;
        }

        .candidate13 {
            background-color: lightcoral;
        }

        .candidate14 {
            background-color: lightyellow;
        }

        .button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            /* align-items: center; */
        }
    </style>
</head>

<body>
    <div class="system">
        Voting management system
    </div>
    <?php
    include_once "mysql.php";
    session_start();
    // echo $_SESSION['student_id'];
    $student_id = $_SESSION['student_id'];
    $query00 = $conn->query("SELECT DEPARTMENT_ID FROM USERS WHERE STUDENT_ID='$student_id'");
    if ($query00->num_rows > 0) {
        while ($row = $query00->fetch_assoc()) {
            $department_id = $row['DEPARTMENT_ID'];
            // echo $department_id;

        }
    }
    if ($department_id == 1) {
        $query11 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=1 AND PARTY_ID=1");
        $query12 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=1 AND PARTY_ID=2");
        $query13 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=1 AND PARTY_ID=3");
        $query14 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=1 AND PARTY_ID=4");
        if ($query11->num_rows > 0) {
            while ($row = $query11->fetch_assoc()) {
                $candidate11 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query12->num_rows > 0) {
            while ($row = $query12->fetch_assoc()) {
                $candidate12 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query13->num_rows > 0) {
            while ($row = $query13->fetch_assoc()) {
                $candidate13 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query14->num_rows > 0) {
            while ($row = $query14->fetch_assoc()) {
                $candidate14 = $row['CANDIDATES_NAME'];
            }
        }
        // echo $candidate11."<br>".$candidate12."<br>".$candidate13."<br>".$candidate14;
    ?>
        <div class="container">
            <div class="vote candidate11">
                <img src="../images/candidate1.png" alt="candidate11">
                <h2><?php echo $candidate11 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit11" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate12">
                <img src="../images/candidate1.png" alt="candidate12">
                <h2><?php echo $candidate12 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit12" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate13">
                <img src="../images/candidate1.png" alt="candidate13">
                <h2><?php echo $candidate13 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit13" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate14">
                <img src="../images/candidate1.png" alt="candidate14">
                <h2><?php echo $candidate14 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit14" class="button" value="vote">
                </form>
            </div>
        </div>
    <?php
    }
    if ($department_id == 2) {
        $query21 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=2 AND PARTY_ID=1");
        $query22 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=2 AND PARTY_ID=2");
        $query23 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=2 AND PARTY_ID=3");
        $query24 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=2 AND PARTY_ID=4");
        if ($query21->num_rows > 0) {
            while ($row = $query21->fetch_assoc()) {
                $candidate21 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query22->num_rows > 0) {
            while ($row = $query22->fetch_assoc()) {
                $candidate22 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query23->num_rows > 0) {
            while ($row = $query23->fetch_assoc()) {
                $candidate23 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query24->num_rows > 0) {
            while ($row = $query24->fetch_assoc()) {
                $candidate24 = $row['CANDIDATES_NAME'];
            }
        }
        //echo $candidate21 . "<br>" . $candidate22 . "<br>" . $candidate23 . "<br>" . $candidate24;
    ?>
         <div class="container">
            <div class="vote candidate11">
                <img src="../images/candidate1.png" alt="candidate11">
                <h2><?php echo $candidate21 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit21" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate12">
                <img src="../images/candidate1.png" alt="candidate12">
                <h2><?php echo $candidate22 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit22" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate13">
                <img src="../images/candidate1.png" alt="candidate13">
                <h2><?php echo $candidate23 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit23" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate14">
                <img src="../images/candidate1.png" alt="candidate14">
                <h2><?php echo $candidate24 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit24" class="button" value="vote">
                </form>
            </div>
        </div>
    <?php

    }
    if ($department_id == 3) {
        $query31 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=3 AND PARTY_ID=1");
        $query32 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=3 AND PARTY_ID=2");
        $query33 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=3 AND PARTY_ID=3");
        $query34 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=3 AND PARTY_ID=4");
        if ($query31->num_rows > 0) {
            while ($row = $query31->fetch_assoc()) {
                $candidate31 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query32->num_rows > 0) {
            while ($row = $query32->fetch_assoc()) {
                $candidate32 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query33->num_rows > 0) {
            while ($row = $query33->fetch_assoc()) {
                $candidate33 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query34->num_rows > 0) {
            while ($row = $query34->fetch_assoc()) {
                $candidate34 = $row['CANDIDATES_NAME'];
            }
        }
        // echo $candidate31 . "<br>" . $candidate32 . "<br>" . $candidate33 . "<br>" . $candidate34;
    ?>
        <div class="container">
            <div class="vote candidate11">
                <img src="../images/candidate1.png" alt="candidate11">
                <h2><?php echo $candidate31 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit31" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate12">
                <img src="../images/candidate1.png" alt="candidate12">
                <h2><?php echo $candidate32 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit32" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate13">
                <img src="../images/candidate1.png" alt="candidate13">
                <h2><?php echo $candidate33 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit33" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate14">
                <img src="../images/candidate1.png" alt="candidate14">
                <h2><?php echo $candidate34 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit34" class="button" value="vote">
                </form>
            </div>
        </div>
    <?php


    }
    if ($department_id == 4) {
        $query41 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=4 AND PARTY_ID=1");
        $query42 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=4 AND PARTY_ID=2");
        $query43 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=4 AND PARTY_ID=3");
        $query44 = $conn->query("SELECT CANDIDATES_NAME FROM CANDIDATES WHERE DEPARTMENT_ID=4 AND PARTY_ID=4");
        if ($query41->num_rows > 0) {
            while ($row = $query41->fetch_assoc()) {
                $candidate41 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query42->num_rows > 0) {
            while ($row = $query42->fetch_assoc()) {
                $candidate42 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query43->num_rows > 0) {
            while ($row = $query43->fetch_assoc()) {
                $candidate43 = $row['CANDIDATES_NAME'];
            }
        }
        if ($query44->num_rows > 0) {
            while ($row = $query44->fetch_assoc()) {
                $candidate44 = $row['CANDIDATES_NAME'];
            }
        }
        // echo $candidate41 . "<br>" . $candidate42 . "<br>" . $candidate43 . "<br>" . $candidate44;
    ?>
 <div class="container">
            <div class="vote candidate11">
                <img src="../images/candidate1.png" alt="candidate11">
                <h2><?php echo $candidate41 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit41" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate12">
                <img src="../images/candidate1.png" alt="candidate12">
                <h2><?php echo $candidate42 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit42" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate13">
                <img src="../images/candidate1.png" alt="candidate13">
                <h2><?php echo $candidate43 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit43" class="button" value="vote">
                </form>
            </div>
            <div class="vote candidate14">
                <img src="../images/candidate1.png" alt="candidate14">
                <h2><?php echo $candidate44 ?></h2>
                <form action="indexpost.php" method="post">
                    <input type="submit" name="submit44" class="button" value="vote">
                </form>
            </div>
        </div>
    <?php
    }

    session_destroy();
    ?>
</body>

</html>