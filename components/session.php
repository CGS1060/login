<?php
class session{
	
	
	var $test;
	public function  __construct(){
		session_start();
		}
	
	
	public function connected($session,$position){
		if($position == TRUE){
		  	if(isset($session)){
				return header("Location: panel.php");
				exit;
			}
		}elseif($position == FALSE){
			if(!$session){
			return header("Location: index.php");
			exit;
			}	
		}
	}
	
}
$session = new session;
 
?>