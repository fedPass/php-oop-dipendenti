<?php

    //DIPENDENTE
    class Dipendente {
        //nome
        public $nome;
        //cognome
        public $cognome;
        //matricola
        public $matricola;
        //salario
        public $salario_orario;

        public function __construct($_nome, $_cognome) {
            $this->nome = $_nome;
            $this->cognome = $_cognome;
        }

        public function calcolaStipendio($ore_lavoro) {
            if (!is_numeric($this->salario_orario) || empty($this->salario_orario)) {
                throw new Exception('Non è stato impostato un dato valido');
            }
            return $ore_lavoro * $this->salario_orario;
        }

        public function stampaNominativo() {
            if (!is_string($this->nome) || !is_string($this->cognome)) {
                throw new Exception('Non è stato impostato un nominativo valido');
            }
            echo 'Nome: ' . $this->nome;
            echo '<br>';
            echo 'Cognome: ' . $this->cognome;
        }
    }


?>
