<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt Calculator</title>
</head>
<body>
    <script>
        var num1 = parseInt(prompt("Enter the first number: "));
        var num2 = parseInt(prompt("Enter the second number: "));
        var operator = prompt("Enter the operator (+, -, *, /): ");

        var result;

        switch (operator) {
            case "+":
                result = num1 + num2;
                break;
            case "-":
                result = num1 - num2;
                break;
            case "*":
                result = num1 * num2;
                break;
            case "/":
                result = num1 / num2;
                break;
            default:
                result = "Invalid operator";
        }

        console.log("Result: " + result);
        alert("Result: " + result);
    </script>
    
</body>
</html>