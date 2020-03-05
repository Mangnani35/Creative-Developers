
<?php
	$email=$_POST['email'];
		$pass=$_POST['password'];
		
	if(!empty($email) || !empty($pass) )
	{
		 $servername="localhost";
		$username="root";
		$password="";
		$dbname="career";
		$conn =new mysqli($servername,$username,$password,$dbname);
		 if($conn->connect_error){
			 die('Connection Failed :'.$conn->connect_error);
		 }
		 else{
			 echo "Connection hogaya";
			 $stmt=$conn->prepare("insert into login ('email','password') values(?,?)");
			 $stmt->bind_param("ss",$email,$pass);
			 $stmt->execute();
			 $stmt->close();
			 $conn->close();
			 header("Location: student.html");

			
			 
		 }
		
		
		
	}
	else
	{
		echo "All required";
		die();
	}

?>