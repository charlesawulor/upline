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
            <h2>Steels</h2>
			     <form method='POST' action='steels.php'>
				 
		<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '1' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname' value='$sname' id='sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri' value='$spri' id='spri' onKeyup='calculate()'   placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston' value='$ston' id='ston' onKeyup='calculate()'  placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt' value='$sppt' id='sppt' onFocus='calculate()'  placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk' value='$sunk' id='sunk'  placeholder=''></input>
                
              </div>
            
            
              
			";
			}
			?>
			
			
<p><hr></hr></p>		
						
			
	<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '3' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname1' value='$sname' id='sname1' placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri1' id='spri1' value='$spri' onKeyup='calcc()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston1' id='ston1' value='$ston' onKeyup='calcc()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt1' id='sppt1' value='$sppt' onFocus='calcc()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk1' id='sunk1' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
	
<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '4' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname2' value='$sname' id='sname2'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri2' value='$spri' id='spri2' onKeyup='calcca()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston2' id='ston2' value='$ston' onKeyup='calcca()'   placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt2' id='sppt2' value='$sppt' onFocus='calcca()'   placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk2' id='sunk2' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
		<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '5' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname3' id='sname3' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri3' id='spri3' value='$spri' onKeyup='calccau()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston3' id='ston3' value='$ston' onKeyup='calccau()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt3' id='sppt3' value='$sppt' onFocus='calccau()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk3' id='sunk3' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>				
						
		<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '6' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname4' id='sname4' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri4' id='spri4' value='$spri' onKeyup='calccaul()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston4' id='ston4' value='$ston' onKeyup='calccaul()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt4' id='sppt4' value='$sppt' onFocus='calccaul()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk4' id='sunk4' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
			<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '9' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname5' id='sname5' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri5' id='spri5' value='$spri' onKeyup='calccaula()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston5' id='ston5' value='$ston' onKeyup='calccaula()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt5' id='sppt5' value='$sppt' onFocus='calccaula()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk5' id='sunk5' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
						
			<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '10' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname6' id='sname6' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri6' id='spri6' value='$spri' onKeyup='calccaulat()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston6' id='ston6' value='$ston' onKeyup='calccaulat()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt6' id='sppt6' value='$sppt' onFocus='calccaulat()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk6' id='sunk6' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		

<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '11' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname7' id='sname7' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri7' id='spri7' value='$spri' onKeyup='ca()' placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston7' id='ston7' value='$ston' onKeyup='ca()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt7' id='sppt7' value='$sppt' onFocus='ca()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk7' id='sunk7' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		

<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '12' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname8' id='sname8' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri8' id='spri8' value='$spri' onKeyup='calll()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston8' id='ston8' value='$ston' onKeyup='calll()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt8' id='sppt8' value='$sppt' onFocus='calll()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk8' id='sunk8' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		

<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '13' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname9' id='sname9' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri9' id='spri9' value='$spri' onKeyup='calllc()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston9' id='ston9' value='$ston' onKeyup='calllc()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt9' id='sppt9' value='$sppt' onFocus='calllc()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk9' id='sunk9' value='$sunk' placeholder=''></input>
                
              </div>
            
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		

