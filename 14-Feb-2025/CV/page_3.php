<!DOCTYPE html>
<html>
<head>
    <title>Professional Info</title>
</head>
<body>
    <center>
        <h1>Professional Info</h1>
        <hr/>
        <form method="POST" action="page_4.php">
            <table cellpadding="5" cellspacing="5">
                <tr>
                   <input type="hidden" name="name" value="<?php echo $_POST["name"]??"" ; ?>">
		   <input type="hidden" name="father_name" value="<?php echo $_POST["father_name"]??"" ; ?>">
		   <input type="hidden" name="gender" value="<?php echo $_POST["gender"]??"" ; ?>">
		   <input type="hidden" name="country" value="<?php echo $_POST["country"]??"" ; ?>">
		   <input type="hidden" name="email" value="<?php echo $_POST["email"]??"" ; ?>">
		   <input type="hidden" name="contact_number" value="<?php echo $_POST["contact_number"]??"" ; ?>">
		   <input type="hidden" name="address" value="<?php echo $_POST["address"]??"" ; ?>">
                </tr>

                <tr>
                    <th>School Name:</th>
                    <td><input type="text" name="school_name"></td>
                </tr>

		<tr>
                    <th>School Duration:</th>
                    <td>
                        From <input type="date" name="school_start">
                        To <input type="date" name="school_end">
                    </td>
                </tr>

                <tr>
                    <th>College Name:</th>
                    <td><input type="college_name" name="college_name"></td>
                </tr>

		<tr>
                    <th>College Duration:</th>
                    <td>
                        From <input type="date" name="college_start">
                        To <input type="date" name="college_end">
                    </td>
                </tr>

                <tr>
                    <th>University Name:</th>
                    <td><input type="text" name="university"></td>
                </tr>

		<tr>
                    <th>University Duration:</th>
                    <td>
                        From <input type="date" name="university_start">
                        To <input type="date" name="university_end">
                    </td>
                </tr>

		<tr>
                    <th>Professional Summary:</th>
                    <td>
                        <textarea name="summary" rows="5" cols="40"></textarea>
                    </td>
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
