<html>
<head>
<link type="text/css" href="Style.css" rel="stylesheet">
<title>Raumliste</title>
</head>
<body style="background-color:transparent; border-color:transparent" class="schriftgesamt">
<center>
<!-- div zum Positionieren -->
<div style="position:absolute;  left:100px;">
<!--†berschriften zur Unterteilung von aktiven und inaktiven Fächer -->
<table width="600" border="0" align="center" cellspacing="5" cellpadding="2" style="margin-top:50px; border-collapse:collapse; border-color:#000000;">
	<tr>
		<td colspan="3" class="gerade" width="100" ><p class="ueberschrift">Raumliste</p></td>
	</tr>
	<tr>
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Raum hinzuf&uuml;gen</b></p></td>
	</tr>
	<form action="index.php?action=save&what=raum" method="post">
	<!-- Raum hinzufuegen am Tabellenanfang -->
	<tr>
		<td class="ungerade" width="100" height="10"><input type="text" name="raum"></td>
		<td colspan="2" class="ungerade" width="100" height="10"><input type="submit" name="add_raum" value="Raum hinzuf&uuml;gen"> <input type="reset" name="reset" value="reset"></td>
	</tr>
	</form>
    <!-- eingebaute Leerzeile zur Uebersichtlichkeit am Anfang der Tabelle -->
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Aktive R&auml;ume</b></p></td>
	</tr>
    <form action="index.php?action=deactivate&what=raum" method="post">
<?php

echo $htmlr -> getRaums();

?>
	</form>
	<!-- eingebaute Leerzeile zur Uebersichtlichkeit am Ende der Tabelle -->
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10">&nbsp;</td>
	</tr>



<!-- Ueberschrift - inaktive Fächer -->
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Inaktive R&auml;ume</b></p></td>
	</tr>
<!-- Beispielwerte -->
    <form action="index.php?action=activate&what=raum" method="post">
	<tr align="center">
		<?php
echo $htmlr_inaktiv -> getRaums();
		?>
	</tr>
	</form>
</table>
</div>
</center>
</body>
</html>