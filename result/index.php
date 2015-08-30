<?php 
	$a1=$_POST['inp1'];
	$a2=$_POST['inp2'];
	$a3=$_POST['inp3'];
	$a4=$_POST['inp4'];
	$a5=$_POST['inp5'];
	$a6=$_POST['inp6'];
	$a7=$_POST['inp7'];
	$a8=$_POST['inp8'];
	$a9=$_POST['inp9'];
	$a10=$_POST['inp10'];
	$a11=$_POST['inp11'];
	$a12=$_POST['inp12'];
	$a13=$_POST['inp13'];
	
	
	$c1=$_POST['co1'];
	$s1=$_POST['su1'];
	$m1=$_POST['mr1'];
	
	$c2=$_POST['co2'];
	$s2=$_POST['su2'];
	$m2=$_POST['mr2'];
	
	$c3=$_POST['co3'];
	$s3=$_POST['su3'];
	$m3=$_POST['mr3'];
	
	$c4=$_POST['co4'];
	$s4=$_POST['su4'];
	$m4=$_POST['mr4'];
	
	$c5=$_POST['co5'];
	$s5=$_POST['su5'];
	$m5=$_POST['mr5'];
	
	$c6=$_POST['co6'];
	$s6=$_POST['su6'];
	$m6=$_POST['mr6'];
	
	$c7=$_POST['co7'];
	$s7=$_POST['su7'];
	$m7=$_POST['mr7'];
	
	$c8=$_POST['co8'];
	$s8=$_POST['su8'];
	$m8=$_POST['mr8'];
	
	$c9=$_POST['co9'];
	$s9=$_POST['su9'];
	$m9=$_POST['mr9'];
	
	
	function grade($letter)
	{
		if ($letter>=80 And $letter<=100) 
		{
			$result="A+";
			return $result;
			
		}
		else if ($letter>=70 And $letter<=79) 
		{
			$result="A";
			return $result;
		}
		else if ($letter>=60 And $letter<=69) 
		{
			$result="A-";
			return $result;
		}
		else if ($letter>=50 And $letter<=59) 
		{
			$result="B";
			return $result;
		}
		else if ($letter>=40 And $letter<=49) 
		{
			$result="C";
			return $result;
		}
		else if ($letter>=33 And $letter<=39) 
		{
			$result="D";
			return $result;
		}
		
		else if ($letter>=1 And $letter<=32) 
		{
			$result="F";
			return $result;
		}
	}
			$r1=grade($m1);
			$r2=grade($m2);
			$r3=grade($m3);
			$r4=grade($m4);
			$r5=grade($m5);
			$r6=grade($m6);
			$r7=grade($m7);
			$r8=grade($m8);
			$r9=grade($m9);
			

	function grade2($point)
	{
		if ($point>=80 And $point<=100) 
		{
			$result2="5.00";
			return $result2;
			
		}
		else if ($point>=70 And $point<=79) 
		{
			$result2="4.00";
			return $result2;
		}
		else if ($point>=60 And $point<=69) 
		{
			$result2="3.50";
			return $result2;
		}
		else if ($point>=50 And $point<=59) 
		{
			$result2="3.00";
			return $result2;
		}
		else if ($point>=40 And $point<=49) 
		{
			$result2="2.00";
			return $result2;
		}
		else if ($point>=33 And $point<=39) 
		{
			$result2="1.00";
			return $result2;
		}
		
		else if ($point>=1 And $point<=32) 
		{
			$result2="0.00";
			return $result2;
		}
	}
		
			$g1=grade2($m1);
			$g2=grade2($m2);
			$g3=grade2($m3);
			$g4=grade2($m4);
			$g5=grade2($m5);
			$g6=grade2($m6);
			$g7=grade2($m7);
			$g8=grade2($m8);
			$g9=grade2($m9);
		
			
			
			$gp=($g1+$g2+$g3+$g4+$g5+$g6+$g7+$g8+$g9)/9;
			$gpp=number_format($gp,2);
		
			if($g1==0.00||$g2==0.00||$g3==0.00||$g4==0.00||$g5==0.00||$g6==0.00||$g7==0.00||$g8==0.00||$g9==0.00)
			{
			$p='Failed';
			}
			else
			
				$p="Passed";
			
			if($p=="Failed")
			{
				$rr="0.00";
			}
				else
				$rr=$gpp;
				
		$my=mysql_connect("localhost","root","");
		mysql_select_db("dusra",$my);
		$ny="insert into result_015(`Year`,`Roll`,`Name`,`Board`,`Father_name`,`Group`,`Mother_name`,`Session`,`Registration_no`,`Type`,`Date_of_Birth`,`Center`,`Institute`,`Result`,`GPA`,`C1`,`S1`,`M1`,`G1`,`C2`,`S2`,`M2`,`G2`,`C3`,`S3`,`M3`,`G3`,`C4`,`S4`,`M4`,`G4`,`C5`,`S5`,`M5`,`G5`,`C6`,`S6`,`M6`,`G6`,`C7`,`S7`,`M7`,`G7`,`C8`,`S8`,`M8`,`G8`,`C9`,`S9`,`M9`,`G9`)
		values
		('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$rr','$p','$c1','$s1','$m1','$r1','$c2','$s2','$m2','$r3','$c3','$s3','$m3','$r3','$c4','$s4','$m4','$r4','$c5','$s5','$m5','$r5','$c6','$s6','$m6','$r6','$c7','$s7','$m7','$r7','$c8','$s8','$m8','$r8','$c9','$s9','$m9','$r9')
		";
		mysql_query($ny,$my);

			
				
	

