<?php
    namespace Models;

    use Models\Person as Person;

    class Student extends Person
    {
        private $studentId;
        private $careerId;
        private $fileNumber;
        private $email;
        private $active;
        


        

        /**
         * Get the value of studentId
         */ 
        public function getStudentId()
        {
                return $this->studentId;
        }

        /**
         * Set the value of studentId
         *
         * @return  self
         */ 
        public function setStudentId($studentId)
        {
                $this->studentId = $studentId;

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
         * Get the value of fileNumber
         */ 
        public function getFileNumber()
        {
                return $this->fileNumber;
        }

        /**
         * Set the value of fileNumber
         *
         * @return  self
         */ 
        public function setFileNumber($fileNumber)
        {
                $this->fileNumber = $fileNumber;

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
?>

