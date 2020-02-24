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
            <h2>Plank wood & others</h2>
			<br><br>
			<hr>
			     <form method='POST' action='form.php'>
				 
				 				 
				 	 <div>
                <h2><b>Project ID</b></h2>
                <input name='btype' value=''  placeholder='Enter Block Type'></input>
                
              </div>
			<br><br>
			<hr>
			 <h2>Plank</h2>
			 
				 
				 
		<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '1' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['name'];  
$length = $row['length'];
$price = $row['price'];  
$sqm = $row['sqm']; 

echo"		 
				 
		
              <div>
                <h3><b>Width</b></h3>
                <input name='name' value='$name'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length' id='wid' value='$length' onKeyup='calculate()' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='price' id='len' value='$price'  placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Area</h3>
                <input name='area' id='hei' value='$sqm' placeholder='Enter Block Height'  onkeyup='calculate()'></input>
                
              </div>
              
		
				  		";

			}
		
	?>
           
			
<p><hr></hr></p>		
			 <h2>Woods</h2>			
			
				<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '2' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['name'];  
$length = $row['length'];
$price = $row['price'];  


echo"		
       
              <div>
                <h3><b>Name</b></h3>
                <input name='name1' value='$name'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length1'  value='$length' onKeydown='multiply()' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='price1' value='$price' onKeydown='multiply()' placeholder='Enter Block Length' ></input>
                
              </div><br>
				
				  		";

			}
		
	?>  
			  
			  				<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '3' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['name'];  
$length = $row['length'];
$price = $row['price'];  


echo"		
              <div>
                <h3>Name</h3>
                <input name='name2' id='hei1' value='$name' ></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length2' id='mor1' value='$length'  ></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='price2' id='pri1' value='$price'></input>
                
              </div><br>
			  
						  		";

			}
		
	?>  
			    
			 		  				<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '4' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['name'];  
$length = $row['length'];
$price = $row['price'];  


echo"		 
              <div>
                <h3>Name</h3>
                <input name='name3' value='$name'  ></input>
                
              </div>
			  <div>
                <h3>Length</h3>
                <input name='length3' value='$length'  ></input>
                
              </div>
              <div>
                <h3>Price</h3>
                <input name='price3' value='$price' ></input>
                
              </div><br>
              
							  		";

			}
		
	?>  	
           
		
				
	<p><hr></hr></p>		
	
	<h2>Ply boards</h2>
	
				 		  				<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '5' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['name'];  
$length = $row['length'];
$price = $row['price'];  


echo"	
	
              <div>
                <h3><b>Name</b></h3>
                <input name='name_pb' value='$name' ></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length_pb' id='wid2' value='$length ' ></input>
            
              </div>
              <div>
                <h3>Price</h3>
                <input name='price_pb' id='len2' value='$price'  ></input>
                
              </div><br>
			  
									  		";

			}
		
	?>  		  
			  
			  
			  <p><hr></hr></p>	
			  
			  				 		  				<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '7' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['name'];  

$price = $row['price'];  


echo"	
	
			  
			  <h2>Bamboo</h2>
              <div>
                <h3>Name</h3>
                <input name='name_bam' id='hei2' value='$name' ></input>
                
              </div>
    
              <div>
                <h3>Price</h3>
                <input name='price_bam' id='pri2' value='$price' ></input>
                
              </div><br>
			  
											  		";

			}
		
	?>  		    
			  
			  <p><hr></hr></p>
			  
             <h2>Nails</h2>	
<?php			 

			$qry = "SELECT * FROM nails ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['nail_id'];
$name = $row['name'];  

$price = $row['price'];  


echo"	 
              <div>
                <h3>Name</h3>
                <input name='name_n'  value='$name' ></input>
                
              </div>
         
		 
              <div>
                <h3>Price</h3>
                <input name='price_n' value='$price'></input>
                
              </div><br>
              
													  		";

			}
		
	?>  		    
		
           
			
				
	<p><hr></hr></p>		
			<h2>Sawed woods</h2>
			 
		<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '1' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['unknown3'];  
$numbers = $row['unknown4'];
$length = $row['length2'];   

echo"
              <div>
               <h3><b>Name</b></h3>
                <input name='name_sw1' value='$name'type='text'</input>
                
              </div>
              <div>
                <h3>Numbers</h3>
                <input name='numbers_sw1' id='wid3' value='$numbers' ></input>
            
              </div>
              <div>
                <h3>Lengths</h3>
                <input name='length_sw1' id='len3' value='$length'  ></input>						
				</div><br>
			
				  		";

			}
		
	?>	
			

		<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '2' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['unknown3'];  
$numbers = $row['unknown4'];
$length = $row['length2'];   

echo"			
              <div>
                <h3>Name</h3>
                <input name='name_sw2' id='hei3' value='$name'  ></input>
                
              </div>
              <div>
                <h3>Numbers</h3>
                <input name='numbers_sw2' id='mor3' value='$numbers' ></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length_sw2' id='pri3' value='$length' ></input>
                
              </div><br>
			  
			  			  		";

			}
		
	?>	
			
			  
		
		<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '3' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['unknown3'];  
