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

  <h3>Setup Match</h3><br/>
  <table>
  <tr>
  	<td><label>  Team A </label></td>
  	<td><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
    <option>Select Team</option>
    <option>Pinners</option>
    <option>DemBalls</option>
  </select></td>
  </tr>
  <tr>
    <td><label>Team B</label></td>
    <td><select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
    <option>Select Team</option>
    <option>Pinners</option>
    <option>DemBalls</option>
  </select></td>
  </tr>
  <tr>
  <td></td>
  <td><input name="New Team" type="button" value="New Team"></td>
  </tr>
  <tr><td><br/></td></tr>
    <tr><td><br/></td></tr>
      <tr><td><br/></td></tr>
        <tr><td><br/></td></tr>
          <tr><td><br/></td></tr>
           <tr><td><br/></td></tr>
    <tr><td><br/></td></tr>
      <tr><td><br/></td></tr>
          <tr><td><br/></td></tr>

            <tr>
            <td><a href="index.html"><input name="Back" type="button" value="Back"></a></td>
            <td><br/></td>
            <td><a href="matchPage.html"><input name="Continue" type="button" value="Continue"></td>
            </tr>
 </table>
</form>
</div>
</div>
</body>
</html>




