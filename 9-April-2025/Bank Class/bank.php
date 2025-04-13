<?php

    require_once("require/database_settings.php");
    require_once("require/database.php");

    class Bank{
       
        public $host_name	=	NULL;
		public $user_name	=	NULL;
		public $password	=	NULL;
		public $database 	=	NULL;
		public $connection 	= 	NULL;
		public $query		=	NULL;
		public $result		=	NULL;

        private $user_id;
        private $account_id;
        private $name;
        private $email;
        private $phone;
        private $accountNumber;
        private $balance = 0;
		
		public function __construct($host_name, $user_name, $password, $database) {
			$this->host_name 	= 	$host_name;
			$this->user_name	=	$user_name;
			$this->password		= 	$password;
			$this->database		=	$database;
			
			$this->connection = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->database);
		
			if(mysqli_connect_errno())
			{
				echo "<p style='color:red'><b>Database Connection Problem!...</b></p>";
				echo "<p style='color:red'><b>Error No: </b>".mysqli_connect_errno()."</p>";
				echo "<p style='color:red'><b>Error Message: </b>".mysqli_connect_error()."</p>";
			}
		}

        public function user_information($name, $email, $phone)  {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->accountNumber = mt_rand(100000000, 999999999);

            $userQuery = "INSERT INTO user (name, email, phone) VALUES ('".$name."', '".$email."', '".$phone."')";
            $user_result = mysqli_query($this->connection, $userQuery);

            $this->userId = mysqli_insert_id($this->connection);

            $accountQuery = "INSERT INTO account (user_id, bank_account_no, balance) VALUES ('".$this->userId."', '".$this->accountNumber."', '".$this->balance."')";

            $account_result = mysqli_query($this->connection, $accountQuery);
            $this->accountid = mysqli_insert_id($this->connection);

            if($user_result && $account_result){
                echo "User Information inserted in database sucessfully!...";
            }else{
                echo "Error!...: User Information Not inserted in database ";
            }
        }
		

        public function deposit($amount) {
            if ($amount > 0) {
                $this->balance += $amount;
                $query = "UPDATE account SET balance = balance + '".$this->balance."' WHERE bank_account_no = '".$this->accountNumber."'";
                mysqli_query($this->connection, $query);
                return "Deposit successful!";
            } else {
                return "Error invalid amount!";
            }
        }

        public function withdraw($amount) {
            
            if ($amount > 0 && $this->balance >= $amount) {
                $this->balance -= $amount;
                $query = "UPDATE account SET balance = balance - '".$this->balance."' WHERE bank_account_no = '".$this->accountNumber."'";
                mysqli_query($this->connection, $query);
                return "Withdrawal successful!";
            } else {
                return "Error Insufficient balance or invalid amount!";
            }
        }

        public function getBalance() {
            return $this->balance;
        }

        public function getAccountDetails() {
                $query = 'SELECT u.name, u.email, u.phone, a.bank_account_no, a.balance 
                FROM user u
                JOIN account a ON u.user_id = a.user_id
                WHERE a.bank_account_no = "'.$this->accountNumber.'"';

                $result = mysqli_query($this->connection, $query);

                if($result->num_rows > 0){
                    $rows = mysqli_fetch_assoc($result);
                    return "<b>Full Name:</b> ". $rows['name'] ."<br>".
                    "<b>Email:</b> ". $rows['email'] ."<br>".
                    "<b>Phone No:</b> ". $rows['phone'] ."<br>".
                    "<b>Account No:</b> ". $rows['bank_account_no'] ."<br>".
                    "<b>Balance:</b> ". $rows['balance'] ."<br>";
                }
        }
        public function __destruct()
		{
			mysqli_close($this->connection);
		}
    }

    $bank1 = new Bank($host_name, $user_name, $password, $database);

    $bank1->user_information("John Doe","johndoe@gmail.com", "0333-1234567");
    echo "<br>";
    echo$bank1->deposit(1000);
    echo "<br>Balance: ". $bank1->getBalance() . "<br>";
    echo$bank1->withdraw(500);
    echo "<br>";
    echo $bank1->getAccountDetails() . "<br><hr>";

    $bank2 = new Bank($host_name, $user_name, $password, $database);
    $bank2->user_information("Alice Smith", "alice@example.com", "0312-9876543");
    echo "<br>";
    echo $bank2->deposit(2000);
    echo "<br>Balance: ". $bank2->getBalance() . "<br>";
    echo $bank2->withdraw(1500);
    echo "<br>";
    echo $bank2->getAccountDetails() . "<br><hr>";

    $bank3 = new Bank($host_name, $user_name, $password, $database);
    $bank3->user_information("Ahmed Khan", "ahmedkhan@mail.com", "0300-1230000");
    echo "<br>";
    echo $bank3->deposit(500);
    echo "<br>after deposit Balance: ". $bank3->getBalance() . "<br>";
    echo $bank3->withdraw(700); 
    echo "<br>";
    echo $bank3->getAccountDetails() . "<br><hr>"; 




?>