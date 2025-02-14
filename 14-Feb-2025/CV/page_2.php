<!DOCTYPE html>
<html>
<head>
    <title>Contact Info</title>
</head>
<body>
    <center>
        <h1>Contact Info</h1>
        <hr/>
        <form method="POST" action="Page_3.php">
            <table cellpadding="5" cellspacing="5">
                <tr>
                   <input type="hidden" name="name" value="<?php echo $_POST["name"]??"" ; ?>">
		   <input type="hidden" name="father_name" value="<?php echo $_POST["father_name"]??"" ; ?>">
		   <input type="hidden" name="gender" value="<?php echo $_POST["gender"]??"" ; ?>">
		   <input type="hidden" name="country" value="<?php echo $_POST["country"]??"" ; ?>">
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><input type="text" name="email"></td>
                </tr>

                <tr>
                    <th>Contact Number:</th>
                    <td><input type="number" name="contact_number"></td>
                </tr>

                <tr>
                    <th>Address:</th>
                    <td> <textarea name="address" rows="5" cols="40" ></textarea></td>
                </tr>

                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
