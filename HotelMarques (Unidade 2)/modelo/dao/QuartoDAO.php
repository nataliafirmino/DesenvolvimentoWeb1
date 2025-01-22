<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/hotelMarques/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/hotelMarques/modelo/vo/QuartoVO.php';

class QuartoDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new QuartoDAO();

        return self::$instance;
    }

    public function insert(QuartoVO $quarto) {
        try {
            $sql = "INSERT INTO quarto (numeroQuarto,tipo,capacidade,precoDiaria,statusQuarto, descricao)"
                    . "VALUES "
                    . "(:numeroQuarto,:tipo,:capacidade,:precoDiaria,:statusQuarto, :descricao)";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":numeroQuarto", $quarto->getNumeroQuarto());
            $p_sql->bindValue(":tipo", $quarto->getTipo());
            $p_sql->bindValue(":capacidade", $quarto->getCapacidade());
            $p_sql->bindValue(":precoDiaria", $quarto->getPrecoDiaria());
            $p_sql->bindValue(":statusQuarto", $quarto->getStatusQuarto());
            $p_sql->bindValue(":descricao", $quarto->getDescricao());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar" . $e->getMessage();
        }
    }

    public function update($quarto) {
        try {
            $sql = "UPDATE quarto SET numeroQuarto=:numeroQuarto, capacidade=:capacidade,"
                    . "tipo=:tipo, precoDiaria=:precoDiaria, statusQuarto=:statusQuarto, descricao=:descricao "
                    . "where id=:id";
            //perceba que na linha abaixo vai precisar de um import
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":numeroQuarto", $quarto->getNumeroQuarto());
            $p_sql->bindValue(":tipo", $quarto->getTipo());
            $p_sql->bindValue(":capacidade", $quarto->getCapacidade());
            $p_sql->bindValue(":precoDiaria", ($quarto->getPrecoDiaria()));
            $p_sql->bindValue(":statusQuarto", ($quarto->getStatusQuarto()));
            $p_sql->bindValue(":descricao", ($quarto->getDescricao()));
            $p_sql->bindValue(":id", $quarto->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar" . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "delete from quarto where id = :id";
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
            $sql = "SELECT * FROM quarto WHERE id = :id";
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
        $obj = new QuartoVO();
        $obj->setId($row['id']);
        $obj->setNumeroQuarto($row['numeroQuarto']);
        $obj->setTipo($row['tipo']);
        $obj->setCapacidade($row['capacidade']);
        $obj->setPrecoDiaria($row['precoDiaria']);
        $obj->setDescricao($row['descricao']);
        $obj->setStatusQuarto($row['statusQuarto']);
        
        
        return $obj;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM quarto ";
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
            $sql = "SELECT * FROM quarto " . $restanteDoSQL;
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