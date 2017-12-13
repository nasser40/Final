<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
    <body
	style="
    width: 964px;
    height: 865.250;
"
background:url('http://cdn.wallpapersafari.com/13/6/Mpsg2b.jpg');
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
	background-size: 100% 110%;>
	<link rel="stylesheet" type="text/css" href="style.css">
  <div class="container">
	
	<table style="width:100%">
  <tr>
    <th>Username</th>
    <th>Email</th> 
    <th>Phone</th>
    <th>Company</th> 
    <th>Official visit</th>
     <th>Escort</th>
  </tr>
  </div>
	
        <?php
		$host="localhost";
		$user="root";
		$password="";
		$con=mysql_connect($host,$user,$password);
		if($con) 
		{
			if(empty($_POST['ausername']))
			{
				echo 'Please sign in';
			} 
			  else 
				{
					$db=mysql_select_db("Database1",$con);
					
					if($_POST['ausername']=='admin' & $_POST['apassword']=='1' )
						{		
							  echo '<h1 align="center" > Welcome to CSUDH Final </h1>';
									$db=mysql_select_db("Database1",$con);
									$query = "SELECT * FROM users1"; 
									$result = mysql_query($query);
								while($row = mysql_fetch_array($result))
								{   
								echo '<tr><td>'.$row['Username'].'</td><td>'.$row['Email'].'</td><td>'.$row['Telephone'].'</td><td>'.$row['Company'].'</td><td>'.$row['Ovisit'].'</td><td>'.$row['Ename'].'</td></tr>';
							
								}	
						}

						else 
						{
							echo "<font color='red'> Wrong Admin Information</font>";
						}
				
			
				}
		
		} 	
		
		
		
		
		else 
		{
		   echo '<h1>MySQL Server is not connected</h1>';
		}      
?>
		<form action="http://localhost/Admin.php"  method="post">	
		
		<h2> Enter your info </h2>
		<br> <label> <b> Username </b> </label> 
		<input type="text" name="ausername" placeholder="Insert Your Username" required> 
		<br></br>
		<br> <label> <b> Password </b> </label> 
		<input type="text" name="apassword" placeholder="Insert Your Password" required> 
		<br></br>
		<button type="submit" class="signupbtn" Formaction="http://localhost/Admin.php" >Login</button>
        <br></br>
	  
	  </form>
	    
		</br>
	
	</body>
</html>