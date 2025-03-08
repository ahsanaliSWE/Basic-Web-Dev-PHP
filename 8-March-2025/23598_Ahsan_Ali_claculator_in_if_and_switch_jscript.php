<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator in If and Switch</title>
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
        var $num1 = 10;
        var $num2 = 5;
        var $operator = "+";
        var $result = 0;
        
        document.write("<h1>Calculator in If and Switch</h1><hr>");

        document.write("<h2>Calculator in If else if</h2><hr>");
        document.write("Number 1: " + $num1 + "<br>");
        document.write("Number 2: " + $num2 + "<br>");
        document.write("Operator: " + $operator + "<br>");
        
        if($operator == "+"){
            $result = $num1 + $num2;
        } else if($operator == "-"){
            $result = $num1 - $num2;
        } else if($operator == "*"){
            $result = $num1 * $num2;
        } else if($operator == "/"){
            $result = $num1 / $num2;
        } else {
            $result = "Invalid Operator";
        }
        
        document.write("Result: " + $num1 + " " + $operator + " " + $num2 + " = " + $result);
        
        document.write("<hr/><h2>Calculator in Switch</h2><hr />");
        document.write("Number 1: " + $num1 + "<br>");
        document.write("Number 2: " + $num2 + "<br>");
        document.write("Operator: " + $operator + "<br>");
        
        switch($operator){
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                $result = $num1 / $num2;
                break;
            default:
                $result = "Invalid Operator";
        }
        
        document.write("Result: " + $num1 + " " + $operator + " " + $num2 + " = " + $result);
    </script>
</head>
<body>
    
</body>
</html>