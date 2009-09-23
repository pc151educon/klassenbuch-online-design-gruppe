<html>
<head>
<title>News</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body style="background-color:transparent; border-color:transparent" class="schriftgesamt">
<center>
<table width="600" border="0" align="center" cellspacing="5" cellpadding="2" style="margin-top:50px; border-collapse:collapse; border-color:#000000;">
    <tr>
		<td class="gerade" width="100%" ><p class="ueberschrift"><b>News:</b> <?php echo $n->getTitle(); ?></p></td>
	</tr>
    <tr>
        <td class="ungerade" width="100%" height="10"><p class="tabelleinhalt"><?php
			echo $n->getTextfield();
            ?></td>
    </tr>

</table>
</center>
</body>
</html>