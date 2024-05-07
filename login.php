<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados (substitua as informações de conexão conforme necessário)
    $usuario = 'root';
    $senha = '';
    $database = 'login';
    $host = 'localhost';

    // Estabelece a conexão
    $conexao = new mysqli($host, $usuario, $senha, $database);

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    // Obtém os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["password"];

    // Verifica se os dados foram recebidos corretamente
    if ($email && $senha) {
        // Consulta a tabela de usuários para verificar as credenciais
        $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        
        // Executa a consulta e verifica se ocorreu algum erro
        $resultado = $conexao->query($consulta);
        if (!$resultado) {
            die("Erro na consulta: " . $conexao->error);
        }

        // Verifica se encontrou um usuário com as credenciais fornecidas
        if ($resultado->num_rows == 1) {
            // Inicia a sessão e redireciona para a página de sucesso
            session_start();
            $_SESSION["email"] = $email;
            header("Location: index2.php");
            exit(); // Termina o script para evitar execução adicional desnecessária
        } else {
            // Caso contrário, exibe uma mensagem de erro
            echo "Credenciais inválidas. Por favor, tente novamente.";
        }

        // Libera o resultado da consulta
        $resultado->free();
    } else {
        echo "Por favor, preencha todos os campos.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}
?>
