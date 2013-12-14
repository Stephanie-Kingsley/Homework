<html>
<head>
	<title>CollationLog</title>
</head>
<body>
	<h1>Collation Log</h1>
	<p><?php echo 'Is dinosaur free';?></p>
	<?php $collationupdate="Today I collated Chapter 1 of witnesses A1 and B1.";?>
	<p><?php echo $collationupdate;?></p>
	<?php $date="December 12";?>
	<?php $chapter="1";?>
	<?php $witness="A1";?>
	<p><?php echo "On $date, I collated Chapter $chapter of witness $witness.";?></p>
</body>
</html>