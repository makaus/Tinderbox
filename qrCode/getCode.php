<?php
require_once('src/QrCode.php');

use Endroid\QrCode\QrCode;

$qr = new QrCode();

$qr 
	->setText('This is a QR Code!')
	->setSize('200')
	->render();
 ?>