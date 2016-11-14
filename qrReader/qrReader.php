<?php
require_once 'lib/QrReader.php';

$files = scandir('qrcodes');

foreach($files as $file){
	if($file == '.' || $file == '..') {
		continue;
	} else {
		$qrcode = new QrReader('qrcodes/'. $file);
		$text = $qrcode->text();
		echo $text. '<br>';
	}
}



