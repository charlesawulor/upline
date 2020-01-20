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
            <h2>Roofing woods</h2>
			     <form method='POST' action='roofing_wood.php'>
		<?php	
				$qry = "SELECT * FROM roofing_woods WHERE id = '1' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['id']; 
				$wname = $row['name'];
                $wlen = $row['length'];
				$wpri = $row['price'];
               
			
				
			echo"
       
              <div>
                <h3><b>Wood Type</b></h3>
                <input name='wtype' value='$wname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='wlen' id='wid' value='$wlen'  placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='wpri' id='len' value='$wpri' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
						
			
			
	<?php	
				$qry = "SELECT * FROM roofing_woods WHERE id = '2' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['id']; 
				$wname = $row['name'];
                $wlen = $row['length'];
				$wpri = $row['price'];
               
			
				
			echo"
       
              <div>
                <h3><b>Block Types</b></h3>
                <input name='wtype1' value='$wname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='wlen1' id='wid' value='$wlen' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='wpri1' id='len' value='$wpri' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
            
         
           
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
	
	
	
	
	<?php	
				$qry = "SELECT * FROM roofing_woods WHERE id = '3' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['id']; 
				$wname = $row['name'];
                $wlen = $row['length'];
				$wpri = $row['price'];
               
			
				
			echo"
       
              <div>
                <h3><b>Wood Type</b></h3>
                <input name='wtype2' value='$wname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='wlen2' id='wid' value='$wlen' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='wpri2' id='len' value='$wpri' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
            
              
			
				  		";
			}
			?>
			
			
<p><hr></hr></p>	

	
		<?php	
				$qry = "SELECT * FROM roofing_woods WHERE id = '4' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['id']; 
				$wname = $row['name'];
                $wlen = $row['length'];
				$wpri = $row['price'];
               
			
				
			echo"
       
              <div>
                <h3><b>Wood Type</b></h3>
                <input name='wtype3' value='$wname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='wlen3' id='wid' value='$wlen' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='wpri3' id='len' value='$wpri' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
            
              
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
						
		<?php	
				$qry = "SELECT * FROM roofing_woods WHERE id = '5' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['id']; 
				$wname = $row['name'];
                $wlen = $row['length'];
				$wpri = $row['price'];
               
			
				
			echo"
       
              <div>
                <h3><b>Wood Type</b></h3>
                <input name='wtype4' value='$wname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='wlen4' id='wid' value='$wlen' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='wpri4' id='len' value='$wpri' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
            
             
           
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
						
			<?php	
				$qry = "SELECT * FROM roofing_woods WHERE id = '6' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['id']; 
				$wname = $row['name'];
                $wlen = $row['length'];
				$wpri = $row['price'];
               
			
				
			echo"
       
              <div>
                <h3><b>Wood Type</b></h3>
                <input name='wtype5' value='$wname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='wlen5' id='wid' value='$wlen' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='wpri5' id='len' value='$wpri' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
            
              
			
           
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
						
			<?php	
				$qry = "SELECT * FROM roofing_woods WHERE id = '7' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['id']; 
				$wname = $row['name'];
                $wlen = $row['length'];
				$wpri = $row['price'];
               
			
				
			echo"
       
              <div>
                <h3><b>Wood Type</b></h3>
                <input name='wtype6' value='$wname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='wlen6' id='wid' value='$wlen' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='wpri6' id='len' value='$wpri' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
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
			  
		      $wtype=$_POST['wtype'];
			  $wlen=$_POST['wlen'];
			  $wpri=$_POST['wpri'];
	          
              $wtype1=$_POST['wtype1'];
			  $wlen1=$_POST['wlen1'];
			  $wpri1=$_POST['wpri1'];
	          
			  
			  $wtype2=$_POST['wtype2'];
			  $wlen2=$_POST['wlen2'];
			  $wpri2=$_POST['wpri2'];
	          
			  $wtype3=$_POST['wtype3'];
			  $wlen3=$_POST['wlen3'];
			  $wpri3=$_POST['wpri3'];
	          
			  
			  $wtype4=$_POST['wtype4'];
			  $wlen4=$_POST['wlen4'];
			  $wpri4=$_POST['wpri4'];
	          
			  $wtype5=$_POST['wtype5'];
			  $wlen5=$_POST['wlen5'];
			  $wpri5=$_POST['wpri5'];
			  
	          $wtype6=$_POST['wtype6'];
			  $wlen6=$_POST['wlen6'];
			  $wpri6=$_POST['wpri6'];
	          
			  
              $qry = "INSERT INTO `roofing_woodsrst`(`name`, `length`, `price`) VALUES ('$wtype','$wlen','$wpri') , ('$wtype1','$wlen1','$wpri1') , ('$wtype2','$wlen2','$wpri2') , ('$wtype3','$wlen3','$wpri3') , ('$wtype4','$wlen4','$wpri4') , ('$wtype5','$wlen5','$wpri5') , ('$wtype6','$wlen6','$wpri6')";


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
         
        </section>
      
  <script type="text/javascript">



         function calculate(){
          let kStatic = 0.8;
		  let lstatic = 0.9;
		  let mstatic = 0.95;
		  let ostatic = 1.05;
          var length = Number(document.getElementById('len').value);
          var height = Number(document.getElementById('hei').value);
          var mortar = Number(document.getElementById('mor').value);
          var nmor =  document.getElementById('nmor');
          var mva =  document.getElementById('mva');
		  var gmor = document.getElementById('gmor');
          nmor.value = ((length + height) * mortar * kStatic);
          mva.value =(length + mortar) * (height + mortar);
		  gmor.value =(length + height) * mortar * lstatic;
		  fmor.value =(length + height) * mortar * mstatic;
		  fmorc.value =(length + height) * mortar * ostatic;
          }


        </script>
		
		
		
