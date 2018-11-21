<html>

<?php
extract($_POST); // decryption of data
// echo 'trying to sign in as '.$uname;
$db = mysqli_connect('localhost:3306','Dpk','dpksam@123','doggodopt');  //servername, username, pwd, dbname

if(isset($db)){
    echo "ccccc";
    $sql = "INSERT INTO adopt_table(userName, dogName,dogBday) VALUES (".$name.",".$dname.",".$email.",".$dbday.")";
	
	//$sql = "INSERT INTO adopt_table(userName, dogName,dogBday,breed, colour, gender,state,city, comments) VALUES (".$name.",".$dname.",".$email.",".$dbday.",".$breed.",".$colour.",".$gender.",".$state.",".$city.",".$cmmt.")";
	$res=mysqli_query($db,$sql);
    echo $res;
	// print($res);
	
    if($res){
        session_start();
	    $_SESSION['name'] = $name;
	    // $_SESSION['userEmail'] = $email;
	    echo "Thank you uploading $name"."<br>";
	    echo "<br>"."Go to <a href='index.html'>Home page</a>";
    }
	
		/*
		$arr = mysqli_fetch_array($res,MYSQLI_ASSOC);
		$item[1] = new Item();
		$item[1]->name = $arr["name"];
		*/

}
?>
</html>
