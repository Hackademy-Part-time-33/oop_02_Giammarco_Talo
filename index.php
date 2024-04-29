<?php


// //* ESERCIZIO 1

// class Continent
// {
//     public $nameContinent;
    
//     public function __construct($continent){
//         $this->nameContinent = $continent; 
//     }
// }

// class Country extends Continent
// {
//     public $nameCountry;
    
//     public function __construct($continent, $country){
//         $this->nameCountry = $country;
//         parent::__construct($continent);
//     }
    
// }

// class Region extends Country
// {
//     public $nameRegion;
    
//     public function __construct($continent, $country, $region){
//         $this->nameRegion = $region;
//         parent::__construct($continent,$country);
//     }
    
// }

// class Province extends Region
// {
//     public $nameProvince;
    
//     public function __construct($continent, $country, $region, $province){
//         $this->nameProvince = $province;
//         parent::__construct($continent,$country, $region);
        
//     }
    
// }

// class City extends Province
// {
//     public $nameCity;
    
//     public function __construct($continent, $country, $region, $province, $city){
//         $this->nameCity = $city;
//         parent::__construct($continent,$country, $region, $province);
//     }
    
// }

// class Street extends City
// {
//     public $nameStreet;
    
//     public function __construct($continent, $country, $region, $province, $city, $street){
//         $this->nameStreet = $street;
//         parent::__construct($continent,$country, $region, $province, $city);
//     }
//     public function location(){
//         echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, Strada $this->nameStreet";
//     }
// }

// $myLocation = new street("Europa", "Italia" ,"Puglia", "Ba", "Bari", "San Giorgio Martire 2D");
// $myLocation -> location();



// //* ESERCIZIO 2

// class Vertebrate {
//     public function __construct() {
//         $this->printAnimals();
//     }

//     protected function printAnimals() {
//         echo "\n" . "Sono un animale vertebrato, ";
//     }
// }

// class WarmBlooded extends Vertebrate {
//     public function __construct() {
//         $this->printAnimals();
//     }
//     protected function printAnimals() {
//         parent::printAnimals();
//         echo "Sono un animale a sangue caldo, ";
//     }
// }

// class Mammals extends WarmBlooded {
//     protected function printAnimals() {
//         parent::printAnimals();
//         echo "Sono un mammifero ";
//     }
// }

// class Birds extends WarmBlooded {
//     protected function printAnimals() {
//         parent::printAnimals();
//         echo "Sono un uccello ";
//     }
// }

// class ColdBlooded extends Vertebrate {
//     protected function printAnimals() {
//         parent::printAnimals();
//         echo "Sono un animale a sangue freddo, ";
//     }
// }

// class Fish extends ColdBlooded {
//     protected function printAnimals() {
//         parent::printAnimals();
//         echo "Sono un pesce ";
//     }
// }

// class Reptile extends ColdBlooded {
//     protected function printAnimals() {
//         parent::printAnimals();
//         echo "Sono un rettile ";
//     }
// }

// class Amphibians extends ColdBlooded {
//     protected function printAnimals() {
//         parent::printAnimals();
//         echo "Sono un anfibio ";
//     }
// }

// $salmone = new Fish();
// $pikachu = new Mammals();



//* ESERCIZIO 3

class Car {
    protected $targa;
    private $num_telaio;
    public function __construct($targa, $num_telaio) {
        $this->targa = $targa;
        $this->num_telaio = $num_telaio;
    }
    protected function printCar(){
        echo "e numero di telaio $this->num_telaio";
    }
  }
    
  class Fiat extends Car {
    protected $nome;
    protected $license;
    protected $color;
    public function __construct($nome, $license, $color, $targa, $num_telaio) {
        parent::__construct($targa,$num_telaio);
        $this->nome = $nome;
        $this->license = $license;
        $this->color = $color;
    }
    public function printFiat(){
        echo "“La mia macchina è una $this->nome, con targa $this->targa ";
        parent::printCar();
    }
  }

  $myCar = new Fiat("Punto", "", "", "AB123CD", "1234" );
  $myCar->printFiat();

?>
