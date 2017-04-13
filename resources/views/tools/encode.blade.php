<!DOCTYPE html>
<html>
<head>
	<title>Encode Special Characters</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="{{ url('/encode') }}">
	{{ csrf_field() }}
	<h3>
		Text to Encode
	</h3>
	<textarea name="string" rows="5" class="form-control">{{ old( 'string' ) }}</textarea>
	<button type="submit" class="btn btn-primary">Encode</button>
</form>
@if( isset( $request->string ))
<h3>
	Encoded Text
</h3>
<textarea id="stringInput" class="form-control">{!! htmlentities( $request->string ) !!}</textarea>
<button id="btnCopy" class="btn btn-info">Copy</button>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
("#btnCopy").click(function(){
	$("#stringInput").select();
	document.execCommand('copy');
});
</script>
</body>
</html>