<script type="text/javascript">         
function multiply(){         
let kStatic1 = 0.9;		  		  
let mstatic1 = 1.05;		 
let ostatic1 = 1.15;
var width1 = Number(document.getElementById('wid1').value);         
var length1 = Number(document.getElementById('len1').value);         
var height1 = Number(document.getElementById('hei1').value);         
var mortar1 = Number(document.getElementById('mor1').value);
var normalmortar1 = Number(document.getElementById('nmor1').value); 
var cement31 = Number(document.getElementById('cmt31').value); 
var missingvalue21 = Number(document.getElementById('mva1').value);
var sand31 = Number(document.getElementById('snd31').value);
var engineerfee1 = Number(document.getElementById('engf1').value);             
var nmor1 =  document.getElementById('nmor1');          
var mva1 =  document.getElementById('mva1');		  
var gmor1 = document.getElementById('gmor1');
var engf1 = document.getElementById('engf1');
var fmorc1 = document.getElementById('fmorc1'); 
var fmor1 = document.getElementById('fmor1'); 
var cmt21 = document.getElementById('cmt21');
var cmt11 = document.getElementById('cmt11');        
nmor1.value = ((length1 + height1) * mortar1 * kStatic1);         
mva1.value =(length1 + mortar1) * (height1 + mortar1);		  
gmor1.value =(length1 + height1) * mortar1;		  
fmor1.value =(length1 + height1) * mortar1 * mstatic1;		  
fmorc1.value =(length1 + height1) * mortar1 * ostatic1;
cmt11.value =(length1 + width1) / normalmortar1;   
cmt21.value =(width1 + normalmortar1) * length1 / height1; 
engf1.value =(cement31 + missingvalue21 + sand31) * 0.05 * 1.5;     
}       
</script>

