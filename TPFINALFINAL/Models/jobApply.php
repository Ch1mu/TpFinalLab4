<?php
namespace Models;

class jobApply
{
private $offerId;
private $email;
private $nombre;
private $apellido;
private $jobId;
private $compId;

/**
 * Get the value of nombre
 */ 
public function getNombre()
{
return $this->nombre;
}

/**
 * Set the value of nombre
 *
 * @return  self
 */ 
public function setNombre($nombre)
{
$this->nombre = $nombre;

return $this;
}

/**
 * Get the value of apellido
 */ 
public function getApellido()
{
return $this->apellido;
}

/**
 * Set the value of apellido
 *
 * @return  self
 */ 
public function setApellido($apellido)
{
$this->apellido = $apellido;

return $this;
}

/**
 * Get the value of jobId
 */ 
public function getJobId()
{
return $this->jobId;
}

/**
 * Set the value of jobId
 *
 * @return  self
 */ 
public function setJobId($jobId)
{
$this->jobId = $jobId;

return $this;
}

/**
 * Get the value of compId
 */ 
public function getCompId()
{
return $this->compId;
}

/**
 * Set the value of compId
 *
 * @return  self
 */ 
public function setCompId($compId)
{
$this->compId = $compId;

return $this;
}

/**
 * Get the value of offerId
 */ 
public function getOfferId()
{
return $this->offerId;
}

/**
 * Set the value of offerId
 *
 * @return  self
 */ 
public function setOfferId($offerId)
{
$this->offerId = $offerId;

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
}
?>