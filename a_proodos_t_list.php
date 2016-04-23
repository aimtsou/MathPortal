<html>

<head>
<title>Η Πρόοδός μου</title>
</head>

<body bgproperties="fixed" background="../banner/background.jpg">


<table  align="center" border ="10" width="800" height="300" cellpadding="5" cellspacing="5" bgcolor="#CCFF33">
     
	<tr>
		<td  align="center" colspan="3" style="border-left:none ; border-right:none; border-top:none; border-bottom:3px double #003300"> <font color="5514949">
			<img border="10" src="../banner/ban_a_gym.jpg" width="740" height="100">
		</td>   
    </tr>
     
    <tr>  
		<td height="120" align="center" valign="top" style="border-left:none; border-right: none; border-bottom: none; border-top:none" > 
		<p> 
			<b><br> <font color="black" size="6">&nbsp;&nbsp;Η Πρόοδός μου σε λίστα</font></b>	
		</p>	    
		</td>
	
	</tr>
	
	
	<tr>
	<td height="180" valign="top" align="left" style="border-left:none; border-right: none; border-bottom: none; border-top:none; padding-left:30">
	<?php
	$username_s=$_COOKIE["Cookie_un"];
	$con = mysql_connect("localhost","root","");

	if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
  
	mysql_select_db("login_db", $con);
	
	$sql=("SELECT * FROM gre  where username='$username_s' order by t_name");
	$result = mysql_query($sql, $con) or exit('$sql failed: '.mysql_error()); 
	$num_rows = mysql_num_rows($result);
	
	
	if (($num_rows==0) or ($username="")) {
		mysql_close($con);
		echo "Δεν υπάρχουν λυμένα tests";
	} 
	else {
	echo  "tests", str_repeat('&nbsp;', 15) , "βαθμός/100",str_repeat('&nbsp;', 15), "σωστές απαντήσεις" ,str_repeat('&nbsp;', 15), "λάθος απαντήσεις " ,str_repeat('&nbsp;', 15), "αναπάντητες" , "<br><br>";
	while ($row = mysql_fetch_row($result)) {
	$s2=sprintf('%02s',$row[2]);
	$s3=sprintf('%02s',$row[3]);
	$s4=sprintf('%02s',$row[4]);
	$s5=sprintf('%02s',$row[5]);
	echo  "" .$row[1]. str_repeat('&nbsp;', 22) .$s2. str_repeat('&nbsp;', 35) .$s3. str_repeat('&nbsp;', 44) .$s4. str_repeat('&nbsp;', 36) .$s5.  "<br>";
	}}
	?>
	
			
	<tr>   
		<td height="50" colspan="2" align="left" style="border-top:3px double #003300; border-right:none; border-left:none; border-bottom:none; padding-left:30">  
			<a href="javascript:history.go(-1)"><font face="Arial Black" color="14088561" size="2">Επιστροφή</font></a>
			<a style="padding-right:580"></a>
			<a href="../unlogin.php"><font face="Arial Black" color="14088561" size="2">Έξοδος</font></a>
		</td>
		
	</tr>
	
</table>

<table border="5" align='center' width='800' >
	<tr>
		<td align= "center" height='50' style="border:3px double #FFFFFF; padding-left:4; padding-right:4; padding-top:1; padding-bottom:1" bgcolor="SILVER" height="126" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
			Εκπαιδευτική Πύλη &nbsp;&nbsp;&nbsp; "Μαθηματικά Γυμνασίου" &nbsp;&nbsp;&nbsp; TSOUVELEKAKIS AIM. DIMITRIOS. &nbsp;&nbsp; Copyright 2013 <Br> ΠΑΝΕΠΙΣΤΗΜΙΟ &nbsp;&nbsp;  ΠΕΙΡΑΙΩΣ &nbsp;&nbsp; ΠΜΣ  &nbsp;&nbsp;&nbsp; ΠΛΗΡΟΦΟΡΙΚΗ
		</td>
	</tr>
</table>

</body>
</html>