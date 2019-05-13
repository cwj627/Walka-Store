<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999/xhtml">

<head> 
<title>feedback List</title>

<style type = "text/css"> 
body { font-family: tahoma, helvetica, arial, sans-serif; } 
table, tr, td, th { text-align: center; font-size: .9em; border: 3px groove; padding: 5px; background-color: #dddddd; } 
</style> 
</head>
<body>

/* <p style = "font-size: 2em;">Feedback List</p> */

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

if (isset($_POST['Lightsaber'])) {
        $product = "Lightsaber Shirt";
        header("Location: http://nwptrio.altervista.org/Lightsaber.html");
    }
    elseif (isset($_POST['Floppy'])) {
    	$product = "Floppy Disk Shirt"; 
        header("Location: http://nwptrio.altervista.org/Floppy_Disk.html");
        
    }
     elseif (isset($_POST['Donut'])) {
     	$product = "Donut Shirt";
        header("Location: http://nwptrio.altervista.org/Donut_Shirt.html");
        
    }
     elseif (isset($_POST['Sunglasses'])) {
     	$product = "Sunglasses shirt"; 
        header("Location: http://nwptrio.altervista.org/Sunglasses_shirt.html");
        
    }
     elseif (isset($_POST['Hello'])) {
     	$product = "Hello Shirt"; 
        header("Location: http://nwptrio.altervista.org/Hello_Shirt.html");
        
    }

$name = $_POST['Name']; 
$feedback = $_POST['Feedback']; 
$score = $_POST['Score']; 
$user = $_POST['user']; 
$pwd = $_POST['pwd'];

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;

//connect to the database 
$connectionstring = mysql_connect('localhost', 'my_nwptrio', 'z.Qrx.89@nwp' ) 
	or die('Could not connect: ' . mysql_error());
//select the database
mysql_select_db('my_nwptrio') 
	or die('Could not select database: ' . mysql_error());

//create insert SQL string 
$Insert = "INSERT INTO lightSaberFeedback (Name, Feedback, Score, Product) VALUES ('$name', '$feedback', $score, '$product')";

//insert into database 
$results = mysql_query($Insert)
or die('Could not insert into database: ' . mysql_error());

//disconnect from database 
mysql_close($connectionstring) 
	or die('Could not close database: ' . mysql_error());
?>
</tbody> 
</table> 
</body>
</html>