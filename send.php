<?php 
$firstName=$_POST['first-name'];
$lastName=$_POST['last-name'];
$senderMail=$_POST['email'];
$senderMessage=$_POST['message'];

$to = "Info@naturalstartlearning.org";
$subject = "Notification ";

$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Démystification de la conception d\'un email</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="canvas" style="width: 100%;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: rgb(245, 245, 245);" id="bodyTable">
<tbody><tr>
<td align="center" valign="top" style="padding-right:10px;padding-left:10px;" id="bodyCell">
<!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" style="width:600px;" width="600"><tr><td align="center" valign="top"><![endif]-->

<!-- Email Wrapper Webview Open //-->
<table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperWebview">
    <tbody><tr>
        <td align="center" valign="top">
            <!-- Content Table Open // -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td align="right" valign="middle" style="padding-top: 20px; padding-right: 0px;" class="webview">
                        <!-- Email View in Browser // -->
                        <a class="text hideOnMobile" href="#" target="_blank" style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; font-style: normal; letter-spacing: normal; line-height: 20px; text-transform: none; text-align: right; text-decoration: underline; padding: 0px; margin: 0px; display: none;">
                            Oh wait, there\'s more! →
                        </a>
                    </td>
                </tr>
            </tbody></table>
            <!-- Content Table Close // -->
        </td>
    </tr>
</tbody></table>
<!-- Email Wrapper Webview Close //-->

<!-- Email Wrapper Header Open //-->
<table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperWebview">
    <tbody><tr>
        <td align="center" valign="top">
            <!-- Content Table Open // -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td align="center" valign="middle" style="padding-top: 40px; padding-bottom: 40px;" class="emailLogo">
                        <!-- Logo and Link // -->
                        <a href="#" target="_blank" style="text-decoration:none;" class="">
                            <img src="http://naturalstartlearning.org/wp-content/uploads/2020/09/cropped-1-1.png" alt="" width="300" border="0" style="width: 100%; max-width: 300px; height: auto; display: block;" class="">
                        </a>
                    </td>
                </tr>
            </tbody></table>
            <!-- Content Table Close // -->
        </td>
    </tr>
</tbody></table>
<!-- Email Wrapper Header Close //-->

<!-- Email Wrapper Body Open // -->
<table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperBody">
    <tbody><tr>
        <td align="center" valign="top">

            <!-- Table Card Open // -->
            <table border="0" cellpadding="0" cellspacing="0" style="background-color: rgb(255, 255, 255); border-color: rgb(229, 229, 229); border-style: solid; border-width: 0px 1px 1px;" width="100%" class="tableCard">

                <tbody><tr>
                    <!-- Header Top Border // -->
                    <td height="3" style="background-color: rgb(0, 151, 68); font-size: 1px; line-height: 3px;" class="topBorder">&nbsp;</td>
                </tr>


                <tr>
                    <td align="center" valign="top" style="padding-bottom: 20px;" class="imgHero">
                        <!-- Hero Image // -->
                        <a href="#" target="_blank" style="text-decoration:none;" class="">
                            <img src="http://weekly.grapestheme.com/notify/img/hero-img/blue/heroFill/user-subscribe.png" width="600" alt="" border="0" style="width:100%; max-width:600px; height:auto; display:block;" class="">
                        </a>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" class="mainTitle">
                        <!-- Main Title Text // -->
                        <h2 class="text" style="color:#000000; font-family:\'Poppins\', Helvetica, Arial, sans-serif; font-size:28px; font-weight:500; font-style:normal; letter-spacing:normal; line-height:36px; text-transform:none; text-align:center; padding:0; margin:0">

New Email from'.$firstName.' '. $firstName.'</h2>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;" class="subTitle">
                        <!-- Sub Title Text // -->
                        <h4 class="text" style="color:#999999; font-family:\'Poppins\', Helvetica, Arial, sans-serif; font-size:16px; font-weight:500; font-style:normal; letter-spacing:normal; line-height:24px; text-transform:none; text-align:center; padding:0; margin:0">'.$senderMail.'</h4>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" style="padding-left:20px;padding-right:20px;" class="containtTable ui-sortable">

                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
                            <tbody><tr>
                                <td align="center" valign="top" style="padding-bottom: 20px;" class="description">
                                    <!-- Description Text// -->
                                    <p class="text" style="color:#666666; font-family:\'Open Sans\', Helvetica, Arial, sans-serif; font-size:14px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:22px; text-transform:none; text-align:center; padding:0; margin:0">'.$senderMessage.'</p>
                                </td>
                            </tr>
                        </tbody></table>

                        

                    </td>
                </tr>

                <tr>
                    <td height="20" style="font-size:1px;line-height:1px;">&nbsp;</td>
                </tr>

                <tr><td height="20" style="font-size:1px;line-height:1px;">&nbsp;</td>
