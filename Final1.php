<!DOCTYPE html>
<html>
    <body style="
    width: 964px;
    height: 865.250;
">
        <?php
		$host="localhost";
		$user="root";
		$password="";
		$con=mysql_connect($host,$user,$password);
		if($con) 
		{
		        // echo '<h1 align="center" > Welcome to CSUDH Final </h1>';
		
				if(empty($_POST['username']))
			{
				//echo"Fill the information"; 
				 echo '<h1 align="center" > Welcome to CSUDH Final </h1>';
			}
			
			else
			{
				 echo '<h1 align="center" > Welcome to CSUDH Final </h1>';
				            $db=mysql_select_db("Database1",$con);
							$usr=$_POST['username'];
							$emi=$_POST['email'];
							$pho=$_POST['telephone'];
							$comp=$_POST['company'];
							
						if(!empty($_POST['escortName']))
						{
							
							$esc=$_POST['escortName'];
							
							if(!empty($_POST['checkVisit']))
						{
							$ovisit='OFFICIAL';
							$query = "INSERT INTO users1(Username,Email,Telephone,Company,Ename,Ovisit) VALUES ('$usr','$emi','$pho','$comp','$esc','$ovisit')";
							
							$result = mysql_query($query);
							
						}				
							else 
							{
							$query = "INSERT INTO users1(Username,Email,Telephone,Company,Ename) VALUES ('$usr','$emi','$pho','$comp','$esc')";
							
							$result = mysql_query($query);
							}
					
							echo "Welcome '$usr'<br></br>";  
						}
						
						else 
						{
							
							if(!empty($_POST['checkVisit']))
						{
							$ovisit='OFFICIAL';
							$query = "INSERT INTO users1(Username,Email,Telephone,Company,Ovisit) VALUES ('$usr','$emi','$pho','$comp','$ovisit')";
							
							$result = mysql_query($query);
							
						}
						
						else 
						{	
							$query = "INSERT INTO users1(Username,Email,Telephone,Company) VALUES ('$usr','$emi','$pho','$comp')";
							
							$result = mysql_query($query);
						}
					
							//echo "Welcome '$usr'<br></br>";  
							echo "<font color='red'> Welcome '$usr' , you added! </font>";
							
						}
			}	
			
		} 	
		else 
		{
		   echo '<h1>MySQL Server is not connected</h1>';
		}      
?>
		<form action="http://localhost/Final1.php"  method="POST">
        
		<link rel="stylesheet" type="text/css" href="style.css">
		<div class="container">
		<br> <label> <b> Username </b> </label> 
		<input type="text" name="username" placeholder="Insert Your Username" required> 

		<br> <label> <b> Email </b> </label> 
		<input type="text" name="email" placeholder="Insert Your Email" required> 

		<br> <label> <b> Telephone </b> </label> 
		<input type="text" name="telephone"  placeholder="Insert Your Telephone" onkeypress="return isNumber(event)" required > 
		
		<br> <label> <b> Company </b> </label> 
		<input type="text" name="company" placeholder="Insert Your Company" required> 
		
		
<script type="text/javascript">		
		function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
	</script>	
		<script type="text/javascript">
    
			function EnableDisableTextBox(checkEscort) 
			{
				var escortName = document.getElementById("escortName");
				escortName.disabled = checkEscort.checked ? false : true;
				
				if (!escortName.disabled) 
				{
					escortName.focus();
				}
			}
		</script>
	
	If this is an official visit, please check this box 
		<label for="checkVisit">
		<input type="checkbox" id="checkVisit" name="checkVisit" />
	<br/>
	<br/>
	If you have an Escort, please check this box?
		<label for="checkEscort">
		<input type="checkbox" id="checkEscort" name="checkEscort" onclick="EnableDisableTextBox(this)" />
		
		</label>
		<br/>
		Escort Name:
		<input type="text" id="escortName" name="escortName" disabled="disabled" />		
		
		<br/>
		<br/>
		
		 <div class="clearfix">
         <button type="button"  class="cancelbtn">Cancel</button>
		<button type="submit" class="signupbtn" Formaction="http://localhost/Final1.php" >Sign</button>
		 </div>
  </div>
		<br> </br>
      </form>
	  
	</body>
</html>