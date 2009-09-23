<html>
<head>
<title>News erstellen</title>
<link type="text/css" href="Style.css" rel="stylesheet">
</head>
<body style="background-color:transparent; border-color:transparent" class="schriftgesamt">
<center>
<form action="index.php?action=save&what=news" method="post">
<table width="600" border="1" align="center" cellspacing="5" cellpadding="2" style="margin-top:50px; border-collapse:collapse; border-color:transparent;">
    <tr><td class="gerade" width="100%" ><p class="ueberschrift">News erstellen</p></td>
	</tr>
	<tr>
        <td class="ungerade" width="100%" >Titel: <br><input name="new_news_title" size="78" maxlength="70"></td>
    </tr>
    <tr>
        <td class="ungerade" width="100%" height="10">Text: <br>
		<textarea name="new_news_create" rows="15" cols="60"></textarea><br>
		<br><input type="reset" name="new_news_cancel" value="abbrechen"> <input type="submit" name="new_news_accept" value="&uuml;bernehmen">
        </td>
    </tr>
</table>
</form>
</center>
</body>
</html>