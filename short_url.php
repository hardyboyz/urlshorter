<?php
if(isset($_POST['url'])){
	require_once ("database_connection.php");
	$url		= $_POST['url'];
	$query		= "INSERT INTO url VALUES('','".$url."')";
	$exec_query	= mysqli_query($koneksi,$query);
	
	if($exec_query){
		$data		= $config['url'].mysqli_insert_id($koneksi);
		echo "Congratulations, Your URL has been shorted. <br />now you can access your url using <a href='".$data."' target='_blank'>".$data."</a>";
	}else{
		echo "Error";
		exit;
	}
mysqli_close($koneksi);
}

?>
