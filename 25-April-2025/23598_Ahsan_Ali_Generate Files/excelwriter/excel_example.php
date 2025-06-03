<?php
	include("excelwriter.inc.php");
	$fileName = "mynewxls.xls";
	$excel = new ExcelWriter($fileName);
	
	if($excel==false)	
	{
		echo $excel->error;
		die;
	}
	$myArr=array(
				"<b>First Name</b>",
				"Last Name",
				"Address",
				"Age"
				);
	
	$excel->writeLine($myArr, array('text-align'=>'center', 'color'=> 'red'));

	$myArr=array("Vijay","Joshi","<span style='color:blue;'>Vikaspuri</span>, Delhi",27);
	$excel->writeLine($myArr);
	
	$excel->writeRow();
	$excel->writeCol("Alok");
	$excel->writeCol("<span style='color:red;'>Sah</span>");
	$excel->writeCol("Pandav Nagar", array('text-align'=>'center', 'color'=> 'green','font-size'=> '22px'));
	$excel->writeCol(30,array('text-align'=>'right', 'color'=> 'brown'));
	
	
	$excel->close();
	echo "Data written to file $fileName Successfully.";
?>