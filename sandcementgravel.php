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
			     <form method='POST' action='sandcementgravel.php'>
				 
				 
				<?php
							$qry="SELECT * FROM sand";
							$run= mysqli_query($conn, $qry);
							while($row = mysqli_fetch_array($run)){
								$sid = $row['id'];
								$sna = $row['sand_name'];
								echo "<li><a href='sandcementgravelsettings.php?id=$sid * 35473546745'>$sna</a></li>";
							}
							?>	 
				 				 
				 				  
			<br>
				 
			
          