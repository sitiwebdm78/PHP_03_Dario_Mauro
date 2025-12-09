<?php
    /* Selfwork PHP OOP 6
Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
Titolo
Categoria
Tag

Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi. */

    require_once('5°_slfwOOPindex.php');

    class Post{
        private $title;
        private $category;
        private $tag;

        public function __construct($titolo, Category $categoria, $tag){
            $this->title = $titolo;
            $this->category = $categoria;
            $this->tag = $tag;

        }
        public function getTitle(){
            return $this->title;
        }

         public function getCategory(){
            return $this->category->GetMyCategory();
        }

         public function getTag(){
            return $this->tag;
        }

    }

    $post1 = new Post('Titolo 1', new Acttuality(), 'tag 1');
    $post2 =new Post ('Titolo 2', new Gossip(), 'tag 2');

    echo $post1->getCategory();
    echo $post2->getTitle();

    /* Per evitare la stampa a video delle istanze eseguite nel selfwork n°5, queste ultime sono state commentate.*/




?>