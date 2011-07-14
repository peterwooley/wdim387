<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Getting the Date with Ajax!</title>

		<style type="text/css">

			body {
			 background-color: #fff;
			 margin: 40px;
			 font-family: Lucida Grande, Verdana, Sans-serif;
			 font-size: 14px;
			 color: #4F5155;
			}

			a {
			 color: #003399;
			 background-color: transparent;
			 font-weight: normal;
			}


		</style>
	</head>
	<body>
		<p>It has been <span id="date">?</span> seconds since the beginning of the <a href="http://en.wikipedia.org/wiki/Unix_time">Unix Epoch</a>.</p>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>
			// Uses Ajax to get JSON from the server, then renders the date
			// that was stored in the JSON.
			var setDate = function() {
				$.getJSON("/ajax/date").then(function(data) {
					$("#date").text(data.date);
				});
			};

			// Runs the setDate function every 1000ms (1 second)
			// This makes the page feel fresh.
			setInterval(setDate, 1000);
		</script>
	</body>
</html>
