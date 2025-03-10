<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt Add Event</title>
</head>
<body>
    <h1>Sum of all even numbers</h1>
    <p>Enter a number. If you enter an odd number, the program will stop and show the sum of all even numbers you entered.</p>
    <script>

        
        var sum = 0;

        while (true) {
            let num = parseInt(prompt("Enter a number: "));
        
            if (num % 2 !== 0) { 
                break;
            }
        
            sum += num; 
        }

        console.log("Sum of all even numbers:"+sum);
        alert("Sum of all even numbers:" + sum);

    </script>
    
</body>
</html>