
<?php

/* Selfwork PHP OOP 1 - MODULO 8 LEZIONE OBJECT ORIENTED PROGTAMMING 
Crea una classe Company che abbia i seguenti attributi pubblici:
name: name dell’azienda;
location: stato in cui e' ubicata la sede dell’azienda;
tot_employees: number di dipedenti$dipendenti in quella sede (di default, 0);
Crea 5 istanze di 5 aziende diverse
Crea un metodo che permetta di printre a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendendi, allora print: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto.
Implementa un nuovo metodo che e' in grado di calcolare l’insieme totale delle spese di tutte le aziende create.
Implementa un metodo statico che permetta di printre a terminale questo totale assoluto di tutte le aziende messe insieme. 
 */

                /* ------- CREAZIONE DELLA CLASSE "Azienda" ------- */
    
        class Company{
            public $name;
            public $location;
            public $tot_employees;
            public static $average_wages = 1500;
            public static $total = 0;
//Valorizzazione degli attibuti --> "--construct"
            public function __construct($company, $country, $employe){
            $this->name = $company;
            $this->location = $country;
            $this->tot_employees = $employe;

        }

//Creazione Metodo Differrenza employees
        public function controlemployees($int1, $int2){
            if($int1 > $int2){
                return true;
            }
            return false;
        }
//Funzione
        public function printEmployees($number = 0){
            if($this->controlemployees($this->tot_employees, $number)){
                    echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti. \n";
            }else{
                echo "L'ufficio $this->name con sede in $this->location non ha dipendenti \n";
            }
        }
        public function annualCosts($int){
            return $this->tot_employees * (self::$average_wages * $int);
        }

        public function printannualCosts($month = 12){
            echo " ******* $this->name ******* \n "; 
            echo "Il costo annuale dell'Ufficio $this->name è di: " . $this->annualCosts($month) . " Euro.";
        }

        public function progressiveCosts($month = 12){
            return self::$total += $this->annualCosts($month);
        }
        
        public static function printFinaltotal (){
            echo "La spesa total finale che comprende tutte le compagnie è di: " . self::$total .  " Euro. \n";
            }
        
    }

// Instanziamo 5 Oggetti.

$company1 = new Company('Direzione Aulab', 'Italia', 50);
    $company1->printEmployees();
    $company1->progressiveCosts();

$company2 = new Company ('Aulab Startup', 'Inghilterra', 0);
    $company2->printEmployees();
    $company2->progressiveCosts();

$company3 = new Company ('Apple', 'Instanbul', 5560);
    $company3->printEmployees();
    $company3->progressiveCosts();

$company4 = new Company ('Oracle', 'Stati Uniti', 100000);
    $company4->printEmployees();
    $company4->progressiveCosts();

$company5 = new Company ('Tim', 'Spagna', 19577);
    $company5->printEmployees();
    $company5->progressiveCosts();

$company6 = new Company ('Vanhool', 'Danimarca', 7500);
    $company6->printEmployees();
    $company6->progressiveCosts();

Company::printFinaltotal();






?>