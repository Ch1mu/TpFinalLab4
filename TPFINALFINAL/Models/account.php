<?php

namespace Models;

class account{

private $email;
private $password;
private $job;
private $role;




/**
 * Get the value of password
 */ 
public function getPassword()
{
return $this->password;
}

/**
 * Set the value of password
 *
 * @return  self
 */ 
public function setPassword($password)
{
$this->password = $password;

return $this;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail($email)
{
$this->email = $email;

return $this;
}





/**
 * Get the value of role
 */ 
public function getRole()
{
return $this->role;
}

/**
 * Set the value of role
 *
 * @return  self
 */ 
public function setRole($role)
{
$this->role = $role;

return $this;
}
}
	
?>