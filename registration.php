<?php

include('include/dbconnect.php');

?>


<?php
            if(isset($_POST['sub'])) //Sub is the name given to the submit button		  			  
		    {	
	        // variable decleared against name of the form field
		
              $fname=trim($_POST["fname"]); // Check full name field for error
              $pword=trim($_POST["pword"]); // check password for error
              $email=trim($_POST["email"]); // check email for error
	          $fname=$_POST['fname'];			 
			  $email=$_POST['email'];          			  
              $pword=$_POST['pword'];
			  $recov=$_POST['recov'];
              $vpword=$_POST['vpword'];  
             // variable names declearation ends here
             // Hash password to make password hidden at the backend for extra security	 			
              $hashed_password = password_hash($pword, PASSWORD_DEFAULT);
             // Password hashing ends here			  
	         // check if E-mail address has already been used by another user and prevent sign-up if email has been taken
              $sql_e = "SELECT * FROM user WHERE useremail='$email'"; // query database for email check
              $res_e = mysqli_query($conn, $sql_e);
               if(mysqli_num_rows($res_e) > 0 ){
           	  echo"<script>alert('Useremail is already taken')</script>"; // Responce message if email has been taken
               }
              // E-mail check in database ends here
	          //check full name and return error
              elseif($fname =='') {
              $errorMsg=  'You did not enter a name.';
              $code= '1' ;
              }
              // full name check ends here
              //check password if empty or less than eight digits
              elseif($pword == '') {
              $errorMsg=  "Please enter a password.";
              $code= '2';
              }
              elseif(strlen($pword)<8){
              $errorMsg=  'Password should not be less than eight digits.';
              $code= '2';
              }
              //password check ends here
              //check if email field is empty and valid
              elseif($email == ''){
              $errorMsg=  'Enter an email.';
              $code= '3';
              } 
              elseif(!preg_match('/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i', $email)){
              $errorMsg= 'error : Enter a valid email.';
              $code= '3';
              }
              //email check ends here			  		   
			   else{
         
			  // Accept user registration details if all conditions are met
			  $qry="INSERT INTO `user`(`full_name`,  `useremail`, `password`, `recovery`) VALUES ('$fname','$email','$hashed_password','$recov')";			  
			  $run = mysqli_query($conn,$qry);
              if($run){
				echo"<script>alert('Successful')</script>"; 
				// When all conditions have been met and sign-up is successful send an email to user	
				$to      = $email; // Picks the email user signed up with and send the confirmation email to the email address
                $subject = 'Signup | Confirmation'; // Subject of the email 
                $message = 'Thanks for signing up! 
                            Your account has been created, you can login with the following credentials .
                            ------------------------
                            Username: '.$email.'
                            Password: '.$pword.'
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
            <h2>Registration</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="form1" onsubmit='return Validate()'>
		
       
              <div>
                <h3><b>Full name</b></h3>
                <input name='fname' value='<?php if(isset($fname)){echo $fname;} ?>' id='fname' placeholder='Enter Full Name' required ></input>              
              </div><br>  
<span class="error" style="background:black; color:white" > <?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?></span><br/> 			  
              <div>
                <h3>Email</h3>
                <input name='email' value='<?php if(isset($email)){echo $email; }?>'  placeholder='Enter Email Address' required></input>         
              </div><br>
<span class="error" style="background:black; color:white" ><?php if(isset($code) && $code == 3){echo "class=errorMsg" ;}?></span><br/>			  
              <div>
                <h3>Password</h3>
                <input name='pword' value='<?php if(isset($pword)){echo $pword;} ?>' id='pword' type='password'  placeholder='Enter Password' ></input>   </div><br>
<span class="error" style="background:black; color:white" > <?php if(isset($code) && $code == 2){echo $errorMsg ;}?></span><br/>
              <div>
                <h3>Re-type Password</h3>
                <input name='vpword'  value='' id='vpword' type='password'  placeholder='Re-type Password'  ></input>
                
              </div><br>
			   <div>
                <h3>Recovery</h3>
                <input name='recov'  value='0' id='vpword' type='text'  placeholder=''  ></input>
                
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
