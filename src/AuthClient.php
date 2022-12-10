<?php

namespace App;

use GuzzleHttp\Client;

define('STRAPI_API_BASE_URL', 'http://localhost:1337/api/');

class AuthClient
{
	protected $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => STRAPI_API_BASE_URL,
			'headers' => [
				'Accept' => 'application/json',
				'Content-Type' => 'application/json'
			]
		]);
	}

	public function register($username, $email, $password)
	{
		$registration_endpoint = 'auth/local/register';
		return $this->client->post($registration_heading, [
			'json' => [
                'username' => $username,
                'email' => $email,
                'password' => $password
            ] 
		]);
	}

	public function login($identifier, $password)
	{
		$login_endpoint = 'auth/local';
		return $this->client->post($login_endpoint, [
			'json' => [
                'identifier' => $identifier,
                'password' => $password
            ]
		]);
	}
}