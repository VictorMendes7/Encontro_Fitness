<?php
namespace src;
class Adm{
    private $id;
    private $nomeCompleto;
    private $rg;
    private $cpf;
    private $login;
    private $senha;
    private $status;
    
    
    
    public function __construct() {
        
    }
    
    
    public function getId()
    {
        return $this->id;
    }

    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }




}