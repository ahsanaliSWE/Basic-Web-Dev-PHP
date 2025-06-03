<?php 
	require_once("excelwriter/excelwriter.inc.php");
    require_once("require/database_connection.php");

    
	$excel_file = new ExcelWriter("files/Student_Report.xls");

	$col_heading = array("ID","NAME","EMAIL","PHONE","COURSE","BATCH");
	$excel_file->writeLine($col_heading,array("text-align"=>"center","font-size"=>"20px"));

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $excel_file->writeLine($row,array("text-align"=>"center","font-size"=>"20px"));
        }

        header("location: index.php?msg=Excel File Created Successfully&file=files/Student_Report.xls");
        
    }
    else {
        header("location: index.php?msg=No Records Found&file=files/Student_Report.xls");
    }
	

	$excel_file->close();




 ?>