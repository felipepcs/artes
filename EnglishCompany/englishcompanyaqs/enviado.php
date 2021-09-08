<?php

header("Content-type: text/html; charset=utf8;");
session_start();

echo "<script>
                alert('Your problem has been send!'); // criando uma alerta
                window.location.href = 'servicos.php'; // redirecionando 
             </script>";


?>
