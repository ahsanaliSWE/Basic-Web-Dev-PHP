<!DOCTYPE html>
<html>
<head>
	<title>Create Table Structure In HTML</title>
</head>

<body>
	<h1>Make the Table structure as given in diagram</h1>
	<hr/>

	<table border="1" align="center">
		<thead>
			<tr align="center">
			      <td colspan = "5">Header</td>
			</tr>
		</thead>
		<tbody>
			<tr align="center">
			      <td rowspan = "4">Side 1</td>
			      <td colspan = "3">Content 1</td>
			      <td rowspan = "4">Side 2</td>
			</tr>

			<tr align="center">
			      <td>Img</td>
			      <td>Img</td>
			      <td>Img</td>
			</tr>

			<tr align="center">
			      <td>Content 2</td>
			      <td colspan = "2">Content 3</td>
			</tr>

			<tr align="center">		
			      <td colspan = "3">Content 4</td>			 
			</tr>
		</tbody>
		<tfoot>
			<tr align="center">
			      <td colspan = "5">Footer</td>
			</tr>
		</tfoot>
	
	</table>
</body>

</html>