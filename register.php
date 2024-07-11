 <html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Register Page </title>  

</head> 
<body>

	<h1>New Civilian:</h1>
	
	<form action = "insert_civilian.php" method = "post">
	<div class="container">
	Name: <input type = "text" name ="name"><br>
	Last Name: <input type = "text" name ="last_name"><br>
	Phone Number: <input type = "text" name ="phone_number"><br>
	Username: <input type = "text" name ="username"><br>
	Password: <input type = "password" name = "password" >
	<br><br>
	
	
	
	<input type = "submit" value = "Register">
	</div>
	</form>
	
	<br><br>
	
	<a href = "index.php"> Return </a>

</body>

</html>