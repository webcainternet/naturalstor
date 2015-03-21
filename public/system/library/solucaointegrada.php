<?php
define('MID','AB872AB2809B4C12E4D3A97153F996A6');

final class MSE {
	private $key;
	private $iv;

	public function __construct($key) {
		$this->key = hash('sha256', $key, true);
		$this->iv = mcrypt_create_iv(32, MCRYPT_RAND);
	}

	public function show($value) {
		return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->key, base64_decode(strtr($value, '-_,', '+/=')), MCRYPT_MODE_ECB, $this->iv));
	}
}
?>