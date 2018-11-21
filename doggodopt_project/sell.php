<html>

<?php
extract($_POST); // decryption of data
// echo 'trying to sign in as '.$uname;
$db = mysqli_connect('localhost:3306','Dpk','dpksam@123','doggodopt');  //servername, username, pwd, dbname
if(isset($db)){
    $sql = "INSERT INTO `sell1`(`userName`, `userMobile`, `userEmail`, `breed`,`age`, `size`, `colour`, `price`, `state`, `city`) VALUES ('".$uname."', '".$usrtel."','".$email."','".$breed."','".$age."','".$size."','".$colour."','".$price."','".$state."','".$city."')";
    // echo $sql;
	$res=mysqli_query($db,$sql);
    // var_dump($res);

    session_start();
    if($res){
        echo "Data upload successful! Your dog is up for sale!"."<br>";
    }
	else{
        "Sorry, we couldnt finish the upload. Please contact doggodopt@gmail.com if the problem persists.";
    }
	echo "<br>"."Go to <a href='index.html'>Home page</a>";
}

?>
</html>
