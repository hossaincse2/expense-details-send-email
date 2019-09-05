<?php 
	include 'email.php';
 // multiple recipients


$expense = $_POST['expense'];
$vendo_name = $_POST['vendo_name'];
$vendor_estimate = $_POST['vendor_estimate'];
$estimate_currence = $_POST['estimate_currence'];
$date = $_POST['estimate_date'];
// $attachment = $_POST['attachment'];
$comment = $_POST['comment'];
$file = $_POST['attachmentfile'];
$attachment= isset($_POST['attachmentfile']) && $_POST['attachmentfile'] != '' ? $baseurl.'/'.$_POST['attachmentfile'] : '';

// subject
$subject = 'VENDOR ESTIMATE';
 

// message
  $htmlContent = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>VENDOR ESTIMATE</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="format-detection" content="telephone=no"> 
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

<style type="text/css"> 
        .content{
                width: 70%; 
            }
            .table_col1{
               width: 35%;
            }
             .table_col2{
               width: 65%;
            }
            .wrap{
                padding: 20px;
            }
           
             body{
                padding:5px; 
                margin:0;
                border-top:10px solid aliceblue;
                border-bottom:10px solid aliceblue;
            }
             th{
                text-align:left !important;
            }
            td{
                vertical-align:top;
            }
            td,th{
                padding:5px 0px;
            }
        @media screen and (max-width: 768px) {
          body{
                padding:0; 
                margin:0;
                border-top:0 solid aliceblue;
                border-bottom:0 solid aliceblue;
            }
            .content{
                width: 100%;
                padding:0;
                margin:0;
            }
            .table_col1{
               width: 35%;
            }
             .table_col2{
                 width: 65%;
            }
            .wrap{
                padding: 10px;
            }
        }
    </style>
</head>
<body style="padding:0;margin:0;background-color: aliceblue;border-top:10px solid aliceblue;border-bottom:10px solid aliceblue;">

<div class="content" style="margin: 0 auto;background-color: #fff;">
<div class="" style="text-align: center;border-bottom: 1px solid #eaeaeae0;padding-bottom: 10px">
	<img style="width: 180px;" src="'.$baseurl.'/img/logo.png" alt="">
</div>
<div class="wrap">
   <h3>VENDOR ESTIMATE</h3>
  
  <table width="100%">
      <tr>
          <th class="table_col1">Expense</th>
          <td class="table_col2"> : '. $expense .' </td>
      </tr>
      <tr>
          <th>Vendor Name </th>
          <td> : '. $vendo_name .'</td>
      </tr>
      <tr>
          <th>Vendor Estimate </th>
          <td> : '. $vendor_estimate .'</td>
      </tr>
      <tr>
          <th>Estimate Currency </th>
          <td> : '. $estimate_currence .'</td>
      </tr>
          <tr>
          <th>Estimate Date </th>
          <td> : '. $date .'</td>
      </tr> 
          <tr>
              <td colspan="2">
                  <hr style="border-color: #c4c3c51c;">
              </td>
          </tr>
       <tr>
          <th colspan="2">Comment </th>
        </tr>
         <tr>
          <td  colspan="2">'. $comment .'</td>
        </tr>
  </table>
  </div>
  <footer style="text-align: center;padding: 7px 0 0px;margin: 0;position: relative;background-position: center;
  background-size: cover;background-image: url('.$baseurl.'/img/email/footer_bg.jpg);padding:2px 20px;color: #fff">

  <ul style="display:inline-block;padding-left: 0; margin: 0; padding-top: 6px; padding-bottom: 0px">
            <li style="display:inline-block; margin-left: 4px;"><a href=""><img style="width:25px" src="'.$baseurl.'/img/email/fb.png" alt="facebook"></a></li>
            <li style="display:inline-block;margin-left: 4px;"><a href=""><img style="width:25px" src="'.$baseurl.'/img/email/twitter.png" alt="twitter"></a></li>
 </ul>
  <p style="color:#fff;margin: 5px;position: relative; font-size:11px;line-height: 15px;">
      <span>
        <img style="width:12px;position: relative;top: 2px;" src="'.$baseurl.'/img/email/mail.png" alt=""> &nbsp;<a style="color:#fff;text-decoration:none;font-size:11px" href="#">info@blueshiftip.com </a> </span> &nbsp; &nbsp;
 <span style="font-size:11px"> <img style="width:10px" src="'.$baseurl.'/img/email/call.png" alt=""> &nbsp;617-207-6141</span>
  </p>
  <p style="margin: 5px;position: relative;font-size:11px">Copyright &copy; 2018 Blueshift IP. All Rights Reserved.</p>
  
</footer>
  </div>
  
  </body>
  </html>
';
 

//  print_r($htmlContent);
//  die();
//emailSend($subject,$htmlContent);

email_send_with_file($subject,$htmlContent,$file);

?>
