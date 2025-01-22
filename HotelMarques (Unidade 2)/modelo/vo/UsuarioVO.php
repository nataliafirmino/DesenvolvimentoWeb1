<?php
class UsuarioVO{
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $senha;
    private $foto;
    private $cargo;
    private $statusUsuario;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getStatusUsuario() {
        return $this->statusUsuario;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setStatusUsuario($statusUsuario) {
        $this->statusUsuario = $statusUsuario;
    }



}

?>


