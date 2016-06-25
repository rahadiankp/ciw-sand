<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel='stylesheet' href='css/main.css'>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
	<script src="3rdparty/ace/src/ace.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.min.js"></script>
</head>
<title> Compile-it-Web!!! </title>
<body>
<div class="panel panel-default">
	<div class="panel-heading">
	<span class="panel-title"><img src="img/logo.png" /> Compile-it-Web!!!</span>
</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-8">
			<div  class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab">Source code</a></li>
				</ul>
				<div class="tab-content" id='pos'>
					<div id="tab1" class="tab-pane active">
						<pre id='editor'></pre>
					</div>
				</div>
			</div>
			<div id="tab" class="btn-group" data-toggle="buttons">
				<button class="btn btn-info lang" data-toggle="tab" type="button" value="c">C</button>
				<button class="btn btn-info lang" data-toggle="tab" type="button" value="cpp">C++</button>
				<button class="btn btn-info lang" data-toggle="tab" type="button" value="java">Java 8</button>
				<button class="btn btn-info lang" data-toggle="tab" type="button" value="pas">Pascal</button>
				<button class="btn btn-info lang" data-toggle="tab" type="button" value="py3">Python 3</button>
			</div>
		</div>
		<div class="col-md-4">
			<div  class="tabbable">
				<ul class="nav nav-tabs" >
					<li class="tabbies active" id="def"><a>Input</a></li>
					<li class="tabbies" id="fog"><a>Output</a></li>
					<li class="tabbies" id="pol"><a>Compilation Res.</a></li>
				</ul>
				<div class="tab-content" id='gro'>
					<div id="tab1" class="tab-pane active">
						<pre id='input'></pre>
					</div>
				</div>
			</div>
			<input type='hidden' id='selang'/>
			<input type='hidden' id='out'/>
			<input type='hidden' id='res'/>
			<input type='hidden' id='inpot'/>
			<input class="btn btn-primary disabled" type='submit' id='sub' value='Compile'>
		</div>
	</div>
</div>
<script src='js/main.js'></script>
</body>
</html>
