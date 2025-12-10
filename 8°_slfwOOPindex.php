<?php
        /* Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:

    public function sum($a, $b) {
    return $a + $b;
    }

    public function sub($a, $b) {
    return $a - $b;
    }

    public function mul($a, $b) {
    return $a * $b;
    }

    public function div($a, $b) {
    return $a / $b;
    }

    public function sqr($a){
    return sqrt($numero);
    }


    Crea quindi una classe Rettangolo con i seguenti attributi:
    Base (b);
    Altezza (h);

    Il tuo compito sara' quello di creare 3 metodi che andranno a calcolare:
    Area → b * h
    Perimetro → 2 * b + 2 * h
    Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)

    Tutte queste operazioni pero' dovranno essere richiamate dal trait Calculator
    */

    trait Calculator{
            public function Sum($a, $b) {
            return $a + $b;
        }

            public function Sub($a, $b) {
            return $a - $b;
        }

            public function Mol($a, $b) {
            return $a * $b;
        }

            public function Div($a, $b) {
            return $a / $b;
        }

            public function Sqr($a){
            return sqrt($a);
        }
    }

    class Rectangle{
        use Calculator;
        public $base;
        public $height;

        public function __construct($b, $h){
            $this->base = $b;
            $this->height = $h;
        }

// Primo Metodo per il Calcolo dell'Area del Rettangolo!
        public function GetSurfaceArea(){
            return $this->Mol($this->base, $this->height);
        }
// Primo Metodo per il Calcolo Perimetro del Rettangolo!
        public function GetPerimeter(){
            return $this->Sum($this->base, $this->height)*2;
        }
// Primo Metodo per il Calcolo Diagonale del Rettangolo!
        public function GetDiagonal(){
            $sumExponentiation = $this->Sum($this->base**2, $this->height**2);
            return $this->Sqr($sumExponentiation);
        }
    }

    $rectangle1 = new Rectangle(5, 6);
        echo "L'area di Superfice del Rettangolo è: " . $rectangle1->GetSurfaceArea() . "cm.\n";

    $rectangle2 = new Rectangle(9, 3);
        echo "Il Perimetro del Rettangolo è di:" . $rectangle2->GetPerimeter() . "cm. \n";

    $rectangle3 = new Rectangle(7, 17);
        echo "La Diagonale del Rettangolo è di:" . $rectangle3->GetDiagonal() . "cm. \n";


?>