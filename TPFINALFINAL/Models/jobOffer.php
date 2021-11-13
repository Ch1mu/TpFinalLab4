<?php
    namespace Models;
 
    class JobOffer 
    {   
        
        
        private $careerId;
        private $jobPositionId;
        private $description;
        private $companyID;
        private $vacancies;
        private $offerId;
        private $active;



       
        
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
         * Get the value of applyId
         */ 
        public function getApplyId()
        {
                return $this->applyId;
        }

        /**
         * Set the value of applyId
         *
         * @return  self
         */ 
        public function setApplyId($applyId)
        {
                $this->applyId = $applyId;

                return $this;
        }

        /**
         * Get the value of active
         */ 
        public function getActive()
        {
                return $this->active;
        }

        /**
         * Set the value of active
         *
         * @return  self
         */ 
        public function setActive($active)
        {
                $this->active = $active;

                return $this;
        }
    }