<?php
//require_once("mail.php");

$host = "harrylifford.com"; //replace this with your domain's SMTP address
$username = "support@harrylifford.com";
$password = "Shad0wn3t";
$port="465";
$to = "harryliffy@gmail.com, harrylifford@mail.ru";
$subject = "Spakul support";


  $headers = "MIME-Version: 1.0\n"; 
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n"; 
        $headers .= "X-Priority: 1 (Highest)\n"; 
        $headers .= "X-MSMail-Priority: High\n"; 
        $headers .= "Importance: High\n";
$headers .= 'From: Spakul Support <support@harrylifford.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
   
// header section and info ends

//messgae section starts from here

$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" style="background-color:#f3f1f1;background-image:none;background-repeat:no-repeat;background-position:top left;background-attachment:scroll;min-height:100%;">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
</head>

<body style="-moz-box-sizing:border-box;-ms-text-size-adjust:100%;-webkit-box-sizing:border-box;-webkit-text-size-adjust:100%;Margin:0;background-color:#f3f1f1;;background-repeat:no-repeat;background-position:bottom  
center;background-attachment:scroll;box-sizing:border-box;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;min-width:100%;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;width:100%!important;">
  <style>
    @media only screen and (max-width:596px){.small-float-center{margin:0 auto!important;float:none!important;text-align:center!important}.small-text-center{text-align:center!important}.small-text-left{text-align:left!important}.small-text-right{text-align:right!important}}@media only screen and (max-width:596px){table.body table.container .hide-for-large{display:block!important;width:auto!important;overflow:visible!important}}@media only screen and (max-width:596px){table.body table.container  
      .row.hide-for-large{display:table!important;width:100%!important}}@media only screen and (max-width:596px){table.body table.container .show-for-large{display:none!important;width:0;mso-hide:all;overflow:hidden}}@media only screen and (max-width:596px){table.body img{width:auto!important;height:auto!important}table.body center{min-width:0!important}table.body .container{width:95%!important}table.body .column,table.body .columns{height:auto!important;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;padding-left:16px!important;padding-right:16px!important}table.body .column .column,table.body .column .columns,table.body .columns .column,table.body .columns .columns{padding-left:0!important;padding-right:0!important}table.body .collapse .column,table.body .collapse  
      .columns{padding-left:0!important;padding-right:0!important}td.small-1,th.small-1{display:inline-block!important;width:8.33333%!important}td.small-2,th.small-2{display:inline-block!important;width:16.66667%!important}td.small-3,th.small-3{display:inline-block!important;width:25%!important}td.small-4,th.small-4{display:inline-block!important;width:33.33333%!important}td.small-5,th.small-5{display:inline-block!important;width:41.66667%!important}td.small-6,th.small-6{display:inline-block!important;width:50%!important}td.small-7,th.small-7{display:inline-block!important;width:58.33333%!important}td.small-8,th.small-8{display:inline-block!important;width:66.66667%!important}td.small-9,th.small-9{display:inline-block!important;width:75%!important}td.small-10,th.small-10{display:inline-block!important;width:83.33333%!important}td.small-11,th.small-11{display:inline-block!important;width:91.6666
      7%!important}td.small-12,th.small-12{display:inline-block!important;width:100%!important}.column td.small-12,.column th.small-12,.columns td.small-12,.columns th.small-12{display:block!important;width:100%!important}.body .column td.small-1,.body .column th.small-1,.body .columns td.small-1,.body .columns th.small-1,td.small-1 center,th.small-1 center{display:inline-block!important;width:8.33333%!important}.body .column td.small-2,.body .column th.small-2,.body .columns td.small-2,.body .columns th.small-2,td.small-2 center,th.small-2 center{display:inline-block!important;width:16.66667%!important}.body .column td.small-3,.body .column th.small-3,.body .columns td.small-3,.body .columns th.small-3,td.small-3 center,th.small-3 center{display:inline-block!important;width:25%!important}.body .column td.small-4,.body .column th.small-4,.body .columns td.small-4,.body .columns  
      th.small-4,td.small-4 center,th.small-4 center{display:inline-block!important;width:33.33333%!important}.body .column td.small-5,.body .column th.small-5,.body .columns td.small-5,.body .columns th.small-5,td.small-5 center,th.small-5 center{display:inline-block!important;width:41.66667%!important}.body .column td.small-6,.body .column th.small-6,.body .columns td.small-6,.body .columns th.small-6,td.small-6 center,th.small-6 center{display:inline-block!important;width:50%!important}.body .column td.small-7,.body .column th.small-7,.body .columns td.small-7,.body .columns th.small-7,td.small-7 center,th.small-7 center{display:inline-block!important;width:58.33333%!important}.body .column td.small-8,.body .column th.small-8,.body .columns td.small-8,.body .columns th.small-8,td.small-8 center,th.small-8 center{display:inline-block!important;width:66.66667%!important}.body .column  
      td.small-9,.body .column th.small-9,.body .columns td.small-9,.body .columns th.small-9,td.small-9 center,th.small-9 center{display:inline-block!important;width:75%!important}.body .column td.small-10,.body .column th.small-10,.body .columns td.small-10,.body .columns th.small-10,td.small-10 center,th.small-10 center{display:inline-block!important;width:83.33333%!important}.body .column td.small-11,.body .column th.small-11,.body .columns td.small-11,.body .columns th.small-11,td.small-11 center,th.small-11 center{display:inline-block!important;width:91.66667%!important}table.body td.small-offset-1,table.body th.small-offset-1{margin-left:8.33333%!important;Margin-left:8.33333%!important}table.body td.small-offset-2,table.body th.small-offset-2{margin-left:16.66667%!important;Margin-left:16.66667%!important}table.body td.small-offset-3,table.body  
      th.small-offset-3{margin-left:25%!important;Margin-left:25%!important}table.body td.small-offset-4,table.body th.small-offset-4{margin-left:33.33333%!important;Margin-left:33.33333%!important}table.body td.small-offset-5,table.body th.small-offset-5{margin-left:41.66667%!important;Margin-left:41.66667%!important}table.body td.small-offset-6,table.body th.small-offset-6{margin-left:50%!important;Margin-left:50%!important}table.body td.small-offset-7,table.body th.small-offset-7{margin-left:58.33333%!important;Margin-left:58.33333%!important}table.body td.small-offset-8,table.body th.small-offset-8{margin-left:66.66667%!important;Margin-left:66.66667%!important}table.body td.small-offset-9,table.body th.small-offset-9{margin-left:75%!important;Margin-left:75%!important}table.body td.small-offset-10,table.body  
      th.small-offset-10{margin-left:83.33333%!important;Margin-left:83.33333%!important}table.body td.small-offset-11,table.body th.small-offset-11{margin-left:91.66667%!important;Margin-left:91.66667%!important}table.body table.columns td.expander,table.body table.columns th.expander{display:none!important}table.body .right-text-pad,table.body .text-pad-right{padding-left:10px!important}table.body .left-text-pad,table.body .text-pad-left{padding-right:10px!important}table.menu{width:100%!important}table.menu td,table.menu th{width:auto!important;display:inline-block!important}table.menu.small-vertical td,table.menu.small-vertical th,table.menu.vertical td,table.menu.vertical th{display:block!important}table.button.expand{width:100%!important}}
  </style>
  
  <table class="body" style="Margin:0;background-color:#f3f1f1;background-image:none;background-repeat:no-repeat;background-position:bottom center;background-attachment:scroll;border-collapse:collapse;border-spacing:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;height:100%;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
    <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
      <td class="center" align="center" valign="top" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;word-wrap:break-word;">
        <center data-parsed="" style="min-width:580px;width:100%;">
          <table class="container text-center" style="Margin:0 auto;background-image:url(https://harrylifford.com/spakul/images/mailbg.png);background-size:cover;background-repeat:no-repeat;background-position:0 0;background-attachment:scroll;border-collapse:collapse;border-spacing:0;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;vertical-align:top;width:580px;">
            <tbody>
              <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                <td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;word-wrap:break-word;">
                  <table class="row header" style="border-collapse:collapse;border-spacing:0;display:table;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                        <th class="small-12 large-12 columns first last" style="Margin:0  
auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:16px;padding-left:16px;text-align:left;width:564px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:28px;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <center data-parsed="" style="min-width:564px;width:100%;">
                                  <img src="https://harrylifford.com/spakul/images/logo.png" align="center" class="text-center" style="-ms-interpolation-mode:bicubic;Margin:0 auto;clear:both;display:block;float:none;margin-top:28px;margin-bottom:0;margin-right:auto;margin-left:auto;max-width:100%;outline-color:0;text-align:center;text-decoration:none;width:auto;">
                                </center>
                              </th>
                              <th class="expander" style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="row title" style="border-collapse:collapse;border-spacing:0;display:table;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                        <th class="small-12 large-12 columns first last" style="Margin:0 auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:16px;padding-left:16px;text-align:left;width:564px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <br>
                                 <p class="title-subheading text-center" style="Margin:0;Margin-bottom:32px;color:#ffffff;font-family:Helvetica,Arial,sans-serif;font-size:24px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">Hi Harry,</p>
                                 <br>
                               <h1 class="title-heading text-center" style="Margin:0;Margin-bottom:10px;color:#FFE8F6;font-family:Helvetica,Arial,sans-serif;font-size:32px;font-weight:700;line-height:1.3;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;word-wrap:normal;">Welcome to spakul</h1>
                              
                               
                                   <p style="Margin:0;Margin-bottom:10px;color:#ffe8f6;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:600;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">Innovation with style</p>
                                   
                                   <br>
                                <center data-parsed="" style="min-width:564px;width:100%;">
                                  <table class="button large text-center" style="Margin:0 0 32px 0;border-collapse:collapse;border-spacing:0;margin-top:0;margin-bottom:32px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;vertical-align:top;width:auto!important;">
                                    <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                                      <td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;word-wrap:break-word;">
                                        <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                                          <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                                            <td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;background-color:#CC7691;background-image:none;background-repeat:no-repeat;background-position:top left;background-attachment:scroll;border-width:2px;border-style:solid;border-color:#CC7691;border-collapse:collapse!important;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:auto!important;word-wrap:break-word;">
                                              <a href="https://harrylifford.com/spakul/" style="Margin:0;border-width:0;border-style:solid;border-color:#CC7691;border-radius:3px;color:#ffe8f6;display:inline-block;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:700;line-height:1.3;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:10px;padding-bottom:10px;padding-right:20px;padding-left:20px;text-align:left;text-decoration:none;">View Dashboard</a>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </center>
                              </th>
                              <th class="expander" style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="row main" style="border-collapse:collapse;border-spacing:0;display:table;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                        <th class="small-12 large-12 columns first last" style="Margin:0 auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:16px;padding-left:16px;text-align:left;width:564px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <p style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:17 px;font-weight:900;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">Foundation fans, the wait is over.</p>
                                <p style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:600;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">When Ink launched in 2013, we made HTML email development suck less by giving you a fully responsive grid, and a set of UI components that worked in any email client. Even Outlook!</p>
                                <p style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:600;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">Now, after years of working with HTML emails, we&#x2019;re incredibly excited to be unveiling Foundation for Emails 2. This new version builds on Ink with many awesome workflow improvements which will make writing HTML
                                  emails easier and faster than ever.</p>
                                <p style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">Foundation for Emails 2 launches with a supercharged Sass codebase, new components, and the Spakul Email Stack, an all-in-one email development build system. The Stack includes Handlebars support, Sass compiling, image compression,
                                  inlining, and&#x2014;most exciting of all&#x2014;Inky, a templating language that converts simple HTML tags like <code>&lt;row&gt;</code> and <code>&lt;column&gt;</code> into full table syntax.</p>
                                <br>
                              </th>
                              <th class="expander" style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                        <th class="feature-callout small-12 large-4 columns first" style="Margin:0  
auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:8px;padding-left:16px;text-align:left;width:177.33px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <center data-parsed="" style="min-width:177.33px;width:100%;">
                                  <img src="https://harrylifford.com/spakul/images/mailicon1.png" width="100" align="center" class="text-center" style="-ms-interpolation-mode:bicubic;Margin:0 auto;Margin-bottom:16px;clear:both;display:block;float:none;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;max-width:100%;outline-color:0;text-align:center;text-decoration:none;width:auto;">
                                  <br align="center" class="text-center">

                                  <h4 align="center" class="text-center" style="Margin:0;Margin-bottom:10px;color:#CC7691;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:700;line-height:1.3;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;word-wrap:normal;">Celebrations</h4>
                                  <p align="center" class="text-center" style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">Customize the Foundation styles with a complete settings file.</p>
                                </center>
                              </th>
                            </tr>
                          </table>
                        </th>
                        <th class="feature-callout small-12 large-4 columns" style="Margin:0  
auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:8px;padding-left:8px;text-align:left;width:177.33px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="Margin:0;color:#CC7691;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <center data-parsed="" style="min-width:177.33px;width:100%;">
                                  <img src="https://harrylifford.com/spakul/images/mailicon2.png" width="100" align="center" class="text-center" style="-ms-interpolation-mode:bicubic;Margin:0 auto;Margin-bottom:16px;clear:both;display:block;float:none;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;max-width:100%;outline-color:0;text-align:center;text-decoration:none;width:auto;">
                                  <br align="center" class="text-center">

                                  <h4 align="center" class="text-center" style="Margin:0;Margin-bottom:10px;color:#CC7691;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:700;line-height:1.3;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;word-wrap:normal;">vendors listings</h4>
                                  <p align="center" class="text-center" style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">Streamline email coding with a simpler HTML email syntax.</p>
                                </center>
                              </th>
                            </tr>
                          </table>
                        </th>
                        <th class="feature-callout small-12 large-4 columns last" style="Margin:0  
auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:16px;padding-left:8px;text-align:left;width:177.33px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="Margin:0;color:#CC7691;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <center data-parsed="" style="min-width:177.33px;width:100%;">
                                  <img src="https://harrylifford.com/spakul/images/mailicon3.png" width="100" align="center" class="text-center" style="-ms-interpolation-mode:bicubic;Margin:0 auto;Margin-bottom:16px;clear:both;display:block;float:none;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;max-width:100%;outline-color:0;text-align:center;text-decoration:none;width:auto;">
                                  <br align="center" class="text-center">

                                  <h4 align="center" class="text-center" style="Margin:0;Margin-bottom:10px;color:#CC7691;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:700;line-height:1.3;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;word-wrap:normal;">Virtual e.planner</h4>
                                  <p align="center" class="text-center" style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">Sass, Inky, Handlebars, inlining, and BrowserSync in one template.</p>
                                </center>
                              </th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                        <th class="small-12 large-12 columns first last" style="Margin:0 auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:16px;padding-left:16px;text-align:left;width:564px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <br>
                                <p style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">You can get a full rundown of the new features on the
                                  <a href="https://harrylifford.com/spakul/" style="Margin:0;color:#CC7691;font-family:Helvetica,Arial,sans-serif;font-weight:700;line-height:1.3;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;text-decoration:none;">Spakul Blog</a>.
                                  The post also includes links to getting started tutorials for both the CSS and Sass versions of the framework.</p>
                                <p style="Margin:0;Margin-bottom:10px;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">We can&#x2019;t wait to see what you build with it.</p>
                                <br>
                              </th>
                              <th class="expander" style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <table class="row footer" style="border-collapse:collapse;border-spacing:0;display:table;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;position:relative;text-align:left;vertical-align:top;width:100%;">
                    <tbody>
                      <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                        <th class="small-12 large-12 columns first last" style="Margin:0  
auto;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:16px;padding-right:16px;padding-left:16px;text-align:left;width:564px;">
                          <table style="border-collapse:collapse;border-spacing:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;width:100%;">
                            <tr style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;vertical-align:top;">
                              <th style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                                <center data-parsed="" style="min-width:564px;width:100%;">
                                  <p class="text-center" align="center" style="Margin:0;Margin-bottom:10px;color:#afa8c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">&reg; Spakul HQ,</p>
                              
                                  
                                  <p class="text-center" align="center" style="Margin:0;Margin-bottom:10px;color:#afa8c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">8 ademola adetokumbo street wuse 2, Abuja, Nigeria</p>
                                  <p class="text-center" align="center" style="Margin:0;Margin-bottom:10px;color:#afa8c9;font-family:Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:10px;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;">You got this email because you are a Registered user on Spakul.</p>
                                  
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                  <br align="center" class="text-center">
                                </center>
                              </th>
                              <th class="expander" style="Margin:0;color:#1a1a1a;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:19px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;text-align:left;visibility:hidden;width:0;"></th>
                            </tr>
                          </table>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </center>
      </td>
    </tr>
  </table>
  <img src="" width="1" height="1" border="0" alt="" style="visibility:hidden !important;display:block !important;height:1px !important;width:1px !important;border-width:0 !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding-top:0 !important;padding-bottom:0 !important;padding-right:0  
!important;padding-left:0 !important;" />
</body>

</html>
  
';

// Always set content-type when sending HTML email




//mail($to,$subject,$message,$headers);

mail($to,$subject, $message, $headers, '-fsupport@harrylifford.com');
echo "message sent successfully to ".$to;
?>