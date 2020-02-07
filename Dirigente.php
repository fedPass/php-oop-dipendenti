<?php
    //includiamo il file Dipendente.php
    include_once 'Dipendente.php';
    //DIRIGENTE
    //extends Dipendente
    class Dirigente extends Dipendente {
        //dipartimento
        public $dipartimento;

        public function __construct($_nome, $_cognome, $_dipartimento) {
            parent::__construct($_nome, $_cognome);
            $this->dipartimento = $_dipartimento;
        }

        public function stampaNominativo() {
            echo 'Nome: ' . $this->nome;
            echo '<br>';
            echo 'Cognome: ' . $this->cognome;
            echo '<br>';
            echo 'Dipartimento: ' . $this->dipartimento;
        }
    }




?>
