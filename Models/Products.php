<?php

//Impostare la classe per i prodotti generici
class Products{
    public $name;
    public $category;
    public $price;
    public $vote;
    public $description;

    public $img;
    //Costruttore
    public function __construct(string $_name, string $category, float $_price, float $_vote, string $_description, string $_img){
        $this->name = $_name;
        $this->category = $category;
        $this->price = $_price;
        $this->vote = $_vote;
        $this->description = $_description;
        $this->img = $_img;
    }

    // Metodo per mostrare le informazioni del prodotto
    public function getInfo() {
        return [
            "name" => $this->name,
            "category" => $this->category,
            "price" => $this->price,
            "vote" => $this->vote,
            "description" => $this->description
        ];
    }
    
}

//Impostare la sottocategoria per prodotti di Cani;
class DogProduct extends Products{
   
}

//Impostare la sottoclasse per prodotti di Gatti;
class CatProduct extends Products{

}

// Dogs
$dogs = [
    new Products(1, 'cibo', 10, 9, 'Il biscotto è molto buono', 'Models/img/biscotto.jpeg'),
    new Products('gioco', 'accessorio', 20, 8, 'Gioco resistente per cani', 'Models/img/gioco_cani.webp')
];

// Cats
$cats = [
    new Products('lettiera', 'ogetti', 35, 7, 'la lettiera è scomoda', 'Models/img/lettiera.jpg'),
    new Products('pallina', 'gioco', 5, 10, 'la pallina è morbida', 'Models/img/pallina.webp')
];
