<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'default_font_size' => 8.26,
                         
]);
//input Variable
$name1= $_POST['fname'];
$lname= $_POST['lname'];
$img = $_POST['image'];
$name = $_POST['first_name_sell'];
$position = $_POST['position'];
$summary = $_POST['summary'];
$exp1 = $_POST['exp1'];
$exp2 = $_POST['exp2'];
$exp3 = $_POST['exp3'];
$exp4 = $_POST['exp4'];
//address
$address = $_POST['address'];
$street = $_POST['street'];
$subdistrict = $_POST['subdistrict'];
$district = $_POST['district'];
$province = $_POST['province'];
//telephono
$tel = $_POST['tel'];
$email =$_POST['email'];
$website = $_POST['website'];
$fb = $_POST['Facebook'];
$workplace1 = $_POST['workplace1'];
$workplace2 = $_POST['workplace2'];
$workplace3 = $_POST['workplace3'];

$work2 = $_POST['work2'];
$work3 = $_POST['work3'];
$ed1 = $_POST['ed1'];
$ed2 = $_POST['ed2'];
$ed3 = $_POST['ed3'];

//area_of_expertise
$skill1 = $_POST['skill1'];
$skill2 = $_POST['skill2'];
$skill3 = $_POST['skill3'];
$skill4 = $_POST['skill4'];




//work_experience
//    position1
$posw1 = $_POST['posw1'];
$placew1 = $_POST['placew1'];
$fromw1 = $_POST['fromw1'];
$detailw1 =  $_POST['detailw1'];
//    position2
$posw2 = $_POST['posw2'];
$placew2 = $_POST['placew2'];
$fromw2 = $_POST['fromw2'];
$detailw2 =  $_POST['detailw2'];
//    position3
$posw3 = $_POST['posw3'];
$placew3 = $_POST['placew3'];
$fromw3 = $_POST['fromw3'];
$detailw3 =  $_POST['detailw3'];

//education_training
//    experience1
$pose1 = $_POST['pose1'];
$placee1 = $_POST['placee1'];
$detaile1 =  $_POST['detaile1'];
//    experience2
$pose2 = $_POST['pose2'];
$placee2 = $_POST['placee2'];
$detaile2 =  $_POST['detaile2'];
//    experience3
$pose3 = $_POST['pose3'];
$placee3 = $_POST['placee3'];
$detaile3 =  $_POST['detaile3'];

//references
//    referece1
$posref1 = $_POST['posref1'];
$placeref1 = $_POST['placeref1'];
$telref1 = $_POST['telref1'];
//    referece2
$posref2 = $_POST['posref2'];
$placeref2 = $_POST['placeref2'];
$telref2 = $_POST['telref2'];


//image
$html .= '<div style="position:absolute;top:100px;left:100px;font-size:40px;font-weight:bold;">'.$image.'</div>';
//name 
$html .= '<div style="position:absolute;top:230px;left:200px;font-size:40px;font-weight:bold;">'.$name1.'</div>';
$html .= '<div style="position:absolute;top:280px;left:200px;font-size:40px;font-weight:bold;">'.$lname.'</div>';

//position
$html .= '<div style="position:absolute;top:330px;left:300px;font-size:18px;font-weight:bold;">'.$position.'</div>';
//summary
$html .= '<div style="position:absolute;top:430px;left:80px;">'.$summary.'</div>';
//expertise
$html .= '<div style="position:absolute;top:750px;left:80px;">'.$skill1.'</div>';
$html .= '<div style="position:absolute;top:770px;left:80px;">'.$skill2.'</div>';
$html .= '<div style="position:absolute;top:790px;left:80px;">'.$skill3.'</div>';
$html .= '<div style="position:absolute;top:810px;left:80px;">'.$skill4.'</div>';

