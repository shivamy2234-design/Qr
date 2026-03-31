<?php
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$qr = new QRCode("https://in.pinterest.com/");
$writer = new PngWriter();
$result = $writer->write($qr);
header('Content-Type: '.$result->getMimeType());
echo $result->getString();

?>