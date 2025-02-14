<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>
<body>
    <center>
        <h1>Personal Information</h1>
        <hr/>
        <form method="POST" action="Page_2.php">
            <table cellpadding="5" cellspacing="5">
                <tr>
                    <th>Name:</th>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <th>Father's Name:</th>
                    <td><input type="text" name="father_name"></td>
                </tr>

                <tr>
                    <th>Gender:</th>
                    <td>
                        Male <input type="radio" name="gender" value="Male"> 
                        Female <input type="radio" name="gender" value="Female">
                    </td>
                </tr>

                <tr>
                    <th>Country:</th>
                    <td>
                        <select name="country">
                            <option value="">--Select Country--</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="India">India</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                        </select>
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
