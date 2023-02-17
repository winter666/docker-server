<html>
	<head>
		<title>Greeting!</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<div class="mt-3 d-flex justify-content-center">
			<div class="col-6">
				<?php
					$this->render('db_connection_frame');
					$this->render('redis_connection_frame');
					$this->render('module_list_frame');
				?>
			</div>
		</div>
	</body>
</html>