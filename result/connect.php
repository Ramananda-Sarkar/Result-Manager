<?php
	$p=mysql_connect("localhost","root","");
	mysql_select_db("dusra",$p);
	$r=mysql_query("SELECT * From result_015 where roll='$rama' and Year='$y' and Board='$bo'");
	$result=mysql_fetch_array($r);
?>	