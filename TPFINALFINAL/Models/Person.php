<?php
    namespace Models;

    class Person
    {
        private $firstName;
        private $lastName;
        private $dni;
        private $gender;
        private $birthDate;
        private $phoneNumber;

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

        public function getLastName()
        {
            return $this->lastName;
        }

        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

        /**
         * Get the value of dni
         */ 
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         *
         * @return  self
         */ 
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }

        /**
         * Get the value of gender
         */ 
        public function getGender()
        {
                return $this->gender;
        }

        /**
         * Set the value of gender
         *
         * @return  self
         */ 
        public function setGender($gender)
        {
                $this->gender = $gender;

                return $this;
        }

        /**
         * Get the value of birthDate
         */ 
        public function getBirthDate()
        {
                return $this->birthDate;
        }

        /**
         * Set the value of birthDate
         *
         * @return  self
         */ 
        public function setBirthDate($birthDate)
        {
                $this->birthDate = $birthDate;

                return $this;
        }

        /**
         * Get the value of phoneNumber
         */ 
        public function getPhoneNumber()
        {
                return $this->phoneNumber;
        }

        /**
         * Set the value of phoneNumber
         *
         * @return  self
         */ 
        public function setPhoneNumber($phoneNumber)
        {
                $this->phoneNumber = $phoneNumber;

                return $this;
        }
    }
?>