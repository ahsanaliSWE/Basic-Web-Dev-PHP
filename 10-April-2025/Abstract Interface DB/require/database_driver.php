<?php

	interface DatabaseDriver
	{
		public function connection_open();
		
		public function execute_query($query);
		
		public function connection_close();
	}

?>