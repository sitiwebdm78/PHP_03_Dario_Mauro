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

Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, BarieetSan Giorgio Martire 2D“
 */

    class Continent{
        public $nameContinent;
        public function __construct($continent)
        {
            $this->nameContinent = $continent;
        }
    }

    class Nation extends Continent{
        public $nameNation; 
        public function __construct($continent, $nation)
        {
            parent::__construct($continent);
            $this->nameNation = $nation;
        }
    }

    class Region extends Nation{
        public $nameRegion; 
        public function __construct($continent, $nation, $region)
        {
            parent::__construct($continent, $nation);
            $this->nameRegion = $region;
        }
    }

    class Province extends Region{
        public $nameProvince; 
        public function __construct($continent, $nation, $region, $province)
        {
            parent::__construct($continent, $nation, $region);
            $this->nameProvince = $province;
        }
    }

     class City extends Province{
        public $nameCity; 
        public function __construct($continent, $nation, $region, $province, $city)
        {
            parent::__construct($continent, $nation, $region, $province);
            $this->nameCity = $city;
        }
    }

     class Street extends City{
        public $nameStreet; 
        public function __construct($continent, $nation, $region, $province, $city, $street)
        {
            parent::__construct($continent, $nation, $region, $province, $city);
            $this->nameStreet = $street;
        }

        public function myactualityLocation()
        {
            echo "Attualmente sono ubicato in: \n $this->nameContinent, \n $this->nameNation, \n $this->nameRegion, \n in Province di: $this->nameProvince,\n nella city di: $this->nameCity, \n in: $this->nameStreet";
        }
    }

    $mylocation = new Street('Europa', 'Italia', 'Campania', 'Napoli', 'Napoli', 'Via Toledo n°77');
    $mylocation->myactualityLocation();
?>
