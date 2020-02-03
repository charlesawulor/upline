<?php

include('include/dbconnect.php');

?>


<?php
//code to sanitize and clean up user input
function sanitizeString($var)
{
//remove slashe
$var = stripslashes($var);
//remove tags
$var = strip_tags($var);
//remove htmlentities
$var = htmlentities($var);
//return a clean value for storage
return $var;
}
if (isset($_POST['login']))
{
//collect and clean up user input
$useremail = mysqli_real_escape_string($conn,sanitizeString($_POST['useremail']));
$password = mysqli_real_escape_string($conn,sanitizeString($_POST['password']));

// let us perform input check for empty 
if(empty($useremail) || empty($password))
{
echo '<div class="alert-error"><i class="fa fa-exclamation-circle"  style="font-size:25px;color:coral"></i> <font color="red" size="2pt">Please some fields are  empty</font></div>';
return false;
}
//perform a query to check if there is such user
$query = "SELECT * FROM user WHERE useremail='$useremail'";
$result = mysqli_query($conn,$query);
$num_row = mysqli_num_rows($result);
//if there is a user with collected details
if($num_row ==1)
{
/*This where the work begins*/
//firstly lets get already stored password from database
$getdata=mysqli_fetch_assoc($result);
$hashed_password = $getdata['password'];
//verify if current password and stored password are the same
if ( password_verify ( $password , $hashed_password ))
{
/* future proof the password */
if( password_needs_rehash($hashed_password , PASSWORD_DEFAULT))
{
/* recreate the hash */
$rehashed_password = password_hash($password, PASSWORD_DEFAULT );
/* store the rehashed password in MySQL */
}
//prepare session variables
$getdata=mysqli_fetch_array($result);
$_SESSION['useremail']= $useremail;
//redirect to a success page
header('location: form.php');
}
else{
echo "user your password is incorrect try again";
}
}
else{
//if there is no user of such redirect back to login page and display warning message
header('location:login.php');
$_SESSION['message']='<div class=" alert-warning">Please Login!</font></div>';
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
            <h2>Login</h2>
			     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="form1" enctype="multipart/form-data" onsubmit='return Validate()'>       
                <div>
                <h3><b>Email</b></h3>
                <input name='useremail' placeholder='Enter User Email' required ></input>              
              </div>
              <div>
                <h3>Password</h3>
                <input name='password' type='password'  placeholder='Enter Password' ></input>
                
              </div>
             
			 
             
			     <div>
            <button  name='login'>submit</button>
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
