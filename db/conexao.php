<?php
    global $auxLogin; // Permite acesso à variável externa

    $env = parse_ini_file(dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env') ?: [];
    $DATABASE_HOST = $env['DB_HOST'];
    $DATABASE_USER = $env['DB_USER'];
    $DATABASE_PASS = $env['DB_PASSWORD'];
    $DATABASE_NAME = $env['DB_NAME'];
    $DATABASE_PORT = (int) ($env['DB_PORT']);
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, $DATABASE_PORT);

    if (mysqli_connect_errno()) {
        exit('Erro ao conectar ao MySQL: ' . mysqli_connect_error());
    }

    $con->set_charset("utf8mb4");

    // Bloco de verificação de sessão (só executa se $auxLogin for false ou não definido)
    if (!isset($auxLogin) || $auxLogin === false) {
        //Cria uma sessão
        session_start();
        
        //Se não tiver logado não deixa entrar na página
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header('Location: index.php');
            exit();
        }

        // Verificação da password para segurança das paginas
        $sql = "SELECT * FROM administrator WHERE id = " . $_SESSION['id'] . " AND pass = '" . $_SESSION['password'] . "';";
        $result = $con->query($sql);
        if ($result->num_rows <= 0) {
            header('Location: index.php');
            exit();
        }
    }

    //Chama as funções para serem usadas em todas as paginas
    include_once 'functions.php';
?>