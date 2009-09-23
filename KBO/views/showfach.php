<html>
<head>
<link type="text/css" href="Style.css" rel="stylesheet">
<title></title>
</head>
<body style="background-color:transparent; border-color:transparent" class="schriftgesamt">
<center>
<!-- div zum Positionieren -->
<div style="position:absolute;  left:100px;">
<!--†berschriften zur Unterteilung von aktiven und inaktiven Fächer -->
<table width="600" border="0" align="center" cellspacing="5" cellpadding="2" style="margin-top:50px; border-collapse:collapse; border-color:#000000;">
    <tr>
		<td colspan="3" class="gerade" width="100" ><p class="ueberschrift">F&auml;cherliste</p></td>
	</tr>
	<tr align="center">
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Fach hinzuf&uuml;gen</b></td>
	</tr>
	<form action="index.php?action=save&what=fach" method="post">
	<!-- Fach hinzufuegen am Tabellenanfang -->
	<tr>
		<td class="ungerade" width="100" height="10"><input type="text" name="fach"></td>
		<td colspan="2" class="ungerade" width="100" height="10"><input type="submit" name="add_fach" value="Fach hinzuf&uuml;gen"> <input type="reset" name="reset" value="reset"></td>
	</tr>
	</form>
    <!-- eingebaute Leerzeile zur Uebersichtlichkeit am Anfang der Tabelle -->
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Aktive F&auml;cher</b></p></td>
	</tr>
    <form action="index.php?action=deactivate&what=fach" method="post">
<?php

echo $htmlf -> getFachs();

?>
	</form>
	<!-- eingebaute Leerzeile zur Uebersichtlichkeit am Ende der Tabelle -->
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10">&nbsp;</td>
	</tr>



<!-- Ueberschrift - inaktive Fächer -->
    <tr>
		<td colspan="3" class="ungerade" width="100" height="10"><p class="tabelleinhalt"><b>Inaktive F&auml;cher</b></p></td>
	</tr>
    <!-- Beispielwerte -->
    <form action="index.php?action=activate&what=fach" method="post">
	<tr align="center">
		<?php
echo $htmlf_inaktiv -> getFachs();
		?>
	</tr>
	</form>
</table>
</div>
</center>
</body>
</html>