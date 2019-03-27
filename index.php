<!doctype html>
<html>
	<head>
		<title>Страница</title>
		<meta charset="utf-8" />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		
	</body>
	<script src="jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$('a[href^="#"]').click(function(){
			var target = $(this).attr('href');
			if(target == '#'){
				return false;
			}else{
				if(target !== ''){
					$('html, body').animate({scrollTop: $(target).offset().top}, 800);
					return false;
				}
			}
		});  
	</script>
</html>
