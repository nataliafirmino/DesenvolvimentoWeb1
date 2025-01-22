<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/hotelMarques/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/hotelMarques/modelo/vo/ReservaVO.php';

class ReservaDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new ReservaDAO();

        return self::$instance;
    }

    public function insert(ReservaVO $reserva) {
        try {
            $sql = "INSERT INTO reserva (dataCheckin,dataCheckout,valor, formaPagamento, statusReserva, idCliente, idQuarto)"
                    . "VALUES "
                    . "(:dataCheckin,:dataCheckout,:valor,:formaPagamento, :statusReserva, :idCliente, :idQuarto)";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":dataCheckin", $reserva->getDataCheckin());
            $p_sql->bindValue(":dataCheckout", $reserva->getDataCheckout());
            $p_sql->bindValue(":valor", $reserva->getValor());
            $p_sql->bindValue(":formaPagamento", $reserva->getFormaPagamento());
            $p_sql->bindValue(":statusReserva", $reserva->getStatusReserva());
            $p_sql->bindValue(":idCliente", $reserva->getIdCliente());
            $p_sql->bindValue(":idQuarto", $reserva->getIdQuarto());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar" . $e->getMessage();
        }
    }

    public function update($reserva) {
        try {
            $sql = "UPDATE reserva SET dataCheckin=:dataCheckin, dataCheckout=:dataCheckout,"
                    . "valor=:valor, formaPagamento=:formaPagamento,"
                    . "statusReserva=:statusReserva, idCliente=:idCliente, idQuarto=:idQuarto"
                    . "where id=:id";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":dataCheckin", $reserva->getDataCheckin());
            $p_sql->bindValue(":dataCheckout", $reserva->getDataCheckout());
            $p_sql->bindValue(":valor", ($reserva->getValor()));
            $p_sql->bindValue(":formaPagamento", ($reserva->getFormaPagamento()));
            $p_sql->bindValue(":statusReserva", ($reserva->getStatusReserva()));
            $p_sql->bindValue(":idCliente", ($reserva->getIdCliente()));
            $p_sql->bindValue(":idQuarto", ($reserva->getIdQuarto()));
            $p_sql->bindValue(":id", $reserva->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar" . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "delete from reserva where id = :id";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --" . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM reserva WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new ReservaVO();
        $obj->setId($row['id']);
        $obj->setDataCheckin($row['dataCheckin']);
        $obj->setDataCheckout($row['dataCheckout']);
        $obj->setValor($row['valor']);
        $obj->setFormaPagamento($row['formaPagamento']);
        $obj->setStatusReserva($row['statusReserva']);
        $obj->setIdCliente($row['idCliente']);
        $obj->setIdQuarto($row['idQuarto']);
        
        return $obj;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM reserva ";
            $p_sql = BDPDO::getInstance()->prepare($sql);

            $p_sql->execute();

            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function listWhere($restanteDoSQL, $arrayDeParametros, $arrayDeValores) {
        try {
            $sql = "SELECT * FROM reserva " . $restanteDoSQL;
            $p_sql = BDPDO::getInstance()->prepare($sql);
            for ($i = 0; $i < sizeof($arrayDeParametros); $i++) {
                $p_sql->bindValue($arrayDeParametros[$i], $arrayDeValores [$i]);
            }
            $p_sql->execute();
            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.".$e->getMessage();
        }
    }

}

?>