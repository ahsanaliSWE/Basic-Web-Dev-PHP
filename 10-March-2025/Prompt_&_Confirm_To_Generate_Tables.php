<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt & Confirm To Generate Tables</title>
</head>
<body>
    <center>
        <h1>Generate Tables</h1>
        <p>Enter a number to generate a table.</p>
        <hr>
        
        <div id="table"></div>
        
    </center>
    <script>

        var table = document.getElementById("table");

        var num = parseInt(prompt("Enter a number: "));
    
        var tableHTML = "<h2>Table of " + num + "</h2>";
            
        for (var i = 1; i <= 10; i++) {
            console.log(num + " x " + i + " = " + num * i);
            tableHTML += "<p>" + num + " x " + i + " = " + num * i + "</p>";   
        }

        table.innerHTML = tableHTML;  

    </script>
    
</body>
</html>