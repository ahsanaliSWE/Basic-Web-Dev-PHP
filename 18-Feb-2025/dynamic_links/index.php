<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic File Icons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00879E;
        }
        h1 {
            text-align: center;
            padding: 10px;
            Text-transform: uppercase;
            text-decoration: underline;
        }
        h2 {
            text-align: center;
            padding: 10px;
            Text-transform: uppercase;
        }
        #file-icons {
            background-color: #578FCA;
            padding: 70px;
            text-align: center;
        }
        ul {
            list-style: none;
        }
        li {
            margin: 10px;
            color: black;
            font-size: 20px;
            padding: 10px;
            font-weight: bold;
            text-align: center;
        }
        a {
            color: black;
            text-decoration: none;
            position: relative;
        }
     
        a::before {
            content: "";
            text-align: center;
            position: absolute;
            margin-left: -40px;
            width: 30px;
            height: 30px;
            background-size: cover;
        }
        a[href$=".pdf"]::before {
            background-image: url('./icons/pdf.png');
        }
        a[href$=".docx"]::before {
            background-image: url('./icons/docx.png');
        }
        a[href$=".pptx"]::before {
            background-image: url('./icons/pptx.png');
        }
        a[href$=".xlsx"]::before {
            background-image: url('./icons/xlsx.png');
        }
    </style>
</head>
<body>
    <h1>Dynamic Links</h1>
    <hr/>
    <div id="file-icons">
        <h2>Dynamic File Icons</h2>
        <ul>
            <li><a href="file.pdf">PDF File</a></li>
            <li><a href="document.docx">Word File</a></li>
            <li><a href="presentation.pptx">PowerPoint</a></li>
            <li><a href="spreadsheet.xlsx">Excel Sheet</a></li>
        </ul>
    </div>
</body>
</html>
