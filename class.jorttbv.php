<?php
	# Jortt BV Sample API Call
	# Author: Fabrice Delahaij
	# Author: Extreemhost
	# Filename: class.jorrtbv.php
	# Copyright (c) Extreemhost 2016
	# Website: https://extreemhost.nl, http://fabricedelahaij.nl
	
	class JorttBV_API_Client
	{
		private $APPNAME		= '';
		private $APITOKEN	= '';
		private $APIURL		= 'https://app.jortt.nl/api/';
		#
		public function request($string, $select)
		{
			$request = curl_init();
			$command = json_encode(http_build_query($string));
			$headers = array(
				'Accept: application/json',
				'Content-Type: application/json',
				'Content-Length: '.strlen($command),
				'Connection: Keep-Alive'
			);
			$config = array(
				'APPNAME' => 'Demo',
				'APITOKEN' => 'f0000F-f00f-f00f-f00f-f0000000f',
				'APIURL' => 'https://app.jortt.nl/api/'
			);
			curl_setopt($request, CURLOPT_URL, $config['APIURL'].$select);
			curl_setopt($request, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($request, CURLOPT_POST, true);
			curl_setopt($request, CURLOPT_TIMEOUT, 120);
			curl_setopt($request, CURLOPT_CONNECTTIMEOUT, 15);
			curl_setopt($request, CURLOPT_POSTFIELDS, $command);
			curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($request, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($request, CURLOPT_HEADER, false);	
			curl_setopt($request, CURLOPT_USERPWD, $config['APPNAME'].':'.$config['APITOKEN']);
			$result = curl_exec($request);
			if ($result == FALSE) {
				die('<p>Curl failed: '.curl_error($request).'</p>');
			}
			curl_close($request);
			$response = json_decode($result, true);
			return $response;
		}
	}