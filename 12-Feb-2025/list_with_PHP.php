<!DOCTYPE HTML>
<html>
      <head>
	    <title>List in PHP</title>
      </head>

<body>
       <h2>Make a list with PHP as described:</h2>
       <h2>Make a variable $type, which may contain a value square/disc/circle.</h2>
	<ul>
	    <li>if $type contain the value “square” then it should create a even number list with type square</li>
	    <li>if $type contains the value disc then it should create a odd number list with type disc.</li>
	    <li>if $type contains the value circle then it should create a square number list with type circle.</li>
	    <li>If $type contains any other value then it should display “not a valid type”</li>
	</ul>
	<hr/>
	
	<?php 
		$type = "disc";
	?>

	<h1>Input Value = <?php echo $type; ?></h1>
	
	   <ul type="<?php echo $type; ?>">
	<?php 
	    if ($type == "square") {
		
  		  for($i = 0; $i<= 100; $i++)
		  {
			if($i%2 == 0){
			  ?> 
				 <li><?php echo "$i"; ?> </li>
		  <?php 
			}
		  }

		?> 
		  </ul>
	    <?php 
	    } elseif ($type == "disc") {
    	     
  		  for($i = 0; $i<= 100; $i++)
		  {
			if($i%2 != 0){
			  ?> 
				 <li><?php echo "$i"; ?> </li>
		<?php
			}
		  }

		?> 
		  </ul>
	    <?php 

	    } elseif ($type == "circle") {
   	  
  		  for($i = 0; $i<= 100; $i++)
		  { 
		    ?>
		 	 <li><?php echo $i*$i; ?> </li>
		  <?php
		  }

		?> 
		  </ul>
	    <?php 

		} else {
    		 echo "<h>Not a valid type";
	  }
	?>
	</ul>

	
</body>

</html>