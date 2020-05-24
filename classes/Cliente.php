<?php
abstract class Cliente
{
    private $nome;
    private $endereco;
    private $desconto;
    private $cpfCnpj;

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */
    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Set the value of desconto
     *
     * @return  self
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    /**
     * Get the value of desconto
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * Get the value of cpfCnpj
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Set the value of cpfCnpj
     *
     * @return  self
     */
    public function setCpfCnpj(string $cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    public abstract function adicionarDesconto();
    public abstract function retornarTipo();
}
