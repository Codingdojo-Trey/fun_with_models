<html>
<head>
	<title></title>
</head>
<body>
	<h2>Make a new country!</h2>
	<?php 
	if($this->session->flashdata('errors'))
		{
			echo $this->session->flashdata('errors');
		}
	 ?>
	<form action='/countries/process' method='post'>
		Name: <input type='text' name='name'>
		Confirm name: <input type='text' name='confirm_name'>
		Government Form: <input type='text' name='government_form'>
		Population: <input type='number' name='population'>
		Continent: 
		<select name='continent'>
			<option>Asia</option>
			<option>Africa</option>
			<option selected>North America</option>
			<option>South America</option>
			<option>Australia</option>
			<option>Antartica</option>
			<option>Europess</option>
		</select>
		<input type='submit' value='add a country'>
	</form>
</body>
</html>