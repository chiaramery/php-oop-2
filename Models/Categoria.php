<?php

class Categoria
{
    public $categoria;
    /**
     * Description
     * @param {any} $categoria (Cane o gatto)
     **/
    public function __construct($categoria)
    {
        $this->categoria = $categoria;
    }
}
