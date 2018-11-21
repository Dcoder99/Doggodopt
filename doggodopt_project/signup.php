<html>

<?php
extract($_POST); // decryption of data
// echo 'trying to sign in as '.$uname;
$db = mysqli_connect('localhost:3306','Dpk','dpksam@123','doggodopt');  //servername, username, pwd, dbname
if(isset($db)){

	
	$sql = "INSERT INTO signed_up_users(userName, userEmail, Password) VALUES ('".$uname."','".$email."','".$pwd."')";
	// echo $sql;
	$res=mysqli_query($db,$sql);
	// var_dump($res);
	session_start();
	$_SESSION['uname'] = $uname;
	echo "Thank you for signing in $uname"."<br>";
	echo "<br>"."Go to <a href='index.html'>Home page</a>";

}
?>
</html>
