<?php 
include_once "mysql.php";
if(isset($_POST['submit'])){
    $name=$_POST['Registration_name'];
    $ID=$_POST['Registration_id'];
    $phono=$_POST["Registration_phono"];
    $did=$_POST['Registration_did'];
    $dname=$_POST['Registration_dname'];
    
    $query1="INSERT INTO USERS(name,student_id,phono,department_id,department_name) VALUES('$name','$ID','$phono','$did','$dname')";
    if(mysqli_query($conn,$query1)){
            ?>
            <script>
               window.alert("The data submitted successfully") 
            </script>
            <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: rgb(50, 57, 78);
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.main {

			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			background-color: rgb(34, 34, 34);
			height: 400px;
			width: 300px;
			margin-top: 15%;
			border-radius: 10px;
			box-shadow: 2px 4px 6px rgb(0, 0, 0);
		}

		.pass {
			display: flex;
			flex-direction: column;
		}

		.image h2 {
			color:royalblue;
			font-size: 20px;
			margin-bottom: 50px;
		}

		.username input,
		.pass input {
			font-family: sans-serif;
			margin-bottom: 20px;
			height: 30px;
			border-radius: 100px;
			border: none;
			text-align: center;
			outline: none;
		}
		.student_id input{
			font-family: sans-serif;
			margin-bottom: 20px;
			height: 30px;
			border-radius: 100px;
			border: none;
			text-align: center;
			outline: none;
		}

		.submit_btn {
			height: 30px;
			width: 80px;
			border-radius: 100px;
			border: none;
			outline: none;
			background-color: rgb(0, 179, 95);
			margin-top: 15px;
		}

		.submit_btn:hover {
			background-color: rgba(0, 179, 95, 0.596);
			color: rgb(14, 14, 14);
			cursor: pointer;
		}
	</style>
</head>
<body>
<form method="post" action="login.php">
<div class="main">
		<div class="image">
			<h2>STUDENT COUNCIL</h2>
		</div>
		<div class="student_id">
                <input type="number" name="student_id"  placeholder="Enter student id">
            </div>
		<div class="username">
			<input type="text" name="username" placeholder="Create your username">
		</div>
		<div class="pass">
			<input id="pass" type="password" name="pass" placeholder="Enter Password" required"">
			<input id="confirm_pass" type="password" name="confirm_pass" placeholder="Confirm Password" required onkeyup="validate_password()">
		</div>
		<span id="wrong_pass_alert"></span>
		<div class="buttons">
			<button id="create" type="submit" class="submit_btn" name="submit" onclick="wrong_pass_alert()" action=>
				Submit
			</button>
            <script>
		function validate_password() {

			var pass = document.getElementById('pass').value;
			var confirm_pass = document.getElementById('confirm_pass').value;
			if (pass != confirm_pass) {
				document.getElementById('wrong_pass_alert').style.color = 'red';
				document.getElementById('wrong_pass_alert').innerHTML
				= '☒ Use same password';
				document.getElementById('create').disabled = true;
				document.getElementById('create').style.opacity = (0.4);
			} else {
				document.getElementById('wrong_pass_alert').style.color = 'green';
				document.getElementById('wrong_pass_alert').innerHTML =
					'🗹 Password Matched';
				document.getElementById('create').disabled = false;
				document.getElementById('create').style.opacity = (1);
			}
		}

		function wrong_pass_alert() {
			if (document.getElementById('pass').value != "" &&
				document.getElementById('confirm_pass').value != "") {
				alert("Your response is submitted");
			} else {
				alert("Please fill all the fields");
			}
		}
	</script>
		</div>
	</div>
</form>
	
</body>
</html>