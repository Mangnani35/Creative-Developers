	<?php
	$ans1=$_POST['ans1'];
	$ans2=$_POST['ans2'];
	$ans3=$_POST['ans3'];
	$ans4=$_POST['ans4'];
	if(!empty($ans1) || !empty($ans1) || !empty($ans1) || !empty($ans1) )
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
			 $stmt=$conn->prepare("insert into test(ans1,ans2,ans3,ans4) values(?,?,?,?)");
			 $stmt->bind_param("ssss",$ans1,$ans2,$ans3,$ans4);
			 $stmt->execute();
			 $stmt->close();
			 $conn->close();
			  header("Location: progress.html");
			 
		 }
		
		
		
	}
	else
	{
		echo "All required";
		die();
	}

?>