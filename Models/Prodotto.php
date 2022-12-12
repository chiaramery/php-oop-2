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

    /**
     * Description setPrezzo
     * @param {Float} $prezzo
     **/
    public function setPrezzo(Float $prezzo)
    {
        $this->prezzo = $prezzo;
    }

    /**
     * Description getPrezzo
     * @returns {Float} prezzo
     **/
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Description getNome
     * @returns {String} nome
     **/
    public function getNome()
    {
        return $this->nome;
    }
}
