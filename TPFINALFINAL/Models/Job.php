<?php
    namespace Models;
 
    class Job 
    {   
        private $companyIds;
        private $careerId;
        private $jobPositionId;
        private $description;
        
        



       

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
             * Get the value of companyId
             */ 
            public function getCompanyIds()
            {
                        return $this->companyIds;
            }

            /**
             * Set the value of companyId
             *
             * @return  self
             */ 
            public function setCompanyIds($companyIds)
            {
                        $this->companyIds = $companyIds;

                        return $this;
            }
    }