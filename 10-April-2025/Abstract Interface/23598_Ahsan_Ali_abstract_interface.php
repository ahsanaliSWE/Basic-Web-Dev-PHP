<?php

    interface Inventory {
        public function addProduct($name, $price);
        public function getProducts();
    }

    abstract class Customer {
        protected $customer_name = [];
        protected $email = [];
    
        abstract public function addCustomer($name, $email);
        abstract public function getCustomers();
    }

    class ProductManager extends Customer implements Inventory {

        private $product_name = [];
        private $product_price = [];

        public function addProduct($name, $price) {
            $this->product_name[] = $name;
            $this->product_price[] = $price;
            echo "Product added: $name ($price)<br>";
        }
    
        public function getProducts() {
            if (count($this->product_name) > 0) {
                echo "<h3>All Products</h3>";
                foreach ($this->product_name as $key => $product) {
                    echo "Product name: " . $product . ", Price: $" . $this->product_price[$key] . "<br>";
                }
            } else {
                echo "No product found.<br>";
            }
        }

        public function addCustomer($name, $email) {
            $this->customer_name[] = $name;
            $this->email[] = $email;
            echo "Customer added: $name ($email)<br>";
        }
    
        public function getCustomers() {
            if (count($this->customer_name) > 0) {
                echo "<h3>All Customers</h3>";
                foreach ($this->customer_name as $key => $name) {
                    echo "Customer Name: " . $name . ", Email: " . $this->email[$key] . "<br>";
                }
            } else {
                echo "No customers found.<br>";
            }
        }
}
    
    $manager = new ProductManager();

    $manager->addProduct("Monitor", 100);
    $manager->addProduct("Laptop", 1000);
    $manager->addProduct("Keyboard", 500);
    $manager->addProduct("Mouse", 200);
    $manager->getProducts();

    echo "<br>";
    $manager->addCustomer("Ali", "ali@gmail.com");
    $manager->addCustomer("Ahmad", "ahmad@gmail.com");
    $manager->addCustomer("Awais", "awais@gmail.com");
    $manager->addCustomer("Zain", "zain@gmail.com");
    $manager->getCustomers();



?>