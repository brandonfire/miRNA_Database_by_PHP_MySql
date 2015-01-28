<?php require_once("inc/config.php"); 
$pageTitle = "MRCD Database";
include (ROOT_PATH."inc/header.php");

 ?>
<link rel="stylesheet" href="/MRCD/main.css">
  <body>
	<div class="wwww">
      
        <table border="0">
            <thead>
                <tr>
                    <th>MRCD offers miRNA target information related to cancer.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>To check details of a miRNA, type one miRNA:</td>
                </tr>
                <tr>
                    <th>
	
                      <form method = "get" action= "result.php" ><label for = "name">Search a miRNA:</br></label> 
                          <input type="text" name="name" id="name"><br><br> 
                          <label for = "tissue">Tissue:</br></label>
                          <select name = "tissue" id= "tissue">
                             <option value = "all">All</option>
                             <option value = "liver">Liver</option>
                             <option value = "blood">Blood</option>
                             <option value = "breast">Breast</option>
			                       <option value = "stomach">Stomach</option>
			                       <option value = "ovary">Ovary</option>
                             <option value = "prostate">Prostate</option>
                          </select>
                          <br>
                          <br>
                          <strong>Cancer Effect</strong>
                          <br>
                          <input type="radio" name="onc" value="" checked>All
                          <br>
                          <input type="radio" name="onc" value="oncogenic">Oncogenic
                          <br>
                          <input type="radio" name="onc" value="tumor-suppressive">Tumor-Suppressive
                          <br>
                          <input type="submit" value="Submit">
                      </form>
		    </th>
                </tr>
            </tbody>
        </table>
	</div>
	<?php include (ROOT_PATH."inc/footer.php"); ?>