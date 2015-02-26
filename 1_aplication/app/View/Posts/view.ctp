<?php 

	if($view[0] == 0)
		echo 'numero eh par </br>';
	else
		echo 'numero eh impa </br>';
	$infor_post = $view[1]; 
	echo $infor_post['Post']['title'].'</br>';

	
?>