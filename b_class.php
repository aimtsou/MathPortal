<html>

<head>
<title> ���������� B' ���������</title>
</head>

<body bgproperties="fixed" background="../banner/background.jpg">


<table  align="center" border="10" width="800" height="800"  cellpadding="5" cellspacing="5" bgcolor="#CCFF33">
    
	<tr>
		<td  align="center" colspan="2" style="border-left:none; border-right:none; border-top:none; border-bottom:3px double #003300"> <font color="5514949">
			<img border="10" src="../banner/ban_b_gym.jpg" width="740" height="100">
		</td>
	</tr> 
	
	<tr align="center">
	
		<td width="300" height="120" style="border-top:none; border-left: none; border-right: none; border-bottom: none">
		<img src="../images/school_1.bmp" width="180" height="110">
		</td >
		
		<td valign="middle" style="border-top:none; border-left: none; border-right: none; border-bottom: none;padding-left:20">
		<img src="../buttons/proodos_1.bmp" onmouseover="this.src='../buttons/proodos_2.bmp'" onmouseout="this.src='../buttons/proodos_1.bmp'"  onclick="location.href='b/b_proodos.php'" width="160" height="45">&nbsp;&nbsp;&nbsp;
		<img src="../buttons/apories_1.bmp" onmouseover="this.src='../buttons/apories_2.bmp'" onmouseout="this.src='../buttons/apories_1.bmp'"  onclick="location.href='b/b_apories.php'" width="160" height="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="../buttons/libr_1.bmp" onmouseover="this.src='../buttons/libr_2.bmp'" onmouseout="this.src='../buttons/libr_1.bmp'" onclick="location.href='b/b_libr.php'" width="160" height="45">&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	
	
	<tr >
		<td  colspan="2" style="border-top:3px double #003300; border-left: none; border-right: none; border-bottom: none" height="20">&nbsp;
		</td>
	</tr>
	
	<tr>	
		<td  width="200" align="center" style="border-top:3px double #003300; border-left: none; border-right: none; border-bottom: none; border-top:none" valign="top">
			<b><u>�� ��������� ���</u></b><br><br>
			
			<font color="red" size="3">
			<?php
				echo " " .$_COOKIE["Cookie5"] ." ";
			?>
			</font><br>
			<b><u><br>� ���� ���</u></b><br><br>
			<font color="red" size="3">
			<?php
				if ($_COOKIE["Cookie9"] == 'A') 
				echo "A' ���������";
				if ($_COOKIE["Cookie9"] == 'B') 
				echo "�' ���������";
				if ($_COOKIE["Cookie9"] == 'C') 
				echo "�' ���������";
			?>
			</font>	<br><br>
			<align="center" style="border-left: none; border-right: none; border-bottom: none; border-top:none" height="100" valign="top"><br>
			<a href="b_rename.php"><b>���� �� ������ <br> �� �������� ���</b></a><br><br><br>
			
			<align="center" style="border-left: none; border-right: none; border-bottom: none; border-top:none" height="100" valign="top">	
			<img src="../buttons/help_1.bmp" onmouseover="this.src='../buttons/help_2.bmp'" onmouseout="this.src='../buttons/help_1.bmp'"  onclick="location.href='b_help.php'" width="100" height="100">
			<br>
			
			<a href="b_help.php"><b>�������</b></a><br><br><br>	
			
						
			<form name="form1" method="post" action="a_test11.php">
				<input type="text" name="onoma" value="" size="20" maxlength="35"><br><br>
				<input type="submit" name="Submit" value="���������">
			</form>
		</td>
		
				
		<td align="center" style="border-right: none; border-bottom: none; border-top:none" valign="top">
			<br>
			<font align="center" size="5"><b><u>��������</u></b></font><br>
			<h4>�������� 1� </h4>
			<a href="b_kef_1.php"><h4> �� ������� �������</h4></a></p>
			
			<h4>�������� 2� </h4>
			<a href="b_kef_2.php">�� ��������</a>
			
			<h4>�������� 3�</h4>
			<a href="b_kef_3.php">��������� �������</a>
			
			<h4>�������� 4�</h4>
			<a href="b-kef_4.php">���������</a>
			
			<h4>�������� 5�</h4>
			<a href="b_kef_5.php">������� ��� ��������� �������</a>	<br>
		
		</td>
	</tr>

	<tr>
	
	</tr>
	
		<script language="javascript">
			var inp = document.getElementsByTagName('input');
			for (var i = inp.length-1; i>=0; i--) {
				if ('radio'===inp[i].type) inp[i].checked = false;
			}
		</script>
	<tr>     
		<td height="50" colspan="2" align="right" style="border-top:3px double #003300; border-right:none; border-bottom:none; border-left:none; padding-right:30"> 
			<a href="unlogin.php"><font face="Arial Black" color="14088561" size="2">������</font></a>
		</td>
	</tr>
	
</table>	

<table border="5" align='center' width='800' >
	<tr>
		<td align= "center" height='50' style="border:3px double #FFFFFF; padding-left:4; padding-right:4; padding-top:1; padding-bottom:1" bgcolor="SILVER" height="126" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
			������������ ���� &nbsp;&nbsp;&nbsp; "���������� ���������" &nbsp;&nbsp;&nbsp; TSOUVELEKAKIS AIM. DIMITRIOS. &nbsp;&nbsp; Copyright 2013 <Br> ������������ &nbsp;&nbsp;  �������� &nbsp;&nbsp; ���  &nbsp;&nbsp;&nbsp; �����������
		</td>
	</tr>
</table>

</body>
</html>	  