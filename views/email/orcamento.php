<?php 
function orcamento($linhas_de_servico){
  
  return $orcamento = '
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office"
  xmlns:v="urn:schemas-microsoft-com:vml">

<head>
  <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="width=device-width" name="viewport" />
  <!--[if !mso]><!-->
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <!--<![endif]-->
  <title></title>
  <!--[if !mso]><!-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
  <!--<![endif]-->
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }

  table,
  td,
  tr {
    vertical-align: top;
    border-collapse: collapse;
  }

  * {
    line-height: inherit;
  }

  a[x-apple-data-detectors=true] {
    color: inherit !important;
    text-decoration: none !important;
  }
  </style>
  <style id="media-query" type="text/css">
  @media (max-width: 920px) {

    .block-grid,
    .col {
      min-width: 320px !important;
      max-width: 100% !important;
      display: block !important;
    }

    .block-grid {
      width: 100% !important;
    }

    .col {
      width: 100% !important;
    }

    .col>div {
      margin: 0 auto;
    }

    img.fullwidth,
    img.fullwidthOnMobile {
      max-width: 100% !important;
    }

    .no-stack .col {
      min-width: 0 !important;
      display: table-cell !important;
    }

    .no-stack.two-up .col {
      width: 50% !important;
    }

    .no-stack .col.num4 {
      width: 33% !important;
    }

    .no-stack .col.num8 {
      width: 66% !important;
    }

    .no-stack .col.num4 {
      width: 33% !important;
    }

    .no-stack .col.num3 {
      width: 25% !important;
    }

    .no-stack .col.num6 {
      width: 50% !important;
    }

    .no-stack .col.num9 {
      width: 75% !important;
    }

    .video-block {
      max-width: none !important;
    }

    .mobile_hide {
      min-height: 0px;
      max-height: 0px;
      max-width: 0px;
      display: none;
      overflow: hidden;
      font-size: 0px;
    }

    .desktop_hide {
      display: block !important;
      max-height: none !important;
    }
  }
  </style>
</head>

<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #F5F5F5;">
  <!--[if IE]><div class="ie-browser"><![endif]-->
  <table bgcolor="#F5F5F5" cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
    style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #F5F5F5; width: 100%;"
    valign="top" width="100%">
    <tbody>
      <tr style="vertical-align: top;" valign="top">
        <td style="word-break: break-word; vertical-align: top;" valign="top">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#F5F5F5"><![endif]-->
          <div style="background-color:transparent;">
            <div class="block-grid"
              style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:transparent;width:900px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
                <div class="col num12"
                  style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
                  <div style="width:100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div
                      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                      <!--<![endif]-->
                      <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
                        style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                        valign="top" width="100%">
                        <tbody>
                          <tr style="vertical-align: top;" valign="top">
                            <td class="divider_inner"
                              style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                              valign="top">
                              <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content"
                                height="10" role="presentation"
                                style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 10px; width: 100%;"
                                valign="top" width="100%">
                                <tbody>
                                  <tr style="vertical-align: top;" valign="top">
                                    <td height="10"
                                      style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                                      valign="top"><span></span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!--[if (!mso)&(!IE)]><!-->
                    </div>
                    <!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
              </div>
            </div>
          </div>
          <!--
						Logo
					-->
          <div style="background-color:transparent;">
            <div class="block-grid"
              style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:#FFFFFF;width:900px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
                <div class="col num12"
                  style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
                  <div style="width:100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div
                      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                      <!--<![endif]-->
                      <div align="left" class="img-container left fullwidthOnMobile fixedwidth"
                        style="padding-right: 0px;padding-left: 30px;">
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 30px;" align="left"><![endif]-->
                        <div style="font-size:1px;line-height:20px"> </div><img alt="Image" border="0"
                          class="left fullwidthOnMobile fixedwidth"
                          src="'. BASE_URL .'views/email/images/'.'logo_only2.png"
style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 405px;
display: block;"
title="Image" width="405" />
<div style="font-size:1px;line-height:20px"> </div>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--
						Texto Banner
					-->
<div style="background-color:transparent;">
  <div class="block-grid"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #02374c;">

    <div
      style="border-collapse: collapse;display: table;width: 100%;background-color:#02374c;background-image:url('.BASE_URL.'views/email/images/banner.jpg);background-position:top
