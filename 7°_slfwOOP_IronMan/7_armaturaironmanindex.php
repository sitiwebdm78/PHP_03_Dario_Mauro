<?php
    require('flight.php');
    require('laser.php');
    require('repelray.php');
    require('shield.php');

    class IronManArmor{
        public $attack;
        public $defence;
        public static $counter;

        public function __construct(Attack $attacco, Defence $difesa){
            $this->attack = $attacco;
            $this->defence = $difesa;
            self::$counter++;
        }
        public function IronManAttack(){
            $this->attack->attacco();
        }

        public function IronManDefence(){
            $this->defence->difesa();
        }
    }

    $ironman1 = new IronManArmor(new Laser(), new Shield);

    $ironman1->IronManAttack();
    $ironman1->IronManDefence();

    echo  "Gli Oggetti instanziati fin'ora sono: " . IronManArmor::$counter ."\n";

    $ironman2 = new IronManArmor(new Repulsor(), new Flight() );

    $ironman2->IronManAttack();
    $ironman2->IronManDefence();

    echo  "Gli Oggetti instanziati fin'ora sono: " . IronManArmor::$counter ."\n";

?>