<?php

class Prodotto
{
    public $nome;
    public $poster;
    public $categoria;
    public $prezzo;

    /**
     * Description
     * @param {String} $nome
     * @param {String} $poster
     * @param {Categoria} $categoria
     * @param {Float} $prezzo 
     * @author Chiara Meringola
     **/
    function __construct(String $nome, String $poster, Categoria $categoria, Float $prezzo)
    {
        $this->nome = $nome;
        $this->poster = $poster;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }
}
