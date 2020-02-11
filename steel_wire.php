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
            <h2>Steels & Wire</h2>
			     <form method='POST' action='steel_wire.php'>
				 
				   <select name="ppro">
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
                <input name='nam1' value='$sname' id='sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri1' value='$spri' id='spri' onKeyup='calculate()'   placeholder=''></input>
            
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
                <input name='nam2' value='$sname' id='sname1' placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri2' id='spri1' value='$spri' onKeyup='calcc()'  placeholder=''></input>
            
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
                <input name='nam3' value='$sname' id='sname2'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri3' value='$spri' id='spri2' onKeyup='calcca()'  placeholder=''></input>
            
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
                <input name='nam4' id='sname3' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri4' id='spri3' value='$spri' onKeyup='calccau()'  placeholder=''></input>
            
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
                <input name='nam5' id='sname4' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri5' id='spri4' value='$spri' onKeyup='calccaul()'  placeholder=''></input>
            
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
                <input name='nam6' id='sname5' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri6' id='spri5' value='$spri' onKeyup='calccaula()'  placeholder=''></input>
            
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
                <input name='nam7' id='sname6' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri7' id='spri6' value='$spri' onKeyup='calccaulat()'  placeholder=''></input>
            
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
                <input name='nam8' id='sname7' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri8' id='spri7' value='$spri' onKeyup='ca()' placeholder=''></input>
            
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
                <input name='nam9' id='sname8' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri9' id='spri8' value='$spri' onKeyup='calll()'  placeholder=''></input>
            
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
                <input name='nam10' id='sname9' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri10' id='spri9' value='$spri' onKeyup='calllc()'  placeholder=''></input>
            
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
                <input name='nam11' id='sname10' value='$sname'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='pri11' id='spri10' value='$spri' onKeyup='calllcu()'  placeholder=''></input>
            
              </div>
         
            
			<br><br>   
			          
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>
<h2>Binding Wire</h2>
<?php	
				$qry = "SELECT * FROM bindingwire WHERE binding_id='4' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
                $id=$row['binding_id'];				
				$wkg = $row['kg'];
                $wpri = $row['price'];
				$wdia = $row['diameters'];
				 $wpri2 = $row['price2'];
		
			
				
			echo"
       
              <div>
                <h3><b>A roll by kg</b></h3>
                <input name='rolby' id='sname10' value='$wkg'  placeholder=''></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='bwpri' id='spri10' value='$wpri' onKeyup='calllcu()'  placeholder=''></input>
            
              </div>
               <div>
                <h3>Price of a kg</h3>
                <input name='bwprikg' id='spri10' value='$wpri2' onKeyup='calllcu()'  placeholder=''></input>
            
              </div>     
        		  		";
			}
			?>	
	
		 <select name='bwdia' required>
				   <option value=''>Select Diameter</option>
		<?php	
				$qry = "SELECT * FROM bindingwire  ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){
                $id=$row['binding_id'];				
				
				$wdia = $row['diameters'];
			
		
			
				
			echo"
                 <option value= '$wdia'>$wdia</option>
 		";
			}
			?>		
          
			</select>
		 
            
			<br><br>   
		
            
              
		

<p><hr></hr></p>

<h2>A Cut Of Binding Wire On Site</h2>

              <div>
                <h3><b>Length</b></h3>
                <input name='acbwlen' id='sname10' value='0.2'  placeholder=''></input>
                
              </div>
 			<br><br>   
			<div>
            <button name='sub'>submit</button>
          </div>
            
              
		

<p><hr></hr></p>
					
			 </form>
			 
			 			
			
				
		<?php
		  if(isset($_POST['sub']))
		  {
			  $ppro=$_POST['ppro'];
		      $nam1=$_POST['nam1'];
			  $nam2=$_POST['nam2'];
			  $nam3=$_POST['nam3'];
			  $nam4=$_POST['nam4'];
			  $nam5=$_POST['nam5'];	          
              $nam6=$_POST['nam6'];
		      $nam7=$_POST['nam7'];
			  $nam8=$_POST['nam8'];
			  $nam9=$_POST['nam9'];
			  $nam10=$_POST['nam10'];
			  $nam11=$_POST['nam11'];
	          
			  $pri1=$_POST['pri1'];
		      $pri2=$_POST['pri2'];
			  $pri3=$_POST['pri3'];
			  $pri4=$_POST['pri4'];
			  $pri5=$_POST['pri5'];
			  $pri6=$_POST['pri6'];	          
              $pri7=$_POST['pri7'];
		      $pri8=$_POST['pri8'];
			  $pri9=$_POST['pri9'];
			  $pri10=$_POST['pri10'];
			  $pri11=$_POST['pri11'];
		
			  
			  $rolby=$_POST['rolby'];
			  $bwpri=$_POST['bwpri'];
			  $bwprikg=$_POST['bwprikg'];
			  $bwdia=$_POST['bwdia'];
			  $acbwlen=$_POST['acbwlen'];
		
		
	          
			  
              $qry = "INSERT INTO `bindingwirerst`(`project_id`, `name1`, `price1`, `name2`, `price2`, `name3`, `price3`, `name4`, `price4`, `name5`, `price5`, `name6`, `price6`, `name7`, `price7`, `name8`, `price8`, `name9`, `price9`, `name10`, `price10`, `name11`, `price11`, `a_roll_by_kg`, `price_kg`, `diameter`, `price_per_kg`, `binding_wire_length`) VALUES ('$ppro','$nam1','$pri1','$nam2','$pri2','$nam3','$pri3','$nam4','$pri4','$nam5','$pri5','$nam6','$pri6','$nam7','$pri7','$nam8','$pri8','$nam9','$pri9','$nam10','$pri10','$nam11','$pri11','$rolby','$bwpri','$bwdia','$bwprikg','$acbwlen') ";


			  $run = mysqli_multi_query($conn,$qry);
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
