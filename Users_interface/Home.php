<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body {
            background-image: url("../images/vote.jpg");
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        
        .header {
            text-align: center;
            padding: 50px;
            color: black;
        }
        
        .btn {
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: blue;
            color: white;
            cursor: pointer;
        }
    </style>

</head>

<body>
<script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 30, 2023 16:20:00").getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            //   console.log(distance);

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                window.location.assign("http://localhost/Voting_management_system/Users_interface/error.php");
                 }
        }, 1000);
    </script>
    <p id="demo">
    </p>
    <div class="header">
        <h1>Voting Management System</h1>
    </div>
    <div style="text-align: center; margin-top: 50px;">
        <a href="http://localhost/Voting_management_system/Users_interface/login.php">
            <button class="btn">Login</button>
        </a>
        <a href="http://localhost/Voting_management_system/Users_interface/Register1.php"> 
            <button class="btn">Register</button>
        </a>
    </div>
</body>
</html>