<?php
require_once __DIR__ . "/Prodotto.php";

class Cuccia extends Prodotto
{
    public $tipo;
    public $colore;
    public $dimensioni;

    /**
     * Description
     * @param {String} $colore -> colore cuccia
     * @param {Int} $dimensioni -> dimensioni cuccia
     * @author Chiara Meringola
     **/
    function __construct(String $nome, String $poster, Categoria $categoria, Float $prezzo, String $colore, Int $dimensioni, String $tipo)
    {
        parent::__construct($nome, $poster, $categoria, $prezzo);
        $this->tipo = $tipo;
        $this->colore = $colore;
        $this->dimensioni = $dimensioni;
    }
}
