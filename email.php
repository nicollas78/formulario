<?php

if(isset($_POST['email']) && !empty($_POST['email'])){


$nome = addslashes ($_POST['nome']);
$rg = addslashes ($_POST['rg']);
$cpf = addslashes ($_POST['cpf']);
$endereco = addslashes ($_POST['endereco']);
$telefone = addslashes ($_POST['telefone']);
$email = addslashes ($_POST['email']);
$mensagem = addslashes ($_POST['mensagem']);

$to = "natsu.dragonir7@gmail.com";
$subject = " Contato - Progamador Br";
$body = "Nome: ".$nome."\r\n".
        "RG: ".$rg."\r\n".
        "CPF: ".$cpf."\r\n".
        "Endereço: ".$endereco."\r\n".
        "Telefone: ".$telefone."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;
$header = "from:nicollas.antonio7@gmail.com"."\r\n"
         ."Reply-To:".$email."\r\n"
         ."X=Mailer:PHP/".phpversion();
if (mail($to,$subject,$body,$header))
{

	echo(" Email enviado com sucesso ");
}else{

	echo(" O Email não pode ser enviado ");
}

}

?>