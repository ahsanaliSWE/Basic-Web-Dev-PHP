<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial in Javascript</title>
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
        var $num = 5;
        var $factorial = 1;
        
        document.write("<h1>Factorial in Javascript</h1><hr>");
        document.write("Factorial of " + $num + " is: ");
        
        for(var $i = 1; $i <= $num; $i++){
            $factorial *= $i;
        }
        
        document.write($factorial);
    </script>
</head>
<body>
    
</body>
</html>