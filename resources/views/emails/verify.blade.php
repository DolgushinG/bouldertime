


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Go Welcome Email</title>
    <!-- Designed by https://github.com/kaytcat -->
    <!-- Header image designed by Freepik.com -->

    <style type="text/css">
        /* Take care of image borders and formatting */

        img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
        a img { border: none; }
        table { border-collapse: collapse !important; }
        #outlook a { padding:0; }
        .ReadMsgBody { width: 100%; }
        .ExternalClass {width:100%;}
        .backgroundTable {margin:0 auto; padding:0; width:100%;!important;}
        table td {border-collapse: collapse;}
        .ExternalClass * {line-height: 115%;}


        /* General styling */

        td {
            font-family: Arial, sans-serif;
            color: #0e0806;
            font-size: 16px;
            text-align: left;
        }

        body {
            -webkit-font-smoothing:antialiased;
            -webkit-text-size-adjust:none;
            width: 100%;
            height: 100%;
            color: #5e5e5e;
            font-weight: 400;
            font-size: 16px;
        }


        h1 {
            margin: 10px 0;
        }

        a {
            color: #ff5732;
            text-decoration: none;
        }


        .body-padding {
            padding: 0 75px;
        }


        .force-full-width {
            width: 100% !important;
        }

        .icons {
            text-align: right;
            padding-right: 30px;
        }

        .logo {
            text-align: left;
            padding-left: 30px;
        }

        .computer-image {
            padding-left: 30px;
        }

        .header-text {
            text-align: left;
            padding-right: 30px;
            padding-left: 20px;
        }

        .header {
            color: #232925;
            font-size: 24px;
        }



    </style>

    <style type="text/css" media="screen">
        @media screen {
            @import url(http://fonts.googleapis.com/css?family=PT+Sans:400,700);
            /* Thanks Outlook 2013! */
            * {
                font-family: 'PT Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
            }
        }
    </style>

    <style type="text/css" media="only screen and (max-width: 599px)">
        /* Mobile styles */
        @media only screen and (max-width: 599px) {

            table[class*="w320"] {
                width: 320px !important;
            }

            td[class*="icons"] {
                display: block !important;
                text-align: center !important;
                padding: 0 !important;
            }

            td[class*="logo"] {
                display: block !important;
                text-align: center !important;
                padding: 0 !important;
            }

            td[class*="computer-image"] {
                display: block !important;
                width: 230px !important;
                padding: 0 45px !important;
                border-bottom: 1px solid #e3e3e3 !important;
            }


            td[class*="header-text"] {
                display: block !important;
                text-align: center !important;
                padding: 0 25px!important;
                padding-bottom: 25px !important;
            }

            *[class*="mobile-hide"] {
                display: none !important;
                width: 0 !important;
                height: 0 !important;
                line-height: 0 !important;
                font-size: 0 !important;
            }


        }
    </style>
</head>
@component('mail::message')
<body  offset="0" class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
<table width="100%" cellspacing="0" cellpadding="0" align="center">
    <tbody>
    <tr>
        <td style="background-color: #ffffff;" align="center" valign="top" width="100%"><center>
                <table class="w320" width="600" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td align="center" valign="top">
                            <table class="force-full-width" style="height: 52px;" cellspacing="0" cellpadding="0" bgcolor="#232925">
                                <tbody>
                                <tr style="height: 52px;">
                                    <td class="logo" style="background-color: #232925; height: 52px; width: 302px;"><font color="#E74C3C"><font color="#ffffff">BOULDER</font><font color="#D35400">TIME</font></font></td>
                                    <td class="icons" style="height: 52px; width: 238px;"><br />&nbsp;<a href="#"><img src="https://www.filepicker.io/api/file/dresyXUMRjalUp3zvwXC" alt="instagram" /></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="force-full-width" style="height: 192px;" cellspacing="0" cellpadding="0" bgcolor="#232925">
                                <tbody>
                                <tr style="height: 192px;">
                                    <td class="computer-image" style="height: 192px; width: 0px;"><br /><br class="mobile-hide" /><font color="#E74C3C"><br /></font></td>
                                    <td class="header-text" style="color: #ffffff;  width: 520px;"><br /><br /><span style="font-size: 24px;">Спасибо за регистрацию!</span><br /><br />Ваш новый аккаунт почти готов для использования. Пожалуйста подтвердите ваш Email нажав на кнопку ниже.<br /><br />
                                        <a style="background-color: #ff5732; color: #ffffff; display: inline-block; font-family: Helvetcia, sans-serif; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 150px; -webkit-text-size-adjust: none;">
                                            @component('mail::button', ['url' => $url])
                                                Подтвердить почту
                                            @endcomponent</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="force-full-width" style="height: 204px;" cellspacing="0" cellpadding="30" bgcolor="#0e0806">
                                <tbody>
                                <tr style="height: 204px;">
                                    <td style="height: 204px; width: 540px;"><br />
                                        <table class="force-full-width" style="width: 540px; height: 138px;" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr style="height: 138px;">
                                                <td style="width: 540px; height: 138px;">
                                                    <p><br /><font color="#ffffff"><span style="background-color: #000000;">Наш контакт для связи</span></font><br /><font style="background-color: #000000;" color="#ffffff">Email: <a href="#">blog@bouldertime.com</a></font><br />c</p>
                                                    <p><font color="#ffffff"><span style="background-color: #000000;">С уважением </span></font></p>
                                                    <p><font color="#ffffff"><span style="background-color: #000000;">Команда boudertime</span></font></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="force-full-width" cellspacing="0" cellpadding="20" bgcolor="#2b934f">
                                <tbody>
                                <tr>
                                    <td style="background-color: #0e0806; color: #ffffff; font-size: 14px; text-align: center;">&copy; 2021 All Rights Reserved</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center></td>
    </tr>
    </tbody>
</table>
</body>
@endcomponent
</html>


