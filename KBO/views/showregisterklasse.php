<html>
<head>
<title>klasse registrieren</title>
<link type="text/css" href="Style.css" rel="stylesheet">
</head>
<body style="background-color:transparent; border-color:transparent" class="schriftgesamt">
<center>
<!--†berschriften zur Unterteilung von aktiven und inaktiven Klassen -->
<table width="600" border="0" align="center" cellspacing="5" cellpadding="2" style="margin-top:50px; border-collapse:collapse; border-color:#000000;">
	<tr>
		<td colspan="3" class="gerade" width="100" ><p class="ueberschrift"><b>Klassenliste</b></p></td>
	</tr>
	<tr>
	</tr>
	<tr>
		<td colspan="3" class="ungerade" width="100" height="10">&nbsp;</td>
	</tr>
	<tr align="center">
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Klasse hinzuf&uuml;gen</b></td>
	</tr>
	<form action="index.php?action=save&what=klasse" method="post">
	<!-- Klasse hinzufuegen am Tabellenanfang -->
	<tr>
		<td class="ungerade" width="100" height="10"><input type="text" name="klasse"></td>
		<td colspan="2" class="ungerade" width="100" height="10"><input type="submit" name="add_class" value="Klasse hinzuf&uuml;gen"> <input type="reset" name="reset" value="reset"></td>
	</tr>
  	</form>
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10">&nbsp;</td>
	</tr>	
	<tr align="center">
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Aktive Klassen</b></td>
	</tr>	
    <form action="index.php?action=deactivate&what=klasse" method="post">
<?php

echo $htmlk -> getKlassens();

?>
	</form>
	<!-- eingebaute Leerzeile zur Uebersichtlichkeit am Ende der Tabelle -->
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10">&nbsp;</td>
	</tr>



<!-- inaktive Klasse -->



	<tr align="center">
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Inaktive Klassen</b></td>
	</tr>
	
    <!-- Beispielwerte -->
    <form action="index.php?action=activate&what=klasse" method="post">
	<tr align="center">
		<?php
echo $htmlk_inaktiv -> getKlassens();
		?>
	</tr>
	</form>
</table>
</div>
<center>
</body>
</html>