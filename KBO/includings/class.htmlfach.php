<?php

class HtmlFach {
	public $faechers;
	
	public function __construct($fachs) {
		$this->fachs = $fachs;
	}
	
	public function getFaechers() {
		$html = '';
		foreach ( $this->fachs as $fach ) {
			$html .= '	<tr>
		<td class="ungerade" width="100" height="10"><input type="text" name="fach' . $fach ['fach_id'] . '" value="' . $fach ['name'] . '"></td>
		<td class="ungerade" width="100" height="10"><input type="submit" name="" value="deaktivieren"></td>
		<td class="ungerade" width="100" height="10"><input type="submit" name="update" value="Update"></td>
	</tr>';
		
		}
		return $html;
	}
	
	/**
	 * erstellt aus namen der Fächer PulldownMenu mit Abwahloption
	 *
	 * @param string $name
	 */
	public function buildPdm($name) {
		
		// brauche fachs als Array mit id als key und name als value  
		$fachs_name = Html::arrayArrayToNameArray ( $this->fachs );
		$fach_pdm = Html::buildPullDownMenu ( $name, $fachs_name );
		$fach_pdm = Html::addNoneOption ( $fach_pdm );
		
		return $fach_pdm;
	}
	
	public function getFachs()
	{
		$html = '';
		foreach ($this->fachs as $fach)
        {
			// aktive und inaktive Klassen erhalten unterschiedlichen submit-Knopf
			if ($fach['aktiv'] == 'TRUE') {
				$submit_label = 'deaktivieren';
			} else {
				$submit_label = 'aktivieren';
			}


            $html.= '	<tr>
        <td class="ungerade" width="100" height="10"><input type="text" name="fach'.$fach['fach_id'].'" value="'.$fach['name'].'"></td>
        <td colspan="2" class="ungerade" width="100" height="10"><input type="submit" name="deaktiv' .$fach['fach_id']. '" value="' .$submit_label. '"> <input type="submit" name="update" value="Update"></td>
    </tr>';

        }
	return $html;
	}

}

?>