$numbers = $row['unknown4'];
$length = $row['length2'];   

echo"		  
			  
              <div>
                <h3>Name</h3>
                <input name='name_sw3' id='dla3' value='$name'  ></input>
                
              </div>
              <div>
                <h3>Numbers</h3>
                <input name='numbers_sw3' id='ula3' value='$numbers'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length_sw3' id='acb3' value='$length'></input>
                
              </div><br>
			  
			  
					  			  		";

			}
		
	?>	  
			  
					<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '4' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['unknown3'];  
$numbers = $row['unknown4'];
$length = $row['length2'];   

echo"	  
			  
              <div>
                <h3>Name</h3>
                <input name='name_sw4' id='bppa3' value='$name'  ></input>
                
              </div>
              <div>
                <h3>Numbers</h3>
                <input name='numbers_sw4' id='nmor3' value='$numbers' ></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length_sw4' id='mva13' value='$length' ></input>
                
              </div><br>
			  
			  
						  			  		";

			}
		
	?>	 	  
			  
			  
			  
								<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '5' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['unknown3'];  
$numbers = $row['unknown4'];
$length = $row['length2'];   

echo"	    
			  
              <div>
                <h3>Name</h3>
                <input name='name_sw5' id='gmor3' value='$name' ></input>
                
              </div>
              <div>
                <h3>Numbers</h3>
                <input name='numbers_sw5' id='fmor3' value='$numbers'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length_sw5' id='fmorc3' value='$length'></input>
                
              </div><br>
			  
			  
			  		  
						  			  		";

			}
		
	?>	 
			  
			  
			  
				  
								<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '6' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['unknown3'];  
$numbers = $row['unknown4'];
$length = $row['length2'];   

echo"	    
			  
			  
			  
              
              <div>
                <h3>Name</h3>
                <input name='name_sw6' id='mva23' value='$name' ></input>
                
              </div>
              <div>
                <h3>Numbers</h3>
                <input name='numbers_sw6' id='cmt13' value='$numbers'></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length_sw6' id='cmt23' value='$length'  ></input>
                
              </div><br>
			  
								  			  		";

			}
		
	?>	   
			  
			  
										<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '7' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$name = $row['unknown3'];  
$numbers = $row['unknown4'];
$length = $row['length2'];   

echo"	    
			  
				  
			  
			  
              <div>
                <h3>Name</h3>
                <input name='name_sw7' id='cmt33' value='$name'  ></input>
                
              </div>
              <div>
                <h3>Numbers</h3>
                <input name='numbers_sw7' id='snd13' value='$numbers' ></input>
                
              </div>
              <div>
                <h3>Length</h3>
                <input name='length_sw7' id='snd23' value='$length' ></input>
                
              </div><br>
			  
			  
			  			  
								  			  		";

			}
		
	?>	   
			  
			  
			  
			  
			  
			  
			  <p><hr></hr></p>
			  <h2>Sawing of planks</h2>
			  
			  										<?php	
				
$qry = "SELECT * FROM plankwoods WHERE id = '7' ";
			
$run = mysqli_query($conn, $qry);
			
