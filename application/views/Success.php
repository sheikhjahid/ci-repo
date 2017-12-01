<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
              if($this->session->flashdata('success_message'))
              {
              	echo $this->session->flashdata('success_message');
              }


              if($this->session->flashdata('delete_message'))
              {
              	echo $this->session->flashdata('delete_message');
              }
    ?>
</body>
</html>


