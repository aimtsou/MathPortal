<html>
<head>
<title> ��� �������� ���� PHP ��� ���������� (��������) �������� ���� ������ Test ���� �� MySQL</title>
</head>
<body bgcolor="#C0C0C0">
<?php
	// ������� �� ��� database server
	$dbcnx = @mysql_connect("userdb", "dideflor", "********");
	if (!$dbcnx) {
		echo( "<p> ������� � ������� �� ��� " .
		"database server ���� �� ������. </p>" );
		exit();
	 }
	echo("<p> � ������� �� ��� DataBase server ���� �������. </p>");

	// ������� ��� ����� ��������� dideflor-db1
	if (!@mysql_select_db("dideflor-db1") ) {
		echo( "<p> �������� � ���������� ��� ����� ��������� " .
		" dideflor-db1 ���� �� ������.</p>" );
		exit();
	}
	echo("<p> � ���������� ��� ����� ��������� ���� ��������. </p>");

	// �� ���� ��������� ��� �����, �� ����������� ��� ���� ���������
	// �� �� $_POST["name"] ��� $_POST["poli"] ��������� �� ����������� ��� ��� �������� ��������
	// ��� ������ ��� �� ����������� �� ����������� ������� ���������� ���� �� �������� �� �� �������
	// �� ��� ������ INSERT ��� SQL ��� �� ������������ ���� ��� ���������� ������� �� �� �������� ����
	// �� �� ��������� CURDATE() ��������� ��� �������� ���������� ��� ���������� ��� server
	echo("<p>�� ����� ����� : <b>".$_POST["name"]."</b></p>");
	echo("<p>� ���� ����� : <b>".$_POST["poli"]."</b></p>");
	echo("<p>� IP ��������� ��� ����� : <b>".$_SERVER["REMOTE_ADDR"]."</b></p>");
		$poli=$_POST["poli"];
		$name=$_POST["name"];
		$ip=$_SERVER["REMOTE_ADDR"];
		$sql = "INSERT INTO test SET " .
		"poli='$poli', " . 
		"name='$name', ".
		"ip='$ip',".
		"imerominia=CURDATE()";
		if (mysql_query($sql)) {
			echo("<p>�� �������� ����� ��������� ��� ���� ��������� �� �� �������� ����������. </p>");
		} else {
			echo("<p> ����� ���� �������� ��� ��������� ��� ���� ��������� : " .
			mysql_error() . "</p>");
		}
	echo("<p> ���� ����� ��� �� �������� " .
		"��� �������� ���� ������ test ��� ����� ��������� MySQL : </p>");

	// �� ����������� ���� �� ����������� ��� ������ ���� ��� �������� ��� ������ test
	// ������� ���� ��� �������� ��� ������ test ��� ���������� ���� ��� ��������� $result
	$result = mysql_query("SELECT name FROM test");
	if (!$result) {
		echo("<p> ����� ���� �������� ��� query : " .
		mysql_error() . "</p>");
		exit();
	}


	// ������� ���� ��� ������ ��� ������ test ��� ���������� ���� ��� ��������� $resultpoli
	$resultpoli = mysql_query("SELECT poli FROM test");
	if (!$resultpoli) {
		echo("<p> ����� ���� �������� ��� query : " .
		mysql_error() . "</p>");
		exit();
	}

	// ������� ���� ��� ����������� ��� ������ test ��� ���������� ���� ��� ��������� $resultdate
	$resultdate = mysql_query("SELECT imerominia FROM test");
	if (!$resultdate) {
		echo("<p> ����� ���� �������� ��� query : " .
		mysql_error() . "</p>");
		exit();
	}


	// ������� ���� ��� ip ����������� ��� ������ test ��� ���������� ���� ��� ��������� $resultip
	$resultip = mysql_query("SELECT ip FROM test");
	if (!$resultip) {
		echo("<p> ����� ���� �������� ��� query : " .
		mysql_error() . "</p>");
		exit();
	}

	// �������� ��� ����� ���� ��� ������ ��� ������ test �� ������ (table)
	// ���������� ��� ������ ��� ������
	echo("<table border=1><tr><td><b>�/�</b></td><td><b>�����</b></td><td><b>����</b></td><td><b>����������</b></td><td><b>IP ���������</b></td></tr>");
	$i=0;	// � ����� ������� ��� ��������
	while ( $row = mysql_fetch_array($result) ) {
		$i=$i+1;
		$rowpoli = mysql_fetch_array($resultpoli);
		$rowdate = mysql_fetch_array($resultdate);
		$rowip = mysql_fetch_array($resultip);
		echo("<tr><td>" . $i . "</td><td>" . $row["name"] . "</td><td>" . $rowpoli["poli"] . "</td><td>" . $rowdate["imerominia"] . "</td><td>" . $rowip["ip"] . "</td></tr>");
	}
	echo("</table>");	// ����� ��� ������
?>
<p><a href="PHP.html"><img src="back.gif" width="75" height="42" alt="back.gif (9867 bytes)"></a></p>
<p><a href="PHP.html"><big><big><big>���������</big></big></big></a></p>
</body>
</html>
