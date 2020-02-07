<?php
    //includiamo il file Dipendente.php
    include_once 'Dipendente.php';
    //IMPIEGATO
    //extends Dipendente
    class Impiegato extends Dipendente {
        //mansione
        public $mansione;

        public function __construct($_nome, $_cognome, $_mansione) {
            parent::__construct($_nome, $_cognome);
            $this->mansione = $_mansione;
        }
    }




?>
