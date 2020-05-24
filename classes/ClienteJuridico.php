<?php
class ClienteJuridico extends Cliente
{
    public function adicionarDesconto()
    {
        $this->setDesconto(25);
    }

    public function retornarTipo()
    {
        return 'Pessoa Jurídica';
    }
}
