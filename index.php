<html>
<head>
	<title>Example 1</title>
</head>
<body>
	<h1>My Website</h1>
	<p><?php echo 'Is dinosaur free';?></p>
	<p><?php echo 42+3;?></p>
	<?php $address="114 Observatory" ;?>
	<p><?php echo $address;?></p>
	<ul>
		<?php 
		$authors = array(
		'1870' => 'Charles Dickens', 
		'1863' => 'William Thackeray', 
		'1882' => 'Anthony Trollope', 
		'1889' => 'Gerard Manley Hopkins'
		);
	foreach ($authors as $year => $author):
		?><li><?php echo "$author died in $year."?></li> <?php endforeach;?>
	</ul>

<p><?php 
function seconds_to_years($seconds)
{
	$conversion=(60*60*24*365.25);
	return $seconds/$conversion;
}
$a=2;
$b=4;
echo $a/$b;
?>

<hr/>
<h3>Seconds to Years</h3>
<?php
	echo seconds_to_years(60000);
	echo '<p>' . seconds_to_years(40000000000000) . '</p>';
?>

<hr/>
<h3>Days to Weeks</h3>
<?php
function days_to_weeks($days)
{
	return $days/7;

}
?>
<p><?php echo days_to_weeks(14);?></p>
<p><?php echo days_to_weeks(28);?></p>

<hr/>

<h2>Homework Week #3</h2>
<h3>Function for Multiplication</h3>

<?php 
function multiply($x,$y)
{
	return $x*$y;
}
?>
<p><?php echo multiply(4,2);?></p>
<p><?php echo multiply(0,4);?><p>
<p><?php echo multiply(900,32);?><p>
<p><?php echo multiply(299999,23);?><p>

<h3>Function for Division</h3>
<?php
function divide($x,$y)
{
	return $x/$y;
}
?>
<p><?php echo divide(4,2);?></p>
<p><?php echo divide(2,4);?></p>
<p><?php echo divide(0,384);?></p>
<p><?php echo divide(900,32);?></p>

<h3>Greater-Than, Less-Than, or Equal-To</h3>
<?php
function greater_than($x,$y)
{
	if ($x > $y) {echo $x;
		# code...
	}
	if ($y > $x) {echo $y;
		# code...
	}
	if ($x == $y) {echo "$x and $y are equivalent.";
		# code...
	}
}
?>
<p><?php echo greater_than(4,2);?></p>
<p><?php echo greater_than(3,5);?></p>
<p><?php echo greater_than(3,3);?></p>
<p><?php echo greater_than(200,1000);?></p>


<h3>String Length</h3>
<?php
$str = 'abcdef';
echo strlen($str);

function string_length($str)
{
return strlen($str);
}
?>
<p><?php echo string_length("Knightley");?></p>
<p><?php echo string_length("Stephanie");?></p>
<p><?php echo string_length("PraxisTeamYay");?></p>

<h3>String Reversal</h3>
<p>PHP documentation example:</p>
<?php
echo strrev("Hello world!");?>

<p>My function:</p>
<?php
function string_reversal($str)
{
return strrev($str);
}
?>
<p><?php echo string_reversal("Knightley Kingsley")?></p>
<p><?php echo string_reversal("Stephanie")?></p>
<p><?php echo string_reversal("Praxis Team Yay!")?></p>

<h3>Exploding Strings!!!!!!!</h3>
<p><img src="prettyexplosion.jpg"></p>

<p>PHP Doc's Example:</p>
<?php
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0];
echo $pieces[1];?>

<p>My exploded string of Kingsley family cats:</p>
<?php
$kitties = "Daisy, Mitzi, Gracie, Sam, Frodo, Knightley";
$kitty = explode(", ", $kitties);
?>
<ul>
<li><?php echo $kitty[0];?></li>
<li><?php echo $kitty[1];?></li>
<li><?php echo $kitty[2];?></li>
<li><?php echo $kitty[3];?></li>
<li><?php echo $kitty[4];?></li>
<li><?php echo $kitty[5];?></li>
</ul>


</body>
</html>


