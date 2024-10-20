<?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coleta os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        // Define o email para onde os dados serão enviados
        $para = "icaromts1324@gmail.com"; // Coloque seu email aqui
        $assunto = "Novo contato do site: $nome";

        // Corpo da mensagem
        $corpo = "Nome: $nome\n";
        $corpo .= "Email: $email\n";
        $corpo .= "Mensagem: \n$mensagem";

        // Cabeçalhos do email
        $headers = "From: $email";

        // Envia o email
        if (mail($para, $assunto, $corpo, $headers)) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar mensagem.";
        }
    }
?>
