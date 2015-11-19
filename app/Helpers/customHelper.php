<?php
function data($date){
	return date('d/m/Y H:i:s', strtotime($date));
}

function verifica_null($value){
	$value = trim($value);
	if ($value == '') {
		return null;
	} else{
		return $value;
	}
}

