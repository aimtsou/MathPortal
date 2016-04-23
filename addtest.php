<html>
<head>
<title> Μια Απόπειρα στην PHP για Δημιουργία (Προσθήκη) Εγγραφής στον Πίνακα Test μιας ΒΔ MySQL</title>
</head>
<body bgcolor="#C0C0C0">
<?php
	// Σύνδεση με τον database server
	$dbcnx = @mysql_connect("userdb", "dideflor", "********");
	if (!$dbcnx) {
		echo( "<p> Αδύνατη η σύνδεση με τον " .
		"database server αυτή τη στιγμή. </p>" );
		exit();
	 }
	echo("<p> Η σύνδεση με τον DataBase server ήταν επιυχής. </p>");

	// Επιλογή της βάσης δεδομένων dideflor-db1
	if (!@mysql_select_db("dideflor-db1") ) {
		echo( "<p> Αδύνατος ο εντοπισμός της βάσης δεδομένων " .
		" dideflor-db1 αυτή τη στιγμή.</p>" );
		exit();
	}
	echo("<p> Ο εντοπισμός της Βάσης Δεδομένων ήταν επιτυχής. </p>");

	// Αν έχει υποβληθεί ένα όνομα, το προσθέτουμε στη βάση δεδομένων
	// Με τα $_POST["name"] και $_POST["poli"] παίρνουμε τα περιεχόμενα των δύο πλαισίων κειμένου
	// της φόρμας και τα καταχωρούμε σε αντίστοιχες τοπικές μεταβλητές ώστε να μπορούμε να τα δώσουμε
	// σε μια εντολή INSERT της SQL και να δημιουργηθεί έτσι μια καινούργια εγγραφή με τα στοιχεία αυτά
	// Με τη συνάρτηση CURDATE() παίρνουμε την τρέχουσα ημερομηνία του συστήματος του server
	echo("<p>Το όνομα είναι : <b>".$_POST["name"]."</b></p>");
	echo("<p>Η πόλη είναι : <b>".$_POST["poli"]."</b></p>");
	echo("<p>Η IP διεύθυνσή σας είναι : <b>".$_SERVER["REMOTE_ADDR"]."</b></p>");
		$poli=$_POST["poli"];
		$name=$_POST["name"];
		$ip=$_SERVER["REMOTE_ADDR"];
		$sql = "INSERT INTO test SET " .
		"poli='$poli', " . 
		"name='$name', ".
		"ip='$ip',".
		"imerominia=CURDATE()";
		if (mysql_query($sql)) {
			echo("<p>Τα στοιχεία έχουν προστεθεί στη Βάση Δεδομένων με τη σημερινή ημερομηνία. </p>");
		} else {
			echo("<p> Λάθος στην προσθήκη των στοιχείων στη Βάση Δεδομένων : " .
			mysql_error() . "</p>");
		}
	echo("<p> Αυτά είναι όλα τα στοιχεία " .
		"που υπάρχουν στον πίνακα test της Βάσης Δεδομένων MySQL : </p>");

	// Θα εμφανίσουμε τώρα τα περιεχόμενα των πεδίων όλων των εγγραφών του πίνακα test
	// Επιλογή όλων των ονομάτων του πίνακα test και καταχώρησή τους στη μεταβλητή $result
	$result = mysql_query("SELECT name FROM test");
	if (!$result) {
		echo("<p> Λάθος στην εκτέλεση του query : " .
		mysql_error() . "</p>");
		exit();
	}


	// Επιλογή όλων των πόλεων του πίνακα test και καταχώρησή τους στη μεταβλητή $resultpoli
	$resultpoli = mysql_query("SELECT poli FROM test");
	if (!$resultpoli) {
		echo("<p> Λάθος στην εκτέλεση του query : " .
		mysql_error() . "</p>");
		exit();
	}

	// Επιλογή όλων των ημερομηνιών του πίνακα test και καταχώρησή τους στη μεταβλητή $resultdate
	$resultdate = mysql_query("SELECT imerominia FROM test");
	if (!$resultdate) {
		echo("<p> Λάθος στην εκτέλεση του query : " .
		mysql_error() . "</p>");
		exit();
	}


	// Επιλογή όλων των ip διευθύνσεων του πίνακα test και καταχώρησή τους στη μεταβλητή $resultip
	$resultip = mysql_query("SELECT ip FROM test");
	if (!$resultip) {
		echo("<p> Λάθος στην εκτέλεση του query : " .
		mysql_error() . "</p>");
		exit();
	}

	// Εμφάνιση των τιμών όλων των πεδίων του πίνακα test σε πίνακα (table)
	// Δημιουργία του τίτλου του πίνακα
	echo("<table border=1><tr><td><b>Α/Α</b></td><td><b>Όνομα</b></td><td><b>Πόλη</b></td><td><b>Ημερομηνία</b></td><td><b>IP Διεύθυνση</b></td></tr>");
	$i=0;	// ο αύξων αριθμός της εγγραφής
	while ( $row = mysql_fetch_array($result) ) {
		$i=$i+1;
		$rowpoli = mysql_fetch_array($resultpoli);
		$rowdate = mysql_fetch_array($resultdate);
		$rowip = mysql_fetch_array($resultip);
		echo("<tr><td>" . $i . "</td><td>" . $row["name"] . "</td><td>" . $rowpoli["poli"] . "</td><td>" . $rowdate["imerominia"] . "</td><td>" . $rowip["ip"] . "</td></tr>");
	}
	echo("</table>");	// τέλος του πίνακα
?>
<p><a href="PHP.html"><img src="back.gif" width="75" height="42" alt="back.gif (9867 bytes)"></a></p>
<p><a href="PHP.html"><big><big><big>Επιστροφή</big></big></big></a></p>
</body>
</html>
