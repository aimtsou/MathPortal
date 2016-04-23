<html>

<head>
	<title>ΑΛΛΑΓΗ ΣΤΟΙΧΕΙΩΝ</title>

<script language="javascript">
function check_null(username,password,lastname,firstname,nickname,school,age,email,class1){

var submitOK="true";

if (nickname.length==0){
alert("To  πεδίο Ψευδώνυμο είναι κενό");
submitOK="false";
exit;
}

if (email.length==0){
alert("To  πεδίο e-mail είναι κενό");
submitOK="false";
exit;
}

if (submitOK="true"){
document.write(
"<html><head><title>ΠΡΟΕΠΙΣΚΟΠΙΣΗ</title></head><body bgproperties='fixed' background='../banner/background.jpg'><table  align='center' border='10' width='800' height='350' cellpadding='5' cellspacing='5' bgcolor='#CCFF33'><tr><td  align='center' colspan='2' style='border-left:none;  border-right: none;  border-top:none; border-bottom:none'><font color='5514949'><img border='10' width='740' height='100' src='../banner/ban_a_gym.jpg'></font></td></tr>   <tr><td align='left' colspan='2' style='border-top:3px double #003300; border-left: none; border-right: none; border-bottom: none; padding-left:30'><b> <font color='black' size='6'> Προεπισκόπιση</font></b></tr><tr> <td width='300' align='right' style='border-top:none; border-left:none; border-right:none; border-bottom:none' cellpadding='5' cellspacing='5' valign='top'><font color='5514949' face='Arial'><p style='margin-top:25'>Όνομα χρήστη (username)*</p>	<p style='margin-top:25'>Συνθηματικό (password)*</p> <p style='margin-top:25'>Επώνυμο</p><p style='margin-top:25'>Όνομα</p> <p style='margin-top:25'>Ψευδώνυμο*</p>  <p style='margin-top:25'>Σχολείο</p>  <p style='margin-top:25'>Έτος Γέννησης</p>  <p style='margin-top:25'>e-mail*</p>  <p style='margin-top:25'>Τάξη* </p>   </font> <p align='center' style='margin-top:25'><font size='2' color='black'>* υποχρεωτικά πεδία</font></p> </td>  <td align='left' style='border-top:none; border-left:none; border-right:none; border-bottom:none'>  <form method='POST' action='a_update.php'>  <p style='margin-top: 25'><input type='hidden' name='username' value="+username+"></p>ΔΕΝ ΑΛΛΑΖΕΙ  <p style='margin-top: 25'><input type='hidden' name='password' value="+password+" ></p>ΔΕΝ ΑΛΛΑΖΕΙ  <p style='margin-top: 25'><input type='text' name='lastname' value="+lastname+"></p><p style='margin-top: 22'><input type='text' name='firstname' value="+firstname+"></p>  <p style='margin-top: 22'><input type='text' name='nickname' value="+nickname+"></p><p style='margin-top: 22'><input type='text' name='school' value="+school+"></p>  <p style='margin-top: 22'><input type='text' name='age' value="+age+"></p>  <p style='margin-top: 22'><input type='text' name='email' value="+email+"></p>  <p style='margin-top: 20'> <input type='hidden' name='class1' value="+class1+"></p>ΔΕΝ ΑΛΛΑΖΕΙ<br><p align='center'><input type='submit' value='Καταχώρηση'></p> </form>  </td>  </tr> <tr><td height='50' align='left' colspan='3' style='border-top:3px double #003300; border-right:none; border-bottom:none; padding-left:20;border-left:none'><a href='a_class.php'><font face='Arial Black' color='14088561' size='2'> Επιστροφή</font></a></td></tr></table></body></html>");   
}
}  
 
</script>
</head>

<body bgproperties="fixed" background="../banner/background.jpg">

