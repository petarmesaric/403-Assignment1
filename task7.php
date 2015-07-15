<!DOCTYPE html> 
<head> 

<title>Variable Data Types</title> 
</head>
 
<body>  

<?php   
 
$whatsit = 'Petar'; 
echo "Value is ".gettype($whatsit).".<br/>\n";   
 
$whatsit = 12.7; 
echo "Value is ".gettype($whatsit).".<br/>\n";   
 
$whatsit = true; 
echo "Value is ".gettype($whatsit).".<br/>\n";   
 
$whatsit = 12; 
echo "Value is ".gettype($whatsit).".<br/>\n";
    
$whatsit = null; 
echo "Value is ".gettype($whatsit).".<br/>\n";   
 
?>   

</body> 
</html>