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
            <h2>Roofing wood & Properties</h2>
			     <form method='POST' action='roofsetting.php'>
		
				 				 
				 				   <select name="ptit" required>
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
			<br>
			
			
			  
		   
<?php
$per_page=10;
if(isset($_GET['roofingsetting'])){
$roofingsetting = $_GET['roofingsetting'];
}
else {
$page= 1;
}
$start_from =($page-1) * $per_page;
$id=$_GET['id'];					
$qry = "SELECT * FROM roofing_spacing_length where roofid = '$id'";
$run = mysqli_query($conn, $qry);
while($row = mysqli_fetch_array($run)){
$nam = $row['name'];
echo"			
 <div>
<h3  style='font-size:27px;'>Roof Type</h3>
<input style='font-size:27px; width:400px' name='rnam' value='$nam'  placeholder='Up Labour' disabled ></input> 
</div>
";
}
?>
				 <br><br><br>
			
              <div>
                <h3><b>Outside wall<br> plats<br> (wood type)</b></h3>
                   <select name="ownam" required>
				   <option style='width:10px' value=''>Select Wood Type</option>
				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
                
              </div>
              <div>
                <h3>Inside wall<br>plats<br> (wood type)</h3>
                 <select name="innam" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
            
              </div>
              <div>
                <h3>Tie beam<br> (wood type)</h3>
               <select name="tbnam" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
                
              </div>
              <div>
                <h3>Tie beams <br>for ridges & <br>gutters(wood type)</h3>
               <select name="tbfr" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
              </div>
              <div>
                <h3>Rafters<br>(wood type)</h3>
                <select name="rafwt" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
                
              </div>
              <div>
                <h3>Trusses<br>(wood type)</h3>
                 <select name="truwt" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
              </div>
              <div>
                <h3>Purlins<br>(wood type)</h3>
                <select name="purwt" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
                
              </div>
              <div>
                <h3>Inside noggins<br>(wood type)</h3>
                <select name="innwt" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
                
              </div>
              <div>
                <h3>Outside noggins<br>(wood type)</h3>
                <select name="onwt" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wid'>$wna</option>

";
}
?>
				   </select>
                
              </div>
              <div>
                <h3>Fascia &<br>Bargeboards<br>(wood type)</h3>
                 <select name="fbwt" required>
				   <option value=''>Select Wood Type</option>
				   				   <?php
$qry = "select * from roofing_woods";
$run = mysqli_query($conn , $qry);
while($row = mysqli_fetch_array($run)){
$wid = $row['id'];
$wna = $row['name'];
echo"

<option value= '$wna'>$wna</option>

";
}
?>
				   </select>
                
              </div>
			  <br>
			  <br>
			  <br>
             
					<?php
								
								
								$per_page=10;
								if(isset($_GET['roofingsetting'])){
									$roofingsetting = $_GET['roofingsetting'];
								}
								else {
									$page= 1;
								}
								$start_from =($page-1) * $per_page;
								
								
								
								
			$id=$_GET['id'];					
			$qry = "SELECT * FROM roofing_spacing where roofid = '$id'";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
				$wps = $row['wall_plats_spacing'];
				$tbs=$row['tie_beams_spacing'];
				$rs = $row['rafters_spacing'];
				$ts = $row['trusses_spacing'];
				$ps = $row['purlins_spacing'];
				$ns = $row['noggins_spacing'];
				$ons = $row['outside_noggins_spacing'];
				
			echo"			
			
              <div>
                <h3>Inside wall<br>plats<br> (width)</h3>
                <input name='inwid' id='wid' value='$wps'  onKeyup='calculate()' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Tie beam<br> (width)</h3>
                <input name='tbwid' id='len' value='$tbs' onKeyup='calculate()' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
            
			
			
              <div>
                <h3>Rafters<br>(width)</h3>
                <input name='rafwid' id='mor' value='$rs' onKeyup='calculate()' placeholder='Enter Mortar Size'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Trusses<br>(width)</h3>
                <input name='truwid' id='pri' value='$ts'  placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Purlins<br>(width)</h3>
                <input name='purwid'  value='$ps' id='dla'  placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Inside noggins<br>(width)</h3>
                <input name='inwid' value='$ns' id='ula'   placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Outside noggins<br>(width)</h3>
                <input name='ounwid' value='$ons' id='acb'  placeholder='Course Height'></input>
                
              </div>
			  
			  		";
			
				
			}
			?>
			  
           
           <br>
		   <br>
		   <br>
		   
		   
		   
		   		<?php
								
								
								$per_page=10;
								if(isset($_GET['roofingsetting'])){
									$roofingsetting = $_GET['roofingsetting'];
								}
								else {
									$page= 1;
								}
								$start_from =($page-1) * $per_page;
								
								
								
								
			$id=$_GET['id'];					
			$qry = "SELECT * FROM roofing_spacing_length where roofid = '$id'";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
				
				$ins = $row['inside_noggin_spacing'];
				$oons = $row['outside_noggin_spacing'];
				
			echo"			
		     <div>
                <h3>Inside noggins<br>(Height)</h3>
                <input name='inhei' id='ula' value='$ins'  placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Outside noggins<br>(Height)</h3>
                <input name='ouhei' id='acb' value='$oons'  placeholder='Course Height'></input>
                
              </div>
			
	  
			  		";
			
				
			}
			?>
			
