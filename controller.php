<?php
echo "hi";


class controller{
 var $firstname;
 var $lastname;
 var $mobile;
 var $Departmentname;
 var $Coursename;
 var $Password;
 var $Email;
 var $name;
 var $Semno;
 var $year;
 
 //private $password;


public function display($firstname,$lastname,$mobile,$Departmentname,$Coursename,$Password,$Email,$name,$Semno,$year)
{
  
  include 'model/model.php';
  $mod= new model();
  $mod->insert($firstname,$lastname,$mobile,$Departmentname,$Coursename,$Password,$Email,$name,$Semno,$year);
  echo "ok";

}
/* public function login($user_name,$pass)
 {
	echo "Cntrle".$user_name." ".$pass;
  include 'model/model.php';
  include 'config/connection.php';
  
 echo  $sql="select * from register where Password='$pass' and name='$user_name'";
  if($user_name=='$admin' && $pass=='adadmin'){
  include '../view/home.php';
}
}
*/
}
?> 

///require_once(../model/Loginsystem.php)
//$l 01oginSystem = new LoginSystem();
//if($loginSystem->doLogin($this->username,$this->password))

/**
 * 
 */

