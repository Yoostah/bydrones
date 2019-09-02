<?php
class MailOrcamento extends model{
  public function montaOrcamentoLinhaBranca($cat_image='_2.svg', $item_name='Item', $item_qtd='Quantidade', $item_valor='Valor'){
    //Linha Branca 
return $linha = '<div style="background-color:transparent;">
  <div class="block-grid four-up no-stack"
    style="Margin: 0 auto; min-width: 320px; max-width: 720px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
      <div class="col num3"
        style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 180px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
              <img align="center" alt="Image" border="0" class="center fixedwidth"
                src="'. BASE_URL .'views/email/images/'.$cat_image.'"
                style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 85px; display: block;"
                title="Image" width="85" />
            </div>
          </div>
        </div>
      </div>
      <div class="col num3"
  style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 224px;">
  <div style="width:100% !important;">
    <div
      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
      <div
        style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
        <div
          style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
          <p style="font-size: 14px; line-height: 18px; text-align: center; margin: 0;"><span
              style="font-size: 16px;"><strong>'.$item_name.'</strong></span></p>
        </div>
      </div>      
    </div>
  </div>
</div>
<div class="col num3"
  style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 224px;">
  <div style="width:100% !important;">
    <div
      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
      <div
        style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
        <div
          style="font-size: 12px; line-height: 14px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
          <p style="font-size: 14px; line-height: 18px; text-align: center; margin: 0;"><span
              style="font-size: 16px;"><strong>'.$item_qtd.'</strong></span></p>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="col num3"
  style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 180px;">
  <div style="width:100% !important;">
    <div
      style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
      <div
        style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:0px;">
        <div
          style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
          <p style="line-height: 24px; text-align: center; font-size: 12px; margin: 0;"><span
              style="font-size: 20px;"><span
                style="line-height: 18px; font-size: 16px;"><strong>'.$item_valor.'</strong></span></span>
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
    style="Margin: 0 auto; min-width: 320px; max-width: 720px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #F9F9F9;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#F9F9F9;">
      <div class="col num3"
        style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 180px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
              <img align="center" alt="Image" border="0" class="center fixedwidth"
                src="'.BASE_URL.'views/email/images/'.$cat_image.'"
                style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 85px; display: block;"
                title="Image" width="85" />
            </div>
          </div>
        </div>
      </div>
      <div class="col num3"
        style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 224px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 18px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 16px;"><strong>'.$item_name.'</strong></span></p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col num3"
        style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 224px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:1px dotted #E8E8E8; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 18px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 16px;"><strong>'.$item_qtd.'</strong></span></p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col num3"
        style="max-width: 320px; min-width: 180px; display: table-cell; vertical-align: middle; width: 180px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:0px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 24px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 16px;"><span
                      style="line-height: 18px; font-size: 16px;"><strong>'.$item_valor.'</strong></span></span>
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
    style="Margin: 0 auto; min-width: 320px; max-width: 720px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #02374c;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#02374c;">
      <div class="col num8"
        style="display: table-cell; vertical-align: middle; min-width: 320px; max-width: 432px; width: 433px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:0px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 18px; text-align: center; font-size: 12px; margin: 0;"><span
                    style="font-size: 16px; color: #ffffff;"><span
                      style="line-height: 18px; font-size: 16px;"><strong>TOTAL</strong></span></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col num4"
        style="display: table-cell; vertical-align: middle; max-width: 320px; min-width: 216px; width: 216px;">
        <div style="width:100% !important;">
          <div
            style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
            <div
              style="color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;line-height:120%;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:0px;">
              <div
                style="line-height: 14px; font-size: 12px; font-family: \'Lato\', Tahoma, Verdana, Segoe, sans-serif; color: #555555;">
                <p style="line-height: 18px; font-size: 12px; text-align: right; margin: 0;"><span
                    style="font-size: 16px; color: #ffffff;"><span
                      style="line-height: 18px; font-size: 16px;"><strong>'.$total.'</strong></span></span></p>
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