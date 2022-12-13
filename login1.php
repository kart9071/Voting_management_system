<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="login1_index.php">
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
			<input id="pass" type="password" name="pass" placeholder="Enter Password">
			</div>
		<span id="wrong_pass_alert"></span>
		<div class="buttons">
			<button id="create" type="submit" class="submit_btn" name="submit">
				Submit
			</button>
   
</body>
</html>