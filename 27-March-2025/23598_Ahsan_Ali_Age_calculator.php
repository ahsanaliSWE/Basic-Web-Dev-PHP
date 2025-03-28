<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <style>
        body{
            background-color: lightgrey;
        }
        hr{
            width: 50%;
            border: 1px solid black;
        }
        fieldset{
            width: 50%;
            background-color: lightgrey;
            border: 1px solid black;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
        }
        legend{
            background-color: black;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px black;
        }
        legend:hover{
            background-color: lightgreen;
            color: black;
            transition: 0.3s; 
        }
        h1{
            color: black;
        }
        h2{
            color: black;
        }
        input[type="date"]{
            padding: 5px;
            width: 90%;
        }
        input[type="submit"]{
            margin-top: 10px;
            padding: 5px;
            width: 90%;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"]:hover{
            background-color: lightgreen;
            color: black;
            transition: 0.3s; 
        }

    </style>
</head>
<body>
    <center>
            <h1>Age Calculator</h1>
            <hr />
            <br />
            <fieldset>
                <legend>Calculate Age....!</legend>
                <form method="POST">
                    <tr>
                        <td>
                            <b>Date of Birth:</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="date" name="dob">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="Calculate Age" value="Calculate Age">
                        </td>
                    </tr>
                </form>
            </fieldset>

            <?php
                if(isset($_POST['dob']) && $_POST['dob'] != ""){
                    $dob = $_POST['dob'];
                    
                    echo "<br /><b>Your Date of Birth is: </b> $dob <br />";
                    
                    $current_date = date("Y-m-d");
                    echo "<b>Current Date: </b> $current_date <br />";
                    
                    $dobTimestamp = strtotime($dob);
    
                    $currentTimestamp = strtotime($current_date);
    
                    $ageTimestamp = $currentTimestamp - $dobTimestamp;
                    
                    $years = date("Y", $ageTimestamp);
                    $months = date("m", $ageTimestamp);
                    $days = date("d", $ageTimestamp);

                    $years -= 1970;
                    $months -= 1;
                    $days -= 1;
                    
                    echo "<h2>Your Age: $years years, $months months, and $days days</h2>";
                }
            ?>
    </center>
    
</body>
</html>