<?php
class ClienteFisico extends Cliente
{
    public function adicionarDesconto()
    {
        $this->setDesconto(20);
    }

    public function retornarTipo()
    {
        return 'Pessoa Física';
    }
}
