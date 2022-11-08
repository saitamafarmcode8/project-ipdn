<?php
if( !defined('BASEPATH')) exit('No direct script access allowed');

if( !function_exists('set_linkurl')){
	
	function set_linkurl($id, $jdl){
		$char = array(
			'{', '}', ')', '(', '|', '`', '~', '!', '@', '$', '%', '^', '&', '*', '=', '?', '+', '-', '_', ',', '/', '\\', '.', '#', ':', ';', '\'', '"', '[', ']'
		);
		$del_char = strtolower(str_replace($char,"",$jdl));
		$add_strip = strtolower(str_replace(' ','_', $del_char));
		$clean_url = $id."_".$add_strip;
		return $clean_url;
	}

}