while($row = mysqli_fetch_array($run)){				
				$id = $row['id'];
$sawp = $row['sawing_price'];  


echo"	    
			  
              <div>
                <h3>Price</h3>
                <input name='price_swp' id='snd33' value='$sawp'  ></input>
                
              </div>
			  
			  		  			  
								  			  		";

			}
		
	?>	  
			  <br><br>
           
			 <div>
            <button name='send'>submit</button>
          </div>
           
				
			 </form>
			 
			 			
			
				
		<?php
		  if(isset($_POST['send']))
		  {
			  $ppro=$_POST['ppro'];
		      $btype=$_POST['btype'];
			  $widt=$_POST['widt'];
			  $lent=$_POST['lent'];
	          $heit=$_POST['heit'];
			  $mort=$_POST['mort'];
			  $pric=$_POST['pric'];
	          $dlab=$_POST['dlab'];
			  $ulab=$_POST['ulab'];
			  $cheit=$_POST['cheit'];	  
		      $boqp=$_POST['boqp'];
			  $nmort=$_POST['nmort'];
			  $mval=$_POST['mval'];
		      $gmort=$_POST['gmort'];
			  $fmort=$_POST['fmort'];
			  $fmortc=$_POST['fmortc'];
			  $mval2=$_POST['mval2'];
    	      $cmt1=$_POST['cmt1'];
			  $cmt2=$_POST['cmt2'];
			  $cmt3=$_POST['cmt3'];	  
		      $snd1=$_POST['snd1'];
			  $snd2=$_POST['snd2'];
			  $snd3=$_POST['snd3'];
			  $engr=$_POST['engr'];	

			  $ppro=$_POST['ppro'];
              $btype1=$_POST['btype1'];
			  $widt1=$_POST['widt1'];
			  $lent1=$_POST['lent1'];
	          $heit1=$_POST['heit1'];
			  $mort1=$_POST['mort1'];
			  $pric1=$_POST['pric1'];
	          $dlab1=$_POST['dlab1'];
			  $ulab1=$_POST['ulab1'];
			  $cheit1=$_POST['cheit1'];	  
		      $boqp1=$_POST['boqp1'];
			  $nmort1=$_POST['nmort1'];
			  $mval1=$_POST['mval1'];
		      $gmort1=$_POST['gmort1'];
			  $fmort1=$_POST['fmort1'];
			  $fmortc1=$_POST['fmortc1'];
			  $mval21=$_POST['mval21'];
    	      $cmt11=$_POST['cmt11'];
			  $cmt21=$_POST['cmt21'];
			  $cmt31=$_POST['cmt31'];	  
		      $snd11=$_POST['snd11'];
			  $snd21=$_POST['snd21'];
			  $snd31=$_POST['snd31'];
			  $engr1=$_POST['engr1'];

			  $ppro=$_POST['ppro'];
              $btype2=$_POST['btype2'];
			  $widt2=$_POST['widt2'];
			  $lent2=$_POST['lent2'];
	          $heit2=$_POST['heit2'];
			  $mort2=$_POST['mort2'];
			  $pric2=$_POST['pric2'];
	          $dlab2=$_POST['dlab2'];
			  $ulab2=$_POST['ulab2'];
			  $cheit2=$_POST['cheit2'];	  
		      $boqp2=$_POST['boqp2'];
			  $nmort2=$_POST['nmort2'];
			  $mval2=$_POST['mval2'];
		      $gmort2=$_POST['gmort2'];
			  $fmort2=$_POST['fmort2'];
			  $fmortc2=$_POST['fmortc2'];
			  $mval22=$_POST['mval22'];
    	      $cmt12=$_POST['cmt12'];
			  $cmt22=$_POST['cmt22'];
			  $cmt32=$_POST['cmt32'];	  
		      $snd12=$_POST['snd12'];
			  $snd22=$_POST['snd22'];
			  $snd32=$_POST['snd32'];
			  $engr2=$_POST['engr2'];

			  $ppro=$_POST['ppro'];
              $btype3=$_POST['btype3'];
			  $widt3=$_POST['widt3'];
			  $lent3=$_POST['lent3'];
	          $heit3=$_POST['heit3'];
			  $mort3=$_POST['mort3'];
			  $pric3=$_POST['pric3'];
	          $dlab3=$_POST['dlab3'];
			  $ulab3=$_POST['ulab3'];
			  $cheit3=$_POST['cheit3'];	  
		      $boqp3=$_POST['boqp3'];
			  $nmort3=$_POST['nmort3'];
			  $mval3=$_POST['mval3'];
		      $gmort3=$_POST['gmort3'];
			  $fmort3=$_POST['fmort3'];
			  $fmortc3=$_POST['fmortc3'];
			  $mval23=$_POST['mval23'];
    	      $cmt13=$_POST['cmt13'];
			  $cmt23=$_POST['cmt23'];
			  $cmt33=$_POST['cmt33'];	  
		      $snd13=$_POST['snd13'];
			  $snd23=$_POST['snd23'];
			  $snd33=$_POST['snd33'];
			  $engr3=$_POST['engr3'];
			  
$qry = "INSERT INTO `blocks_result`(`block_rslt`, `project_id`, `name`, `width`, `length`, `height`, `mortar`, `price`, `down_labour`, `up_labour`, `normal_mortar`, `missing_value`, `gable_mortar`, `fence_mortar`, `fence_mortar_for_column`, `a_course_of_block`, `boq_price_per_area`, `missing_value2`, `cement1`, `cement2`, `cement3`, `sand1`, `sand2`, `sand3`, `engr_fee`) VALUES ('','$ppro','$btype','$widt','$lent','$heit','$mort','$pric','$dlab','$ulab','$cheit','$boqp','$nmort','$mval','$gmort','$fmort','$fmortc','$mval2','$cmt1','$cmt2','$cmt3','$snd1','$snd3','$snd3','$engr') , ('','$ppro','$btype1','$widt1','$lent1','$heit1','$mort1','$pric1','$dlab1','$ulab1','$cheit1','$boqp1','$nmort1','$mval1','$gmort1','$fmort1','$fmortc1','$mval21','$cmt11','$cmt21','$cmt31','$snd11','$snd21','$snd31','$engr1') , ('','$ppro','$btype2','$widt2','$lent2','$heit2','$mort2','$pric2','$dlab2','$ulab2','$cheit2','$boqp2','$nmort2','$mval2','$gmort2','$fmort2','$fmortc2','$mval22','$cmt12','$cmt22','$cmt32','$snd12','$snd32','$snd32','$engr2') , ('','$ppro','$btype3','$widt3','$lent3','$heit3','$mort3','$pric3','$dlab3','$ulab3','$cheit3','$boqp3','$nmort3','$mval3','$gmort3','$fmort3','$fmortc3','$mval23','$cmt13','$cmt23','$cmt33','$snd13','$snd23','$snd33','$engr3') ";


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
