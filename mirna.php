<?php
require_once("inc/config.php");
require_once(ROOT_PATH."inc/model.php");
$new = $_GET['new'];

$pageTitle = "miRNA: ". $new;

$rna_db = new rna_database("cbhuatus_miRNA");
$mirnas = $rna_db->select_single_rna($new);

if(!count($mirnas)){
	header ("Location: ./");
	exit();
}
include (ROOT_PATH."inc/header.php");

include (ROOT_PATH."inc/mirnatable.html.php");

include (ROOT_PATH."inc/footer.php");
?>
