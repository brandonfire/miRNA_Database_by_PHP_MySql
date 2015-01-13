<?php require_once("inc/config.php"); ?>

<!DOCTYPE html>
<html>
  <head>
   
    <meta charset="utf-8">
    <title>Structure Based Drug Design</title>
	<meta name="viewport" content = "width=device-width, intitial-scale=1.0">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Lato|Changa+One:400,400italic|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>main.css">
	
    

  </head>
  <body>
	<div class="wwww">
        <h1>Welcome to miRNA
&nbsp;of Cancer Database(MRCD) demo version 0.11</h1>
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
                          </select>

                          <input type="submit" value="Submit">
                      </form>
		                </th>
			
                </tr>

            </tbody>
        </table>
	</div>
	<footer>
           <p>&copy; <script type="text/javascript"> var d = new Date();
			document.write(d.getFullYear());
		</script> Chengbin Hu</p>
    </footer>
  </body>
</html>
