<?php
function required($field)
{
	return ($field == '') ? FALSE : TRUE;
}

function matches($str, $field)
{
	return ($str !== $field) ? FALSE : TRUE;
}

function minLength($str, $val)
{
	if(preg_match("/[^0-9]/", $val)) return FALSE;

	return (strlen($str) < $val) ? FALSE : TRUE;
}

function maxLength($str, $val)
{
	if (preg_match("/[^0-9]/", $val)) return FALSE;

	return (strlen($str) > $val) ? FALSE : TRUE;
}

function exactLength($str, $val)
{
	if (preg_match("/[^0-9]/", $val)) return FALSE;

	return (strlen($str) != $val) ? FALSE : TRUE;
}

function validEmail($str){
	if(empty($str)) return TRUE;
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

function alpha($str)
{
	return (!preg_match("/^([a-z])+$/i", $str)) ? FALSE : TRUE;
}

function alphaNumeric($str)
{
	return (!preg_match("/^([a-z0-9])+$/i", $str)) ? FALSE : TRUE;
}

function alphaDash($str)
{
	return (!preg_match("/^([-a-z0-9_-])+$/i", $str)) ? FALSE : TRUE;
}

function numeric($str)
{
	if((bool)preg_match('/^[\-+]?[0-9]*\.?[0-9]+$/', $str))
		return $str;
	else
		return '';
}

function isNumeric($str)
{
	return (!is_numeric($str)) ? FALSE : TRUE;
} 

function integer($str)
{
	return (bool)preg_match('/^[\-+]?[0-9]+$/', $str);
}

function setSelected($field = '', $value = '')
{
	if(is_array($value))
		return (in_array($field,$value)) ? ' selected="selected"' : '';
	else
		return ($field == $value) ? ' selected="selected"' : '';
}

function setChecked($field = '', $value = '')
{
	if(is_array($value))
		return (in_array($field,$value)) ? ' checked="checked"' : '';
	else
		return ($field == $value) ? ' checked="checked"' : '';
}

function redirect($uri = '', $method = 'parent')
{
	switch($method)
	{
		case 'refresh'	: 
			echo '<script language="javascript">window.parent.location.reload("'. $uri.'");</script>';
			break;
		case 'window'	: 
			echo '<script language="javascript">window.location.replace("'. $uri.'");</script>';
			break;
		default	:		
			echo '<script language="javascript">window.parent.location.replace("'. $uri.'");</script>';
			break;
	}
	exit;
}

function reload(){
	echo '<script language="javascript">window.parent.location.reload();</script>';
}

function alert($msg)
{
	if($msg != '')
	{
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		if(is_array($msg))
		{
			$t = ''; 
			foreach($msg as $msg){	$t .= $msg.'\n';	}
			echo "<script language=\"javascript\">alert('".$t."');</script>";

		}else{
			echo "<script language=\"javascript\">alert('".$msg."');</script>";
		}
	}
}

function backpage(){
	echo "<script language=\"javascript\">";
	echo "	location.href=\"javascript:history.back()\";";
	echo "</script>";
}

function delDir($path)
{	
	$dir = dir($path);
	while($file = $dir->read()){
		if(($file != '.') && ($file != '..')){
			unlink($dir->path . DS . $file);
		}
	}
	$dir->close();	
	rmdir($dir->path);
}	

function sql_in($val)
{
	if(is_array($val))
		if($val)
			return "IN (".implode(',',$val).")";
		else
			return 'false';
	else
		return $val;
}

function sql_b2v($val1,$val2)
{
	return "BETWEEN {$val1} AND {$val2}";
}

function sql_like($val1,$type='2')
{
	if($type == '0')	return "LIKE '{$val1}'";
	if($type == '1')	return "LIKE '{$val1}%%'";
	if($type == '2')	return "LIKE '%{$val1}%'";
	if($type == '3')	return "LIKE '%%{$val1}'";
}

function user_ip() {
	//find user ip
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$output = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
		$output = $_SERVER['HTTP_CLIENT_IP'];
	} else {
		$output = $_SERVER['REMOTE_ADDR'];
	}
	return $output;
}// user_ip

?>