left;background-repeat:no-repeat">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#02374c"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:#02374c;width:900px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 55px; padding-left: 55px; padding-top:55px; padding-bottom:55px;"><![endif]-->
<div class="col num12"
  style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
  <div style="width:100% !important;">
    <!--[if (!mso)&(!IE)]><!-->
    <div
      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:55px; padding-bottom:55px; padding-right: 55px; padding-left: 55px;">
      <!--<![endif]-->
      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 50px; padding-bottom: 5px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
      <div
        style="color:#052d3d;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:50px;padding-right:0px;padding-bottom:5px;padding-left:0px;">
        <div
          style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #052d3d;">
          <p style="font-size: 14px; line-height: 40px; text-align: justify; margin: 0;"><span
              style="font-size: 34px; color: #8a0404;"><strong><span style="line-height: 40px; font-size: 34px;"><span
                    style="line-height: 40px; font-size: 34px;">ORÇAMENTO DE
                    PULVERIZAÇÃO</span></span></strong></span></p>
        </div>
      </div>
      <!--[if mso]></td></tr></table><![endif]-->
      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
      <div
        style="color:#052D3D;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px;">
        <div
          style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #052D3D;">
          <p style="font-size: 14px; line-height: 26px; text-align: left; margin: 0;"><span
              style="font-size: 22px;"><strong><span style="line-height: 26px; font-size: 22px;">Verifique os
                  Serviços abaixo e <span style="color: #339966; font-size: 22px; line-height: 26px;">APROVE</span> o
                  orçamento!<br /></span></strong></span></p>
        </div>
      </div>
      <!--[if mso]></td></tr></table><![endif]-->
      <!--[if (!mso)&(!IE)]><!-->
    </div>
    <!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--
						Serviços
					-->
<div style="background-color:transparent;">
  <div class="block-grid"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
      <!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:#FFFFFF;width:900px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:5px;"><![endif]-->
      <div class="col num12"
        style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
            <div
              style="color:#052d3d;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #052d3d;">
                <p style="line-height: 14px; text-align: center; font-size: 12px; margin: 0;"><strong><span
                      style="font-size: 20px; line-height: 24px;">SERVIÇOS</span></strong></p>
              </div>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>
<!--
						Header Serviços
					-->
<div style="background-color:transparent;">
  <div class="block-grid four-up no-stack"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #F8F8F8;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#F8F8F8;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#F8F8F8"><![endif]-->
      <!--[if (mso)|(IE)]><td align="center" width="225" style="background-color:#F8F8F8;width:225px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid #E8E8E8;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:5px;"><![endif]-->
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 225px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid #E8E8E8; padding-top:15px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="font-size: 14px; line-height: 16px; text-align: center; margin: 0;">
                  <strong>ITEM<br /></strong></p>
              </div>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td><td align="center" width="225" style="background-color:#F8F8F8;width:225px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 1px dotted #E8E8E8;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:5px;"><![endif]-->
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 224px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:15px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
              style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
              valign="top" width="100%">
              <tbody>
                <tr style="vertical-align: top;" valign="top">
                  <td class="divider_inner"
                    style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                    valign="top">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="5"
                      role="presentation"
                      style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 5px; width: 100%;"
                      valign="top" width="100%">
                      <tbody>
                        <tr style="vertical-align: top;" valign="top">
                          <td height="5"
                            style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                            valign="top"><span></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td><td align="center" width="225" style="background-color:#F8F8F8;width:225px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 1px dotted #E8E8E8;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 15px; padding-left: 15px; padding-top:15px; padding-bottom:5px;"><![endif]-->
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 224px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:15px; padding-bottom:5px; padding-right: 15px; padding-left: 15px;">
            <!--<![endif]-->
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; line-height: 14px; color: #555555;">
                <p style="font-size: 12px; line-height: 16px; margin: 0;"><span
                    style="font-size: 14px;"><strong>QUANTIDADE</strong></span></p>
              </div>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td><td align="center" width="225" style="background-color:#F8F8F8;width:225px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:5px;"><![endif]-->
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 225px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="font-size: 14px; line-height: 16px; text-align: center; margin: 0;">
                  <strong>VALOR</strong></p>
              </div>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>
<!--Linhas de Serviço-->
'.$linhas_de_servico.'
<!--
						Botões de Aprovaçao
					-->
