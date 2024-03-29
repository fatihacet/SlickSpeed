<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" debug="true">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<script type="text/javascript" src="../frameworks/<?php echo $_GET['include']; ?>"></script>
	
	<script type="text/javascript">
		
		var get_length = function(elements){
			return (typeof elements.length == 'function') ? elements.length() : elements.length;
		}
		
		function test(selector){
            var counter = 0;
			try {
				var start = new Date().getTime();
                for (var i = 0; i < 250; i++) {
                    <?php echo $_GET['function']; ?>(selector);
                    counter++;
                }
				var end = new Date().getTime() - start;
				// return {'time': Math.round(end), 'found': get_length(elements)};
				return {'time': Math.round(end), 'found': counter};
			} catch(err){
				if (elements == undefined) elements = {length: -1};
				return ({'time': new Date().getTime() - start, 'found': get_length(elements), 'error': err});
			}
		}
	
	</script>
	
</head>

<body>
	
	<?php include('../template.html');?>

</body>
</html>