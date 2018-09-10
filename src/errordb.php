<?php 
if('POST' == $_SERVER['REQUEST_METHOD'])
{
			$conn = new mysqli("localhost","Password","Password","ID");
			If (!$conn)
				echo 'Failed to connect to Oracle';
			else
				#echo 'Succesfully connected with Oracle DB';
	
		#$result=mysqli_query($conn,"SELECT * FROM books ORDER BY lid ASC;");
		#$M= $_POST['manager'];
		
		$error =  $_POST["email"];
		$stid = "insert into error_table(errorname) values ('$error') ";
		$var = mysqli_query($conn, $stid);
		#m_execute($stid);
		if($var){
			header('Location: index.php'); //redirect
		}
}
								
?>