<script type="text/javascript">         
function calcu(){         
let kStatic2 = 0.11875;		  		  
let mstatic2 = 1.05;		 
let ostatic2 = 1.15;
let pstatic2 = 1.25;
let sndratio = 0.012121212;
let sand2e2 = 0.86;
var width2 = Number(document.getElementById('wid2').value);         
var length2 = Number(document.getElementById('len2').value);         
var height2 = Number(document.getElementById('hei2').value);         
var mortar2 = Number(document.getElementById('mor2').value);
var normalmortar2 = Number(document.getElementById('nmor2').value); 
var cement32 = Number(document.getElementById('cmt32').value);
var cement12 = Number(document.getElementById('cmt12').value); 
var cement22 = Number(document.getElementById('cmt22').value);
var missingvalue12 = Number(document.getElementById('mva12').value);
var missingvalue22 = Number(document.getElementById('mva22').value);
var sand32 = Number(document.getElementById('snd32').value);
var sand22 = Number(document.getElementById('snd22').value);
var sand12 = Number(document.getElementById('snd12').value);
var gmor2 = Number(document.getElementById('gmor2').value);
var engf2 = Number(document.getElementById('engf2').value);             
var nmor2 =  document.getElementById('nmor2');          
var mva12 =  document.getElementById('mva12');	
var mva22 =  document.getElementById('mva22');	  
var gmor2 = document.getElementById('gmor2');
var engf2 = document.getElementById('engf2');
var fmorc2 = document.getElementById('fmorc2'); 
var fmor2 = document.getElementById('fmor2'); 
var cmt22 = document.getElementById('cmt22');
var cmt12 = document.getElementById('cmt12'); 
var cmt32 = document.getElementById('cmt32'); 
var snd12 = document.getElementById('snd12');
var snd32 = document.getElementById('snd32');       
nmor2.value = (length2 + height2) * mortar2 ;         
mva12.value =((length2 + mortar2) * (height2 + mortar2) * kStatic2);		  
gmor2.value =(length2 + height2) * mortar2 * mstatic2;		  
fmor2.value =(length2 + height2) * mortar2 * ostatic2;		  
fmorc2.value =(length2 + height2) * mortar2 * pstatic2;
cmt12.value =(length2 * width2) / normalmortar2;   
cmt22.value =((width2 + normalmortar2) * length2) / height2; 
snd12.value =(6 * sndratio * 2) * cement2 * 1.5;
snd22.value =(sand12 / sand2e2) ;
engf2.value =(cement32 + missingvalue22 + sand32) * 0.05 * 1.6;     
}       
</script>
		
			
		
<script type="text/javascript">         
function divide(){         
let kStatic3 = 0.11875;		  		  
let mstatic3 = 1.05;		 
let ostatic3 = 1.15;
let pstatic3 = 1.25;
let sndratio = 0.012121212;
let sand2e2 = 0.86;
var width3 = Number(document.getElementById('wid3').value);         
var length3 = Number(document.getElementById('len3').value);         
var height3 = Number(document.getElementById('hei3').value);         
var mortar3 = Number(document.getElementById('mor3').value);
var normalmortar3 = Number(document.getElementById('nmor3').value); 
var cement33 = Number(document.getElementById('cmt33').value);
var cement13 = Number(document.getElementById('cmt13').value); 
var cement23 = Number(document.getElementById('cmt23').value);
var missingvalue13 = Number(document.getElementById('mva13').value);
var missingvalue23 = Number(document.getElementById('mva23').value);
var sand33 = Number(document.getElementById('snd33').value);
var sand23 = Number(document.getElementById('snd23').value);
var sand13 = Number(document.getElementById('snd13').value);
var gmor3 = Number(document.getElementById('gmor3').value);
var engf3 = Number(document.getElementById('engf3').value);             
var nmor3 =  document.getElementById('nmor3');          
var mva13 =  document.getElementById('mva13');	
var mva23 =  document.getElementById('mva23');	  
var gmor3 = document.getElementById('gmor3');
var engf3 = document.getElementById('engf3');
var fmorc3 = document.getElementById('fmorc3'); 
var fmor3 = document.getElementById('fmor3'); 
var cmt23 = document.getElementById('cmt23');
var cmt13 = document.getElementById('cmt13'); 
var cmt33 = document.getElementById('cmt33'); 
var snd13 = document.getElementById('snd13');
var snd33 = document.getElementById('snd33');       
nmor3.value = (length3 + height3) * mortar3 ;         
mva13.value =((height3 + mortar3) * (height3 + mortar3) * kStatic3);		  
gmor3.value =(length3 + height3) * mortar3 * mstatic3;		  
fmor3.value =(length3 + height3) * mortar3 * ostatic3;		  
fmorc3.value =(length3 + height3) * mortar3 * pstatic3;
cmt13.value =(length3 * width3) / normalmortar3;   
cmt23.value =((width3 + normalmortar3) * length3) / height3; 
snd13.value =(6 * sndratio * 2) * cement3 * 1.5;
snd23.value =(sand23 / sand2e2) ;
engf3.value =(cement33 + missingvalue23 + sand33) * 0.05 * 1.6;     
}       
</script>
