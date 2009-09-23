<?php

$user_id = '3';

$u = new User();
$u -> load($user_id);

$rolle = $u -> getRole();
//html::showAll($rolle);

$vname = $rolle -> getVorname();
$nname = $rolle -> getNachname();
$geburtstag_db = $u -> getGeburtstag();
$nick = $u -> getLogin();
$email = $u -> getEmail();
$beschreibung = $rolle -> getBeschreibung();
$klasse_id = $rolle -> getKlasse_Id();

$k = new Klasse();
$k -> load($klasse_id);
$klasse = $k -> getName();

//Umwandlung der DB-Schreibweise in die EU-Schreibweise
$geburtstag = html::buildDateFromMysql($geburtstag_db);

//Errechung des Alters
$alter = html::buildDateToAge($geburtstag);

?>

<html>
<head>
<title>Profil &auml;ndern</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body style="background-color:transparent; border-color:transparent; " class="schriftgesamt">
	<form method="post" action="index.phpaction=save&what=edituser">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <table height="350" width="800" border="0" align="center" cellspacing="5" cellpadding="2" style="margin-top:50px; border-collapse:collapse; border-color:#000000;">
		<tr>
			<td colspan="6" class="gerade" width="100" ><p class="ueberschrift">Profil bearbeiten</p></td>
		</tr><!-- 1.Tabellenreihe mit dem User-Avatar & Vornamenseingabe-->
		<tr class="ungerade" height="25">
			<td rowspan="6"><img src='\user_pictures\img_<?php echo $user_id ?>.jpg' width="100" height="130"></td>
			<td align="right"><p class="tabelleinhalt">Vorname:</p></td>
			<td><input type="text" value="<?php echo $vname ?>" name="vname" maxlength="45" size="30" style="background-color:ffffdd;color:black;" disabled></td>
		</tr>
		<!-- 2.Tabellenreihe fuer die Nachnameneingabe-->
		<tr class="ungerade"  height="25">
			<td align="right"><p class="tabelleinhalt">Nachname:</p></td>
			<td><input type="text" value="<?php echo $nname ?>" name="nname" maxlength="45" size="30" style="background-color:ffffdd;color:black;" disabled></td>
		</tr>
		<!-- 3.Tabellenreihe fuer die Alterseingabe-->
		<tr class="ungerade"  height="25">
			<td align="right"><p class="tabelleinhalt">Alter:</p></td>
			<td><input type="text" value="<?php echo $alter ?>" name="age" maxlength="45" size="30" style="background-color:ffffdd;color:black;" disabled></td>
		</tr>
		<!-- 4.Tabellenreihe fuer die Nickname-->
		<tr class="ungerade"  height="25">
			<td align="right"><p class="tabelleinhalt">Nickname:</p></td>
			<td><input type="text" value="<?php echo $nick ?>" name="nick" maxlength="45" size="30"></td>
		</tr>
        <!-- 5.Tabellenreihe fuer die E-Mail-->
		<tr class="ungerade"  height="25">
			<td align="right"><p class="tabelleinhalt">E-Mail:</p></td>
			<td><input type="text" value="<?php echo $email ?>" name="mail" maxlength="45" size="30"></td>
		</tr>
        <!-- 6.Tabellenreihe fuer die Klasse-->
		<tr class="ungerade"  height="25">
			<td align="right"><p class="tabelleinhalt">Klasse:</p></td>
			<td><input type="text" value="<?php echo $klasse ?>" name="klasse" maxlength="45" size="30" style="background-color:ffffdd;color:black;" disabled></td>
		</tr>
		<!-- 6.Tabellenreihe Eingeabefeld "hochladen-button" ist-->
		<tr class="ungerade"  height="25">
			<td><form action="upload_pic.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="datei"><br>
                            <input type="submit" value="Hochladen"></td>
			<td colspan="2">
                <div style="font-size:12px;">max. Gr&ouml;&szlig;e: 100kb; Datei: jpg;</div>
                <div style="font-size:12px;">max. Aufl&ouml;sung: 100px x 130px</div></form>
            </td>
		</tr>
		<!-- 7.Tabellenreihe Unteruebschreift fuer den about me-teil-->
		<tr class="ungerade"  height="25">
			<td colspan="3" align="center"><p class="ueberschrift">Infos &uuml;ber mich:</p></td>
		</tr>
		<!-- 8.Tabellenreihe die "about me"-Eingabe -->
		<tr class="ungerade" >
			<td colspan="3"><textarea name="profiltext" cols="60" rows="10"><?php echo $beschreibung ?></textarea></td>
		</tr>
		<!-- 9.Tabellenreihe fuer die Passwortaenderung-->
		<tr class="ungerade"  height="25">
			<td colspan="4" align="center"><p class="ueberschrift">Passwort &auml;ndern</p></td>
		</tr>
		<!-- 10.Tabellenreihe fuer die altes Passwort-->
		<tr class="ungerade"  height="25">
			<td align="right"><p class="tabelleinhalt">altes Passwort:</p></td>
			<td colspan="5" align="left"><input type="password" name="oldpassword" value=""></td>
		</tr>
		<!-- 11.Tabellenreihe fuer die neues Passwort-->
		<tr class="ungerade"  height="25">
			<td align="right"><p class="tabelleinhalt">neues Passwort:</p></td>
			<td colspan="5" align="left"><input type="password" name="newpassword1" value=""></td>
		</tr>
		<!-- 12.Tabellenreihe f�r die Best�tigung des neues Passworts-->
		<tr class="ungerade"  height="25">
			
			<td style="text-align:right;"><p class="tabelleinhalt">Passwort best&auml;tigen:</p></td>
			<td colspan="5" align="left"><input type="password" name="newpassword2" value=""></td>
		</tr>
		<!-- 13.Tabellenreihe "Uebernehmen" und "abbrechen" Button-->
		<tr class="ungerade">
			<td colspan="6"><input type="submit" value="&uuml;bernehmen"></form> <input type="submit" value="abbrechen"></td>
			
		</tr>
	</table>



</body>
</html>

<?php

//Auf die folgeseite einbinden

if (strlen($nick) == 0 or strlen($mail) == 0 or strlen($newpw1) == 0 or strlen($newpw2) == 0 or strlen($oldpw)) {

echo "<h2 style='color:red;'>Sie haben nicht alle Felder ausgef&uuml;llt!</h2>";

}

else {

    if ($pw1 == $pw2) {

            // In die DB schreiben...
    }

    else {

        echo "<h2 style='color;red;'>Sie haben nicht zweimal das gleiche Passwort eingegeben</h2>";

    }

}