<?php 
require_once("inc/config.php");
require_once(ROOT_PATH."inc/model.php");
$name = $_GET["name"];
$tissue = $_GET["tissue"];
if(isset($_GET["p"])){
	$current_page = $_GET["p"];
} else {
	$current_page = 1;
}
//display 3 records per page
$records_perpage = 3;
$c_p=($current_page-1)*$records_perpage;

//rna _db operation code.
$rna_db = new rna_database("cbhuatus_miRNA"); //rna database class in model.php
$total_n = $rna_db->count_rna($name,$tissue);
$mirnas = $rna_db->select_rnas($name,$tissue,$records_perpage,$c_p); // select rna at name tissue records_page page.
$total_pagenum = ceil($total_n/$records_perpage);


//Now begin our pages.
$pageTitle = "Search Results";
include (ROOT_PATH."inc/header.php");
?>
<a href = "./">
<?php
echo "<h1 class= 'mirna'>Your search: ". $name ." Tissue: ".$tissue.", return ". $total_n . " result(s) </h1>";
?>


<h1 class= 'mirna'>Back to Search</h1></a>

<h2 class= 'mirna'>Total pages: 

<?php 

echo $total_pagenum.". ";
echo "Current page: ".$current_page.". "."</h2>";

if($total_n>0)
{ 
echo "<h2 class= 'mirna'>\nClick the name of miRNA for more information \n\n</h2>" ; 
include(ROOT_PATH."inc/pagenation.html.php");

echo print_rna_link($mirnas);

}
include (ROOT_PATH."inc/footer.php");


?>