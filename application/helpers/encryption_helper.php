<?php 

// use for the Encryption
function encrypt($string=NULL){

    $CI = & get_instance();
    $string =$string;
    $key =$CI->config->item('encryption_key');
	$iv = '12345678';

	$cipher = mcrypt_module_open(MCRYPT_BLOWFISH,'','cbc','');
	mcrypt_generic_init($cipher, $key, $iv);
	$encrypted = mcrypt_generic($cipher,$string);
	mcrypt_generic_deinit($cipher);
	return $encrypted ;
}

// use for the Decryption
function decrypt($string=NULL){

    $CI = & get_instance();
	$string =$string;
    $key =$CI->config->item('encryption_key');
	$iv = '12345678';

	$cipher = mcrypt_module_open(MCRYPT_BLOWFISH,'','cbc','');
	mcrypt_generic_init($cipher, $key, $iv);
    $decrypted = mdecrypt_generic($cipher,$string);
    mcrypt_generic_deinit($cipher);
    return $decrypted ;
}