<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto
{
    public $tipo;
    public $peso;
    public $data;
    public $eta;
    public $gusto;

    /**
     * Description
     * @param {String} $tipo -> tipo prodotto
     * @param {Float} $peso -> peso prodotto
     * @param {String} $data -> data di scadenza
     * @param {Int} $eta -> eta animale
     * @param {String} $gusto -> gusto cibo
     * @author Chiara Meringola
     **/
    function __construct(String $nome, String $poster, Categoria $categoria, Float $prezzo, String $tipo, Float $peso, String $data, String $eta, String $gusto)
    {
        parent::__construct($nome, $poster, $categoria, $prezzo);
        $this->tipo = $tipo;
        $this->peso = $peso;
        $this->data = $data;
        $this->eta = $eta;
        $this->gusto = $gusto;
    }

    /**
     * Description getTipo
     * @returns {String} tipo del cibo
     **/
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Description getPeso
     * @returns {peso}
     **/
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Description getData
     * @returns {String} data di scadenza del cibo
     **/
    public function getData()
    {
        return $this->data;
    }

    /**
     * Description getEta
     * @returns {String} eta dell'animale che va a seconda del cibo
     **/
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Description getGusto
     * @returns {String} gusto del cibo
     **/
    public function getGusto()
    {
        return $this->gusto;
    }
}
