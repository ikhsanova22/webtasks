<?php
$usernames = ["Assem","ikhsanova05","sdu"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btn'])) {
        $username = $_POST['username'];
		$password1 = ($_POST['password1']);
		$password2 = ($_POST['password2']);
		$warnings = [];
		if(in_array($username,$usernames)){
			array_push($warnings,'Username already has reserved');
		}
		if($password1 != $password2){
			array_push($warnings,'Passwords needs to be same');
		}
		if(empty($password1)){
			array_push($warnings,'Password shouldnt be empty');
        }
        if(empty($password2)){
			array_push($warnings,'Repeat your password');
		}
		for($i = 0;$i < sizeof($warnings);$i++){
			echo '<p class = "error">'.($warnings[$i]).'</p>';
			echo '</br>';
		}
    }
}
?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
</style></head>
<body>
<form action="task9_1.php" method="post">
    <label>Username</label>
    <input type="text" name="username"></br>
    <label>Password</label>
    <input type="password" name="password1"></br>
    <label>Confirm Password</label>
	<input type="password" name="password2"></br>
	<input type="submit" name="btn"/>
</form>
</body>
</html>