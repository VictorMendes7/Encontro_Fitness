<?php 

namespace src;

class Logs{

private $id;
private $hora;
private $ip;
private $login;
private $mensagem;


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
    public function getHora()
    {
        return $this->hora;
    }

/**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

/**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

/**
     * @return mixed
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }
    
    /**
     * @param mixed $hora
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**

/**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

/**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

/**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

/**
     * @param mixed $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }





}
?>