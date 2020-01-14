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
            <h2>Block Properties</h2>
			     <form method='POST' action='form.php'>
		<?php	
				$qry = "SELECT * FROM blocks WHERE block_id = '1' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['block_id']; 
				$blname = $row['name'];
                $wd = $row['width'];
				$lnt = $row['length'];
                $ht = $row['height'];
				$mt = $row['mortar'];
                $ppr = $row['price'];
				$dl = $row['down_labour'];
                $ul = $row['up_labour'];
				$nmt = $row['normal_mortar'];
                $mv = $row['missing_value'];
				$gmt = $row['gable_mortar'];
                $fmt = $row['fence_mortar'];
				$fmtc = $row['fence_mortar_for_column'];
                $acb = $row['a_course_of_block'];
				$bppa = $row['boq_price_per_area'];
                $mv2 = $row['missing_value2'];
				$cmt1 = $row['cement1'];
                $cmt2 = $row['cement2'];
				$cmt3 = $row['cement3'];
                $sn1 = $row['sand1'];
				$sn2 = $row['sand2'];
                $sn3 = $row['sand3'];
				$engr = $row['engr_fee'];
			
				
			echo"
       
              <div>
                <h3><b>Block Types</b></h3>
                <input name='btype' value='$blname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Width</h3>
                <input name='widt' id='wid' value='$wd' onKeyup='calculate()' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Lengths</h3>
                <input name='lent' id='len' value='$lnt' onKeyup='calculate()' placeholder='Enter Block Length'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Heights</h3>
                <input name='heit' id='hei' value='$ht' onKeyup='calculate()' placeholder='Enter Block Height'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Mortars</h3>
                <input name='mort' id='mor' value='$mt' onKeyup='calculate()' placeholder='Enter Mortar Size'  onkeyup='calculate()'></input>
                
              </div>
              <div>
                <h3>Prices</h3>
                <input name='pric' id='pri' value='$ppr' placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Down-Labour's</h3>
                <input name='dlab' id='dla' value='$dl' placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Up-Labour's</h3>
                <input name='ulab' id='ula' value='$ul'  placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Course Height</h3>
                <input name='cheit' id='acb' value='$acb' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>BOQ Price/Area</h3>
                <input name='boqp' id='bppa' value='$bppa' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Normal Mortar</h3>
                <input name='nmort' id='nmor' value='$nmt' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Missing Value</h3>
                <input name='mval' id='mva' value='$mv' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Gable Mortar</h3>
                <input name='gmort' id='gmor' value='$gmt' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Fence Mortar</h3>
                <input name='fmort' id='fmor' value='$fmt' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Fence Mortar 4 Column</h3>
                <input name='fmortc' id='fmorc' value='$fmtc' placeholder='Course Height'></input>
                
              </div>
              
              <div>
                <h3>Missing Value 2</h3>
                <input name='mval2' id='mv2' value='$mv2' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Cement 1</h3>
                <input name='cmt1' id='cmt1' value='$cmt1' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Cement 2</h3>
                <input name='cmt2' id='cmt2' value='$cmt2' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Cement 3</h3>
                <input name='cmt3' id='cmt3' value='$cmt3' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Sand 1</h3>
                <input name='snd1' id='snd1' value='$sn1' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Sand 2</h3>
                <input name='snd2' id='snd2' value='$sn2' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Sand 3</h3>
                <input name='snd3' id='snd3' value='$sn3' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Engnr Fee</h3>
                <input name='engr' id='engf' value='$engr' placeholder='Course Height' ></input>
                
              </div>
			     <div>
            <button name='send'>submit</button>
          </div>
           
				  		";
			}
			?>
			
			
