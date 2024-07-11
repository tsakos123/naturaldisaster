<html>

<head>

<link rel="stylesheet" href="mystyle.css">

</head>

<body>

<?php

include 'connect.php';

$name = $_POST['name'];
$last_name  = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$username = $_POST['username'];
$password = $_POST['password'];
$insert = "INSERT INTO register_new_civilian VALUES ('$name','$last_name','$phone_number','$username','$password',0)";


if($conn->query($insert)===TRUE)
	
	{
		echo "You registered with success!";
		
		
		
		echo "<br><br>";
		
		echo "<table border='1'>";
		
			echo "<tr>";
			
			echo "<td>";
			
			echo "Name:";
			
			echo "</td>";
			
			echo "<td>";
			
			echo $name;
			
			echo "</td>";
			
			echo "</tr>";
			
			
			echo "<tr>";
			
			echo "<td>";
			
			echo "Last Name:";
			
			echo "</td>";
			
			echo "<td>";
			
			echo $last_name;
			
			echo "</td>";
			
			echo "</tr>";
			
			echo "<tr>";
			
			echo "<td>";
			
			echo "Phone number:";
			
			echo "</td>";
			
			echo "<td>";
			
			echo $phone_number;
			
			echo "</td>";
			
			echo "</tr>";
		
			echo "<tr>";
			
			echo "<td>";
			
			echo "username:";
			
			echo "</td>";
			
			echo "<td>";
			
			echo $username;
			
			echo "</td>";
			
			echo "</tr>";
			
				echo "<tr>";
			
			echo "<td>";
			
			echo "Password:";
			
			echo "</td>";
			
			echo "<td>";
			
			echo $password;
			
			echo "</td>";
			
			echo "</tr>";
		
		echo "</table><br>";
		
		
		
		echo "<a href='index.php'> Go Back to Login  </a>";
		
		
	}
	
	else
		
		{
			echo "wrong input.";
			
		}



?>

</body>

</html>