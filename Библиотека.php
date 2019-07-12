<html>
	<head>
		<meta charset="utf-8">
	</head>

<body>

<?php

$host = "localhost";
$namebaza = "baza";
$username = "root";
$password = "";

$conect = mysql_connect("localhost", "root", "");
$db = mysql_select_db(baza);
mysql_set_charset(utf-8);
$query = "SELECT * FROM avtors";
$avtors = mysql_query($query);

mysql_close();

$rezault = mysql_fetch_array($avtors);

?>
<?php

  while ($rezault = mysql_fetch_array($avtors)) {
    echo "<li>".$rezault['Avtor']."</li>";
}

?>

