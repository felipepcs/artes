public function inserir(){
    try{
        if(isset($_POST['nome']) && isset($_POST['sexo'])) {
            $this->nome = $_POST["nome"];
            $this->cep = $_POST["cep"];
            $this->email = $_POST["email"];
            $this->endereco = $_POST["endereco"];
            $this->telefone = $_POST["telefone"];
            $this->senha = $_POST["senha"];
            $this->data_nasc = $_POST["data_nasc"];
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare(statement "insert into usuarios(nome,cep,email,endereco,telefone,senha,data_nasc)
                            values (null,?,?,?,?,?,?)");
            $sql->execute(array(
                $this->nome;
                $this->cep; 
                $this->email; 
                $this->endereco; 
                $this->telefone; 
                $this->senha 
                $this->data_nasc
            ));
                
            if ($sql->rowCount() > 0) {
                header(string: "location: cadastro.php");
            }
        }else{
            header(string: "location: cadastro.php"); 
        }
    }catch(PDOException $msg) {
        echo "Não foi possível realizar o cadastro: ".$msg->getMessage();
    }
}           
 
