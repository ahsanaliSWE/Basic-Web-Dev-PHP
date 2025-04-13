<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Using Ajax</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        fieldset {
            border: 2px solid #007BFF;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
        }
        legend {
            font-weight: bold;
            color: #007BFF;
        }
        table {
            width: 100%;
            margin-top: 10px;
        }
        td {
            padding: 10px;
        }
    </style>
    <script>
        function show_details() {
            var ajax_request = null;

            if (window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest();
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax_request.onreadystatechange = function () {
                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("show_paragraph").innerHTML = ajax_request.responseText;
                }
            }

            var search = document.getElementById("search").value;

            if (search === "") {
                document.getElementById("show_paragraph").innerHTML = "<p style='color:red;'>Please enter a CNIC number.</p>";
                return;
            }

            ajax_request.open("GET", "ajax_process.php?action=show_details&search="+search, true);
            ajax_request.send();
        }
    </script>
</head>
<body>
    <center>
        <h1>Search Using Ajax</h1>
        <fieldset>
            <legend>Search Using Ajax....</legend>
            <table>
                <tr>
                    <td><b>Enter CNIC no:</b></td>
                    <td><input type="text" id="search" name="search" placeholder="Search by CNIC"></td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="button" value="Search" onclick="show_details();">
                    </td>
                </tr>
            </table>
        </fieldset>

        <div id="show_paragraph" style="margin-top: 20px;"></div>
    </center>
</body>
</html>
