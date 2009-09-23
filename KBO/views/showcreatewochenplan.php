<?php

$f = new Fach ( );
$fachs = $f->getAllAsArray ();
$htmlf = new HtmlFach ( $fachs );

$r = new Raum ( );
$raums = $r->getAllAsArray ();
$htmlr = new HtmlRaum ( $raums );

$l = new Lehrer ( );
$lehrers = $l->getAllAsArray ();
$htmll = new HtmlLehrer ( $lehrers );

$weekdays = WEEKDAYS;
$klasse_id = 1;

$b = new Block ( );
$blocks = $b->getAllAsObject ();

$k = new Klasse ( );
$klassens = $k->getAllAsArray ();
$klassens = Html::arrayArrayToNameArray ( $klassens );
$k_pdm = Html::buildPullDownMenu ( "klasse_id", $klassens );
/*
// brauche fachs als Array mit id als key und name als value
$lehrers_name = Html::objektArrayToNameArray($lehrers);
$lehrer_pdm = Html::buildPullDownMenu('fach', $lehrers_name);
$lehrer_pdm = Html::addNoneOption($lehrer_pdm);
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Wochenplaner</title>
<link type="text/css" href="Style.css" rel="stylesheet" />
<script type="text/javascript" src="views/Script.js"></script>
<style type="text/css">
select {
	width: 100px;
}
</style>
</head>
<body style="margin-top:50px; background-color: transparent; border-color: transparent;"
	class="schriftgesamt">
<form action="index.php?action=save&what=wochenplan" method="post">
<center>
<p class="ueberschrift" >Wochenplaner</p>
<table id="filter" border="0">
	<tr>
		<td>Klasse:</td>
		<td><?php
		echo $k_pdm;
		?></td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>G&uuml;ltigkeitszeitraum:</td>
		<td>von</td>
		<td><input type="text" name="von" value="TT.MM.JJJJ" maxlength="10"
			size="8" /></td>
		<td>bis</td>
		<td><input type="text" name="bis" value="TT.MM.JJJJ" maxlength="10"
			size="8" /></td>
		<td>&nbsp;<input type="submit" value="Ok" /></td>
	</tr>
</table>
</div>
</td>
</tr>
<tr>
	<td valign="top">
	<div class="headerColumn">
	<table cellpadding="45" cellspacing="0" border="0">
              <?php
														foreach ( $blocks as $block ) {
														
														}
														?>
	  </table>
<br>
	<table border="0" width="500">
		<tr>
		<td class="woplantage">Montag</td>
		<td class="woplantage">Dienstag</td>
		<td class="woplantage">Mittwoch</td>
		<td class="woplantage">Donnerstag</td>
		<td class="woplantage">Freitag</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		</tr>
		
				<table cellpadding="0" cellspacing="0" border="0">
                <?php
														foreach ( $blocks as $block ) {
															
															echo '            <tr>';
															echo '                <th style="padding-top:3px;padding-bottom:6px;"><div align="center">' . substr ( $block->getVon (), 0, 5 ) . ' - ' . substr ( $block->getBis (), 0, 5 ) . '</div></th>';
															echo '            </tr>';
															
															echo '            <tr>';
															
															for($wotag = 1; $wotag < $weekdays + 1; $wotag ++) {
																$param = $klasse_id . '_' . $wotag . '_' . $block->getId () . '_fach_id';
																echo '                <td>' . $htmlf->buildPdm ( $param ) . '</td>';
															}
															
															echo '            </tr>';
															
															echo '            <tr>';
															
															for($wotag = 1; $wotag < $weekdays + 1; $wotag ++) {
																$param = $klasse_id . '_' . $wotag . '_' . $block->getId () . '_lehrer_id';
																echo '                <td>' . $htmll->buildPdm ( $param ) . '</td>';
															}
															
															echo '            </tr>';
															
															echo '            <tr>';
															
															for($wotag = 1; $wotag < $weekdays + 1; $wotag ++) {
																$param = $klasse_id . '_' . $wotag . '_' . $block->getId () . '_raum_id';
																echo '                <td>' . $htmlr->buildPdm ( $param ) . '</td>';
															
															}
															echo '            </tr>';
															
														//echo '			 <td colspan="6"><center>&nbsp;&nbsp;&nbsp</center></td>';		
														

														}
														?>
          	  </table>
    </table>     
	</div>
	</td>
</tr>
</table>

<br />
<input type="submit" name="save" value="Speichern" />&nbsp;<input
	type="reset" name="cancel" value="Abbrechen" /></center>
</form>
</body>
</html>
<script type="text/javascript">
	paddingLeft = 10;
	paddingRight = 10;
	paddingTop = 1;
	paddingBottom = 1;

	ScrollTableRelativeSize(
		document.getElementById("scrollTable"),
		50,
		120);

	/*ScrollTableAbsoluteSize(
		document.getElementById("scrollTable"),
		500,
		550);*/

</script>
