<?php
namespace ChengFang\EasyPay;

use ChengFang\EasyPay\ConfigurationException;

class Configuration{

	static $_config = [
		'wechat.appid' 			=> '',
		'wechat.mchid' 			=> '',
		'wechat.pay_key' 		=> '',
		'wechat.ssl_cert_path' 	=> '',
		'wechat.ssl_key_path' 	=> '',
		
		'alipay.id' 			=> '',
		'alipay.key' 			=> '',
		'alipay.email' 			=> ''
	];

	public static function get($key, $default = null){
		if(array_key_exists($key, $_config) && !empty($_config[$key])){
			return $_config[$key];
		}else if(!is_null($default)){
			return $default;
		}else{
			throw new ConfigurationException();
		}
	}
}