<p><hr></hr></p>		
						
			
			
		<?php	
				$qry = "SELECT * FROM blocks WHERE block_id = '2' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['block_id']; 
				$blname1 = $row['name'];
                $wd1 = $row['width'];
				$lnt1 = $row['length'];
                $ht1 = $row['height'];
				$mt1 = $row['mortar'];
                $ppr1 = $row['price'];
				$dl1 = $row['down_labour'];
                $ul1 = $row['up_labour'];
				$nmt1 = $row['normal_mortar'];
                $mv1 = $row['missing_value'];
				$gmt1 = $row['gable_mortar'];
                $fmt1 = $row['fence_mortar'];
				$fmtc1 = $row['fence_mortar_for_column'];
                $acb1 = $row['a_course_of_block'];
				$bppa1 = $row['boq_price_per_area'];
                $mv21 = $row['missing_value2'];
				$cmt11 = $row['cement1'];
                $cmt21 = $row['cement2'];
				$cmt31 = $row['cement3'];
                $sn11 = $row['sand1'];
				$sn21 = $row['sand2'];
                $sn31 = $row['sand3'];
				$engr1 = $row['engr_fee'];
			
				
			echo"
       
              <div>
                <h3><b>Block Types</b></h3>
                <input name='btype1' value='$blname1'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Width</h3>
                <input name='widt1' id='wid1' value='$wd1' onKeydown='multiply()' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Lengths</h3>
                <input name='lent1' id='len1' value='$lnt1' onKeydown='multiply()' placeholder='Enter Block Length' ></input>
                
              </div>
              <div>
                <h3>Heights</h3>
                <input name='heit1' id='hei1' value='$ht1' onKeydown='multiply()' placeholder='Enter Block Height' ></input>
                
              </div>
              <div>
                <h3>Mortars</h3>
                <input name='mort1' id='mor1' value='$mt1' onKeydown='multiply()' placeholder='Enter Mortar Size' ></input>
                
              </div>
              <div>
                <h3>Prices</h3>
                <input name='pric1' id='pri1' value='$ppr1' placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Down-Labour's</h3>
                <input name='dlab1' id='dla1' value='$dl1' placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Up-Labour's</h3>
                <input name='ulab1' id='ula1' value='$ul1'  placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Course Height</h3>
                <input name='cheit1' id='acb1' value='$acb1' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>BOQ Price/Area</h3>
                <input name='boqp1' id='bppa1' value='$bppa1' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Normal Mortar</h3>
                <input name='nmort1' id='nmor1' onKeydown='multiply()' value='$nmt1' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Missing Value</h3>
                <input name='mval1' id='mva1' value='$mv1' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Gable Mortar</h3>
                <input name='gmort1' id='gmor1' value='$gmt1' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Fence Mortar</h3>
                <input name='fmort1' id='fmor1' value='$fmt1' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Fence Mortar 4 Column</h3>
                <input name='fmortc1' id='fmorc1' value='$fmtc1' placeholder='Course Height' onKeydown='multiply()'></input>
                
              </div>
              
              <div>
                <h3>Missing Value 2</h3>
                <input name='mval21' id='mv21' value='$mv21' placeholder='Course Height' onKeydown='multiply()' ></input>
                
              </div>
              <div>
                <h3>Cement 1</h3>
                <input name='cmt11' id='cmt11' value='$cmt11' placeholder='Course Height' onKeydown='multiply()' ></input>
                
              </div>
              <div>
                <h3>Cement 2</h3>
                <input name='cmt21' id='cmt21' value='$cmt21' placeholder='Course Height' onKeydown='multiply()'  ></input>
                
              </div>
              <div>
                <h3>Cement 3</h3>
                <input name='cmt31' id='cmt31' value='$cmt31' placeholder='Course Height' onKeydown='multiply()' ></input>
                
              </div>
              <div>
                <h3>Sand 1</h3>
                <input name='snd11' id='snd11' value='$sn11' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Sand 2</h3>
                <input name='snd21' id='snd21' value='$sn21' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Sand 3</h3>
                <input name='snd31' id='snd31' value='$sn31' placeholder='Course Height' onKeydown='multiply()' ></input>
                
              </div>
              <div>
                <h3>Engnr Fee</h3>
                <input name='engr1' id='engf1' value='$engr1' placeholder='Course Height' onKeydown='multiply()' ></input>
                
              </div>
			     <div>
            <button name='send'>submit</button>
          </div>
           
				  		";
			}
			?>
				
	<p><hr></hr></p>		
	
	
	
	
	<?php	
				$qry = "SELECT * FROM blocks WHERE block_id = '4' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['block_id']; 
				$blname = $row['name'];
                $wd = $row['width'];
				$lnt = $row['length'];
                $ht = $row['height'];
				$mt = $row['mortar'];
                $ppr = $row['price'];
				$dl = $row['down_labour'];
                $ul = $row['up_labour'];
				$nmt = $row['normal_mortar'];
                $mv = $row['missing_value'];
				$gmt = $row['gable_mortar'];
                $fmt = $row['fence_mortar'];
				$fmtc = $row['fence_mortar_for_column'];
                $acb = $row['a_course_of_block'];
				$bppa = $row['boq_price_per_area'];
                $mv2 = $row['missing_value2'];
				$cmt1 = $row['cement1'];
                $cmt2 = $row['cement2'];
				$cmt3 = $row['cement3'];
                $sn1 = $row['sand1'];
				$sn2 = $row['sand2'];
                $sn3 = $row['sand3'];
				$engf = $row['engr_fee'];
			
				
			echo"
       
              <div>
                <h3><b>Block Types</b></h3>
                <input name='btype2' value='$blname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Width</h3>
                <input name='widt2' id='wid2' value='$wd' onKeypress='calcu()' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Lengths</h3>
                <input name='lent2' id='len2' value='$lnt' onKeypress='calcu()' placeholder='Enter Block Length' ></input>
                
              </div>
              <div>
                <h3>Heights</h3>
                <input name='heit2' id='hei2' value='$ht' onKeypress='calcu()' placeholder='Enter Block Height' ></input>
                
              </div>
              <div>
                <h3>Mortars</h3>
                <input name='mort2' id='mor2' value='$mt' onKeypress='calcu()' placeholder='Enter Mortar Size'></input>
                
              </div>
              <div>
                <h3>Prices</h3>
                <input name='pric2' id='pri2' value='$ppr' placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Down-Labour's</h3>
                <input name='dlab2' id='dla2' value='$dl' placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Up-Labour's</h3>
                <input name='ulab2' id='ula2' value='$ul'  placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Course Height</h3>
                <input name='cheit2' id='acb2' value='$acb' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>BOQ Price/Area</h3>
                <input name='boqp2' id='bppa2' value='$bppa' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Normal Mortar</h3>
                <input name='nmort2' id='nmor2' value='$nmt' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Missing Value</h3>
                <input name='mval2' id='mva12' value='$mv' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>Gable Mortar</h3>
                <input name='gmort2' id='gmor2' value='$gmt' placeholder='Course Height' onKeypress='calcu()'></input>
                
              </div>
              <div>
                <h3>Fence Mortar</h3>
                <input name='fmort2' id='fmor2' value='$fmt' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
              <div>
                <h3>Fence Mortar 4 Column</h3>
                <input name='fmortc2' id='fmorc2' value='$fmtc' placeholder='Course Height' onKeypress='calcu()'></input>
                
              </div>
              
              <div>
                <h3>Missing Value 2</h3>
                <input name='mval22' id='mva22' value='$mv2' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
              <div>
                <h3>Cement 1</h3>
                <input name='cmt12' id='cmt12' value='$cmt1' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Cement 2</h3>
                <input name='cmt22' id='cmt22' value='$cmt2' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
              <div>
                <h3>Cement 3</h3>
                <input name='cmt32' id='cmt32' value='$cmt3' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
              <div>
                <h3>Sand 1</h3>
                <input name='snd12' id='snd12' value='$sn1' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
              <div>
                <h3>Sand 2</h3>
                <input name='snd22' id='snd22' value='$sn2' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
              <div>
                <h3>Sand 3</h3>
                <input name='snd32' id='snd32' value='$sn3' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
              <div>
                <h3>Engnr Fee</h3>
                <input name='engr2' id='engf2' value='$engf' placeholder='Course Height' onKeypress='calcu()' ></input>
                
              </div>
			     <div>
            <button name='send'>submit</button>
          </div>
           
				  		";
			}
			?>
				
	<p><hr></hr></p>		
			
			
			
			<?php	
				$qry = "SELECT * FROM blocks WHERE block_id = '6' ";
			$run = mysqli_query($conn, $qry);
			while($row = mysqli_fetch_array($run)){				
				$id = $row['block_id']; 
				$blname = $row['name'];
                $wd = $row['width'];
				$lnt = $row['length'];
                $ht = $row['height'];
				$mt = $row['mortar'];
                $ppr = $row['price'];
				$dl = $row['down_labour'];
                $ul = $row['up_labour'];
				$nmt = $row['normal_mortar'];
                $mv = $row['missing_value'];
				$gmt = $row['gable_mortar'];
                $fmt = $row['fence_mortar'];
				$fmtc = $row['fence_mortar_for_column'];
                $acb = $row['a_course_of_block'];
				$bppa = $row['boq_price_per_area'];
                $mv2 = $row['missing_value2'];
				$cmt1 = $row['cement1'];
                $cmt2 = $row['cement2'];
				$cmt3 = $row['cement3'];
                $sn1 = $row['sand1'];
				$sn2 = $row['sand2'];
                $sn3 = $row['sand3'];
				$engf = $row['engr_fee'];
			
				
			echo"
       
              <div>
               <h3><b>Block Types</b></h3>
                <input name='btype3' value='$blname'  placeholder='Enter Block Type'></input>
                
              </div>
              <div>
                <h3>Width</h3>
                <input name='widt3' id='wid3' value='$wd' onKeyup='divide()' placeholder='Enter Block Width'></input>
            
              </div>
              <div>
                <h3>Lengths</h3>
                <input name='lent3' id='len3' value='$lnt' onKeyup='divide()' placeholder='Enter Block Length'  ></input>
                
              </div>
              <div>
                <h3>Heights</h3>
                <input name='heit3' id='hei3' value='$ht' onKeyup='divide()' placeholder='Enter Block Height' ></input>
                
              </div>
              <div>
                <h3>Mortars</h3>
                <input name='mort3' id='mor3' value='$mt' onKeyup='divide()' placeholder='Enter Mortar Size'></input>
                
              </div>
              <div>
                <h3>Prices</h3>
                <input name='pric3' id='pri3' value='$ppr' placeholder='Enter Price' ></input>
                
              </div>
              <div>
                <h3>Down-Labour's</h3>
                <input name='dlab3' id='dla3' value='$dl' placeholder='Down Labour' ></input>
                
              </div>
              <div>
                <h3>Up-Labour's</h3>
                <input name='ulab3' id='ula3' value='$ul'  placeholder='Up Labour' ></input>
                
              </div>
              <div>
                <h3>Course Height</h3>
                <input name='cheit3' id='acb3' value='$acb' placeholder='Course Height'></input>
                
              </div>
              <div>
                <h3>BOQ Price/Area</h3>
                <input name='boqp3' id='bppa3' value='$bppa' placeholder='Course Height' ></input>
                
              </div>
              <div>
                <h3>Normal Mortar</h3>
                <input name='nmort3' id='nmor3' value='$nmt' placeholder='Course Height' onKeyup='divide()'></input>
                
              </div>
              <div>
                <h3>Missing Value</h3>
                <input name='mval3' id='mva13' value='$mv' placeholder='Course Height' onKeyup='divide()'></input>
                
              </div>
              <div>
                <h3>Gable Mortar</h3>
                <input name='gmort3' id='gmor3' value='$gmt' placeholder='Course Height' onKeyup='divide()'></input>
                
              </div>
              <div>
                <h3>Fence Mortar</h3>
                <input name='fmort3' id='fmor3' value='$fmt' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Fence Mortar 4 Column</h3>
                <input name='fmortc3' id='fmorc3' value='$fmtc' placeholder='Course Height' onKeyup='divide()'></input>
                
              </div>
              
              <div>
                <h3>Missing Value 2</h3>
                <input name='mval23' id='mva23' value='$mv2' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Cement 1</h3>
                <input name='cmt13' id='cmt13' value='$cmt1' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Cement 2</h3>
                <input name='cmt23' id='cmt23' value='$cmt2' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Cement 3</h3>
                <input name='cmt33' id='cmt33' value='$cmt3' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Sand 1</h3>
                <input name='snd13' id='snd13' value='$sn1' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Sand 2</h3>
                <input name='snd23' id='snd23' value='$sn2' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Sand 3</h3>
                <input name='snd33' id='snd33' value='$sn3' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
              <div>
                <h3>Engnr Fee</h3>
                <input name='engr3' id='engf3' value='$engf' placeholder='Course Height' onKeyup='divide()' ></input>
                
              </div>
			     <div>
            <button name='send'>submit</button>
          </div>
           
				  		";
			}
			?>
					
			 </form>
			 
			 			
			
				
		<?php
		  if(isset($_POST['send']))
		  {
			  
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
			  
$qry = "INSERT INTO `blocks_result`(`block_rslt`, `name`, `width`, `length`, `height`, `mortar`, `price`, `down_labour`, `up_labour`, `normal_mortar`, `missing_value`, `gable_mortar`, `fence_mortar`, `fence_mortar_for_column`, `a_course_of_block`, `boq_price_per_area`, `missing_value2`, `cement1`, `cement2`, `cement3`, `sand1`, `sand2`, `sand3`, `engr_fee`) VALUES ('','$btype','$widt','$lent','$heit','$mort','$pric','$dlab','$ulab','$cheit','$boqp','$nmort','$mval','$gmort','$fmort','$fmortc','$mval2','$cmt1','$cmt2','$cmt3','$snd1','$snd3','$snd3','$engr') , ('','$btype1','$widt1','$lent1','$heit1','$mort1','$pric1','$dlab1','$ulab1','$cheit1','$boqp1','$nmort1','$mval1','$gmort1','$fmort1','$fmortc1','$mval21','$cmt11','$cmt21','$cmt31','$snd11','$snd21','$snd31','$engr1') , ('','$btype2','$widt2','$lent2','$heit2','$mort2','$pric2','$dlab2','$ulab2','$cheit2','$boqp2','$nmort2','$mval2','$gmort2','$fmort2','$fmortc2','$mval22','$cmt12','$cmt22','$cmt32','$snd12','$snd32','$snd32','$engr2') , ('','$btype3','$widt3','$lent3','$heit3','$mort3','$pric3','$dlab3','$ulab3','$cheit3','$boqp3','$nmort3','$mval3','$gmort3','$fmort3','$fmortc3','$mval23','$cmt13','$cmt23','$cmt33','$snd13','$snd23','$snd33','$engr3') ";


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
        <div>
            <button>submit</button>
          </div>
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
