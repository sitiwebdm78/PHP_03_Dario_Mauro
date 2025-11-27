<?php
/* Selfwork PHP OOP 4
Dato il seguente codice di partenza:
class Car {
  private $num_telaio;
}

class Fiat extends Car {
  protected $license;
  protected $name;
}
Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“. */

    class Car {
        private $num_telaio;
        protected function setTelaio($string){
            return $this->num_telaio = $string;
        }
        protected function getTelaio(){
            return $this->num_telaio;
        }
    }

    class Fiat extends Car {
        protected $license;
        protected $name;

        public function __construct($nome, $targa){
            $this->name = $nome;
            $this->license = $targa;
            
        }
        public function setMycar($string){
            return $this->setTelaio($string);
        }

        public function getMyCar(){
            return $this->getTelaio();

        }
        public function printMessage(){
            echo "La mia auto è una Fiat $this->name con targa: $this->license, avente numero telaio: " . $this->getTelaio() . "\n";
            
        }

    }

    $car = new Fiat('Uno', 'NA D75875');
    $car->setMycar('1987Y56B-5432E');
    $car->printMessage();

?>