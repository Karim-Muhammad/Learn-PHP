<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php if($score > 95): ?>
		<h1>A+</h1>
	<?php elseif ($score > 85): ?>
		<h1>A</h1>
	<?php elseif ($score > 75): ?>
		<h1>B</h1>
	<?php elseif ($score > 65): ?>
		<h1>C</h1>
	<?php elseif ($score > 50): ?>
		<h1>D</h1>
	<?php else: ?>
		<h1>F</h1>
	<?php endif; ?>
</body>
</html>