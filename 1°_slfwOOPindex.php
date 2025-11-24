
<?php

/* Selfwork PHP OOP 1 - MODULO 8 LEZIONE OBJECT ORIENTED PROGTAMMING 
Crea una classe Company che abbia i seguenti attributi pubblici:
name: nome dell’azienda;
location: stato in cui e' ubicata la sede dell’azienda;
tot_employees: numero di dipedenti$dipendenti in quella sede (di default, 0);
Crea 5 istanze di 5 aziende diverse
Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendendi, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto.
Implementa un nuovo metodo che e' in grado di calcolare l’insieme totale delle spese di tutte le aziende create.
Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme. 
 */

                /* ------- CREAZIONE DELLA CLASSE "Azienda" ------- */
    
        class Azienda{
            public $nome;
            public $località;
            public $tot_occupati;
            public static $med_salari = 1500;
            public static $totale = 0;
//Valorizzazione degli attibuti --> "--construct"
            public function __construct($azienda, $nazione, $dipendenti){
            $this->nome = $azienda;
            $this->località = $nazione;
            $this->tot_occupati = $dipendenti;

        }

//Creazione Metodo Differrenza Occupati
        public function contrllOccupati($occ1, $occ2){
            if($occ1 > $occ2){
                return true;
            }
            return false;
        }
//Funzione
        public function stampaDipendenti($numero = 0){
            if($this->contrllOccupati($this->tot_occupati, $numero)){
                    echo "L'ufficio $this->nome con sede in $this->località ha ben $this->tot_occupati dipendenti. \n";
            }else{
                echo "L'ufficio $this->nome con sede in $this->località non ha dipendenti \n";
            }
        }
        public function costiAnnuali($int){
            return $this->tot_occupati * (self::$med_salari * $int);
        }

        public function stampaCostiannuali($mesi = 12){
            echo " ******* $this->nome ******* \n "; 
            echo "Il costo annuale dell'Ufficio $this->nome è di: " . $this->costiAnnuali($mesi) . " Euro.";
        }

        public function costiProgressivi($mesi = 12){
            return self::$totale += $this->costiAnnuali($mesi);
        }
        
        public static function stampatotaleFinale (){
            echo "La spesa totale finale che comprende tutte le compagnie è di: " . self::$totale .  " Euro. \n";
            }
        
    }

// Instanziamo 5 Oggetti.

$compagnia1 = new Azienda('Direzione Aulab', 'Italia', 50);
    $compagnia1->stampaDipendenti();
    $compagnia1->costiProgressivi();

$compagnia2 = new Azienda ('Aulab Startup', 'Inghilterra', 0);
    $compagnia2->stampaDipendenti();
    $compagnia2->costiProgressivi();

$compagnia3 = new Azienda ('Apple', 'Instanbul', 5560);
    $compagnia3->stampaDipendenti();
    $compagnia3->costiProgressivi();

$compagnia4 = new Azienda ('Oracle', 'Stati Uniti', 100000);
    $compagnia4->stampaDipendenti();
    $compagnia4->costiProgressivi();

$compagnia5 = new Azienda ('Tim', 'Spagna', 19577);
    $compagnia5->stampaDipendenti();
    $compagnia5->costiProgressivi();

$compagnia6 = new Azienda ('Vanhool', 'Danimarca', 7500);
    $compagnia6->stampaDipendenti();
    $compagnia6->costiProgressivi();

Azienda::stampatotaleFinale();

//$compagnia1->stampaCostiannuali();


/* 
$compagnia2 = new Azienda('Aulab')
 */






?>