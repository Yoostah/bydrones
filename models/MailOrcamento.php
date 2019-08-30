<?php
class MailOrcamento extends model{
  public function montaOrcamentoLinhaBranca($cat_image='_2.svg', $item_name='Item', $item_qtd='Quantidade', $item_valor='Valor'){
    //Linha Branca 
return $linha = '<div style="background-color:transparent;">
  <div class="block-grid four-up no-stack"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 225px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
              <img align="center" alt="Image" border="0" class="center fixedwidth"
                src="'. BASE_URL .'views/email/images/'.$cat_image.'"
                style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 130px; display: block;"
                title="Image" width="130" />
            </div>
          </div>
        </div>
      </div>
      <div class="col num3"
  style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 224px;">
  <div style="width:100% !important;">
    <div
      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:55px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
      <div
        style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
        <div
          style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
          <p style="font-size: 14px; line-height: 24px; text-align: center; margin: 0;"><span
              style="font-size: 20px;"><strong>'.$item_name.'</strong></span></p>
        </div>
      </div>
      <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
        style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
        valign="top" width="100%">
        <tbody>
          <tr style="vertical-align: top;" valign="top">
            <td class="divider_inner"
              style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
              valign="top">
              <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="30"
                role="presentation"
                style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;"
                valign="top" width="100%">
                <tbody>
                  <tr style="vertical-align: top;" valign="top">
                    <td height="30"
                      style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                      valign="top"><span></span></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="col num3"
  style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 224px;">
  <div style="width:100% !important;">
    <div
      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:55px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
      <div
        style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
        <div
          style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
          <p style="font-size: 14px; line-height: 24px; text-align: center; margin: 0;"><span
              style="font-size: 20px;"><strong>'.$item_qtd.'</strong></span></p>
        </div>
      </div>
      <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
        style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
        valign="top" width="100%">
        <tbody>
          <tr style="vertical-align: top;" valign="top">
            <td class="divider_inner"
              style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
              valign="top">
              <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="30"
                role="presentation"
                style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;"
                valign="top" width="100%">
                <tbody>
                  <tr style="vertical-align: top;" valign="top">
                    <td height="30"
                      style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                      valign="top"><span></span></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="col num3"
  style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 225px;">
  <div style="width:100% !important;">
    <div
      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:55px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
      <div
        style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:0px;">
        <div
          style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
          <p style="line-height: 24px; text-align: center; font-size: 12px; margin: 0;"><span
              style="font-size: 20px;"><span
                style="line-height: 24px; font-size: 20px;"><strong>'.$item_valor.'</strong></span></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>';

}

public function montaOrcamentoLinhaCinza($cat_image='_2.svg', $item_name='Item', $item_qtd='Quantidade', $item_valor='Valor'){
//Linha Cinza
return $linha = '<div style="background-color:transparent;">
  <div class="block-grid four-up no-stack"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #F9F9F9;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#F9F9F9;">
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 225px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
              <img align="center" alt="Image" border="0" class="center fixedwidth"
                src="'.BASE_URL.'views/email/images/'.$cat_image.'"
                style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 130px; display: block;"
                title="Image" width="130" />
            </div>
          </div>
        </div>
      </div>
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 224px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:55px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 24px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 20px;"><strong>'.$item_name.'</strong></span></p>
              </div>
            </div>
            <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
              style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
              valign="top" width="100%">
              <tbody>
                <tr style="vertical-align: top;" valign="top">
                  <td class="divider_inner"
                    style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                    valign="top">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="30"
                      role="presentation"
                      style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;"
                      valign="top" width="100%">
                      <tbody>
                        <tr style="vertical-align: top;" valign="top">
                          <td height="30"
                            style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                            valign="top"><span></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 224px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:55px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 24px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 20px;"><strong>'.$item_qtd.'</strong></span></p>
              </div>
            </div>
            <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation"
              style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
              valign="top" width="100%">
              <tbody>
                <tr style="vertical-align: top;" valign="top">
                  <td class="divider_inner"
                    style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;"
                    valign="top">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="30"
                      role="presentation"
                      style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 30px; width: 100%;"
                      valign="top" width="100%">
                      <tbody>
                        <tr style="vertical-align: top;" valign="top">
                          <td height="30"
                            style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
                            valign="top"><span></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col num3"
        style="max-width: 320px; min-width: 225px; display: table-cell; vertical-align: top; width: 225px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:55px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:0px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 24px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 20px;"><span
                      style="line-height: 24px; font-size: 20px;"><strong>'.$item_valor.'</strong></span></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';

  }

  public function montaOrcamentoSomatorio($total='TOTAL'){
return $linha = '<div style="background-color:transparent;">
  <div class="block-grid mixed-two-up"
    style="Margin: 0 auto; min-width: 320px; max-width: 900px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #02374c;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#02374c;">
      <div class="col num8"
        style="display: table-cell; vertical-align: top; min-width: 320px; max-width: 432px; width: 433px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:0px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 24px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 20px; color: #ffffff;"><span
                      style="line-height: 24px; font-size: 20px;"><strong>TOTAL</strong></span></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col num4"
        style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 216px; width: 216px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:0px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 24px; font-size: 12px; text-align: right; margin: 0;"><span
                    style="font-size: 20px; color: #ffffff;"><span
                      style="line-height: 24px; font-size: 20px;"><strong>'.$total.'</strong></span></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>';
}
}

?>