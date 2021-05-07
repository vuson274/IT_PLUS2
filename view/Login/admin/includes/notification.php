<?php 
	// session_start();
	if (isset($_SESSION['noti']) && $_SESSION['noti'] == 1) {
?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>NOti:</strong> Update thành công
	</div>

<?php

	}
	unset($_SESSION['noti']);	
 ?>