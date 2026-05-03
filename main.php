<!doctype html>
<html>
<head lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link type="text/css" rel="stylesheet" href="styles/style.css">
<script src="http://localhost/js/jquery.js"></script>
<?php
$wksp = "2025";
if (isset($_GET['workspace'])) {
	$wksp = $_GET['workspace'];
}
?>
<script>
sessionStorage.setItem("workspace", "<?php echo $wksp; ?>");
</script>
</head>
<body>

<div id="menu">
	<br/><a href="#"><b>Workspace</b></a>
	<hr class="soft" />
	<a href="main.php?workspace=2026">2026</a>
	<a href="main.php?workspace=2025">2025</a>
	<a href="main.php?workspace=2024">2024</a><br/>
</div>

<div id="main">
	<br/>
	<a href="#" onclick="add_main();">+ Add Task</a>
	<br/>
	<?php include "view.php"; ?>
</div>	

<script src="scripts.js"></script>

<?php include "forms.php"; ?>

</body>
</html>


