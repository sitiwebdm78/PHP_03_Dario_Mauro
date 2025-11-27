<?php
/* crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:

le classi non devono avere attributi;
ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
non puoi realizzare metodi definiti public per stampare il risultato;
l’unico metodo public ammesso e' il costrutture.

Il risultato atteso sara':

$magikarp = new Fish();
//Nel terminale visaulizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash! */

    class Vertebrate{
        public function __construct(){
            $this->printVertebrate();
        }
        protected function printVertebrate(){
            echo "Sono un animale Vertebrato! \n";
        }
    }

    class Warmblood extends Vertebrate{
        public function __construct()
        {
            parent::__construct();
            $this->printWarmblood();
        }

        protected function printWarmblood(){
            echo "Sono un animale a sengue caldo!. \n";
        }
    }

     class Coldblood extends Vertebrate{
        public function __construct()
        {
            parent::__construct();
            $this->printColdblood();
        }

        protected function printColdblood(){
            echo "Sono un animale a sengue freddo!. \n";
        }
    }

    class Mammal extends Warmblood{
        public function __construct()
        {
            parent::__construct();
            $this->printMammal();
        }
        protected function printMammal(){
            echo "Sono un mammifero! \n";
        }
    }

class Bird extends Warmblood{
        public function __construct()
        {
            parent::__construct();
            $this->printBird();
        }
        protected function printBird(){
            echo "Sono un uccello! \n";
        }
    }
    
    class Fish extends Coldblood{
        public function __construct()
        {
            parent::__construct();
            $this->printFish();
        }
        protected function printFish(){
            echo "Sono un pesce, Splash! \n";
        }
    }

    class Reptile extends Coldblood{
        public function __construct()
        {
            parent::__construct();
            $this->printReptile();
        }
        protected function printReptile(){
            echo "Sono un Rettile! \n";
        }
    }

    class Amphibian extends Coldblood{
        public function __construct()
        {
            parent::__construct();
            $this->printAmphibian();
        }
        protected function printAmphibian(){
            echo "Sono un Anfibio! \n";
        }
    }

    $serpente = new Reptile();
    $canarino = new Bird();
    $leone = new Mammal();
    $rana = new Amphibian();
    $sgombro = new Fish();

?>