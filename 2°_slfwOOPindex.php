<?php
    /* Selfwork PHP OOP 2
Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:
+-|Continent
+-----------|Country
+--------------------|Region
+---------------------------|Province
+------------------------------------|City
+------------------------------------------|Street

Ogni classe avra' un attributo public del tipo:
$nameContinent:
$nameCountry;
$nameRegion;
$nameProvince;
$nameCity;
$nameStreet;

La prima classe genitore avra' la seguente struttura:
class Continent
{
  public $nameContinent;
  
  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
  
}

Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Bari, Strada San Giorgio Martire 2D“
 */

    class Continente{
        public $nomeContinente;
        public function __construct($continente)
        {
            $this->nomeContinente = $continente;
        }
    }

    class Nazione extends Continente{
        public $nomeNazione; 
        public function __construct($continente, $nazione)
        {
            parent::__construct($continente);
            $this->nomeNazione = $nazione;
        }
    }

    class Regione extends Nazione{
        public $nomeRegione; 
        public function __construct($continente, $nazione, $regione)
        {
            parent::__construct($continente, $nazione);
            $this->nomeRegione = $regione;
        }
    }

    class Provincia extends Regione{
        public $nomeProvincia; 
        public function __construct($continente, $nazione, $regione, $provincia)
        {
            parent::__construct($continente, $nazione, $regione);
            $this->nomeProvincia = $provincia;
        }
    }

     class Città extends Provincia{
        public $nomeCittà; 
        public function __construct($continente, $nazione, $regione, $provincia, $città)
        {
            parent::__construct($continente, $nazione, $regione, $provincia);
            $this->nomeCittà = $città;
        }
    }

     class Strada extends Città{
        public $nomeStrada; 
        public function __construct($continente, $nazione, $regione, $provincia, $città, $strada)
        {
            parent::__construct($continente, $nazione, $regione, $provincia, $città);
            $this->nomeStrada = $strada;
        }

        public function miattualelocalità()
        {
            echo "Attualmento sono ubicato in: \n $this->nomeContinente, \n $this->nomeNazione, \n $this->nomeRegione, \n in Provincia di: $this->nomeProvincia,\n nella città di: $this->nomeCittà, \n in: $this->nomeStrada";
        }
    }

    $mialocalità = new Strada('Europa', 'Italia', 'Campania', 'Napoli', 'Napoli', 'Via Toledo n°77');
    $mialocalità->miattualelocalità();
?>
