<?php

include('include/dbconnect.php');

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
                <input name='fname' value='' id='fname' placeholder='Enter Full Name' required ></input>              
              </div>
		
              <div>
                <h3>Email</h3>
                <input name='uemail' id='email' value='' type='email' placeholder='Enter Email Address' required></input>
            
              </div>
                <div>
                <h3><b>Username</b></h3>
                <input name='uname' value='' id='fname' placeholder='Enter Full Name' required ></input>              
              </div>
              <div>
                <h3>Password</h3>
                <input name='pword' id='pword' value='' type='password'  placeholder='Enter Password' ></input>
                
              </div>
              <div>
                <h3>Re-type Password</h3>
                <input name='vpword' id='vpword' value='' type='password'  placeholder='Re-type Password'  ></input>
                
              </div>
			 
             
			     <div>
            <button onclick="return Validate()" name='sub'>submit</button>
          </div>
  	<?php
		  if(isset($_POST['sub']))
		  {			  
	          $fname=$_POST['fname'];			 
			  $uemail=$_POST['uemail'];
              $uname=$_POST['uname'];			  
              $pword=$_POST['pword'];
              $vpword=$_POST['vpword'];  	
              $hashed_password = password_hash($pword, PASSWORD_DEFAULT);			  
	           // check if e-mail address is already taken by someone else
              $sql_e = "SELECT * FROM `user` WHERE username='$uname'";
              $res_e = mysqli_query($conn, $sql_e);
              if(mysqli_num_rows($res_e) > 0){
           	  echo"<script>alert('Username is already taken')</script>";
               }else{
              // check e-mail address ends here
			  $qry="INSERT INTO `user`(`user_id`, `full_name`, `us_email`, `username`, `password`) VALUES ('','$fname','$uemail','$uname','$hashed_password')";			  			  
			  $run = mysqli_query($conn,$qry);
			  if($run){
				echo"<script>alert('Successful')</script>"; 
				;
			  }
			  else
			  {
				echo"<script>alert('Not successful')</script>"; 
              }	
			  
		  }
		  }
		  
		  
?>	  
		  		  
           </form>
		   </div>
		   
		   
		   
		   
		   
		   
		   <?php
   session_start();
   require_once('include/dbconnect.php');
if(isset($_POST['login']))
	
{
	$u=$_POST['email'];
	$pw=$_POST['pword'];	
	$qry="select * FROM registration where email='$u' AND password='$pw'";
	$res=mysqli_query($conn,$qry);
	$row=mysqli_fetch_array($res);
	$count - mysqli_num_rows($res);
		if($count - 1)
		{
			$_SESSION['user_id'] = $row['user_id'];
	 		
		header("location:user2/profile.php");
		}
		
}


?>
		   
		   
		   
		   
		   
		   
		   
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
