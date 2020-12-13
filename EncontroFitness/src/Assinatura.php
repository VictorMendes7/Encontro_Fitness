<?php
namespace src;


class Assinatura{
    private $id;
    private $tipoPlano;
    private $valor;
    private $descricao;
    private $status;
    
    
    public function __construct() {
        
    }
    
    
    
    
    
    public function getId()
    {
        return $this->id;
    }


    public function getTipoPlano()
    {
        return $this->tipoPlano;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function setTipoPlano($tipoPlano)
    {
        $this->tipoPlano = $tipoPlano;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }


    
    
    
    
}

