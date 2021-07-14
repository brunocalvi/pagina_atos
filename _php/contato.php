<?php
$post = (!empty($_POST)) ? true : false;

if($post){
   
        //$para = "adalbertoandreoli@gmail.com, contato@embarcaweb.com.br";
        $para = "calvireis@gmail.com";    
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];
	    $mensagem = $_POST['mensagem'];
        $telefone = $_POST['telefone'];
        
        //$assunto
        $subject = 'Contato Atos';
    
        //mensagem que vai ser enviado no e-mail
        $mensagem = "<strong>Nome:  </strong>".$nome. "<br>";
        $mensagem .= "<strong>Telefone:  </strong>".$telefone. "<br>";
        $mensagem .= "<strong>E-mail:  </strong>".$email."<br>";
        $mensagem .= "<br>  <strong>Mensagem: </strong><br>"
        .$_POST['mensagem'];

    
        $headers =  "Content-Type:text/html; charset=UTF-8\n";
        //$headers .= "From:  Embarcaweb<contato@embarcaweb.com.br >\n";
        $headers .= "From:  Atos<atos@cristoematos.com.br>\n";
        //o email partiu deste email e seguido do nome
        $headers .= "X-Sender:  <atos@cristoematos.com.br>\n";
        //email do servidor //que enviou
        $headers .= "X-Mailer: PHP  v".phpversion()."\n";
        $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
        $headers .= "Return-Path:  <atos@cristoematos.com.br>\n";
        //caso a msg //seja respondida vai para  este email.
        $headers .= "MIME-Version: 1.0\n";

        $mail = mail($para, $subject, $mensagem, $headers);//função que faz o envio do email.

if($mail){
        
        include 'contato.html'; 
        
	} 
}
?>