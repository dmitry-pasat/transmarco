<?php 

		
		$name = 'sdasd';
		$email = 'sdas@sdsd.com';
		
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "http://uaresto.xyz/email_import.php?".md5(uniqid()));
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,
				"name=".$name."&email=".$email);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);

			curl_close ($ch);
			
			echo $server_output;
