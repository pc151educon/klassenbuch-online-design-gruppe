<html>
<head>
<title>Benutzer registrieren</title>
<link type="text/css" href="Style.css" rel="stylesheet">
</head>
<body style="background-color:transparent; border-color:transparent" class="schriftgesamt">
<div class="user_info">
<?php
if (isset($user_infos) && is_array($user_infos)) {
	echo implode("\n", $user_infos);
}
?>
</div>
<form method='post' action='index.php?action=save&what=registeruser'>
<table width="600" border="0" align="center" cellspacing="5" cellpadding="2" style="margin-top:50px; border-collapse:collapse; border-color:#000000;">
    <tr>
		<td colspan="2" class="gerade" ><p class="ueberschrift">Registrierung eines Benutzers</p></td>
	</tr>
	<tr>
        <td class="ungerade" width="100" height="10">Benutzergruppe:</td>
        <td class="ungerade" width="100" height="10"><select name="typ_input_reg"><option value="1">Sch&uuml;ler</option>
                    <option value="2">Lehrer</option></select></td>
   </tr>
   <tr>
        <td class="ungerade" width="100" height="10" style="padding-bottom:60px">Klasse:</td>
        <td class="ungerade" width="100" height="10"><?php echo $klasse_selection_output; ?></td>
   </tr>
    <tr>
        <td class="ungerade" width="100" height="10">Vorname:</td>
        <td class="ungerade" width="100" height="10"><input type="text" name="vname_input_reg" size="20" maxlength="45" value="<?php echo $vname; ?>"></td>
    </tr>
    <tr>
        <td class="ungerade" width="100" height="10">Nachname:</td>
        <td class="ungerade" width="100" height="10"><input type="text" name="nname_input_reg" size="20" maxlength="45" value="<?php echo $nname; ?>"></td>
    </tr>
    <tr>
        <td class="ungerade" width="100" height="10">Nickname:</td>
        <td class="ungerade" width="100" height="10"><input type="text" name="nick_input_reg" size="20" maxlength="45" value="<?php echo $nick; ?>"></td>
    </tr>
    <tr>
        <td class="ungerade" width="100" height="10">Geburtstag:</td>
        <td class="ungerade" width="100" height="10"><?php echo Html::getDayAsPulldown(); echo Html::getMonthAsPulldown(); echo Html::getYearAsPulldown(); ?></td>
    </tr>
    <tr>
        <td class="ungerade" width="100" height="10">E-Mail:</td>
        <td class="ungerade" width="100" height="10"><input type="text" name="mail_input_reg" size="20" maxlength="45" value="<?php echo $mail; ?>"></td>
    </tr>
    <tr>
        <td class="ungerade" width="100" height="10">Passwort:</td>
        <td class="ungerade" width="100" height="10"><input type="password" name="pw1_input_reg" size="20" maxlength="45" value="<?php echo $pw1; ?>"></td>
    </tr>
    <tr>
        <td class="ungerade" width="100" height="10">Passwort wiederholen:</td>
        <td class="ungerade" width="100" height="10"><input type="password" name="pw2_input_reg" size="20" maxlength="45" value="<?php echo $pw2; ?>"></td>
    </tr>
     <tr height="50">
        <td colspan="2" class="ungerade" height="10"><input type="reset" name="save_reg" value="abbrechen"> <input type="submit" name="save_reg" value="&uuml;bernehmen"></td>
    </tr>
</table>
<br>

</form>

</body>
</html>