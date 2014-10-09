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

  <h3>Match</h3><br/>
  <table>
  <tr>
  	<td><label>  Team A </label></td>
  	
  </tr>
  <tr>
    <td><canvas id="canvas_TAP1" width="501px" height="52px" ></canvas></td>
  </tr>
  <tr>
  <td><canvas id="canvas_TAP2" width="501px" height="52px" ></canvas></td>
 
  </tr>
  <tr><td><canvas id="canvas_TAP3" width="501px" height="52px" ></canvas></td></tr>
    <tr><td><canvas id="canvas_TAP4" width="501px" height="52px" ></canvas></td></tr>
      <tr><td><label>  Team B </label></td></tr>
        <tr><td><canvas id="canvas_TBP1" width="501px" height="52px" ></canvas></td></tr>
          <tr><td><canvas id="canvas_TBP2" width="501px" height="52px" ></canvas></td></tr>
           <tr><td><canvas id="canvas_TBP3" width="501px" height="52px" ></canvas></td></tr>
    <tr><td><canvas id="canvas_TBP4" width="501px" height="52px" ></canvas><script src="score.js"></script></td></tr>
      <tr><td><br/></td></tr>
          <tr><td>
          <label>Score: <input name="Score" type="text" value="Score" size="10" maxlength="5"></label>
                <label><input type="radio" name="RadioGroup1" value="spare" id="RadioGroup1_0">Spare</label>
                <label><input type="radio" name="RadioGroup1" value="strick" id="RadioGroup1_1">Strick</label>
             </td></tr>

            <tr>
            <td><a href="setupMatchPage.html"><input name="Back" type="button" value="Back"></a>
            
            <input name="Continue" type="button" value="Continue"></td>
            </tr>
 </table>
</form>
</div>
</div>
</body>
</html>




