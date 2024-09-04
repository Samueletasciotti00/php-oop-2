<?php

//Import di Products
require_once __DIR__ . '/Categories.php';

//Import di Type
require_once __DIR__ . '/Products.php';

//Impostare la classe per i prodotti generici
class Products{
    public $name;
    public $category;
    public $price;
    public $vote;
    public $description;

    //Costruttore
    public function __construct(string $_name, string $category, float $_price, float $_vote, string $_description){
        $this->name = $_name;
        $this->category = $category;
        $this->price = $_price;
        $this->vote = $_vote;
        $this->description = $_description;
    }

    // Metodo per mostrare le informazioni del prodotto
    public function getInfo() {
        echo "Name: $this->name, Category: $this->category, Price: $this->price, Vote: $this->vote, Description: $this->description";
    }
    
}
$array1 = [
    new Products('coseacaso','coseacaso','124','124','coseacaso')
];

var_dump($array1);
var_dump($array1);