?>
<html>
	<head>
		<title>
			Educaion Board Bangladesh
		</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>
	<body>	

		<div id="manu">
			<center>
				<table border="0" width="800px" height="auto" bgcolor="#EEEEEE" id="logo">
					<tr>
							<td width="130px" height="125px;" id="pre"></td>
							<td>
								<div id="main">
										<div id="main0"><h2>Ministry of Education</h2></div>
										<div id="main1"></div>
								</div>
									
								<div id="main2">
										<h2>Intermediate and Secondary Education Boards Bangladesh</h2>
											
								</div>
								<div id="main3">
									<p>Official Website of Education Board</p>
								</div>
							</td>
					</tr>
				</table>
				<form action="index.php" method="POST">
					<div id="border">
							<h2>SSC/Dhakil/Equivalent Result Publication	<select style="width:150px; height:25px;" name="inp1"><option>Select one</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option></select><hr/></h2>
					</div>
					<table border="0"  cellpadding="5" id="logo2">
						
						<tr>
							<td id="side" width="100px">Roll No</td>
							<td id="side2" width="250px"><input type="text" size="30px" name="inp2" /></td>
							<td id="side2" width="150px">Name</td>
							<td id="side2" width="300px">
								<input type="text" size="30px"name="inp3"/>
							</td>
						</tr>
						<tr>
							<td id="side">Board</td>
							<td id="side2">
								<select name="inp4" style="width:150px; height:25px;" >
									<option>Select One</option>
										<option>Dinajpur</option>
										<option>Rajshahi</option>
										<option>Dhaka</option>
										<option>Chittangong</option>
										<option>Jessore</option>
										<option>Madrasha</option>
										<option>Technical</option>
										<option>Barisal</option>
								</select>
							</td>
							<td id="side2">Father's name</td>
							<td id="side2">
								<input type="text" size="30px" name="inp5"/>
							</td>
						</tr>
						<tr>
							<td  id="side">Group</td>
							<td id="side2">
								<select name="inp6" style="width:150px; height:25px;" >
									<option>Select One</option>
										<option>SCIENCE</option>
										<option>HUMANITIES </option>
										<option>BUSSINESS</option>
										
								</select>
							</td>
							<td id="side2">Mother's name</td>
							<td id="side2">
								<input type="text" size="30px" name="inp7"/>
							</td>
						</tr>
						<tr>
							<td id="side2">Session</td>
							<td id="side2">
								<select  name="inp8" style="width:150px; height:25px;">
									<option>Select One</option>
										<option>2008-2009</option>
										<option>2009-20010 </option>
										<option>2010-2011</option>
										<option>2011-2012</option>
										
								</select>
								
							</td>
							<td id="side2">Registration no</td>
							<td id="side2">
								<input type="text" size="30px" name="inp9"/>
							</td>
						</tr>
						<tr>
							<td id="side">Type</td>
							<td id="side2">
								<input type="text" size="30px" name="inp10"/>
							</td>
							<td id="side2">Date of Birth</td>
							<td id="side2">
								<input type="text" size="30px" name="inp11"/>
							</td>
						</tr>
						<tr>
							<td id="side">Center</td>
							<td id="side2"><input type="text" size="30px" name="inp12"/></td>
							<td id="side2">Institute</td>
							<td id="side2"><input type="text" size="30px" name="inp13"/></td>
						</tr>
					</table>
					<div id="border2">
							<h2>Input-Subject-Marks : </h2>
					</div>
					<table border="0"  cellpadding="5" id="log3">
						
						<tr>
							<td id="side" width="200px" bgcolor="#AFB7BE" >Code</td>
							
							<td id="side3" width="400px" bgcolor="#AFB7BE">Subject</td>
							<td id="side3" width="200px" bgcolor="#AFB7BE" >Input/Marks</td>
						</tr>
						<tr>
							<td id="side"><input type="text" size="15px" name="co1"/></td>
							<td id="side3"><input type="text" size="40px" name="su1"/></td>
							<td id="side3"><input type="text" size="15px" name="mr1"/></td>
							
						</tr>
						<tr>
							<td  id="side" bgcolor="#DEE1E4"><input type="text" size="15px" name="co2"/></td>
							<td id="side3" bgcolor="#DEE1E4"><input type="text" size="40px" name="su2"/></td>
							<td id="side3" bgcolor="#DEE1E4"><input type="text" size="15px" name="mr2"/></td>
						</tr>
						<tr>
							<td id="side"><input type="text" size="15px" name="co3"/></td>
							<td id="side3">	<input type="text" size="40px" name="su3"/></td>
							<td id="side3"><input type="text" size="15px" name="mr3"/></td>
						</tr>
						<tr>
							<td id="side" bgcolor="#DEE1E4"><input type="text" size="15px" name="co4"/></td>
							<td id="side3" bgcolor="#DEE1E4"> <input type="text" size="40px" name="su4"/></td>
							<td id="side3" bgcolor="#DEE1E4"><input type="text" size="15px" name="mr4"/></td>
						</tr>
						<tr>
							<td id="side"><input type="text" size="15px" name="co5"/></td>
							<td id="side3"><input type="text" size="40px" name="su5"/></td>
							
							<td id="side3"><input type="text" size="15px" name="mr5"/></td>
						</tr>
						<tr>
							<td id="side" bgcolor="#DEE1E4"><input type="text" size="15px" name="co6"/></td>
							<td id="side3" bgcolor="#DEE1E4"><input type="text" size="40px" name="su6"/></td>
							<td id="side3" bgcolor="#DEE1E4"><input type="text" size="15px" name="mr6"/></td>
						</tr>
						<tr>
							<td id="side"><input type="text" size="15px" name="co7"/></td>
							<td id="side3">	<input type="text" size="40px" name="su7"/></td>
							<td id="side3"><input type="text" size="15px" name="mr7"/></td>
						</tr>
						<tr>
							<td id="side" bgcolor="#DEE1E4"><input type="text" size="15px" name="co8"/></td>
							<td id="side3" bgcolor="#DEE1E4"><input type="text" size="40px" name="su8"/></td>
							<td id="side3" bgcolor="#DEE1E4"><input type="text" size="15px" name="mr8"/></td>
						</tr>
						<tr>
							<td id="side"><input type="text" size="15px" name="co9"/></td>
							<td id="side3">	<input type="text" size="40px" name="su9"/></td>
							<td id="side3"><input type="text" size="15px" name="mr9"/></td>
						</tr>
						
					</table>
					<div id="logo4">
						<table>
							<tr>
								<td width="100px"><input type="submit" value="Submit"/></td>
								<td width="100px"><input type="reset" value="Reset"/></td>
								<td width="100px"><a href="Out.php" target="_blank"/><button type="button">Display</button></a></td>
								<td width="100px"><a href="search.php" target="_blank"/><button type="button">Result</button></a></td>
							</tr>
						</table>	
					</div>	
				</form>	
					
				<table id="logo3">
					<tr>
						<td>&reg ramanandatpi.bd@gmail.com</td>
						<td>Powered by 	</td>
						<td><img src="images/tbl_logo.png"</td>
					</tr>
					
				</table>
			</center>	

		</div>
	</body>
</html>