<?php	
				$qry = "SELECT * FROM steels WHERE steel_id = '14' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['steel_id']; 
				$sname = $row['name'];
                $spri = $row['price'];
				$ston = $row['tons'];
				 $sppt = $row['price_per_ton'];
				$sunk = $row['unknown'];
               
			
				
			echo"
       
              <div>
                <h3><b>Steel name</b></h3>
                <input name='sname10' id='sname10' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='spri10' id='spri10' value='$spri' onKeyup='calllcu()'  placeholder=''></input>
            
              </div>
              <div>
                <h3>Tons</h3>
                <input name='ston10' id='ston10' value='$ston' onKeyup='calllcu()' placeholder=''></input>
                
              </div>
			   <div>
                <h3>Price per ton</h3>
                <input name='sppt10' id='sppt10' value='$sppt' onFocus='calllcu()' placeholder=''></input>
                
              </div>
            
			 <div>
                <h3>Unknown</h3>
                <input name='sunk10' id='sunk10' value='$sunk' placeholder=''></input>
                
              </div>
            
			<br><br>   
			<div>
            <button name='send'>submit</button>
          </div>
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		


					
			 </form>
			 
			 			
			
				
		<?php
		  if(isset($_POST['send']))
		  {
			  
		      $sname=$_POST['sname'];
			  $spri=$_POST['spri'];
			  $ston=$_POST['ston'];
			  $sppt=$_POST['sppt'];
			  $sunk=$_POST['sunk'];
	          
             
		      $sname1=$_POST['sname1'];
			  $spri1=$_POST['spri1'];
			  $ston1=$_POST['ston1'];
			  $sppt1=$_POST['sppt1'];
			  $sunk1=$_POST['sunk1'];
	          
			 
		      $sname2=$_POST['sname2'];
			  $spri2=$_POST['spri2'];
			  $ston2=$_POST['ston2'];
			  $sppt2=$_POST['sppt2'];
			  $sunk2=$_POST['sunk2'];
	          
			 
		      $sname3=$_POST['sname3'];
			  $spri3=$_POST['spri3'];
			  $ston3=$_POST['ston3'];
			  $sppt3=$_POST['sppt3'];
			  $sunk3=$_POST['sunk3'];
	          
			  
			 
		      $sname4=$_POST['sname4'];
			  $spri4=$_POST['spri4'];
			  $ston4=$_POST['ston4'];
			  $sppt4=$_POST['sppt4'];
			  $sunk4=$_POST['sunk4'];
	          
			 
		      $sname5=$_POST['sname5'];
			  $spri5=$_POST['spri5'];
			  $ston5=$_POST['ston5'];
			  $sppt5=$_POST['sppt5'];
			  $sunk5=$_POST['sunk5'];
			  
	          
		      $sname6=$_POST['sname6'];
			  $spri6=$_POST['spri6'];
			  $ston6=$_POST['ston6'];
			  $sppt6=$_POST['sppt6'];
			  $sunk6=$_POST['sunk6'];
			  
			  
		      $sname7=$_POST['sname7'];
			  $spri7=$_POST['spri7'];
			  $ston7=$_POST['ston7'];
			  $sppt7=$_POST['sppt7'];
			  $sunk7=$_POST['sunk7'];
			  
			  
		      $sname8=$_POST['sname8'];
			  $spri8=$_POST['spri8'];
			  $ston8=$_POST['ston8'];
			  $sppt8=$_POST['sppt8'];
			  $sunk8=$_POST['sunk8'];
			  
			  
		      $sname9=$_POST['sname9'];
			  $spri9=$_POST['spri9'];
			  $ston9=$_POST['ston9'];
			  $sppt9=$_POST['sppt9'];
			  $sunk9=$_POST['sunk9'];
			  
			  
		      $sname10=$_POST['sname10'];
			  $spri10=$_POST['spri10'];
			  $ston10=$_POST['ston10'];
			  $sppt10=$_POST['sppt10'];
			  $sunk10=$_POST['sunk10'];
	          
			  
              $qry = "INSERT INTO `steelrst`(`name`, `price`, `tons`, `price_per_ton`, `unknown`) VALUES ('$sname','$spri','$ston','$sppt','$sunk') , ('$sname1','$spri1','$ston1','$sppt1','$sunk1'), ('$sname2','$spri2','$ston2','$sppt2','$sunk2') ,('$sname3','$spri3','$ston3','$sppt3','$sunk3'), ('$sname4','$spri4','$ston4','$sppt4','$sunk4'), ('$sname5','$spri5','$ston5','$sppt5','$sunk5'), ('$sname6','$spri6','$ston6','$sppt6','$sunk6'), ('$sname7','$spri7','$ston7','$sppt7','$sunk7'), ('$sname8','$spri8','$ston8','$sppt8','$sunk8'), ('$sname9','$spri9','$ston9','$sppt9','$sunk9'), ('$sname10','$spri10','$ston10','$sppt10','$sunk10') ";


			  $run = mysqli_multi_query($conn,$qry);
			  if($run){
				  echo"<script>alert('successful')</script>";
			  }
			  else
			  {
				echo"<script>alert('Not successful')</script>"; 
              }	
			  
		  }

?>			
			
			
			
			
		
			 
		  
			
			
          </div>
		  
		  
		  
		        
<script type="text/javascript">
         function calculate(){
		  let pstatic = 0.2591;	 
          var price = Number(document.getElementById('spri').value);
          var ton = Number(document.getElementById('ston').value);
          var priceperton = Number(document.getElementById('sppt').value);
		  var unknown = Number(document.getElementById('sunk').value);
          var sppt =  document.getElementById('sppt');
          var sunk =  document.getElementById('sunk');		 
          sunk.value = ((price * ton ) * pstatic + priceperton);
          sppt.value = (price * ton);
		  
          }
 </script>
 
 		        
<script type="text/javascript">
         function calcc(){
		  let pstatic1 = 0.2591;	 
          var price1 = Number(document.getElementById('spri1').value);
          var ton1 = Number(document.getElementById('ston1').value);
          var priceperton1 = Number(document.getElementById('sppt1').value);
		  var unknown1 = Number(document.getElementById('sunk1').value);
          var sppt1 =  document.getElementById('sppt1');
          var sunk1 =  document.getElementById('sunk1');
          var spri1 =  document.getElementById('spri1');
          var ston1 =  document.getElementById('ston1');		  
          sunk1.value = ((price1 * ton1) * pstatic1 + priceperton1);
          sppt1.value = (price1 * ton1);
		  
          }
 </script>
		  
