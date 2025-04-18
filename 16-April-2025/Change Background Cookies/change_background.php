<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Using Cookie</title>
    <style>
        body {
            background-color: <?= isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : "red"; ?>;
            color: <?= isset($_COOKIE['fgcolor']) ? $_COOKIE['fgcolor'] : "yellow"; ?>;
        }
    </style>
</head>
<body >
    <center>
        <h1>Change background and foreground (text) color of web page store their information in cookies to retain changes.</h1>
        <hr>
        <h2>Click the refresh button to change the background and foreground color of this page.</h2>
        <hr>
        <h2>Change Background Color</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Obcaecati nulla vel eos ad unde rerum incidunt recusandae tempora, 
            quam cupiditate fuga nisi iusto? Veniam, quas ipsa quibusdam consequuntur quam iste!
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </center>
    
</body>
</html>
<?php
    setcookie("bgcolor", "teal", time() + (60*2), "/"); 
    setcookie("fgcolor", "white", time() + (60*2), "/");
?>
