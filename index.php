<?php

    //includiamo i file
    include_once 'Impiegato.php';
    include_once 'Dirigente.php';

    //creiamo istanza di un IMPIEGATO e gli assegno vslori tramite costruttore

    //prova con parametri corretti
    $dip1 = new Impiegato('Mario','Rossi');
    // $dip1->salario_orario = 20;

    //prova con nome sbagliato
    // $dip1 = new Impiegato(3,'Rossi');
    // $dip1->salario_orario = 'a';


    var_dump($dip1);
    echo '<br>';

    //richiamo funzione e controllo eccezione
    try {
        $dip1->stampaNominativo();
        echo '<br>';
        $stipendio = $dip1->calcolaStipendio(10);
        echo 'Stipendio '.$stipendio.' €';
    } catch (\Exception $e) {
        echo 'Si è verificato un errore: '. $e->getMessage();
    }





?>