<div style="background-color:transparent;">
  <div class="block-grid two-up"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
      <!--[if (mso)|(IE)]><td align="center" width="450" style="background-color:#FFFFFF;width:450px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
      <div class="col num6"
        style="min-width: 320px; max-width: 450px; display: table-cell; vertical-align: top; width: 450px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <div align="center" class="button-container"
              style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:34.5pt; width:198pt; v-text-anchor:middle;" arcsize="33%" stroke="false" fillcolor="#009D08"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Tahoma, Verdana, sans-serif; font-size:18px"><![endif]-->
              <div
                style="text-decoration:none;display:block;color:#ffffff;background-color:#009D08;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;width:60%; width:calc(60% - 2px);;border-top:1px solid #009D08;border-right:1px solid #009D08;border-bottom:1px solid #009D08;border-left:1px solid #009D08;padding-top:5px;padding-bottom:5px;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;">
                <span style="padding-left:0px;padding-right:0px;font-size:18px;display:inline-block;">
                  <span style="font-size: 16px; line-height: 32px;"><strong><span
                        style="font-size: 18px; line-height: 36px;">APROVAR</span></strong></span>
                </span></div>
              <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
            </div>
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td><td align="center" width="450" style="background-color:#FFFFFF;width:450px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
      <div class="col num6"
        style="min-width: 320px; max-width: 450px; display: table-cell; vertical-align: top; width: 450px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <div align="center" class="button-container"
              style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:34.5pt; width:198pt; v-text-anchor:middle;" arcsize="33%" stroke="false" fillcolor="#E03A3A"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Tahoma, Verdana, sans-serif; font-size:18px"><![endif]-->
              <div
                style="text-decoration:none;display:block;color:#ffffff;background-color:#E03A3A;border-radius:15px;-webkit-border-radius:15px;-moz-border-radius:15px;width:60%; width:calc(60% - 2px);;border-top:1px solid #E03A3A;border-right:1px solid #E03A3A;border-bottom:1px solid #E03A3A;border-left:1px solid #E03A3A;padding-top:5px;padding-bottom:5px;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;">
                <span style="padding-left:0px;padding-right:0px;font-size:18px;display:inline-block;">
                  <span style="font-size: 16px; line-height: 32px;"><strong><span
                        style="font-size: 18px; line-height: 36px;">REPROVAR</span></strong></span>
                </span></div>
              <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
            </div>
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>
<!--
						Linha em Branco
					-->
<div style="background-color:transparent;">
  <div class="block-grid"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
      <!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:#FFFFFF;width:900px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:20px;"><![endif]-->
      <div class="col num12"
        style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
              style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
              valign="top" width="100%">
              <tbody>
                <tr style="vertical-align: top;" valign="top">
                  <td class="divider_inner"
                    style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                    valign="top">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0"
                      role="presentation"
                      style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;"
                      valign="top" width="100%">
                      <tbody>
                        <tr style="vertical-align: top;" valign="top">
                          <td height="0"
                            style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                            valign="top"><span></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>
<!--
						Dúvidas
					-->
<div style="background-color:transparent;">
  <div class="block-grid"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #F0F0F0;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#F0F0F0;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#F0F0F0"><![endif]-->
      <!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:#F0F0F0;width:900px; border-top: none; border-left: none; border-bottom: none; border-right: none;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr bgcolor="#FFFFFF"><td colspan="3" style="font-size:7px;line-height:18px">&nbsp;</td></tr><tr><td style="padding-top:15px;padding-bottom:15px" width="25" bgcolor="#FFFFFF"><table role="presentation" width="25" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr></table></td><td style="padding-right: 35px; padding-left: 35px; padding-top:15px; padding-bottom:5px;"><![endif]-->
      <div class="col num12"
        style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 850px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:18px solid #FFFFFF; border-left:25px solid #FFFFFF; border-bottom:18px solid #FFFFFF; border-right:25px solid #FFFFFF; padding-top:15px; padding-bottom:5px; padding-right: 35px; padding-left: 35px;">
            <!--<![endif]-->
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 15px; padding-left: 15px; padding-top: 15px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
            <div
              style="color:#052d3d;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:15px;padding-right:15px;padding-bottom:10px;padding-left:15px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #052d3d;">
                <p style="line-height: 40px; font-size: 12px; text-align: center; margin: 0;"><span
                    style="font-size: 34px;"><span
                      style="color: #fc7318; font-size: 34px; line-height: 40px;"><strong><span
                          style="line-height: 40px; font-size: 34px;">DÚVIDAS? <br /></span></strong></span><span
                      style="line-height: 40px; font-size: 34px;">Estamos aqui para
                      ajudá-lo<br /></span></span></p>
              </div>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 30px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
            <div
              style="color:#787878;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:150%;padding-top:0px;padding-right:10px;padding-bottom:30px;padding-left:10px;">
              <div
                style="font-size: 12px; line-height: 18px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #787878;">
                <p style="font-size: 14px; line-height: 27px; text-align: center; margin: 0;"><span
                    style="font-size: 18px;">Entre em contato conosco no e-mail <strong><a href="#" rel="noopener"
                        style="text-decoration: none; color: #2190E3;"
                        target="_blank">bydronesbrasil@gmail.com</a></strong></span><br /><span
                    style="font-size: 18px; line-height: 27px;">ou pelo telefone <span
                      style="color: #2190e3; font-size: 18px; line-height: 27px;">(<strong>31</strong>)</span>
                    <span
                      style="color: #2190e3; font-size: 18px; line-height: 27px;"><strong>97361-2984</strong></span><br /><strong>Segunda
                      à Sexta 8:00-18:00</strong></span></p>
              </div>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td><td style="padding-top:15px;padding-bottom:15px" width="25" bgcolor="#FFFFFF"><table role="presentation" width="25" cellpadding="0" cellspacing="0" border="0"><tr><td>&nbsp;</td></tr></table></td></tr><tr bgcolor="#FFFFFF"><td colspan="3" style="font-size:7px;line-height:18px">&nbsp;</td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>
