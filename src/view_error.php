<!DOCTYPE html>
<html lang="en">
<link href="css/style2.css" rel="stylesheet">
</head>

<body>
  <table>
  <thead>
	<tr>
      <th>Error No</th>
      <th>Description</th>
    </tr>
	<ul style="list-style: none;">
	<li><a href = "index.php">HOME</a></li>
	</ul>
  </thead>
  
   <?php 
			print "<tbody>";
			$conn = new mysqli("localhost","Password","Password","ID");
			If (!$conn)
				echo 'Failed to connect to Oracle';
			else
				#echo 'Succesfully connected with Oracle DB';
	
		$stid = "SELECT * FROM error_table";
		$var = mysqli_query($conn, $stid);
		$flag=0;
		while($row = mysqli_fetch_array($var,MYSQLI_BOTH))
		{  //if a table is returned, display the table 
          	print "<table border=2>";
                 print "<tr>";
                    print "<td><strong>$row[0]</strong></td>";
					print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					print "<td><strong>$row[1]</strong></td>";		
                 print "</tr>";
			$flag=1;
		} 
	print "</tbody>";				
?>
  
</table>
</body>
</html>
