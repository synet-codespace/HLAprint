<?php
require __DIR__.'\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;


$appSid = 'XXXXXXX';
$appKey = 'XXXXXXX';


$tempFolder = null;

$config = new Configuration();
$config->setAppKey($appKey);
$config->setAppSid($appSid);

$pdfApi = new PdfApi(null, $config);
$name = 'PdfWithScreenAnnotations.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 


$response = $pdfApi->getDocumentScreenAnnotations($name, null, $tempFolder);

echo $response

?>