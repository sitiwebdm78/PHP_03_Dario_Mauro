<?php
    /* Selfwork PHP OOP 5
Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
Category
-- Attualita'
-- Sport
-- Gossip
-- Storia

Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo. */

    abstract class Category{
        abstract public function GetMyCategory(); 

    }

    class Acttuality extends Category{
        public function GetMyCategory(){
            echo "Questa è la Cetegoria Attualità. \n";
        }
    }

     class Sport extends Category{
        public function GetMyCategory(){
            echo "Questa è la Cetegoria Sport. \n";
        }
    }

     class Gossip extends Category{
        public function GetMyCategory(){
            echo "Questa è la Cetegoria Gossip. \n";
        }
    }

     class History extends Category{
        public function GetMyCategory(){
            echo "Questa è la Cetegoria Sroria. \n";
        }
    }

    $acttuality1 = new Acttuality();
    $sport1 = new Sport();
    $gossip1 = new Gossip();
    $history1 = new History();

    $acttuality1->GetMyCategory();
    $sport1->GetMyCategory();
    $gossip1->GetMyCategory();
    $history1->GetMyCategory();

?>