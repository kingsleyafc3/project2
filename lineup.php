<!DOCTYPE html>
<html>
<head>
    <title>Linesups</title>
    <link rel="stylesheet" type="text/css" href="test.css?vers=1">
</head>
<body class="field">
  <div class="cover">
    <?php

$forward1 = $_POST["forward1"];
$forward2 = $_POST["forward2"];
$forward3 = $_POST["forward3"];
$midfielder1 = $_POST["midfielder1"];
$midfielder2 = $_POST["midfielder2"];
$midfielder3 = $_POST["midfielder3"];
$midfielder4 = $_POST["midfielder4"];
$defender1 = $_POST["defender1"];
$defender2 = $_POST["defender2"];
$defender3 = $_POST["defender3"];
$goalkeeper = $_POST["goalkeeper"];




echo "<span id='f1'>" .$forward1. "</span><br>";
echo "<span id='f2'>" .$forward2. "</span><br>";
echo "<span id='f3'>" .$forward3. "</span><br>";
echo "<span id='m1'>" .$midfielder1. "</span><br>";
echo "<span id='m2'>" .$midfielder2. "</span><br>";
echo "<span id='m3'>" .$midfielder3. "</span><br>";
echo "<span id='m4'>" .$midfielder4. "</span><br>";
echo "<span id='d1'>" .$defender1. "</span><br>";
echo "<span id='d2'>" .$defender2. "</span><br>";
echo "<span id='d3'>" .$defender3. "</span><br>";
echo "<span id='gk'>" .$goalkeeper. "</span><br>";

$forward11 = $_POST["forward11"];
$forward21 = $_POST["forward21"];
$forward31 = $_POST["forward31"];
$midfielder11 = $_POST["midfielder11"];
$midfielder21 = $_POST["midfielder21"];
$midfielder31 = $_POST["midfielder31"];
$midfielder41 = $_POST["midfielder41"];
$defender11 = $_POST["defender11"];
$defender21 = $_POST["defender21"];
$defender31 = $_POST["defender31"];
$goalkeeper1 = $_POST["goalkeeper1"];

echo "<span id='f11'>" .$forward11. "</span><br>";
echo "<span id='f21'>" .$forward21. "</span><br>";
echo "<span id='f31'>" .$forward31. "</span><br>";
echo "<span id='m11'>" .$midfielder11. "</span><br>";
echo "<span id='m21'>" .$midfielder21. "</span><br>";
echo "<span id='m31'>" .$midfielder31. "</span><br>";
echo "<span id='m41'>" .$midfielder41. "</span><br>";
echo "<span id='d11'>" .$defender11. "</span><br>";
echo "<span id='d21'>" .$defender21. "</span><br>";
echo "<span id='d31'>" .$defender31. "</span><br>";
echo "<span id='gk1'>" .$goalkeeper1. "</span><br>";

$homecount = 0;
$awaycount = 0;

$goalkeeper = rand(1,6);
$goalkeeper1 = rand(1,6);
if($goalkeeper > $goalkeeper1)
  {$homecount++;}
else
  {$awaycount++;}

$forward1 = rand(1,6);
$forward11 = rand(1,6);
if($forward1 > $forward11)
  {$homecount++;}
else
  {$awaycount++;}

$forward2 = rand(1,6);
$forward21 = rand(1,6);
if($forward2 > $forward21)
  {$homecount++;}
else
  {$awaycount++;}

$forward3 = rand(1,6);
$forward31 = rand(1,6);
if($forward3 > $forward31)
  {$homecount++;}
else
  {$awaycount++;}

$midfielder1 = rand(1,6);
$midfielder11 = rand(1,6);
if($midfielder1 > $midfielder11)
  {$homecount++;}
else
  {$awaycount++;}

$midfielder2 = rand(1,6);
$midfielder21 = rand(1,6);
if($midfielder2 > $midfielder21)
  {$homecount++;}
else
  {$awaycount++;}

$midfielder3 = rand(1,6);
$midfielder31 = rand(1,6);
if($midfielder3 > $midfielder31)
  {$homecount++;}
else
  {$awaycount++;}

$midfielder4 = rand(1,6);
$midfielder41 = rand(1,6);
if($midfielder4 > $midfielder41)
  {$homecount++;}
else
  {$awaycount++;}

$defender1 = rand(1,6);
$defender11 = rand(1,6);
if($defender1 > $defender11)
  {$homecount++;}
else
  {$awaycount++;}

$defender2 = rand(1,6);
$defender21 = rand(1,6);
if($defender2 > $defender21)
  {$homecount++;}
else
  {$awaycount++;}

$defender3 = rand(1,6);
$defender31 = rand(1,6);
if($defender3 > $defender31)
  {$homecount++;}
else
  {$awaycount++;}


?>
</div>

<table border>
  <tr>
    <td><img src="field.jpg" style="width: 100%"></td>
</table>

<table id="score">
	<tr>
		<td>
			<div class="scoreboard1">
			<div id="home">Home: <?php echo $homecount; ?> </div>
			</div>
		</td>
		<td>
			<div class = "simulator">
  <form action="chooseSide.php" method="post">
  <input type="hidden" name="homecount" value="<?php echo $homecount ?>"></input>
  <input type="hidden" name="awaycount" value="<?php echo $awaycount ?>"></input>
  <button type="submit" value="Submit">Run Simulator</button>
  </form>
  </div>
		</td>
		<td>
			<div class="scoreboard2">
	<div id="away"><?php echo $awaycount; ?>: Away</div>
</div>
		</td>
	</tr>
</table>


</body>
</html>
