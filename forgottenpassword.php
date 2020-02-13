<?php

include('include/dbconnect.php');

?>

<?php
		  if(isset($_POST['sub'])) //Sub is the name given to the submit button
		  {	
	        // variable decleared against name of the form field 	  	     		 
			  $email=$_POST['email'];          			                
	         // check if E-mail address has already been used by another user and prevent sign-up if email has been taken
               $sql_e = "SELECT * FROM user WHERE useremail='$email'"; // query database for email check
              $res_e = mysqli_query($conn, $sql_e);
               if(mysqli_num_rows($res_e) < 1 ){
           	  echo"<script>alert('No user with this email address')</script>"; // Responce message if email has been taken
               }else{
              // E-mail address check ends here	
              // Accept user registration details if all conditions are met
			  $qry="UPDATE user set recovery='1' where useremail='$email'";			  
			  $run = mysqli_query($conn,$qry);
              if($run){
				echo"<script>alert('Check your email inbox')</script>"; 
				// When all conditions have been met and sign-up is successful send an email to user	
				$to      = $email; // Picks the email user signed up with and send the confirmation email to the email address
                $subject = 'Password Change'; // Subject of the email 
                $message = 'Update existing password ! 
                            Click the link below to enter new password  .
                            ------------------------
                            
                            ------------------------
							';     //Content of the email that will be sent to the user including Username and Password                 
                $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Senders email address which the email address assigned to the website 
                mail($to, $subject, $message, $headers); // Send email function which carries out the operation
                // Email to new user after registration ends here 
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
            <h2>Forgotten Password</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="form1" onsubmit='return Validate()'>		
              <div>
                <h3>Email</h3>
                <input name='email' value=''  placeholder='Enter Email Address' required></input>
            
              </div>		  
           
             
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