</tr>
            </tbody></table>
            <!-- Table Card Close// -->

            <!-- Space -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
                <tbody><tr>
                    <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
                </tr>
            </tbody></table>

        </td>
    </tr>
</tbody></table>
<!-- Email Wrapper Body Close // -->

<!-- Email Wrapper Footer Open // -->
<table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperFooter">
    <tbody><tr>
        <td align="center" valign="top">
            <!-- Content Table Open// -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="footer">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;" class="socialLinks">
                        <!-- Social Links (Facebook)// -->
                        <a href="#facebook-link" target="_blank" style="display: inline-block;" class="facebook">
                            <img src="http://weekly.grapestheme.com/notify/img/social/light/facebook.png" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                        </a>
                        <!-- Social Links (Twitter)// -->
                        
                        <!-- Social Links (Pintrest)// -->
                        <a href="#pintrest-link" target="_blank" style="display: inline-block;" class="pintrest">
                            <img src="http://weekly.grapestheme.com/notify/img/social/light/pintrest.png" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                        </a>
                        <!-- Social Links (Instagram)// -->
                        <a href="#instagram-link" target="_blank" style="display: inline-block;" class="instagram">
                            <img src="http://weekly.grapestheme.com/notify/img/social/light/instagram.png" alt="" width="40" border="0" style="height:auto; width:100%; max-width:40px; margin-left:2px; margin-right:2px">
                        </a>
                        <!-- Social Links (Linkdin)// -->
                        
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" style="padding: 10px 10px 5px;" class="brandInfo">
                        <!-- Brand Information // -->
                        <p class="text" style="color:#777777; font-family:\'Open Sans\', Helvetica, Arial, sans-serif; font-size:12px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:20px; text-transform:none; text-align:center; padding:0; margin:0;">©&nbsp;Notify Inc. | 800 Broadway, Suite 1500 | New York, NY 000123, USA.
                        </p>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" style="padding: 0px 10px 20px;" class="footerLinks">
                        <!-- Use Full Links (Privacy Policy)// -->
                        <p class="text" style="color:#777777; font-family:\'Open Sans\', Helvetica, Arial, sans-serif; font-size:12px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:20px; text-transform:none; text-align:center; padding:0; margin:0;">
                            <a href="#" style="color:#777777;text-decoration:underline;" target="_blank">View Web Version </a>&nbsp;|&nbsp;<a href="#" style="color:#777777;text-decoration:underline;" target="_blank"> Email Preferences </a>&nbsp;|&nbsp;<a href="#" style="color:#777777;text-decoration:underline;" target="_blank"> Privacy Policy </a>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" style="padding: 0px 10px 10px;" class="footerEmailInfo">
                        <!-- Information of NewsLetter (Subscribe Info)// -->
                        <p class="text" style="color:#777777; font-family:\'Open Sans\', Helvetica, Arial, sans-serif; font-size:12px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:20px; text-transform:none; text-align:center; padding:0; margin:0;">
                        If you have any quetions please contact us <a href="#" style="color:#777777;text-decoration:underline;" target="_blank">support@mail.com.</a><br> <a href="#" style="color:#777777;text-decoration:underline;" target="_blank">Unsubscribe</a> from our mailing lists
                        </p>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;" class="appLinks">
                        <!-- App Links (Anroid)// -->
                        
                        <!-- App Links (IOs)// -->
                        
                    </td>
                </tr>

                <!-- Space -->
                <tr>
                    <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
                </tr>
            </tbody></table>
            <!-- Content Table Close// -->
        </td>
    </tr>

    <!-- Space -->
    <tr>
        <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
    </tr>
</tbody></table>
<!-- Email Wrapper Footer Close // -->

<!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody></table>
</div>
</body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$senderMail.'>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
