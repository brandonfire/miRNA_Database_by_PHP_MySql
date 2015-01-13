<?php  
$name = $_POST["name"];

try {
	$db = new PDO("mysql:host=localhost;dbname=cbhuatus_miRNA;port=3306","cbhuatus_hu","H123h");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
	echo"Could not connect to the database.";
	exit;
}
try {
	$results = $db->query("SELECT * FROM mirna WHERE Name LIKE '%$name%' ORDER BY databaseid ASC");
	
} catch(Exception $e){
	echo"Could not query the database.";
	exit;
} 
$mirnas = $results->fetchAll(PDO::FETCH_ASSOC);
$total_n = sizeof($mirnas);
$pageTitle = "Search Results";
include ("inc/header.php");
?>


<?php
echo "<pre>"; 
echo "<h1 class= 'mirna'>Your search: ". $name .", return ". $total_n . " result(s) </h1>";

if($total_n>0)
{ 
echo "<h2 class= 'mirna'>\nClick the name of miRNA for more information \n\n</h2>" ;

for ($x=0; $x<$total_n; $x++) {
	$mirna_name = $mirnas[$x]["Name"];
	echo "<a href = ";
	echo '"mirna.php?new=';
        echo $mirna_name;
	echo ' ">'. $mirna_name."</a><br>";

    }
}
include ("inc/footer.php");
?>
