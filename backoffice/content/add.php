<?php
require '../backoffice/init.php';
if(isset($_POST['content_page_name_th'])){
	$sql="INSERT INTO content_page(content_page_name_th,content_page_name_en)
	VALUES ('{$_POST['content_page_name_th']}','{$_POST['content_page_name_en']}')";
	if(!mysql_query($sql))echo mysql_error();
	header( "location:../content.php?page=home" );
}
if(isset($_POST['content_page'])){
	// 1=INDEX
	if($_POST['content_page']=="1"){
		$_POST['content_th1'];
		$_POST['content_en1'];
		$_POST['content_th2'];
		$_POST['content_en1'];
		$sql_check="SELECT * FROM content WHERE content_page='1'";
		$q_check=mysql_query($sql_check);
		$num_check=mysql_num_rows($q_check);
		if($num_check==0){
		for ($i=1; $i < 3; $i++) {
			$content_th="content_th".$i;
			$content_en="content_en".$i;
			$note="content".$i;
			$sql="INSERT INTO content
			VALUES ('','1','{$_POST[$content_th]}','{$_POST[$content_en]}','{$note}')";
			if(!mysql_query($sql))echo mysql_error();
		}
		header( "location:../content.php?page=index" );
	}else{
		$sql_del="DELETE FROM content WHERE content_page='1'";
		mysql_query($sql_del);
		for ($i=1; $i < 3; $i++) {
			$content_th="content_th".$i;
			$content_en="content_en".$i;
			$note="content".$i;
			$sql="INSERT INTO content
			VALUES ('','1','{$_POST[$content_th]}','{$_POST[$content_en]}','{$note}')";
			if(!mysql_query($sql))echo mysql_error();
		}
		header( "location:../content.php?page=index" );
	}
}
	//2=ABOUT
if($_POST['content_page']=="2"){
	$_POST['content_th'];
	$_POST['content_en'];
$sql_check="SELECT * FROM content WHERE content_page='2'";
	$q_check=mysql_query($sql_check);
	$num_check=mysql_num_rows($q_check);
	if($num_check==0){

		$sql="INSERT INTO content
		VALUES ('','2','{$_POST['content_th']}','{$_POST['content_en']}','')";
		if(!mysql_query($sql))echo mysql_error();

	header( "location:../content.php?page=about" );
}else{
	$sql_update="UPDATE content SET content_th='{$_POST['content_th']}',content_en='{$_POST['content_en']}' WHERE content_page='2'";
	mysql_query($sql_update);
	/*$sql="INSERT INTO content
	VALUES ('','2','{$_POST['content_th']}','{$_POST['content_en']}','')";
	if(!mysql_query($sql))echo mysql_error();*/
	header( "location:../content.php?page=about" );
}
}
//11Payment
if($_POST['content_page']=="11"){
$sql_check="SELECT * FROM content WHERE content_page='11'";
	$q_check=mysql_query($sql_check);
	$num_check=mysql_num_rows($q_check);
	if($num_check==0){

		$sql="INSERT INTO content
		VALUES ('','11','{$_POST['content_th']}','{$_POST['content_en']}','')";
		if(!mysql_query($sql))echo mysql_error();

	header( "location:../content.php?page=payment" );
}else{
	$sql_update="UPDATE content SET content_th='{$_POST['content_th']}',content_en='{$_POST['content_en']}' WHERE content_page='11'";
	mysql_query($sql_update);
	/*$sql="INSERT INTO content
	VALUES ('','2','{$_POST['content_th']}','{$_POST['content_en']}','')";
	if(!mysql_query($sql))echo mysql_error();*/
	header( "location:../content.php?page=payment" );
}
}
//12contact
if($_POST['content_page']=="12"){
$sql_check="SELECT * FROM content WHERE content_page='12'";
	$q_check=mysql_query($sql_check);
	$num_check=mysql_num_rows($q_check);
	if($num_check==0){

		$sql="INSERT INTO content
		VALUES ('','12','{$_POST['content_th']}','{$_POST['content_en']}','')";
		if(!mysql_query($sql))echo mysql_error();

	header( "location:../content.php?page=contact" );
}else{
	$sql_update="UPDATE content SET content_th='{$_POST['content_th']}',content_en='{$_POST['content_en']}' WHERE content_page='12'";
	mysql_query($sql_update);
	/*$sql="INSERT INTO content
	VALUES ('','2','{$_POST['content_th']}','{$_POST['content_en']}','')";
	if(!mysql_query($sql))echo mysql_error();*/
	header( "location:../content.php?page=contact" );
}
}
}

?>
