<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {

            position: relative;
            width: 1440px;
            height: 1024px;
        }

        .vote11 {
            position: absolute;
            width: 344px;
            height: 139px;
            left: 132px;
            top: 166px;
        }

        .vote12 {
            position: absolute;
            width: 278px;
            height: 189px;
            left: 432px;
            top: 166px;
        }

        .vote13 {
            position: absolute;
            width: 278px;
            height: 189px;
            left: 145px;
            top: 452px;
        }

        .vote14 {

            position: absolute;
            width: 278px;
            height: 189px;
            left: 475px;
            top: 461px;
        }

        .vote11.candidate11 {
            position: absolute;
            width: 143px;
            height: 35px;
            left: -51px;
            top: -924px;
            /* background-color: lightgreen;
            font-size: 25px;
            color: darkblue; */

            /* filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)) drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)) */
        }

        .vote12.candidate12 {

            position: absolute;
            width: 143px;
            height: 35px;
            left: 0px;
            top: -924px;
            /* background-color: lightgreen;
            text-align: center;
            font-size: 25px;
            color: darkblue; */
            /* filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)) drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); */
        }

        .vote13.candidate13 {

            position: absolute;
            width: 143px;
            height: 35px;
            left: 0px;
            top: -904px;
            /* background-color: lightgreen;
            text-align: center;
            font-size: 25px;
            color: darkblue; */
        }

        .vote14.candidate14 {
            position: absolute;
            width: 143px;
            height: 35px;
            left: 0px;
            top: -921px;
            /* background-color: lightgreen;
            text-align: center;
            font-size: 25px;
            color: darkblue; */
        }

        .system {
            box-sizing: border-box;

            position: relative;
            width: 1440px;
            height: 124px;

            background: #FFFF00;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 2px;
            font-size: 36px;
            text-align: center;
            align-items: center;
            font-family: 'Times New Roman', Times, serif;
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
        <div class="vote11">
            <p>Candidate Name:<?php echo $candidate11?></p>
            <form action="indexpost.php" method="post">
                <input type="submit" name="submit11" class="vote11 candidate11" value="vote">
            </form>
        </div>    
        <div class="vote12">
        <p>Candidate Name:<?php echo $candidate12?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit12" class="vote12 candidate12" value="vote">
            </form>  
        </div>
        <div class="vote13">
        <p>Candidate Name:<?php echo $candidate13?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit13" class="vote13 candidate13" value="vote">
            </form>  
        </div>
        <div class="vote14">
        <p>Candidate Name:<?php echo $candidate14?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit14" class="vote14 candidate14" value="vote">
            </form>  
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
        <div class="vote11">
            <p>Candidate Name:<?php echo $candidate21?></p>
            <form action="indexpost.php" method="post">
                <input type="submit" name="submit21" class="vote11 candidate11" value="vote">
            </form>
        </div>    
        <div class="vote12">
        <p>Candidate Name:<?php echo $candidate22?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit22" class="vote12 candidate12" value="vote">
            </form>  
        </div>
        <div class="vote13">
        <p>Candidate Name:<?php echo $candidate23?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit23" class="vote13 candidate13" value="vote">
            </form>  
        </div>
        <div class="vote14">
        <p>Candidate Name:<?php echo $candidate24?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit24" class="vote14 candidate14" value="vote">
            </form>  
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
        <div class="vote11">
            <p>Candidate Name:<?php echo $candidate31?></p>
            <form action="indexpost.php" method="post">
                <input type="submit" name="submit31" class="vote11 candidate11" value="vote">
            </form>
        </div>    
        <div class="vote12">
        <p>Candidate Name:<?php echo $candidate32?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit32" class="vote12 candidate12" value="vote">
            </form>  
        </div>
        <div class="vote13">
        <p>Candidate Name:<?php echo $candidate33?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit33" class="vote13 candidate13" value="vote">
            </form>  
        </div>
        <div class="vote14">
        <p>Candidate Name:<?php echo $candidate34?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit34" class="vote14 candidate14" value="vote">
            </form>  
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
        <div class="vote11">
            <p>Candidate Name:<?php echo $candidate41?></p>
            <form action="indexpost.php" method="post">
                <input type="submit" name="submit41" class="vote11 candidate11" value="vote">
            </form>
        </div>    
        <div class="vote12">
        <p>Candidate Name:<?php echo $candidate42?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit42" class="vote12 candidate12" value="vote">
            </form>  
        </div>
        <div class="vote13">
        <p>Candidate Name:<?php echo $candidate43?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit43" class="vote13 candidate13" value="vote">
            </form>  
        </div>
        <div class="vote14">
        <p>Candidate Name:<?php echo $candidate44?></p>
        <form action="indexpost.php" method="post">
                <input type="submit" name="submit44" class="vote14 candidate14" value="vote">
            </form>  
        </div>
    <?php
    }

    session_destroy();
    ?>
</body>

</html>