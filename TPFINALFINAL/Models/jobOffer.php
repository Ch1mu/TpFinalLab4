<?php
    namespace Models;
 
    class JobOffer 
    {   
        
        
        private $description;
        private $companyID;
        



       
        
        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        

        /**
         * Get the value of companyID
         */ 
        public function getCompanyID()
        {
                return $this->companyID;
        }

        /**
         * Set the value of companyID
         *
         * @return  self
         */ 
        public function setCompanyID($companyID)
        {
                $this->companyID = $companyID;

                return $this;
        }
    }