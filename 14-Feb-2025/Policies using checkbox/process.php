<!DOCTYPE html>
<html>
<head>
    <title>Check Box Policies</title>
</head>

<body>
    <center>
        <h1>Page 2</h1>
        <br/>
        <hr/> 
    </center>

<?php
    if (isset($_POST["submit"])) 
    {
         $stipend = isset($_POST["stipend"]);
         $discipline = isset($_POST["discipline"]);
         $attendance = isset($_POST["attendance"]);
         $assignment = isset($_POST["assignment"]);
         $agree = isset($_POST["agree"]);

        $selectedCount = $stipend + $discipline + $attendance + $assignment;

        if ($selectedCount >= 3 && $agree) 
	{
            echo '<h1 align="center">You are selected</h1>';
        } else {
            echo '<h1 align="center">You are Fail</h1>';
    	}
    }

?>

</body>
</html>
