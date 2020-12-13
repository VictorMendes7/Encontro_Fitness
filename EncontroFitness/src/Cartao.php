<?php
namespace src;

class Cartao{
    private $id;
    private $nomeCartao;
    private $cpf;
    private $numeroCartao;
    private $mes;
    private $ano;
    private $codSeguranca;


    
    public function __construct() {
        
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomeCartao()
    {
        return $this->nomeCartao;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function getNumeroCartao()
    {
        return $this->numeroCartao;
    }

    /**
     * @return mixed
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @return mixed
     */
    public function getCodSeguranca()
    {
        return $this->codSeguranca;
    }


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @param mixed $nomeCartao
     */
    public function setNomeCartao($nomeCartao)
    {
        $this->nomeCartao = $nomeCartao;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @param mixed $numeroCartao
     */
    public function setNumeroCartao($numeroCartao)
    {
        $this->numeroCartao = $numeroCartao;
    }

    /**
     * @param mixed $mes
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    /**
     * @param mixed $codSeguranca
     */
    public function setCodSeguranca($codSeguranca)
    {
        $this->codSeguranca = $codSeguranca;
    }
      
}