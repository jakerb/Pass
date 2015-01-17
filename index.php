<?php
	
	/* Pass Demo
	 * Created by Jake Bown
	 * @jakebown1
	 */

	require 'src/pass.php';
	$pass = new pass('pass/style.pass');

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=$pass->name;?>">
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>