<table  align="center" border ="10" width="800" height="350" cellpadding="5" cellspacing="5" bgcolor="#CCFF33">
     
	<tr>
		<td  align="center" colspan="2" style="border-left:none ; border-right:none; border-top:none; border-bottom:none"> <font color="5514949">
			<img border="10" width="740" height="100" src="../banner/ban_a_gym.jpg" ></font>
		</td>   
    </tr>
     
    <tr>  
		<td align="left" colspan="2"  style="border-top:3px double #003300;  border-left:none; border-right: none; border-bottom: none;padding-left:30"> 
		<b> <font color="black" size="6">Αλλαγή στοιχείων</font></b>	
		<br>
		</td>
	</tr>
	
	
	<tr>
        <td width="300" align="right" style="border-top:none; border-left:none; border-right:none; border-bottom:none" cellpadding="5" cellspacing="5" valign="top"> 	
			<font color="5514949" face="Arial"> 
			<p style="margin-top:25">Όνομα χρήστη (username)*</p>
			<p style="margin-top:25">Συνθηματικό (password)*</p> 
			<p style="margin-top:25">Επώνυμο</p>		
			<p style="margin-top:25">Όνομα</p>
			<p style="margin-top:25">Ψευδώνυμο*</p>
			<p style="margin-top:25">Σχολείο</p>  
			<p style="margin-top:25">Έτος Γέννησης</p>  
			<p style="margin-top:25">e-mail*</p>
			<p style="margin-top:25">Τάξη* </p>
			</font>
			
			<p align="center" style="margin-top:25">
			<font size="2" color="black">* υποχρεωτικά πεδία</font></p>
		</td>			
		
		<td align="left" style="border-top:none; border-left:none; border-right:none; border-bottom:none"> 
			<form>    
			<p style="margin-top: 25"><input type="hidden" name="username" value=<?php echo " " .$_COOKIE["Cookie1"] ." "; ?> size="50"></p>ΔΕΝ ΑΛΛΑΖΕΙ</p>
			<p style="margin-top: 25"><input type="hidden" name="password" value=<?php echo " " .$_COOKIE["Cookie2"] ." "; ?>></p>ΔΕΝ ΑΛΛΑΖΕΙ</p>
			<p style="margin-top: 25"><input type="text" name="lastname" value=<?php echo " " .$_COOKIE["Cookie3"] ." "; ?>></p>
			<p style="margin-top: 22"><input type="text" name="firstname" value="<?php echo " " .$_COOKIE["Cookie4"] ." "; ?>"></p>
			<p style="margin-top: 22"><input type="text" name="nickname" value=<?php echo " " .$_COOKIE["Cookie5"] ." "; ?>></p>
			<p style="margin-top: 22"><input type="text" name="school" value=<?php echo " " .$_COOKIE["Cookie6"] ." "; ?> size="50"></p>
			<p style="margin-top: 22"><input type="text" name="age" value=<?php echo " " .$_COOKIE["Cookie7"] ." "; ?> size="4"></p>
			<p style="margin-top: 22"><input type="text" name="email"value=<?php echo " " .$_COOKIE["Cookie8"] ." "; ?>  size="50"></p>
			<p style="margin-top: 22"><input type="hidden" name="class1" value=<?php echo " " .$_COOKIE["Cookie9"] ." "; ?> size="50"></p>ΔΕΝ ΑΛΛΑΖΕΙ<br>	  
	  
			<p align="center">
			<input type="button" name="register" value="Προεπισκόπιση" name="B1" style="float: center" onclick="check_null(username.value,password.value,lastname.value,firstname.value,nickname.value,school.value,age.value,email.value,class1.value)">
			</p>
			</form>
		</td>
			
    </tr>

	<tr>
		<td height="50" align="left" colspan="4" style="border-top:3px double #003300; border-right:none; border-left:none; border-bottom:none; padding-left:30">  
			<a href="javascript:history.go(-1)"><font face="Arial Black" color="14088561" size="2">Επιστροφή</font></a>
			<a style="padding-right:580"></a>
			<a href="../unlogin.php"><font face="Arial Black" color="14088561" size="2">Έξοδος</font></a>
		</td>
	</tr>
	 
</table>
</body>
</html>