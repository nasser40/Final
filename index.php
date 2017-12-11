<?php
session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
		$host="104.131.72.230";
		$user="root";
		$password="";
		$con=mysql_connect($host,$user,$password);
		
		//$query = "INSERT INTO userrrrrr " . "(Username1,password1) " . "VALUES('1','2')";
		//$result = mysql_query($query);
		if($con) 
		{
		  echo '<h1 align="center" > Login </h1>';	
            $db=mysql_select_db("Database1",$con);
			$query = "INSERT INTO userrrrrr " . "(id,username) " . "VALUES('2','Nasser')";
		$result = mysql_query($query);
		} 	
		else 
		{
		   echo '<h1>MySQL Server is not connected, please try to connect first. Thanks </h1>';
		}      
?>
		
		<form action="http://localhost/index.php"  method="post">
        <center>
		<h2> Login </h2>
		<br> <label> <b> Username </b> </label> 
		<input type="text" name="username" placeholder="Insert Your Username" > 
		<br></br>
		<br> <label> <b> Email </b> </label> 
		<input type="text" name="email" placeholder="Insert Your Email" > 
		<br></br>
		<br> <label> <b> Telephone </b> </label> 
		<input type="text" name="telephone" placeholder="Insert Your Telephone" > 
		<br></br>
		<br> <label> <b> Company </b> </label> 
		<input type="text" name="company" placeholder="Insert Your Company" > 
		<br></br>
		<button type="submit" Formaction="http://localhost/index.php" >Login</button>
		</center>
		<br> </br>
      </form>
	 
	</body>
</html>