<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['mensagem'];
$telefone = $_POST['telefone'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
 
$headers = "From: ". $nome;
 
$corpoemail = 'Contato - Curriculum
            Nome: '   .$nome.' 
            Telefone: '  .$telefone.' 
            Email: '   .$email.'
            Assunto: ' .$assunto.' 
            Mensagem: '.$msg.' 
              
            Este e-mail foi enviado em: '.$data_envio.' - '.$hora_envio.' ';
 
if(mail("anderson.furlan@satc.edu.br", "Fale Conosco",$corpoemail,$headers)){
  echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
  echo "Mensagem Enviada"; 

  $url = 'index.html';
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
 
} else{
      echo "<script>alert('Erro ao enviar, tente diretamente pelo email leandrogabriel@outlook.com');</script>"; 
} 