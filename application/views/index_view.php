<html>
<head>
	<title></title>
	<script type="text/javascript">
		function ballin()
		{
			w1 = window.open('/countries/add', 'newwindow', 'wdith=400', 'height=300');
		}
	</script>
</head>
<body>
	<?php 
		if($this->session->flashdata('message'))
		{
			echo $this->session->flashdata('message');
		}
	 ?>
	 <a href="#" onclick='ballin()'>get money</a>
</body>
</html>