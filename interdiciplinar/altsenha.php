public function alterar(){
    try{
       if(isset($_POST['Salvar'])) {
            $this->email = $_POST["email"];
            $this->senha = $_POST["senha"];
            $this->novasenha = $_POST["nova_senha"];
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare(statement: "update usuario set nome = ?,email = ?,senha = ?, novasenha= ?");
            $sql->execute(array(
              $this->nome,
              $this->email,
              $this->senha,
              $this->novasenha
            ));
           
            if($sql->rowCount() > 0) {
               header(string: "location: altsenha.php");
            }
       }else{
            header(string: "location: altsenha.php");
       }
    }catch(PDOException $msg) {
        echo "Não foi possível alterar a senha: ".$msg->getMessage();
    }
}
