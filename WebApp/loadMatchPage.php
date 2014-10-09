<?php
include("connectDataBase.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PINPIN BOWLING</title>
<link href="styleSheet.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<div id="container_webApp">
<div id="banner">
   <h2> PINPIN</h2><img src="images/ULMxyOBJ-thumb.gif" width="47" height="50"></div>


<div class="content">

<form action="" method="get" name="setMatch">

  <h3>Select Saved Game</h3><br/>
  <table>
  <tr>
  	<td colspan="3">
    
    <div id="statsContainer">
    <?php
	echo "<div>";
	echo "</div>";
    ?>
    </div>
    
    <td>
    
    <tr>
            <td><a href="index.html"><input name="Back" type="button" value="Back"></a></td>
            <td><a href="index.html"><input name="Continue" type="button" value="Continue"></a><td>
            
            
            </tr>
 </table>
</form>
</div>
</div>
</body>
</html>




