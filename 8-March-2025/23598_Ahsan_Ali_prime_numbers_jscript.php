<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers in Javascript</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
    </style>
    <script>
        // Prime Number Series
 	    /* 2 3 5 7 11 13 */
        
        var $limit = 13;
        document.write("<h1>Prime Numbers in Javascript</h1><hr>");
        document.write("Prime Numbers up to " + $limit + ": ");

        for(var $i = 2; $i <= $limit; $i++){
	    var $isPrime = true;
		    for(var $j = 2; $j*$j <= $i; $j++){
		        if ($i % $j == 0) {
          	          $isPrime = false;
                          break;
       	 	        }
		    }

	     if ($isPrime){
        	document.write($i + " ");
    	     }
	    }
    </script>
</head>
<body>    
</body>
</html>