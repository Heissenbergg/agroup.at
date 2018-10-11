<?php
function getPdfs($hash){
	$db = new DB();
	$pdfs = array('value' => array('empty', 'empty', 'empty'), 'title' => array('a', 'b', 'c'));
	$first = 0; $second = 0; $third = 0;
	$pdfQuery = $db->DESCquery("pdfs");
	while($pdf = $pdfQuery -> fetch()){
		if($pdf['hash'] == $hash){
			if($pdf['sort'] == 1 and !$first){
				$pdfs['value'][0] = $pdf['title'];
				$first ++;
				//$pdfs['title'][0] = $pdf['title'];
			}else if($pdf['sort'] == 2 and !$second){
				$pdfs['value'][1] = $pdf['title'];
				$second++;
				//$pdfs['title'][1] = $pdf['title'];
			}else if($pdf['sort'] == 3 and !$third){
				$pdfs['value'][2] = $pdf['title'];
				//$pdfs['title'][2] = $pdf['title'];
				$third++;

			}
		}
		if($first and $second and $third) break;
	}
	return $pdfs;
}