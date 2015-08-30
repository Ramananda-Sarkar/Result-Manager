<html>
	<body bgcolor="#999">
		<center>
			<h2 align="center">Intermediate and Secondary Education Board<br/>Result marksheet :</h2>
			
			<?php
				$p=mysql_connect("localhost","root","");
				mysql_select_db("dusra",$p);
				$r=mysql_query("SELECT * From result_015");
				
				echo "<table border=1  align=center>
					<tr>
						<th>Year</th>
						<th>Roll</th>
						<th>Name</th>
						<th>Board</th>
						<th>F_name</th>
						<th>Group</th>
						<th>M_name</th>
						<th>Session</th>
						<th>Reg_no</th>
						<th>Type</th>
						<th>D_of_B</th>
						<th>Center</th>
						<th>Institute</th>
						<th>Result</th>
						<th>GPA</th>
						<th>C1</th>
						<th>s1</th>
						<th>M1</th>
						<th>G1</th>
						<th>C2</th>
						<th>s2</th>
						<th>M2</th>
						<th>G2</th>
						<th>C3</th>
						<th>s3</th>
						<th>M3</th>
						<th>G3</th>
						<th>C4</th>
						<th>s4</th>
						<th>M4</th>
						<th>G4</th>
						<th>C5</th>
						<th>s5</th>
						<th>M5</th>
						<th>G5</th>
						<th>C6</th>
						<th>s6</th>
						<th>M6</th>
						<th>G6</th>
						<th>C7</th>
						<th>s7</th>
						<th>M7</th>
						<th>G7</th>
						<th>C8</th>
						<th>s8</th>
						<th>M8</th>
						<th>G8</th>
						<th>C9</th>
						<th>s9</th>
						<th>M9</th>
						<th>G9</th>
						
					</tr>
				";
				while($result=mysql_fetch_array($r))
				{
					echo"<tr>";
					echo "<td style=background-color:#999>".$result['Year']."</td>";
					echo "<td>".$result['Roll']."</td>";
					echo "<td style=background-color:#999>".$result['Name']."</td>";
					echo "<td>".$result['Board']."</td>";
					echo "<td style=background-color:#999>".$result['Father_name']."</td>";
					echo "<td>".$result['Group']."</td>";
					echo "<td style=background-color:#999>".$result['Mother_name']."</td>";
					echo "<td>".$result['Session']."</td>";
					echo "<td style=background-color:#999>".$result['Registration_no']."</td>";
					echo "<td>".$result['Type']."</td>";
					echo "<td style=background-color:#999>".$result['Date_of_Birth']."</td>";
					echo "<td>".$result['Center']."</td>";
					echo "<td style=background-color:#999>".$result['Institute']."</td>";
					echo "<td>".$result['Result']."</td>";
					echo "<td style=background-color:#999>".$result['GPA']."</td>";
					echo "<td>".$result['C1']."</td>";
					echo "<td style=background-color:#999>".$result['S1']."</td>";
					
					
					echo "<td>".$result['M1']."</td>";
					echo "<td style=background-color:#999>".$result['G1']."</td>";
					echo "<td>".$result['C2']."</td>";
					echo "<td style=background-color:#999>".$result['S2']."</td>";
					echo "<td>".$result['M2']."</td>";
					echo "<td style=background-color:#999>".$result['G2']."</td>";
					echo "<td>".$result['C3']."</td>";
					echo "<td style=background-color:#999>".$result['S3']."</td>";
					echo "<td>".$result['M3']."</td>";
					echo "<td style=background-color:#999>".$result['G3']."</td>";
					
					echo "<td>".$result['C4']."</td>";
					echo "<td style=background-color:#999>".$result['S4']."</td>";
					echo "<td>".$result['M4']."</td>";
					echo "<td style=background-color:#999>".$result['G4']."</td>";
					
					echo "<td>".$result['C5']."</td>";
					echo "<td style=background-color:#999>".$result['S5']."</td>";
					echo "<td>".$result['M5']."</td>";
					echo "<td style=background-color:#999>".$result['G5']."</td>";
					
					echo "<td>".$result['C6']."</td>";
					echo "<td style=background-color:#999>".$result['S6']."</td>";
					echo "<td>".$result['M6']."</td>";
					echo "<td style=background-color:#999>".$result['G6']."</td>";
					
					echo "<td>".$result['C7']."</td>";
					echo "<td style=background-color:#999>".$result['S7']."</td>";
					echo "<td>".$result['M7']."</td>";
					echo "<td style=background-color:#999>".$result['G7']."</td>";
					
					echo "<td>".$result['C8']."</td>";
					echo "<td style=background-color:#999>".$result['S8']."</td>";
					echo "<td>".$result['M8']."</td>";
					echo "<td style=background-color:#999>".$result['G8']."</td>";
					
					echo "<td>".$result['C9']."</td>";
					echo "<td style=background-color:#999>".$result['S9']."</td>";
					echo "<td>".$result['M9']."</td>";
					echo "<td style=background-color:#999>".$result['G9']."</td>";
					echo"</tr>";
				}
				echo "</table>";
			?>
		</center>	
	</body>
</html>
