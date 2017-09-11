<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Braille encode example</title>

	<!-- just need some css so that the page looked preeety  -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<h1>Brailler encoder</h1>
</div>

<div class="container">
	<form action="" method="POST">
		<div class="form-group">
			<label for="exampleTextarea">Example textarea</label>
			<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
		</div>
		<button id="submittheform" type="button" class="btn btn-primary">Submit</button>
	</form>

	<div id="braille-result" class="form-group">
		<label for="exampleTextarea">Results</label>
		<div id="addrezulthere"></div>
	</div>
	
</div>


<script type="text/javascript">
	$('#submittheform').click(function(e){
		e.preventDefault();

		var textareavalue = $('#exampleTextarea').val();
		$.ajax({
		  url: "ajaxhelper.php",
		  type: "POST",
		  data: {'textareavalue':textareavalue},
		}).done(function(data) {
			console.log(data);
		 	$('#addrezulthere').html(data);
		});
	});

</script>


</body>
</html>