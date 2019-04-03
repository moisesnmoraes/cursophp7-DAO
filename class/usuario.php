<?php 

class Usuario{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function getIdusuario(){
		return $this->idusuario;
	}
	public function setIdusuario($valeu){
		$this->idusuario = $valeu;

	}

	public function getDeslogin(){
		return $this->deslogin;
	}
	public function setDeslogin($valeu){
		$this->deslogin = $valeu;
	}

	public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($valeu){
		$this->dessenha = $valeu;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}
	public function setDtcadastro($valeu){
		$this->dtcadastro = $valeu;
	}
		
	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (count($results) > 0) {

			$this->setData($results[0]);

		}

	}
	
	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));

	} 
}


 ?>