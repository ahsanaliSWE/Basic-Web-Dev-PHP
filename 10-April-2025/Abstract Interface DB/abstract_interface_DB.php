<?php

    require_once("require/database_settings.php");
    require_once("require/database_driver.php");

    interface Inventory {
        public function addProduct($name, $price);
        public function getProducts();
    }

    interface Customer {
        public function addCustomer($name, $email);
        public function getCustomers();
    }


    class Database implements DatabaseDriver{
		protected $host_name 	= 	NULL;
		protected $user_name	=	NULL;
		protected $password		=	NULL;
		protected $database		=	NULL;
		protected $connection	=	NULL;
		protected $query 		=	NULL;
		protected $result		=	NULL;
		
		public function __construct($host_name, $user_name, $password, $database)
		{
			$this->host_name 	= 	$host_name;
			$this->user_name	=	$user_name;
			$this->password 	= 	$password;
			$this->database 	= 	$database;
		}
		
		public function connection_open()
		{
			$this->connection = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->database);
		
			if(mysqli_connect_errno())
			{
				echo "<p style='color:red'><b>Database Connection Problem!...</b></p>";
				echo "<p style='color:red'><b>Error No: </b>".mysqli_connect_errno()."</p>";
				echo "<p style='color:red'><b>Error Message: </b>".mysqli_connect_error()."</p>";
			}
		}
		
		public function execute_query($query)
		{
			$this->query = $query;
			
			$this->result = mysqli_query($this->connection, $this->query) or die(mysqli_error($this->connection));
		
			return $this->result;
		}
		
		public function connection_close()
		{
			mysqli_close($this->connection);
		}
	}

    class ProductManager extends Database implements Inventory, Customer {

        public function __construct($host_name, $user_name, $password, $database) {
            parent::__construct($host_name, $user_name, $password, $database);
            $this->connection_open(); 
        }
    
        public function addProduct($name, $price) {
            $query = "INSERT INTO products (name, price) VALUES ('$name', $price)";
            $result = $this->execute_query($query);
            if ($result) {
                echo "<br>Product added: $name - $$price<br>";
            } else {
                echo "Error adding product: " . mysqli_error($this->connection) . "<br>";
            }
        }
    
        public function getProducts() {
            $result = $this->execute_query("SELECT * FROM products");

            if ($result->num_rows > 0) {
                echo "<h3>All Products</h3>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "ID: ".$row['product_id'].", Name: ".$row['name'].", Price: $".$row['price']."<br>";
                }
            } else {
                echo "No products found.<br>";
            }
        }

        public function addCustomer($name, $email) {
            $query = "INSERT INTO customers (name, email) VALUES ('$name', '$email')";
            $result = $this->execute_query($query);
            if ($result) {
                echo "<br>Customer added: $name ($email)<br>";
            } else {
                echo "<br>Error adding customer: " . mysqli_error($this->connection) . "<br>";
            }
        }
        
        public function getCustomers() {
            $result = $this->execute_query("SELECT * FROM customers");
        
            if ($result->num_rows > 0) {
                echo "<h3>All Customers</h3>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Customer ID: ".$row['customer_id'].", Name: ".$row['name'].", Email: ".$row['email']."<br>";
                }
            } else {
                echo "No customers found.<br>";
            }
        }
        
        public function __destruct() {
            $this->connection_close(); 
        }
}
    
    $manager = new ProductManager($host_name, $user_name, $password, $database);

    $manager->addProduct("Monitor", 100);
    $manager->getProducts();

    $manager->addCustomer("Ali", "ali@gmail.com");
    $manager->getCustomers();



?>