<html>
	<head>
		<title>
			Educaion Board Bangladesh
		</title>
		<style type="text/css">
						body
			{
				margin:0; background:#EEEEEE;
			}
			#manu
			{
				width:820px; height:590px; background:white; margin:0 auto; position:relative; top:15px; margin-bottom:50px; border-radius:15px;
			}
			#logo
			{
				position:relative; top:10px; border-radius:10px; left:3px;
			}
			#pre
			{
				background-image:url(images/bd_logo.png); background-repeat:no-repeat; background-position:50%; 50%; 
			}

			#main
			{
				 width:670px; height:45px;  border-bottom:1px #479E55 solid;  background:#007814; border-left:2px solid white;
			}
			#main0
			{
				float:left; width:450px; height:35px;
			}
			#main0 h2 
			{
				margin-left:10px; position:relative; bottom:10px; color:#95E17D;
			}
			#main2 h2
			{
				margin-left:10px; position:relative; bottom:15px; color:white;
			}
			#main1
			{
				float:left; width:220px; height:40px; background-image:url(../images/banner_flag.jpg);  background-repeat:no-repeat;
			}
			#main2
			{
				width:670px; height:65px;  float:left; background:#007814; border-left:2px solid white; border-bottom:2px solid white;

			}
			#main3
			{
				width:670px; height:35px;  float:left; background:#66B061; border-left:2px solid white;
			}	
			#main3 p
			{
				text-align:right;  position:relative; bottom:10px; color:white; margin-right:15px;
			}


			#logo2
			{
				position:relative; top:50px; width:800px; height:auto px; margin:0 auto; background:#EEEEEE; font-size:18px;
			}

			#logo3
			{
				position:relative; top:100px; width:800px; height:auto px; margin:0 auto; background:#EEEEEE;  border-top:5px #86C775 solid;
			}
			#mid 
			{
				width:600px; height:250px; border:solid black 1px; position:relative; top:50px; 
			}
			#tab
			{
				width:400px; position:relative; top:50px; 
			}
			#sid
			{
				width:200px; background:#F4F0F2; height:25px;
			}
			p
			{
				font-size:18px; font-weight:bold;
			}
		</style>
		
	</head>
	<body>	
		<form action="Print.php" method="POST">
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
					<div id="mid">
						<table  id="tab" cellpadding="5">
							<tr>
								<td><p>Examination&nbsp&nbsp:</P></td>
								<td>	
									<select id="sid">
										<option size="25px">Select One</option>
										<option>JDC/JSC</option>
										<option>SSC/Dakhil</option>
										<option>SSC(Vocational)</option>
										<option>HSC(Vocational)</option>
										<option>HSC/Alim</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<td ><p>Year&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</p></td>
								<td>	
									<select id="sid" name="yer">
										<option size="25px">Select One</option>
										<option>2012</option>
										<option>2011</option>
										<option>2010</option>
										<option>2009</option>
										<option>2006</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<td ><p>Board&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</p></td>
								<td>	
									<select id="sid" name="boad">
										<option size="200px">Select One</option>
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
							</tr>
							<tr>
								<td ><p>Roll&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</p></td>
								<td>	
									<input id="sid" type="text" name="roll"/>
								</td>
							</tr>
							<tr>
								<td >&nbsp&nbsp</td>
								<td>	
									<input type="submit" value="Submit"/><input type="reset" value="Reset"/>
								</td>
							</tr>
						</table>
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
		</form>	
	</body>
</html>