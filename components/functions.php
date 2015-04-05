<?php
class general{
	var $msj;
	public function redirect_to($location){
		header("Location: ".$location);
		exit;
		} 
	public function msj(){
		if(!empty($this->msj)){
			echo  "<span style='color:red;'>".$this->msj."</span>";
			}
		}
	public function directory($name){
		require_once("../components/".$name.".php");
		}
}
$general = new general;
?>