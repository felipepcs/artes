<?php
header("Content-type: text/html; charset=utf8;");
session_start();
session_unset();

echo "<script>
            alert('User Logout'); // criando uma alerta
            window.location.href = 'index.html'; // redirecionando 
         </script>";
?>