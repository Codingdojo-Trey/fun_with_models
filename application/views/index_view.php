<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if($this->session->flashdata('message'))
		{
			echo $this->session->flashdata('message');
		}
	 ?>
</body>
</html>