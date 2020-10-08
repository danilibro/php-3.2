<?php
$abjad = 'abcdefghijklmnopqrstuvwxyz';
$position = $strpos($abjad, 'z');
function ubah_huruf($string){
	for ($i=0; $i < strlen($string) ; $i++) { 
		$strpos($abjad, substr($string, $i,1),1);
	}
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>