<!--
						Linha em Branco
					-->
<div style="background-color:transparent;">
  <div class="block-grid"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
      <!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:#FFFFFF;width:900px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:5px;"><![endif]-->
      <div class="col num12"
        style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
              style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
              valign="top" width="100%">
              <tbody>
                <tr style="vertical-align: top;" valign="top">
                  <td class="divider_inner"
                    style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                    valign="top">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0"
                      role="presentation"
                      style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;"
                      valign="top" width="100%">
                      <tbody>
                        <tr style="vertical-align: top;" valign="top">
                          <td height="0"
                            style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                            valign="top"><span></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--[if (!mso)&(!IE)]><!-->
          </div>
          <!--<![endif]-->
        </div>
      </div>
      <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>
<!--
						Redes Sociais
					-->
<div style="background-color:transparent;">
  <div class="block-grid"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:900px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
      <!--[if (mso)|(IE)]><td align="center" width="900" style="background-color:transparent;width:900px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:60px;"><![endif]-->
      <div class="col num12"
        style="min-width: 320px; max-width: 900px; display: table-cell; vertical-align: top; width: 900px;">
        <div style="width:100% !important;">
          <!--[if (!mso)&(!IE)]><!-->
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:60px; padding-right: 0px; padding-left: 0px;">
            <!--<![endif]-->
            <table cellpadding="0" cellspacing="0" class="social_icons" role="presentation"
              style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
              valign="top" width="100%">
              <tbody>
                <tr style="vertical-align: top;" valign="top">
                  <td
                    style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                    valign="top">
                    <table activate="activate" align="center" alignment="alignment" cellpadding="0" cellspacing="0"
                      class="social_table" role="presentation"
                      style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: undefined; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;"
                      to="to" valign="top">
                      <tbody>
                        <tr align="center" style="vertical-align: top; display: inline-block; text-align: center;"
                          valign="top">
                          <td
                            style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 8px; padding-left: 8px;"
                            valign="top"><a href="https://instagram.com/" target="_blank"><img alt="Instagram"
                                height="32" src="'.BASE_URL.'views/email/images/instagram.png"
style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;"
title="Instagram" width="32" /></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 8px; padding-left: 8px;"
  valign="top"><a href="mailto:" target="_blank"><img alt="E-Mail" height="32"
      src="'.BASE_URL.'views/email/images/mail.png"
      style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;"
      title="E-Mail" width="32" /></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 8px; padding-left: 8px;"
  valign="top"><a href="" target="_blank"><img alt="" height="32"
      src="'.BASE_URL.'views/email/images/whatsapp.png"
      style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;"
      title="Custom" width="32" /></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<div
  style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:150%;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
  <div
    style="font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; line-height: 18px; color: #555555;">
    <p style="font-size: 12px; line-height: 18px; text-align: justify; margin: 0;">ByDrones Brasil
      - Esta mensagem e seus anexos podem conter informação confidencial ou privilegiada, sendo
      seu sigilo protegido por lei. Caso tenha recebido este e-mail por engano, queira por favor
      informar imediatamente o remetente e apagá-lo de seus arquivos.</p>
    <p style="font-size: 12px; line-height: 18px; margin: 0;"> </p>
  </div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
  style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
  valign="top" width="100%">
  <tbody>
    <tr style="vertical-align: top;" valign="top">
      <td class="divider_inner"
        style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
        valign="top">
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0"
          role="presentation"
          style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px dotted #C4C4C4; height: 0px; width: 60%;"
          valign="top" width="60%">
          <tbody>
            <tr style="vertical-align: top;" valign="top">
              <td height="0"
                style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                valign="top"><span></span></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>

</html>';

}