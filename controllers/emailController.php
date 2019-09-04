<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require dirname(dirname(__FILE__)) . '/mail/Exception.php';
require dirname(dirname(__FILE__)) . '/mail/PHPMailer.php';
require dirname(dirname(__FILE__)) . '/mail/SMTP.php';

class emailController extends controller
{

  public function sendMail($titulo, $destinatario, $data = '')
  {
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    // 3 = debuf
    $mail->SMTPDebug = 0;

    //Ajuste para enviar sem validar certificado
    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
    );

    $mail->Host = "tls://smtp.gmail.com:587";
    $mail->SMTPAuth = true;
    $mail->Username = "";
    $mail->Password = "";

    $mail->setFrom('dev04.grupopzm@gmail.com', 'Thulio');
    $mail->addReplyTo('no-reply@gmail.com', 'Reply');
    $mail->addAddress($destinatario);
    $mail->Subject = $titulo;

    //$path = dirname(dirname(__FILE__)) . '/views/email/orcamento.html';
    //ob_start();
    //include($path);
    //$message = ob_get_clean();
    $mail->msgHTML($data);
    $mail->IsHTML(true);

    //$mail->Body = 'Corpo da Mensagem';
    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    if (!$mail->send()) {
      //echo "Mailer Error: " . $mail->ErrorInfo;
      return true;
    } else {
      //echo "Message sent!";
      return false;
    }
  }


  public function orcamento($id)
  {
    $titulo = ':: BYDRONES | Seu Orçamento de Pulverização ::';

    $orcamento = new Orcamento();
    $dados = $orcamento->showItems($id);

    $email = new MailOrcamento();
    $destinatario = $orcamento->budgetCustomerInfo($id);

    $linhas_de_servico = '';
    $troca_cor = 1;
    foreach ($dados as $key => $value) {
      if ($troca_cor) {
        $linhas_de_servico .= $email->montaOrcamentoLinhaBranca($value['cat_image'] . '.png', $value['name'], $value['weight_quantity'] + 0, 'R$
        ' . $value['weight_total_value']);
        $troca_cor--;
      } else {
        $linhas_de_servico .= $email->montaOrcamentoLinhaCinza($value['cat_image'] . '.png', $value['name'], $value['weight_quantity'] + 0, 'R$
        ' . $value['weight_total_value']);
        $troca_cor++;
      }
    }

    $linhas_de_servico .= $email->montaOrcamentoSomatorio('R$
    ' . $dados[0]['TOTAL']);

    include dirname(dirname(__FILE__)) . '/views/email/orcamento.php';
    //echo orcamento($linhas_de_servico);

    $send = $this->sendMail($titulo, trim(strtolower($destinatario[0]['email'])), orcamento($linhas_de_servico, $id));
    if(!$send){
      $orcamento->sendOrcamentoByEmail($id);
      header("Location: ".BASE_URL.'orcamento');
    }else{
      header("Location: ".BASE_URL.'notfound');
    }
    
    
  }
}
