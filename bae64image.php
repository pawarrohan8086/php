	<?php
		if(!empty($_POST)){
			$data = $_POST['avatar'];
			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);
			list(, $type)      = explode('/', $type);
			$directory = getcwd().'/uploads/';
			if (!is_dir($directory)) {
				mkdir($directory, 0755, true);
			}
			$filename = uniqid().".".$type
			$data = base64_decode($data);
			$file= file_put_contents($directory.$filename, $data);
		}

		?>