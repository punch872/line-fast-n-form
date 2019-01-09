<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 14,
	'default_font' => 'sarabun'
]);

$location = $_REQUEST['location'];
$datecreate = $_REQUEST['datecreate'];

$typeofAbs = $_REQUEST['typeofAbs'];
$highPre = $_REQUEST['highPre'];

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$perDay = $_REQUEST['perDay'];
$fDay = $_REQUEST['fDay'];
$lDay = $_REQUEST['lDay'];

$res = $_REQUEST['res'];

$home = $_REQUEST['home'];
$home2 = $_REQUEST['home2'];
$tel = $_REQUEST['tel'];

$html = '<div style="position:fixed;top:50px;left:450px;">'.$location.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:110px;left:440px;">'.$datecreate.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:152px;left:153px;">'.$typeofAbs.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:185px;left:80px;">'.$highPre.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:225px;left:230px;">'.$fname .'&nbsp;&nbsp;'.$lname.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:253px;left:160px;">'.$typeofAbs.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:253px;left:320px;">'.$perDay.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:253px;left:454px;">'.$fDay.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:253px;left:612px;">'.$lDay.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:284px;left:127px;">'.$res.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:340px;left:384px;">'.$home.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:370px;left:50px;">'.$home2.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:370px;left:540px;">'.$tel.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:583px;left:364px;">'.$fname .'&nbsp;&nbsp;'.$lname.'&nbsp;</div>';

$mpdf->SetImportUse();
$mpdf->SetDocTemplate('sickAbs.pdf',true);

$mpdf->WriteHTML($html);
$mpdf->Output();
?>