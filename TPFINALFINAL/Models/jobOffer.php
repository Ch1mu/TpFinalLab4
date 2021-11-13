<?php
    namespace Models;
 
    class JobOffer 
    {   
        
        private $offerID;
        private $careerId;
        private $jobPositionId;
        private $description;
        private $companyID;
        private $vacancies;



       
        
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

        /**
         * Get the value of jobPositionId
         */ 
        public function getJobPositionId()
        {
                return $this->jobPositionId;
        }

        /**
         * Set the value of jobPositionId
         *
         * @return  self
         */ 
        public function setJobPositionId($jobPositionId)
        {
                $this->jobPositionId = $jobPositionId;

                return $this;
        }

        /**
         * Get the value of careerId
         */ 
        public function getCareerId()
        {
                return $this->careerId;
        }

        /**
         * Set the value of careerId
         *
         * @return  self
         */ 
        public function setCareerId($careerId)
        {
                $this->careerId = $careerId;

                return $this;
        }

        /**
         * Get the value of offerID
         */ 
        public function getOfferID()
        {
                return $this->offerID;
        }

        /**
         * Set the value of offerID
         *
         * @return  self
         */ 
        public function setOfferID($offerID)
        {
                $this->offerID = $offerID;

                return $this;
        }

        /**
         * Get the value of vacancies
         */ 
        public function getVacancies()
        {
                return $this->vacancies;
        }

        /**
         * Set the value of vacancies
         *
         * @return  self
         */ 
        public function setVacancies($vacancies)
        {
                $this->vacancies = $vacancies;

                return $this;
        }
    }