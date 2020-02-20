<?php
function Find($search, $str){
	if(substr_count($str, $search)>0){
		$result = true;
	}else{
		$result = false;
	}
	return $result;
}
function PushText($text, $id,$name, $class, $placeholder, $value='', $onfunction=''){

	echo '
			<tr>
				<td>
					<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
				</td>
				<td>
					<input type="text" class="'.$class.'" placeholder="'.$placeholder.'" autocomplete="off" '.$onfunction.' id="'.$id.'" name="'.$name.'" value="'.$value.'">
				</td>
			</tr>';
}
function PushTextArea($text, $id,$name, $class, $value='',$row,$col, $onfunction='')
{
   	echo '
			<tr>
				<td>
					<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
				</td>
				<td>
					<textarea rows='.$row.'"" cols="'.$col.'" id="'.$id.'" name="'.$name.'" class="'.$class.'" '.$onfunction.'>'.$value.'</textarea>
				</td>
			</tr>
			';
}
function PushPassword($text, $id,$name, $class, $placeholder, $value='', $onfunction='')
{
	echo '
			<tr>
				<td>
					<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
				</td>
				<td>
					<input type="password" class="'.$class.'" placeholder="'.$placeholder.'" autocomplete="off" '.$onfunction.' id="'.$id.'" name="'.$name.'" value="'.$value.'">
				</td>
			</tr>
			';
}

function PushHidden($text, $id, $name, $val='')
{
	echo '
		<input type="hidden" id="'.$id.'" name="'.$name.'" class="form-control" value="'.$val.'"/>
		
	';
}

function PushRadio($data,$text,$id,$name,$value,$onfunction=''){

	$radio = '';
	$num=1;
	foreach((array)$data as $key => $val)
	{
		$active="";
		if($val==$value)
		{
			$active="checked";
		}
		$radio 	.= '
				<div class="col-xs-6">
					<input type="radio" id="'.$id.$val.'" '.$onfunction.' name="'.$name.'" '.$active.' value="'.$val.'">'.$val.'
				</div>
			';
		$num++;
	}
	echo '
			<tr>
				<td>
					<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
				</td>
				<td>
					'.$radio.'
				</td>
			</tr>
			';
}
function PushCheckbox($data, $text, $id,$name,$value,$onfunction=''){
	$checkbox 	= "";
	foreach((array)$data as $key => $val)
	{
		$active = "";
		if($value==$val)
		{
			$active="checked";
		}
		$checkbox 	.= '
				<div class="col-xs-6">
					<input type="checkbox" id="'.$id.'" '.$onfunction.' name="'.$name.'[]" '.$active.' value="'.$val.'" >'.$val.'
				</div>
			';
	}
	echo '
			<tr>
				<td>
					<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
				</td>
				<td>
					'.$checkbox.'
				</td>
			</tr>';
}

function PushSelect($data,$text, $id,$name, $class, $value='', $onfunction='')
{
	$option		= "";
	
	if( $data ){
		if($value=="")
		{
			$option .= '
						<option value="">Choose '.$text.'</option>';
		}
		foreach((array)$data as $key => $txt){
			$selected = ($txt == $value) ? ' selected="selected"' : '';
			$option .= '
						<option value="'.$txt.'"'.$selected.'>'.$txt.'</option>';
		}
	}else{
		$option .= '
						<option value="">Choose '.$text.'</option>';
	}
	echo '
			<tr>
				<td>
					<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
				</td>
				<td>
					<select id="'.$id.'" name="'.$name.'" class="'.$class.'" '.$onfunction.'>
					'.$option.'
					</select>
				</td>
			</tr>
			';
}

function PushDate($text, $id,$name, $class, $value='', $onfunction=''){

	echo '
			<tr>
				<td>
					<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
				</td>
				<td>
					<input type="date" class="'.$class.'" autocomplete="off" '.$onfunction.' id="'.$id.'" name="'.$name.'" value="'.$value.'">
				</td>
			</tr>';
}

function PushFile($text,$id,$name,$class,$onfunction='')
{
	echo '
		<tr>
			<td>
				<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
			</td>
			<td>
				<input type="file" class="'.$class.'" id="'.$id.'" name="'.$name.'" '.$onfunction.'>
			</td>
		</tr>
	';
}
function UpFile($text,$id,$name,$class,$onfunction='',$path,$value)
{
	echo '
		<tr>
			<td>
				<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
			</td>
			<td>
				<input type="file" class="'.$class.'" id="'.$id.'" name="'.$name.'" '.$onfunction.'>
				<input type="hidden" id="upoldpic" name="oldpic" value="'.$value.'">
				<img src="'.$path.$value.'" style="width:100px;height:100px;">
			</td>
		</tr>
	';
}
function PushRange($text,$id1,$id2,$name1,$name2,$class1,$class2,$onfunction1='',$onfunction2='',$value1,$value2)
{
	echo '
	<tr>
			<td>
				<p style="margin-top:2%;color: #242a30;">'.$text.'</p>
			</td>
			<td style="display: flex;">
				<input type="date" name="'.$name1.'" id="'.$id1.'" class="'.$class1.'" '.$onfunction1.' value="'.$value1.'">
				<p style="padding: 10px;"> To </p>
				<input type="date" name="'.$name2.'" id="'.$id2.'" class="'.$class2.'" '.$onfunction2.' value="'.$value2.'">
			</td>
		</tr>';
}
?>
