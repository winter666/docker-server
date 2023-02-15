<?php
require $_SERVER['DOCUMENT_ROOT'] . '/core/enums.php';
require $_SERVER['DOCUMENT_ROOT'] . '/core/functions.php';

?>

<html>
	<head>
		<title>Greeting!</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrap mt-3">
			<div class="container">
				<?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/db_connection_frame.php'; ?>
			</div>
		</div>
	</body>
</html>