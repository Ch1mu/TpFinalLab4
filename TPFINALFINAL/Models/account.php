<?php

namespace Models;

class account{

private $email;
private $password;
private $job;
public function __construct()
{
    $this->job = 0;
}
 


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
 * Get the value of job
 */ 
public function getJob()
{
return $this->job;
}

/**
 * Set the value of job
 *
 * @return  self
 */ 
public function setJob($job)
{
$this->job = $job;

return $this;
}
}



?>