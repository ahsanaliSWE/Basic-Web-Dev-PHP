<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series in Javascript</title>
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
        var $limit = 10;
        document.write("<h1>Generate Fibonacci Series of " + $limit + " numbers</h1><hr>");
        
        var $count = 1;
        var $num1 = 0;
        var $num2 = 1;
        var $num3 = 0;
        
        do{
            document.write($num1 + " ");
            $num3 = $num1 + $num2;  
            $num1 = $num2;	     
            $num2 = $num3;
            
            $count++;
        } while($count <= $limit); 
        
        document.write("<hr>");
        
        var $count = 1;
        var $num1 = 0;
        var $num2 = 1;
        var $num3 = 0;
        
        do{
            $num3 = $num1 + $num2;  
            document.write($num1 + " + " + $num2 + " = " + $num3 + "<br>");
            $num1 = $num2;	     
            $num2 = $num3;
            
            $count++;
        } while($count <= $limit-2);
    </script>
</head>
<body>
    
</body>
</html>