//reach me at
//address
$html .= '<div style="position:absolute;top:590px;left:80px;">'.$address.' '.$street.' '.$subdistrict.' '.$district.' '.$province.'</div>';
//tel
$html .= '<div style="position:absolute;top:610px;left:80px;">'.$tel.'</div>';
//email
$html .= '<div style="position:absolute;top:630px;left:80px;">'.$email.'</div>';
//website
$html .= '<div style="position:absolute;top:650px;left:80px;">'.$name.'</div>';
//facebook
$html .= '<div style="position:absolute;top:6700px;left:80px;">'.$name.'</div>';
//Work Experience
//work1
$html .= '<div style="position:absolute;top:430px;left:420px;font-size:13px;font-weight:bold;">'.$posw1.'</div>';
$html .= '<div style="position:absolute;top:450px;left:420px;font-size:12px;">'.$placew1.'</div>';
$html .= '<div style="position:absolute;top:470px;left:420px;font-size:11px;">'.$fromw1.'</div>';
$html .= '<div style="position:absolute;top:490px;left:420px;">'.$detailw1.'</div>';
//work2
$html .= '<div style="position:absolute;top:510px;left:420px;font-size:13px;font-weight:bold;">'.$posw2.'</div>';
$html .= '<div style="position:absolute;top:530px;left:420px;font-size:12px;">'.$placew2.'</div>';
$html .= '<div style="position:absolute;top:550px;left:420px;font-size:11px;">'.$fromw2.'</div>';
$html .= '<div style="position:absolute;top:570px;left:420px;">'.$detailw2.'</div>';
//work3
$html .= '<div style="position:absolute;top:590px;left:420px;font-size:13px;font-weight:bold;">'.$posw3.'</div>';
$html .= '<div style="position:absolute;top:610px;left:420px;font-size:12px;">'.$placew3.'</div>';
$html .= '<div style="position:absolute;top:630px;left:420px;font-size:11px;">'.$fromw3.'</div>';
$html .= '<div style="position:absolute;top:650px;left:420px;">'.$detailw3.'</div>';

//Education & Training
//education 1 
$html .= '<div style="position:absolute;top:720px;left:420px;font-size:13px;font-weight:bold;">'.$placee1.'</div>';
$html .= '<div style="position:absolute;top:740px;left:420px;font-size:12px;">'.$pose1.'</div>';
$html .= '<div style="position:absolute;top:760px;left:420px;font-size:11px;">'.$detaile1.'</div>';
//educagtion 2 
$html .= '<div style="position:absolute;top:780px;left:420px;font-size:13px;font-weight:bold;">'.$placee2.'</div>';
$html .= '<div style="position:absolute;top:800px;left:420px;font-size:12px;">'.$pose2.'</div>';
$html .= '<div style="position:absolute;top:820px;left:420px;font-size:11px;">'.$detaile2.'</div>';
//education 3
$html .= '<div style="position:absolute;top:840px;left:420px;font-size:13px;font-weight:bold;">'.$placee3.'</div>';
$html .= '<div style="position:absolute;top:860px;left:420px;font-size:12px;">'.$pose3.'</div>';
$html .= '<div style="position:absolute;top:880px;left:420px;font-size:11px;">'.$detaile3.'</div>';

//reference 1
$html .= '<div style="position:absolute;top:870px;left:80px;">'.$posref1.'</div>';
$html .= '<div style="position:absolute;top:890px;left:80px;">'.$placeref1.'</div>';
$html .= '<div style="position:absolute;top:910px;left:80px;">'.$telref1.'</div>';

//reference 2
$html .= '<div style="position:absolute;top:930px;left:80px;">'.$posref2.'</div>';
$html .= '<div style="position:absolute;top:950px;left:80px;">'.$placeref2.'</div>';
$html .= '<div style="position:absolute;top:970px;left:80px;">'.$telref2.'</div>';



$mpdf->SetImportUse();
$mpdf->SetDocTemplate('template-3.pdf',true);
$mpdf->WriteHTML($html);
$mpdf->Output();


?>