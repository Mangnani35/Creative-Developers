
<?php
	$email=$_POST['email'];
		$pass=$_POST['password'];
		$conpass=$_POST['confirm'];
	if(!empty($email) || !empty($pass) || !empty($conpass)  )
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
			 $stmt=$conn->prepare("insert into signin(email,password,confirm) values(?,?,?)");
			 $stmt->bind_param("sss",$email,$pass,$conpass);
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