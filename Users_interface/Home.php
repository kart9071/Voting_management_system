<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
        }

        .button_g.button1 {
            position:absolute;
            color: blue;
            font-size: 20px;
            top: 100px;
            left: 977px;
        }

        .button_k.button2 {
            position: absolute;
            color: blue;
            font-size: 20px;
            top:100px;
            left:849px;
        }

        h1 {
            color: blue;
            font-size: 30px;
            text-align: center;
            /* padding-top: 100px; */
            top: 200px;
        }


    </style>
</head>

<body>
<p id="demo"><script>console.log(distance)</script></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 22, 2023 16:35:00").getTime();

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
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    window.location.assign("http://localhost/Voting_management_system/Users_interface/error.php")
    <?php
    include_once "mysql.php";
    $sql1=$conn->query("CREATE VIEW VOTE_RESULT AS SELECT CANDIDATES_NAME,PARTY_NAME FROM CANDIDATES WHERE ");
    ?>
  }
}, 1000);
</script>
    <div class="button_g">
        <a href="http://localhost/Voting_management_system/Users_interface/Login.php">
            <button class="button_g button1">login</button>
        </a>
    </div>
    <div class="button_k">
        <a href="http://localhost/Voting_management_system/Users_interface/Register1.php">
            <button class="button_k button2">Register</button>
        </a>
    </div>

    <h1>VOTING MANAGEMENT SYSTEM</h1>
</body>

</html>