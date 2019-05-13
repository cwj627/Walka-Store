<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999/xhtml">

<head> 
<style type = "text/css"> 
body { font-family: tahoma, helvetica, arial, sans-serif; } 
table, tr, td, th { text-align: center; font-size: .9em; border: 3px groove; padding: 5px; background-color: #dddddd; } 
</style> 
</head>
<body> 

<table> 
<thead> 
<tr> 
<th style = "width: 100px;">Name</th> 
<th style = "width: 200px;">Feedback</th> 
<th style = "width: 50px;">Score</th> 
<th style = "width: 100px;">Product</th>
</tr> 
</thead>

<tbody>

<?php

//connect to the database 
$connectionstring = mysql_connect('localhost', 'my_nwptrio', 'z.Qrx.89@nwp' ) 
	or die('Could not connect: ' . mysql_error());
//select the database
mysql_select_db('my_nwptrio') 
	or die('Could not select database: ' . mysql_error());  
    
$temp = htmlspecialchars($_GET['var']);

	if ($temp == 1) {
        $Query = "SELECT * FROM lightSaberFeedback WHERE Product = 'Lightsaber Shirt'";
    }
    elseif ($temp == 2) {
    	$Query = "SELECT * FROM lightSaberFeedback WHERE Product = 'Floppy Disk Shirt'";
        
    }
     elseif ($temp == 3) {
     	$Query = "SELECT * FROM lightSaberFeedback WHERE Product = 'Donut Shirt'";
        
    }
     elseif ($temp == 4) {
     	$Query = "SELECT * FROM lightSaberFeedback WHERE Product = 'Sunglasses Shirt'";
        
    }
     elseif ($temp == 5) {
     	$Query = "SELECT * FROM lightSaberFeedback WHERE Product = 'Hello Shirt'";
        
    }
 
//execute query 
$queryexe = mysql_query($Query) 
	or die('Could not query database: ' . mysql_error());
//query database 
while($dataArray = mysql_fetch_array($queryexe, MYSQL_ASSOC))
{ echo "<tr>\n"; foreach ($dataArray as $col_value) { echo "\t<td>$col_value</td>\n"; } echo "</tr>\n"; }
// Free resultset 
mysql_free_result($queryexe) 
	or die('Could not free result: ' . mysql_error());
//disconnect from database 
mysql_close($connectionstring) 
	or die('Could not close database: ' . mysql_error());
?>
</tbody> 
</table> 
</body>
</html>