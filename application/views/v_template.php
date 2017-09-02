<!--head-->

<?php 
	if(isset($head)){

	$this->load->view($head);

	}
?>

<?php 
	if(isset($header)){

	$this->load->view($header);

	}
?>

<!--head-->


<!--main-->
<?php 
	if(isset($page)){

	$this->load->view($page);

	}
?>


<!--main-->

<!--download-->
<?php 
	if(isset($download)){

	$this->load->view($download);

	}
?>

<?php 
	if(isset($something_sell)){

	$this->load->view($something_sell);

	}
?>




<!--download-->

<?php 
	if(isset($footer)){

	$this->load->view($footer);

	}
?>