<script>
var val = "<?php echo $val ?>";
document.getElementById("nav01").innerHTML =
"<a class='navbar-brand' href='profile.html'>Tutor</a>" +
"<ul id='menu' class='nav navbar-nav navbar-right'>" +
"<li><a href='logged_in.php'><span class='glyphicon glyphicon-home'></span>  Home </a></li>" +
"<li><a href='modules.html'><span class='glyphicon glyphicon-user'></span>  Modules</a></li>" +
"<li><a href='modules.html'><span class='glyphicon glyphicon-user'></span>  'val'</a></li>" +
"<li><a href='cotton.html'><span class='glyphicon glyphicon-log-in'></span>  Logout </a></li>" +
"</ul>";
</script>

<?php
include('db.php');
session_start();
$val=$_SESSION['name1'];
//echo"<div class='gloss'>";
//echo "Welcome  ";
//echo $_SESSION['name1'];
//echo "</div>" ;
?>
<head>
</head>

<body>
	<nav class="navbar navbar-inverse" id="nav01"></nav>
	<div class="container">
	<form role="form">
    <div class="form-group">
	<label for="users">Select a Module for Tuition:</label>
	<select name="users" onchange="showUser(this.value)" class="form-control">
	<option value="">Select Course</option>
	<option value="CASE">CASE</option>
	</select>
	</div>
	</form>
	</div>
	
	<br>
	<div id="txtHint"><b></b></div>
	
	
	<footer id="foot01"></footer>
	<script src="logged_script.js"></script>
</body>
</html>