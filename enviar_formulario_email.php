<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $CPF = $_POST["CPF"];
    $data = $_POST["data"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $mensagem = $_POST["mensagem"];
    

    $para = "financeiro@autodfseminovos.com.br"; // Substitua pelo seu endereço de e-mail
    $assunto = "Nova Simulação enviada";

    $mensagemCompleta = "Nome: $nome\n";
    $mensagemCompleta .= "E-mail: $email\n";
    $mensagemCompleta .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    mail($para, $assunto, $mensagemCompleta);

    echo "Simulação enviada com sucesso!";
} else {
    echo "Erro no envio da simulação.";
}
?>
