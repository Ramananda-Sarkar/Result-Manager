<?php

	$rama=$_POST['roll'];
	$y=$_POST['yer'];
	$bo=$_POST['boad'];
	
	$p=mysql_connect("localhost","root","");
	mysql_select_db("dusra",$p);
	$r=mysql_query("SELECT * From result_015 where roll='$rama' and Year='$y' and Board='$bo'");
	
	
		$result=mysql_fetch_array($r);
		$a1=$result['Year'];
		$a2=$result['Roll'];
		$a3=$result['Name'];
		$a4=$result['Board'];
		
		$a5=$result['Father_name'];
		$a6=$result['Group'];
		$a7=$result['Mother_name'];
		$a8=$result['Session'];
		
		$a9=$result['Registration_no'];
		$a10=$result['Type'];
		$a11=$result['Date_of_Birth'];
		$a12=$result['Center'];
		
		$a13=$result['Institute'];
		$rr=$result['Result'];
		$p=$result['GPA'];
		
		$c1=$result['C1'];
		$s1=$result['S1'];
		$r1=$result['G1'];
		
		$c2=$result['C2'];
		$s2=$result['s2'];
		$r2=$result['G2'];
		
		$c3=$result['C3'];
		$s3=$result['S3'];
		$r3=$result['G3'];
		
		$c4=$result['C4'];
		$s4=$result['S4'];
		$r4=$result['G4'];
		
		$c5=$result['C5'];	
		$s5=$result['S5'];
		$r5=$result['G5'];
		
		$c6=$result['C6'];
		$s6=$result['S6'];
		$r6=$result['G6'];
		
		$c7=$result['C7'];
		$s7=$result['S7'];
		$r7=$result['G7'];
		
		$c8=$result['C8'];
		$s8=$result['S8'];
		$r8=$result['G8'];
		
		$c9=$result['C9'];
		$s9=$result['S9'];
		$r9=$result['G9'];
	
	
	
?>

<html>
	<head>
		<title>
			Educaion Board Bangladesh
		</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<style type="text/css">
		#logo3
		{
		position:relative; top:100px; width:800px; height:auto px; margin:0 auto; background:#EEEEEE;  border-top:5px #86C775 solid;
		}
		
		
		</style>
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
			
				<div id="border">
						<h2>SSC/Dhakil/Equivalent Result Publication <span><?php echo $a1;?></span><hr/></h2>
				</div>
		
		
			
				<table border="0"  cellpadding="5" id="logo2">
					
					<tr>
						<td id="side" width="100px">Roll No</td>
						<td id="side2" width="250px"><?php echo $a2;?></td>
						<td id="side2" width="150px">Name</td>
						<td id="side2" width="300px"><?php echo $a3;?></td>
					</tr>
					<tr>
						<td id="side">Board</td>
						<td id="side2"><?php echo $a4;?></td>
						<td id="side2">Father's name</td>
						<td id="side2"><?php echo $a5;?></td>
					</tr>
					<tr>
						<td  id="side">Group</td>
						<td id="side2"><?php echo $a6;?></td>
						<td id="side2">Mother's name</td>
						<td id="side2"><?php echo $a7;?></td>
					</tr>
					<tr>
						<td id="side2">Session</td>
						<td id="side2">
							<?php echo $a8;?>
							
						</td>
						<td id="side2">Registration no</td>
						<td id="side2"><?php echo $a9;?></td>
					</tr>
					<tr>
						<td id="side">Type</td>
						<td id="side2"><?php echo $a10;?></td>
						<td id="side2">Date of Birth</td>
						<td id="side2"><?php echo $a11;?></td>
					</tr>
					<tr>
						<td id="side">Result</td>
						<td id="side2"><?php echo $p;?></td>
						<td id="side2">Institute</td>
						<td id="side2"><?php echo $a13;?></td>
					</tr>
					<tr>
						<td id="side">GPA</td>
						<td id="side2"><?php echo $rr;?></td>
						<td id="side2">Center</td>
						<td id="side2"><?php echo $a12;?></td>
					</tr>
				</table>
				<div id="border2">
						<h2>Subject-Wise Grade/ Mark Sheet </h2>
				</div>
				<table border="0"  cellpadding="5" id="logo2">
					
					<tr>
						<td id="side" width="150px" bgcolor="#AFB7BE">Code</td>
						
						<td id="side3" width="500px" bgcolor="#AFB7BE">Subject</td>
						<td id="side3" width="100px" bgcolor="#AFB7BE">Grade</td>
					</tr>
					<tr>
						<td id="side"><?php echo $c1;?></td>
						<td id="side3"><?php echo $s1;?></td>
						<td id="side3"><?php echo $r1;?></td>
						
					</tr>
					<tr>
						<td  id="side" bgcolor="#DEE1E4"><?php echo $c2;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $s2;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $r2;?></td>
					</tr>
					<tr>
						<td id="side"><?php echo $c3;?></td>
						<td id="side3"><?php echo $s3;?></td>
						<td id="side3"><?php echo $r3;?></td>
					</tr>
					<tr>
						<td id="side" bgcolor="#DEE1E4"><?php echo $c4;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $s4;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $r4;?></td>
					</tr>
					<tr>
						<td id="side"><?php echo $c5;?></td>
						<td id="side3"><?php echo $s5;?></td>
						
						<td id="side3"><?php echo $r5;?></td>
					</tr>
					<tr>
						<td id="side" bgcolor="#DEE1E4"><?php echo $c6;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $s6;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $r6;?></td>
					</tr>
					<tr>
						<td id="side"><?php echo $c7;?></td>
						<td id="side3"><?php echo $s7;?></td>
						<td id="side3"><?php echo $r7;?></td>
					</tr>
					<tr>
						<td id="side" bgcolor="#DEE1E4"><?php echo $c8;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $s8;?></td>
						<td id="side3" bgcolor="#DEE1E4"><?php echo $r8;?></td>
					</tr>
					<tr>
						<td id="side"><?php echo $c9;?></td>
						<td id="side3"><?php echo $s9;?></td>
						<td id="side3"><?php echo $r9;?></td>
					</tr>
				</table>
				
				<div id="logo4">
					<a href="search.php">Search Again</a>
				</div>	
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