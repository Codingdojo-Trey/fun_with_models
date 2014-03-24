<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(){
				$.post($(this).attr('action'), $(this).serialize(), function(data){
					console.log(data);
					$('#jokes').append("<h3>"+data+"</h3>")
				}, 'json')
				return false
			}) //end of submit
		});  //end of document.ready
	</script>
</head>
<body>
	<h2>Here are all of the jokes!</h2>
	<div id='jokes'>
		<h3>JOke #1</h3>
		<h3>Joke #2</h3>
		<h3>Joke #3</h3>
	</div>
	<h2>Add a new joke!</h2>
	<form action='/countries/ajax_submit'>
		Joke: <textarea name='joke'></textarea>
		<input type='submit' value='make my day'>
	</form>
</body>
</html>