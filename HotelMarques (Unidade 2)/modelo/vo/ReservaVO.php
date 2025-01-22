<?php
class ReservaVO {
    private $id;
    private $dataCheckin;
    private $dataCheckout;
    private $valor;
    private $formaPagamento;
    private $statusReserva;
    private $idCliente; //Armazena o id do cliente
    private $idQuarto; //Armazena o id do quarto
    
    public function getId() {
        return $this->id;
    }

    public function getDataCheckin() {
        return $this->dataCheckin;
    }

    public function getDataCheckout() {
        return $this->dataCheckout;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getFormaPagamento() {
        return $this->formaPagamento;
    }

    public function getStatusReserva() {
        return $this->statusReserva;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getIdQuarto() {
        return $this->idQuarto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDataCheckin($dataCheckin) {
        $this->dataCheckin = $dataCheckin;
    }

    public function setDataCheckout($dataCheckout) {
        $this->dataCheckout = $dataCheckout;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setFormaPagamento($formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }

    public function setStatusReserva($statusReserva) {
        $this->statusReserva = $statusReserva;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setIdQuarto($idQuarto) {
        $this->idQuarto = $idQuarto;
    }

  
    
    function getQuarto(){
        require_once $_SERVER['DOCUMENT_ROOT'] .'/hotelMarques/modelo/dao/QuartoDAO.php';
        return QuartoDAO::getInstance()->getById($this->idQuarto);
        
   }
   
   function getCliente(){
        require_once $_SERVER['DOCUMENT_ROOT'] .'/hotelMarques/modelo/dao/ClienteDAO.php';
        return ClienteDAO::getInstance()->getById($this->idCliente);
        
   }
}
?>