<p><hr></hr></p>		
						
		 <h2>Roofing sheets & Properties</h2>
              
								<?php
								
								
								$per_page=10;
								if(isset($_GET['roofingsetting'])){
									$roofingsetting = $_GET['roofingsetting'];
								}
								else {
									$page= 1;
								}
								$start_from =($page-1) * $per_page;
								
								
								
								
			$id=$_GET['id'];					
			$qry = "SELECT * FROM roofing_price where roofid = '$id'";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
				$mf = $row['main_roof'];
				$wp=$row['water_proof'];
				$sc = $row['soffit_clouding'];
				$gs= $row['gable_surface'];
				$es = $row['eave_surface'];
				$gb = $row['gable_bargeboard'];
				$ef = $row['eave_fascia'];
				$bf = $row['bottom_flashing'];
				$uf = $row['up_flashing'];
				$rc = $row['ridge_cap'];
				$gu = $row['gutter'];
				$gut = $row['gutter_trimmer'];
				
			echo"	
              <div>
                <h3>Main roof(Price)</h3>
                <input name='mrpri' id='mor' value='$mf' placeholder='Enter Mortar Size'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Water proof(Price)</h3>
                <input name='wppri' id='pri' value='$wp'  placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Soffit Clouding(Price)</h3>
                <input name='soclopri'  value='$sc' id='dla'  placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Gable Surface(Price)</h3>
                <input name='gspri' value='$gs' id='ula'   placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Eave Surface(Price)</h3>
                <input name='espri' value='$es' id='acb'  placeholder='Course Height'></input>
                
              </div>
		
		         <div>
                <h3>Gable Bargeboards(Price)</h3>
                <input name='gbpri' id='mor' value='$gb' onKeyup='calculate()' placeholder='Enter Mortar Size'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Eave Flashing(Price)</h3>
                <input name='efpri' id='pri' value='$ef'  placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Bottom Flashing(Price)</h3>
                <input name='brpri'  value='$bf' id='dla'  placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Up Flashing(Price)</h3>
                <input name='ufpri' value='$uf' id='ula'   placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Ridge Cap(Price)</h3>
                <input name='rcpri' value='$rc' id='acb'  placeholder='Course Height'></input>
                
              </div>
				
                <div>
                <h3>Gutter (Price)</h3>
                <input name='gpri' value='$gu' id='acb'  placeholder='Course Height'></input>
                
              </div>
			  
			  <div>
                <h3>Gutter Trimmer(Price)</h3>
                <input name='gtpri' value='$gut' id='acb'  placeholder='Course Height'></input>
                
              </div>
			  "
			  ;
			}
			?>
			  
			  <br>
			  <br>
			  <br>
			  
			  							<?php
								
								
								$per_page=10;
								if(isset($_GET['roofingsetting'])){
									$roofingsetting = $_GET['roofingsetting'];
								}
								else {
									$page= 1;
								}
								$start_from =($page-1) * $per_page;
								
								
								
								
			$id=$_GET['id'];					
			$qry = "SELECT * FROM roofing_length where roofid = '$id'";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){			
				$gl = $row['gable_length'];
				$efl = $row['eave_fascia_length'];
				$bfl = $row['bottom_flashing_length'];
				$ufl = $row['up_flashing_length'];
				$rcl = $row['ridge_cap_length'];
				$gul = $row['gutter_length'];
				$gutl = $row['gutter_trimmer_length'];
				
			echo"	
			    <div>
                <h3>Gable Bargeboards(Length)</h3>
                <input name='gblen' id='mor' value='$gl' onKeyup='calculate()' placeholder='Enter Mortar Size'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Eave Flashing(Length)</h3>
                <input name='eflen' id='pri' value='$efl'  placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Bottom Flashing(Length)</h3>
                <input name='bflen'  value='$bfl' id='dla'  placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Up Flashing(Length)</h3>
                <input name='uflen' value='$ufl' id='ula'   placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Ridge Cap(Length)</h3>
                <input name='rclen' value='$rcl' id='acb'  placeholder='Course Height'></input>
                
              </div>
				
                <div>
                <h3>Gutter(Length)</h3>
                <input name='gulen' value='$gul' id='acb'  placeholder='Course Height'></input>
                
              </div>
			  
			  <div>
                <h3>Gutter Trimmer(Length)</h3>
                <input name='gutlen' value='$gutl' id='acb'  placeholder='Course Height'></input>
                
              </div>
			  
			  "
			  ;
			  }
			  ?>
			  
			  
          <div>
            <button name='send'>submit</button>
          </div>

				
			 </form>
			 
			 			
			
				
		<?php
		  if(isset($_POST['send']))
		  {
$ptit=$_POST['ptit'];
$rnam=$_POST['rnam'];
$ownam=$_POST['ownam'];
$innam=$_POST['innam'];
$tbnam=$_POST['tbnam'];
$tbfr=$_POST['tbfr'];
$rafwt=$_POST['rafwt'];
$truwt=$_POST['truwt'];
$purwt=$_POST['purwt'];
$innwt=$_POST['innwt'];
$onwt=$_POST['onwt'];
$fbwt=$_POST['fbwt'];
$inwid=$_POST['inwid'];
$tbwid=$_POST['tbwid'];
$rafwid=$_POST['rafwid'];
$truwid=$_POST['truwid'];
$purwid=$_POST['purwid'];
$inwid=$_POST['inwid'];
$ounwid=$_POST['ounwid'];
$inhei=$_POST['inhei'];
$ouhei=$_POST['ouhei'];
$mrpri=$_POST['mrpri'];
$wppri=$_POST['wppri'];
$soclopri=$_POST['soclopri'];
$gspri=$_POST['gspri'];
$espri=$_POST['espri'];
$gbpri=$_POST['gbpri'];
$efpri=$_POST['efpri'];
$bfpri=$_POST['bfpri'];
$ufpri=$_POST['ufpri'];
$rcpri=$_POST['rcpri'];
$gpri=$_POST['gpri'];
$gtpri=$_POST['gtpri'];
$gblen=$_POST['gblen'];
$eflen=$_POST['eflen'];
$bflen=$_POST['bflen'];
$uflen=$_POST['uflen'];
$rclen=$_POST['rclen'];
$gulen=$_POST['gulen'];
$gutlen=$_POST['gutlen'];
$qry = "INSERT INTO `roofsettingrst`(`id`, `project_id`, `rooftype`, `outsidewall_wt`, `insidewall_wt`, `tiebeam_wt`, `tiebeamforridges_wt`, `rafters_wt`, `trusses_wt`, `purlins_wt`, `insidenoggin_wt`, `outsidenoggin_wt`, `fasciabargeboards_wt`, `insidewallplat_wid`, `tiebeam_wid`, `rafters_wid`, `trusses_wid`, `purlins_wid`, `insidenoggin_wid`, `outsidenoggin_wid`, `insidenoggin_hei`, `outsidenoggin_hei`, `mainroof_pri`, `waterproof_pri`, `soffitclouding_pri`, `gablesurface_pri`, `eavesurface_pri`, `garblebargeboards_pri`, `eaveflashing_pri`, `bottomflashing_pri`, `upflashing_pri`, `ridgecap_pri`, `gutter_pri`, `guttertrimmer_pri`, `gablebargeboards_len`, `eaveflashing_len`, `bottomflashing_len`, `upflashing_len`, `ridgecap_len`, `gutter_len`, `guttertrimmer_len`) VALUES('','$ptit','$rnam','$ownam','$innam','$tbnam','$tbfr','$rafwt','$truwt','$purwt','$innwt','$onwt','$fbwt','$inwid','$tbwid','$rafwid','$truwid','$purwid','$inwid','$ounwid','$inhei','$ouhei','$mrpri','$wppri','$soclopri','$gspri','$espri','$gbpri','$efpri','$bfpri','$ufpri','$rcpri','$gpri','$gtpri','$gblen','$eflen','$bflen','$uflen','$rclen','$gulen','$gutlen')";

			  $run = mysqli_query($conn,$qry);
			  if($run){
				  echo"<script>alert('Done')</script>";
			  }
			  else
			  {
				echo"<script>alert('Not successful')</script>"; 
              }	
			  
		  }

?>			
			
			
			
			
		
			 
		  
			
			
          </div>
         
        </section>
     
  
