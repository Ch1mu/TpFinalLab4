
<?php
    namespace Models;
    class Career{
        private $careerId;
        private $description;
        private $active;
	function getActive() { 
 		return $this->active; 
	} 
	function setActive($active) {  
		$this->active = $active; 
	} 
	function getDescription() { 
 		return $this->description; 
	} 
	function setDescription($description) {  
		$this->description = $description; 
	} 
	function getCareerId() { 
 		return $this->careerId; 
	} 
	function setCareerId($careerId) {  
		$this->careerId = $careerId; 
	} 
}