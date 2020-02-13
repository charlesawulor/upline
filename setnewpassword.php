<?php

include('include/dbconnect.php');

?>

      <?php
		  if(isset($_POST['sub'])) //Sub is the name given to the submit button
		  {	
	     // variable decleared against name of the form field 	  		 
	          $email=$_POST['email'];          			  
              $pword=$_POST['pword'];
              $vpword=$_POST['vpword'];  
            // variable names declearation ends here
            // Hash password to make password hidden at the backend for extra security	 			
              $hashed_password = password_hash($pword, PASSWORD_DEFAULT);
             // Password hashing ends here			  
	    //Check if user email exist in the database records
              $sql_e = "SELECT * FROM user WHERE useremail='$email'"; // query database for email check
              $res_e = mysqli_query($conn, $sql_e);
               if(mysqli_num_rows($res_e) < 1 ){
           	  echo"<script>alert('Email not found')</script>"; // Responce if email record is not found 
               }else{
              // User email check ends here
	      // Update password if a user exist with that email 
		 $qry="UPDATE user set password='$hashed_password' where useremail='$email'";			  
		$run = mysqli_query($conn,$qry);
                if($run){
				echo"<script>alert('Password update successful')</script>"; 
                //Send user an email after password reset is confirmed 	
		$to      = $email; // Send message to this email
                $subject = 'Password Reset | New Password'; // Subject of the email 
                $message = 'Password reset successful! 
                            Your password has been updated . Login with the details below to continue .
                            ------------------------
                            Username: '.$email.'
                            New Password: '.$pword.'
                            ------------------------
							';     //Content of the email that will be sent to the user including Username and Password                 
                $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Senders email address which the email address assigned to the website 
                mail($to, $subject, $message, $headers); // Send email function which carries out the operation
                // Email to user after password reset is confirmed 
				 
			  }
			  else
			  {
				echo"<script>alert('Not successful')</script>"; // Pop up message if registration fails 
              }	
			  //Sign-up process ends here...			  
		  }
		  }
		  
?>	  	  


<style>
    form > div{
        display: inline-block;
    }
    
    form > div > input{
        display: block;
    }
    .form-container{
        margin: 0 auto;
    }
    h3{
        font-size: 14px;
    }
    </style>
    
    <section className="form-container">
          <div>
            <h2>Set New Password</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="form1" onsubmit='return Validate()'>		
              <div>
                <h3>Email</h3>
                <input name='email' value='' type='email'  placeholder='Enter Email Address' required></input>
            
              </div><br>		  
            <div>
                <h3>Password</h3>
                <input name='pword' value='' type='password' placeholder='Enter Password' required></input>
            
              </div><br>
			   <div>
                <h3>Verify Password</h3>
                <input name='vpword' value='' type='password'  placeholder='Verify Password' required></input>
            
              </div><br><br>
             
			     <div>
            <button name='sub'>submit</button>
          </div>
 		  
           </form>
		   </div>

		   
<script type="text/javascript">
// Checking if password match with re-type password
    function Validate() {
        var password = document.getElementById("pword").value;
        var confirmPassword = document.getElementById("vpword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
	
        return true;
    }
</script>





</section>
