<?php
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto
{
    public $descrizione;

    /**
     * Description
     * @param {String} $descrizione -> descrizione gioco
     * @author Chiara Meringola
     **/
    function __construct(String $nome, String $poster, Categoria $categoria, Float $prezzo, String $descrizione)
    {
        parent::__construct($nome, $poster, $categoria, $prezzo);
        $this->descrizione = $descrizione;
    }
}