<script type="text/javascript">
         function calcca(){
		  let pstatic2 = 0.2591;	 
          var price2 = Number(document.getElementById('spri2').value);
          var ton2 = Number(document.getElementById('ston2').value);
          var priceperton2 = Number(document.getElementById('sppt2').value);
		  var unknown2 = Number(document.getElementById('sunk2').value);
          var sppt2 =  document.getElementById('sppt2');
          var sunk2 =  document.getElementById('sunk2');		 
          sunk2.value = ((price2 * ton2) * pstatic2 + priceperton2);
          sppt2.value = (price2 * ton2);
		  
          }
 </script>  
 
 		<script type="text/javascript">
         function calccau(){
		  let pstatic3 = 0.2591;	 
          var price3 = Number(document.getElementById('spri3').value);
          var ton3 = Number(document.getElementById('ston3').value);
          var priceperton3 = Number(document.getElementById('sppt3').value);
		  var unknown3 = Number(document.getElementById('sunk3').value);
          var sppt3 =  document.getElementById('sppt3');
          var sunk3 =  document.getElementById('sunk3');		 
          sunk3.value = ((price3 * ton3) * pstatic3 + priceperton3);
          sppt3.value = (price3 * ton3);
		  
          }
 </script>  
 
 <script type="text/javascript">
         function calccaul(){
		  let pstatic4 = 0.2591;	 
          var price4 = Number(document.getElementById('spri4').value);
          var ton4 = Number(document.getElementById('ston4').value);
          var priceperton4 = Number(document.getElementById('sppt4').value);
		  var unknown4 = Number(document.getElementById('sunk4').value);
          var sppt4 =  document.getElementById('sppt4');
          var sunk4 =  document.getElementById('sunk4');		 
          sunk4.value = ((price4 * ton4) * pstatic4 + priceperton4);
          sppt4.value = (price4 * ton4);
		  
          }
 </script>  
 	

 <script type="text/javascript">
         function calccaula(){
		  let pstatic5 = 0.2591;	 
          var price5 = Number(document.getElementById('spri5').value);
          var ton5 = Number(document.getElementById('ston5').value);
          var priceperton5 = Number(document.getElementById('sppt5').value);
		  var unknown5 = Number(document.getElementById('sunk5').value);
          var sppt5 =  document.getElementById('sppt5');
          var sunk5 =  document.getElementById('sunk5');		 
          sunk5.value = ((price5 * ton5) * pstatic5 + priceperton5);
          sppt5.value = (price5 * ton5);
		  
          }
 </script>	
		  
   <script type="text/javascript">
         function calccaulat(){
		  let pstatic6 = 0.2591;	 
          var price6 = Number(document.getElementById('spri6').value);
          var ton6 = Number(document.getElementById('ston6').value);
          var priceperton6 = Number(document.getElementById('sppt6').value);
		  var unknown6 = Number(document.getElementById('sunk6').value);
          var sppt6 =  document.getElementById('sppt6');
          var sunk6 =  document.getElementById('sunk6');		 
          sunk6.value = ((price6 * ton6) * pstatic6 + priceperton6);
          sppt6.value = (price6 * ton6);
		  
          }
 </script>  

 <script type="text/javascript">
         function ca(){
		  let pstatic7 = 0.2591;	 
          var price7 = Number(document.getElementById('spri7').value);
          var ton7 = Number(document.getElementById('ston7').value);
          var priceperton7 = Number(document.getElementById('sppt7').value);
		  var unknown7 = Number(document.getElementById('sunk7').value);
          var sppt7 =  document.getElementById('sppt7');
          var sunk7 =  document.getElementById('sunk7');		 
          sunk7.value = ((price7 * ton7) * pstatic7 + priceperton7);
          sppt7.value = (price7 * ton7);
		  
          }
 </script>  


 <script type="text/javascript">
         function calll(){
		  let pstatic8 = 0.2591;	 
          var price8 = Number(document.getElementById('spri8').value);
          var ton8 = Number(document.getElementById('ston8').value);
          var priceperton8 = Number(document.getElementById('sppt8').value);
		  var unknown8 = Number(document.getElementById('sunk8').value);
          var sppt8 =  document.getElementById('sppt8');
          var sunk8 =  document.getElementById('sunk8');		 
          sunk8.value = ((price8 * ton8) * pstatic8 + priceperton8);
          sppt8.value = (price8 * ton8);
		  
          }
 </script> 
 
 
 
 <script type="text/javascript">
         function calllc(){
		  let pstatic9 = 0.2591;	 
          var price9 = Number(document.getElementById('spri9').value);
          var ton9 = Number(document.getElementById('ston9').value);
          var priceperton9 = Number(document.getElementById('sppt9').value);
		  var unknown9 = Number(document.getElementById('sunk9').value);
          var sppt9 =  document.getElementById('sppt9');
          var sunk9 =  document.getElementById('sunk9');		 
          sunk9.value = ((price9 * ton9) * pstatic9 + priceperton9);
          sppt9.value = (price9 * ton9);
		  
          }
 </script> 



 <script type="text/javascript">
         function calllcu(){
		  let pstatic10 = 0.25101;	 
          var price10 = Number(document.getElementById('spri10').value);
          var ton10 = Number(document.getElementById('ston10').value);
          var priceperton10 = Number(document.getElementById('sppt10').value);
		  var unknown10 = Number(document.getElementById('sunk10').value);
          var sppt10 =  document.getElementById('sppt10');
          var sunk10 =  document.getElementById('sunk10');		 
          sunk10.value = ((price10 * ton10) * pstatic10 + priceperton10);
          sppt10.value = (price10 * ton10);
		  
          }
 </script> 





 
        </section>
