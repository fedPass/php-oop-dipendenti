<?php

    //includiamo i file
    include_once 'Impiegato.php';
    include_once 'Dirigente.php';

    //creiamo istanza di un IMPIEGATO e gli assegno vslori tramite costruttore

    //prova con parametri corretti
    $dip1 = new Impiegato('Mario','Rossi','autista');
    $dip1->salario_orario = 20;

    //prova con nome sbagliato
    // $dip1 = new Impiegato(3,'Rossi','autista');
    // $dip1->salario_orario = 'a';

    $man1 = new Dirigente('Claudia','Verdi','Sales Manager');
    $man1->salario_orario = 70;

    echo '<pre>';
    var_dump($dip1);
    echo '</pre>';
    echo '<hr>';

    echo '<pre>';
    var_dump($man1);
    echo '</pre>';
    echo '<hr>';

    //richiamo funzione e controllo eccezione
    try {
        $dip1->stampaNominativo();
        echo '<br>';
        $stipendio1 = $dip1->calcolaStipendio(10);
        echo 'Stipendio '.$stipendio1.' €';
        echo '<hr>';
        $man1->stampaNominativo();
        echo '<br>';
        $stipendio2 = $man1->calcolaStipendio(10);
        echo 'Stipendio '.$stipendio2.' €';
    } catch (\Exception $e) {
        echo 'Si è verificato un errore: '. $e->getMessage();
    }





?>
