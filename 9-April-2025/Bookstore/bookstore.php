<?php
    class Author{
        private $name   = NULL;
        private $email  = NULL;
        private $gender = NULL;

        public function __construct($name, $gender, $email){
                $this->name = $name;
                $this->email = $email;

                if ($gender == 'm' || $gender == 'f') {
                    $this->gender = $gender;
                 } else {
                    echo "Invalid gender! use 'm' or 'f'.";
                    $this->gender = 'null';
                 }
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getGender(){
            return $this->gender;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setGender($gender){
            $this->gender = $gender;
        }

        public function print(){
            return $this->getName() . " (" . $this->getGender(). ") at " . $this->getEmail() . "<br>";    
        }
    }

    class Book extends Author{

        private $name       = NULL;
        private $author     = NULL;
        private $price      = 0;
        private $qtyInStock = 0;

        public function __construct($name, $author, $price, $qtyInStock){

            $this->name = $name;
            $this->author = $author;

            if ($price > 0) {
                $this->price = $price;
            } else {
                echo "Invalid price. Must be positive.<br>";
            }
    
            if ($qtyInStock >= 0) {
                $this->qtyInStock = $qtyInStock;
            } else {
                echo "Invalid stock quantity. Must be zero or positive.<br>";
            }
        }

        public function getName(){
            return $this->name;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getQtyInStock(){
            return $this->qtyInStock;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setAuthor($author){
            $this->author = $author;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function setQtyInStock($qtyInStock){
            $this->qtyInStock = $qtyInStock;
        }

        public function print(){
            return $this->getName() . " by " . $this->getAuthor()->print();
        }

        public function getAuthorName(){
            return $this->getAuthor()->getName();
        }

    }

    /*--------Object 1---------- */
    $author1 = new Author("John", "m", "johndoe@gmail.com");
    echo $author1->print();

    $book1 = new Book("PHP Programming", $author1, 29.99, 100);
    echo $book1->print();
    echo "Price: " . $book1->getPrice() . "<br>";
    echo "Quantity in Stock: " . $book1->getQtyInStock() . "<br>";
    echo "Author Name: " . $book1->getAuthorName() . "<br>";
    echo "Author Email: " . $book1->getAuthor()->getEmail() . "<br>";

    echo "<br><hr>";

    /*--------Object 2---------- */
    $author2 = new Author("Emily Carter", "f", "emily@example.com");
    echo $author2->print();

    $book2 = new Book("Learning JavaScript", $author2, 39.50, 50);
    echo $book2->print();
    echo "Price: " . $book2->getPrice() . "<br>";
    echo "Quantity in Stock: " . $book2->getQtyInStock() . "<br>";
    echo "Author Name: " . $book2->getAuthorName() . "<br>";
    echo "Author Email: " . $book2->getAuthor()->getEmail() . "<br>";

    echo "<br><hr>";

    /*--------Object 3---------- */
    $author3 = new Author("David Miller", "m", "david.miller@books.org");
    echo $author3->print();

    $book3 = new Book("MySQL for Beginners", $author3, 24.75, 75);
    echo $book3->print();
    echo "Price: " . $book3->getPrice() . "<br>";
    echo "Quantity in Stock: " . $book3->getQtyInStock() . "<br>";
    echo "Author Name: " . $book3->getAuthorName() . "<br>";
    echo "Author Email: " . $book3->getAuthor()->getEmail() . "<br>";

    echo "<br><hr>";

    
?>
