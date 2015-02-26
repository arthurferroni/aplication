Eventos de ECOMP </br> 
<?php 
foreach ($posts as $post) {
	
	echo ($post['Post']['id'].' '.$post['Post']['title'].' '.$post['Post']['body'].'.' );?> </br>
	<?php
}
 

 ?>