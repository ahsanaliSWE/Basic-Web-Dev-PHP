<?php
	class Database
	{
		public $host_name	=	NULL;
		public $user_name	=	NULL;
		public $password	=	NULL;
		public $database 	=	NULL;
		public $connection 	= 	NULL;
		public $query		=	NULL;
		public $result		=	NULL;
		
		public function __construct($host_name, $user_name, $password, $database)
		{
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
		
		public function select($columns, $table)
		{
			$this->query = "SELECT ".$columns." FROM ".$table;
			
			$this->result = mysqli_query($this->connection, $this->query) or die(mysqli_error($this->connection));
			
			return $this->result;
		}
		
		public function login($email, $password)
		{
			$this->query = "SELECT * FROM user WHERE email='".$email."' AND password='".$password."'";
			
			$this->result = mysqli_query($this->connection, $this->query) or die(mysqli_error($this->connection));
			
			return $this->result;
		}

				
		public function __destruct()
		{
			mysqli_close($this->connection);
		}
	}
?>