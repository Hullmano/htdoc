<?php 

class Usuario {

	private $id;
	private $login;
	private $senha;
	private $dtcadastro;
	
	public function getIdusuario() {
		return $this->id;
	}

	public function setIdusuario($vId) {
		$this->id = $vId;
	}

	public function getLogin() {
		return $this->login;
	}

	public function setLogin($vLogin) {
		$this->login = $vLogin;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setSenha($vSenha) {
		$this->senha = $vSenha;
	}

	public function getDtcadastro() {
		return $this->dtcadastro;
	}

	public function setDtcadastro($vDtCad) {
		$this->dtcadastro = $vDtCad;
	}

	public function findByid($varId) {
		$selectId = new Sql();

		$result = $selectId->select("SELECT * FROM tb_user WHERE id = :ID", array(
			":ID"=>$varId
		));

		if (count($result) > 0) {         //a classe "select" retorna um array, este if testa se tem algum retorno na primeira posição. 
			$this->setData($result[0]);
		}

		//return json_encode($row);
	}

	public static function getList() {                               //retorna todos os registros. Método estático.
		$selectAll = new Sql();

		$result = $selectAll->select("SELECT * FROM tb_user ORDER BY id");

		return $result;
	}

	public static function otherList($buscar) {
		$selectPart = new Sql();

		$result = $selectPart->select("SELECT * FROM tb_user WHERE login LIKE :PART ORDER BY login", array(
			":PART"=>"%".$buscar."%"
		));

		return $result;
	}

	public function checkLogin($user, $pswUser) {
		$userPsw = new Sql();
		
		//$result1 = $userPsw->select("SELECT * FROM tb_user WHERE login = 'ana' AND id = '1'");
		$result = $userPsw->select("SELECT * FROM tb_user WHERE login = :USER AND senha = :PSW", array(
			":USER"=>$user,
			":PSW"=>$pswUser
		)); 
		if (count($result) > 0) {        //a classe "select" retorna um array, este if testa se tem algum retorno na primeira posição. 
			$this->setData($result[0]);
		} else {
			throw new Exception("Login ou Senha Inválidos");
			
		}
	}


	//criar um insert. à partir procedure.
	public function insert() {
		$sql = new Sql();
		$result = $sql->select("CALL sp_user_insert(:LOGIN, :PSW)", array(  //CALL - chama a procedure crianda no banco. Nesta procure foi feito um insert e um select, que trás o último id inserido na tb_user.
			":LOGIN"=>$this->getLogin(),
			":PSW"=>$this->getSenha()
		));
		if (count($result) > 0) {
			$this->setData($result[0]);
		}

	}

	public function update($log, $senh) {
		$this->setLogin($log);
		$this->setSenha($senh);

		$sql = new Sql();
		$sql->query("UPDATE tb_user SET login = :LOGIN, senha = :PSW WHERE id = :ID", array(
			":LOGIN"=>$this->getLogin(),
			":PSW"=>$this->getSenha(),
			":ID"=>$this->getIdusuario()
		));
	}

	public function delete() {
		$sql = new Sql();
		$result = $sql->select("DELETE FROM tb_user WHERE id = :ID", array(
			":ID"=>$this->getIdusuario()
		));
		//limpa memoria do objeto/variáveis.
		$this->setIdusuario(0); 
		$this->setLogin("");
		$this->setSenha("");
		$this->setDtcadastro(new DateTime());
	}

	public function setData($vData) {
		$this->setIdusuario($vData['id']);            
		$this->setLogin($vData['login']);
		$this->setSenha($vData['senha']);
		$this->setDtcadastro(new DateTime($vData['dtcadastro']));  //transf. a data em um Objeto. para que possa usar suas funções.		
	}


	public function __toString() {
		return json_encode(array(
			"Id"=>$this->getIdusuario(),
			"Login"=>$this->getLogin(),
			"Senha"=>$this->getSenha(),
			"DataCad"=>$this->getDtcadastro()->format("d-m-Y H:i:s")      //método "format" do Objeto DateTime.
		));

	}

}

?>