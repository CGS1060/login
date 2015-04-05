<?php
require_once("../components/functions.php");
require_once("../components/session.php");

require_once("../components/connection.php");
isset($_SESSION["connected"])? TRUE:$session->connected($_SESSION["connected"],FALSE);

if(isset($_POST["logout"])){
	if(isset($_SESSION["connected"])){
		unset($_SESSION["connected"]);
		header("Location: index.php");
		exit;
		}
}
$general->directory("header");
?>
<p>Welcome <?php echo $_SESSION["connected"]; ?> you are logged in!</p>
<form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
<input type="submit" name="logout" value="Log Out" />
</form>
<?php
$general->directory("footer");
?>