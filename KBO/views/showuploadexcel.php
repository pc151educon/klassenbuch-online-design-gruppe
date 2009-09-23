<html>
<head>
<link type="text/css" href="Style.css" rel="stylesheet">
<title>Benutzer registrieren</title>

</head>
<body style="background-color: transparent; border-color: transparent"
	class="schriftgesamt">

<center>
<table width="600" border="0" align="center" cellspacing="20"
	cellpadding="20"
	style="margin-top: 50px">
	<tr>
		<td class="gerade" width="100%">
		<p class="ueberschrift">Exceldatei hochladen</p>
		</td>
	</tr>
	<tr>
		<td class="ungerade" width="100%" height="60">
		<p class="tabelleinhalt">
		
		
		<table border="1" cellspacing="10">
			<form method="post" action="index.php" enctype="multipart/form-data">
			
			
			<tr>
				<td><input type="hidden" name="action" value="save"></td>
				<td><input type="hidden" name="what" spacing="10" value="excelfile"></td>
			</tr>
			<tr>
				<td><input type="file" name="userfile" id="userfile" size="50"
					maxlength="1000" accept="xls/*" /></td>
				<td><input type="submit" name="submit" value="Hochladen" /></td>
			</tr>
		</table>

		</form>
		</td>
	</tr>
</table>
</center>



</body>
</html>