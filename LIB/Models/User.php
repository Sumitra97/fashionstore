<?php
namespace LIB\Models;
use LIB\Core\Database ;

class User extends Database{
	/**
	*@var string
	*/

	
	 private $table="users";

	 /**
	 *Gets all the users
	 */
	public function getAllUsers(){
		$statement= $this->_db->prepare( "SELECT * FROM $this->table");
		$statement=execute();

		return $statement->fetchAll(\PDO::FETCH_ASSOC);

}

public function checkLogin($username,$password){
	return true;

}

public function logout(){


}

/**
* Checks whether an admin user is logged in or not
* returns true if logged in,false otherwise.
*@returns bool
*/
 
public function isAdminLogin(){
	if(isset($SESSION['_admin_user'])){
		return true;

	}
	else{
		return false;
	}
}
}
?>