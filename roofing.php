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
            <h2>Roof settings</h2>
			     <form method='POST' action='form.php'>
				 
				 
				          <?php
							$qry="SELECT * FROM roof";
							$run= mysqli_query($conn, $qry);
							while($row = mysqli_fetch_array($run)){
								$rid = $row['roofid'];								
								$rty = $row['type'];                            							
								echo "<li><a href='roofsetting.php?id=$rid * 2345678'>$rty</a></li>";
							}
							?>	 

							
							
							
				 				 
				 				   <select name="ppro" required>
				   <option value=''>Select Project</option>
<?php
$qry = "select * from project";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$pid = $row['project_id'];
$cli = $row['client'];
echo"

<option value= '$pid'>$cli</option>

";
}
?>
			</select>
			<br>
				 
			
          