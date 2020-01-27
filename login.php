<?php

include('include/dbconnect.php');

?>

<?php  

if (isset($_POST['uname']) and isset($_POST['pword'])){
	
// Assigning POST values to variables.
$un = $_POST['uname'];
$pw = $_POST['pword'];
$hashed_password = password_hash($pw, PASSWORD_DEFAULT);
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE username='$un' and password='$pw'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if($count == 1)

{

//echo "Login Credentials verified";
  header("location:steels.php");

}else{
echo "<script type='text/javascript'>alert('Invalid Login credentials')</script>";
//echo "Invalid Login Credentials";
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
                <h3><b>Username</b></h3>
                <input name='uname' placeholder='Enter Username' required ></input>              
              </div>
              <div>
                <h3>Password</h3>
                <input name='pword' type='password'  placeholder='Enter Password' ></input>
                
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
