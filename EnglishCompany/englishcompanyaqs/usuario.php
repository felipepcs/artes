<?php
header("Content-type: text/html; charset=utf8;");

session_start(); 

$nome = "";
$email = "";
$senha = "";

if(isset($_POST["register"])){
    if(isset($_POST["nome"]) && !empty($_POST["nome"])
        && isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["senha"]) && !empty($_POST["senha"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $_SESSION["email"] = $_POST["email"];
        $_SESSION["senha"] = $_POST["senha"];
        echo "<script>
                alert('Usuário cadastrado com sucesso!!'); // criando uma alerta
                window.location.href = 'login.html'; // redirecionando 
             </script>";

    }else{ 
        header("location:cadastro.html");
    }

}else if(isset($_POST["entrar"])) {

    if (isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["senha"]) && !empty($_POST["senha"])) {

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if ($_SESSION["email"] == $email) {

            if ($_SESSION["senha"] == $senha) {
                echo "<script>
            alert('Logado com sucesso!!'); // criando uma alerta
            window.location.href = 'servicos.php'; // redirecionando 
         </script>";
            }else{
                echo "<script>
            alert('Credenciais Incorretas!!'); // criando uma alerta
            window.location.href = 'login.html'; // redirecionando 
         </script>";
            }
        
        } else {

            header("location:login.html");

        }


    } else { // usuario não preencheu nenhum formulario
        header("location: index.html");
    }

}

?>