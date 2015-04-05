<?php
require_once("../components/functions.php");
require_once("../components/session.php");
isset($_SESSION["connected"])? $session->connected($_SESSION["connected"],TRUE): FALSE;
require_once("../components/connection.php");

if(isset($_POST["submit"])){
	
	
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	$query = $mysqli->query("SELECT * FROM `users` ");
	
	
	while($result = $query->fetch_array()){
		
		if($result["username"] === $user && $result["password"] === $pass){
		   $_SESSION["connected"] = $result["username"];
		   $general->redirect_to("panel.php");
		}else{
		  $general->msj="Username or password error.";
			}
	}	
}
$general->directory("header");
$general->msj();
?>

<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
	<label>Username </label><input type="text" name="user" />
    <label>Password </label><input type="password" name="pass" />
    <input type="submit" name="submit" value="Log In" />
</form>
<?php
$general->directory("footer");
?>