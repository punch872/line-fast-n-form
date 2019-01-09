<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 14,
	'default_font' => 'sarabun'
]);

$location = $_REQUEST['location'];
$datecreate = $_REQUEST['datecreate'];

$first_name_sell = $_REQUEST['first_name_sell'];
$last_name_sell = $_REQUEST['last_name_sell'];
$homeNoSell = $_REQUEST['homeNoSell'];
$roadSell = $_REQUEST['roadSell'];
$districtSell = $_REQUEST['districtSell'];
$amphoeSell = $_REQUEST['amphoeSell'];
$provinceSell = $_REQUEST['provinceSell'];

$first_name_buy = $_REQUEST['first_name_buy'];
$last_name_buy = $_REQUEST['last_name_buy'];
$homeNoBuy = $_REQUEST['homeNoBuy'];
$roadBuy = $_REQUEST['roadBuy'];
$districtBuy = $_REQUEST['districtBuy'];
$amphoeBuy = $_REQUEST['amphoeBuy'];
$provinceBuy = $_REQUEST['provinceBuy'];

$cars = $_REQUEST['cars'];
$carColor = $_REQUEST['carColor'];
$linc = $_REQUEST['linc'];
$RegDate = $_REQUEST['RegDate'];

$priceCar =$_REQUEST['priceCar'];
$priceCarText = $_REQUEST['priceCarText'];
$downPrice = $_REQUEST['downPrice'];
$downPriceText = $_REQUEST['downPriceText'];
$checkBank = $_REQUEST['checkBank'];
$checkNo = $_REQUEST['checkNo'];
$checkPrice = $_REQUEST['checkPrice'];
$checkPriceText = $_REQUEST['checkPriceText'];


$leftPrice = $_REQUEST['leftPrice'];
$leftPriceText = $_REQUEST['leftPriceText'];
$transDate = $_REQUEST['transDate'];

$html = '<div style="position:fixed;top:87px;left:350px;">'.$location.'&nbsp;</div>';
$html .='<div style="position:fixed;top:115px;left:350px;"> '.$datecreate.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:174px;left:190px;">'.$first_name_sell.'&nbsp;&nbsp;'.$last_name_sell.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:174px;left:560px;">'.$homeNoSell.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:200px;left:42px;">'.$roadSell.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:200px;left:210px;">'.$districtSell.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:200px;left:355px;">'.$amphoeSell.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:200px;left:495px;">'.$provinceSell.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:225px;left:260px;">'.$first_name_buy.'&nbsp;&nbsp;'.$last_name_buy.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:225px;left:550px;">'.$homeNoBuy.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:250px;left:42px;">'.$roadBuy.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:250px;left:210px;">'.$districtBuy.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:250px;left:355px;">'.$amphoeBuy.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:250px;left:495px;">'.$provinceBuy.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:305px;left:303px;">'.$cars.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:305px;left:495px;">'.$carColor.'&nbsp;&nbsp;</div>';
$html .= '<div style="position:fixed;top:332px;left:140px;">'.$linc.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:332px;left:330px;">'.$RegDate.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:386px;left:535px;">'.$priceCar.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:412px;left:130px;">'.$priceCarText.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:437px;left:310px;">'.$downPrice.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:437px;left:460px;">'.$downPriceText.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:462px;left:285px;">'.$checkBank.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:462px;left:502px;">'.$checkNo.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:488px;left:120px;">'.$checkPrice.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:488px;left:300px;">'.$checkPriceText.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:517px;left:400px;">'.$leftPrice.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:542px;left:140px;">'.$leftPriceText.'&nbsp;</div>';
$html .= '<div style="position:fixed;top:542px;left:540px;">'.$transDate.'&nbsp;</div>';
 

$html .= '<div style="position:fixed;top:820px;left:95px;">'.$first_name_sell.'&nbsp;&nbsp;'.$last_name_sell.'&nbsp;</div>';

$html .= '<div style="position:fixed;top:820px;left:425px;">'.$first_name_buy.'&nbsp;&nbsp;'.$last_name_buy.'&nbsp;</div>';

$mpdf->SetImportUse();
$mpdf->SetDocTemplate('BuyingCar.pdf',true);

$mpdf->WriteHTML($html);
$mpdf->Output();
?>