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
            <h2>Project</h2>
			     <form action="project.php" method="POST" name="form1" onsubmit='return Validate()'>
		
       
              <div>
                <h3><b>Title</b></h3>
                <input name='ptit' value='' id='tit' placeholder='Enter project title' required ></input>              
              </div>
		 <span id="tit_error"></span>
              <div>
                <h3>Client</h3>
                <input name='clie' id='cli' value='' type='text'  placeholder='Enter client name' required></input>
            
              </div>
              <span id="cli_error"></span>
			   <div>
                <h3><b>Project location</b></h3>
                <input name='ploca' value='' id='loc' placeholder='Enter project location' required ></input>              
              </div>
		
              <div>
                <h3>Prepared by</h3>
                <input name='pby' id='pby' value='' type='text'  placeholder='Prepared by' required></input>
            
              </div>
   
                  <div>
                <h3><b>Website</b></h3>
                <input name='web' value='' id='' placeholder='Enter website' required ></input>              
              </div>
		
              <div>
                <h3>Email</h3>
                <input name='mail' id='email' value='' type='email'  onchange="valemail()" placeholder='Enter Email Address' required></input>
               <span id="email_error"></span>
              </div>
              <span id="email_error"></span>
			      <div>
                <h3><b>Phone number</b></h3>
                <input name='pnumb' value='' id='phone' placeholder='Enter phone number' required ></input>              
              </div>
		 <span id="phone_error"></span>
              <div>
                <h3>Address</h3>
                <input name='addr' id='' value='' type='text'  placeholder='Enter address' required></input>
            
              </div>

            
			 
             
			     <div>
            <button onclick="validate()" name='add'>submit</button>
          </div>
  	<?php
		  if(isset($_POST['add']))
		  {			  
	          $ptit=$_POST['ptit'];			 
			  $clie=$_POST['clie']; 
              $ploca=$_POST['ploca'];
              $pby=$_POST['pby'];
              $web=$_POST['web'];  	
              $mail=$_POST['mail'];  	
              $pnumb=$_POST['pnumb'];  	
              $addr=$_POST['addr'];  				  
            		  
	           // check if client name is already taken
              $sql_e = "SELECT * FROM `project` WHERE client='$clie'";
              $res_e = mysqli_query($conn, $sql_e);
              if(mysqli_num_rows($res_e) > 0){
           	  echo"<script>alert('Client name already exist. Use a different name ')</script>";
               }else{
              // check ends here
			  $qry="INSERT INTO `project`(`project_id`, `title`, `client`, `project_location`, `prepared_by`, `website`, `email`, `prone`, `address`, `date`) VALUES ('','$ptit','$clie','$ploca','$pby','$web','$mail','$pnumb','$addr','CURRENT_TIMESTAMP')";			  			  
			  $run = mysqli_query($conn,$qry);
			  if($run){
				echo"<script>alert('Project added successfully')</script>"; 
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
		   
		   
		   
<script>		   
		   
		function valemail() 
{
    var email = document.getElementById('email').value;
	  var atpos=email.indexOf("@");
	  var dotpos=email.lastIndexOf(".");
	  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  		{
      document.getElementById('email_error').innerHTML = 'This is not a valid email';
        return false;
      } else {
      document.getElementById('email_error').innerHTML = '';
      }

}
</script>

<script>
function validate()
{
  var tit = document.getElementById('tit').value;
  var cli = document.getElementById('cli').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  if (tit == "") {
    document.getElementById('tit_error').innerHTML = 'This field is required';
    var tit_check = false;
  } else {
    document.getElementById('tit_error').innerHTML = ''; 
    var tit_check = true;
  }
    if (cli == "") {
    document.getElementById('cli_error').innerHTML = 'This field is required';
    var cli_check = false;
  } else {
    document.getElementById('cli_error').innerHTML = ''; 
    var cli_check = true;
  }
    if (email == "") {
    document.getElementById('email_error').innerHTML = 'This field is required';
    var email_check = false;
  } else {
    document.getElementById('email_error').innerHTML = ''; 
    var email_check = true;
  }
    if (phone == "") {
    document.getElementById('phone_error').innerHTML = 'This field is required';
    var phone_check = false;
  } else {
    document.getElementById('phone_error').innerHTML = ''; 
    var phone_check = true;
  }
  
}   
</script>	
		   
		   
		   







</section>
