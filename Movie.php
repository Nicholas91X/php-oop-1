<?php
class Movie {
    public $titolo;
    public $titoloOriginale;
    public $durata;
    public $genere;
    private $voto;
    public $lingua;

    public function __construct($_titolo, $_titoloOriginale, $_durata, $_genere, $_voto, $_lingua)
    {
        $this->titolo = $_titolo;
        $this->titoloOriginale = $_titoloOriginale;
        $this->durata = $_durata;
        $this->genere = $_genere;
        $this->voto = $_voto;
        $this->lingua = $_lingua;
    }

    public function getVote() {
        if ( is_numeric($this->voto) && $this->voto > 0 && $this->voto <= 5 ) {
            return $this->voto;
        } else {
            echo "Il voto deve essere un numero compreso tra 1 e 5";
        }
    }
}
?>