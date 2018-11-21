<html>

<?php
extract($_POST);

$db = mysqli_connect('localhost:3306','Dpk','dpksam@123','doggodopt'); 
if(isset($db)){


	$stmt_1 = "SELECT * FROM signed_up_users where userName='".$uname."'and password='".$pwd."'"; 
	$stmt_2 = "SELECT * FROM signed_up_users where userName='".$uname."'or password='".$pwd."'"; 
	$res_1=mysqli_query($db,$stmt_1);
	$res_2=mysqli_query($db,$stmt_2);

	if (mysqli_num_rows($res_2)>0 and mysqli_num_rows($res_1)==0){
		echo "Either username or password is incorrect. Click <a href='signup.html'>here</a> to retry"; 
	}

	if(mysqli_num_rows($res_1)>0){

		session_start();
		$_SESSION['uname'] = $uname;
		echo "Login successful. Welcome $uname!"."<br/>";
		echo "<br/>"."Go to <a href='logged_in_index.html'>Home page</a>";
	
	}
	else if(mysqli_num_rows($res_1)==0 and mysqli_num_rows($res_2)==0){
	echo $uname. "you dont have an account with us yet. Would you like to sign up?<a href='signup.html'>Yes</a>  <a href='index.html'>No</a>";
	}
}
?>
</html>
