<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Like Google</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 100px;
            text-align: center;
        }
        h1 {
            color: #4285f4;
            font-size: 48px;
            margin-bottom: 30px;
        }
        .search {
            width: 60%;
            margin: 0 auto;
            position: relative;
        }
        input[type="text"] {
            width: 100%;
            padding: 15px 20px;
            border-radius: 30px;
            border: 1px solid #ccc;
            font-size: 18px;
            outline: none;
            box-shadow: 0px 2px 4px rgba(0,0,0,0.1);
        }
        .buttons {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            background-color: #4285f4;
            color: white;
            font-size: 16px;
            margin: 0 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #3367d6;
        }
        #result {
            width: 60%;
            margin: 30px auto;
            text-align: left;
        }
        .result {
            background: #fff;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0px 1px 3px rgba(0,0,0,0.1);
        }
        .result h3 a {
            color: #1a0dab;
            text-decoration: none;
        }
        .result h3 a:hover {
            text-decoration: underline;
        }
        .result p {
            margin: 5px 0;
            color: #4d4d4d;
        }
        .no-result {
            color: red;
            font-size: 18px;
            text-align: center;
        }
    </style>
    <script>
        function search() {
            var input = document.getElementById("search").value;
            var result = document.getElementById("result");

            var ajax_request = null;

            if (window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest();
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function() {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    result.innerHTML = ajax_request.responseText;
                }
            };
            
            if (input.length > 0) {
                ajax_request.open("POST", "ajax_process.php");
                ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax_request.send("search=" + input);
            }
            else {
                result.innerHTML = ""; 
            }
        }

        function clearSearch() {
            document.getElementById("search").value = "";
            document.getElementById("result").innerHTML = "";
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Like Google</h1>
        <div class="search">
            <input type="text" id="search" placeholder="Search PHP topics..." onkeyup="search()">
        </div>
        <div class="buttons">
            <button onclick="search()">Search</button>
            <button onclick="clearSearch()">Clear</button>
        </div>
        <div id="result"></div>
    </div>
</body>
</html>