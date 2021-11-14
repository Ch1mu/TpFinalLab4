<?php
    namespace Models;

    class Company
    {
        private $id;
        private $nombre;
        private $localidad;
        private $rubro;
        private $active;
        private $email;
        private $cuit;
        
      

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

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
         * Get the value of localidad
         */ 
        public function getLocalidad()
        {
                return $this->localidad;
        }

        /**
         * Set the value of localidad
         *
         * @return  self
         */ 
        public function setLocalidad($localidad)
        {
                $this->localidad = $localidad;

                return $this;
        }

        /**
         * Get the value of rubro
         */ 
        public function getRubro()
        {
                return $this->rubro;
        }

        /**
         * Set the value of rubro
         *
         * @return  self
         */ 
        public function setRubro($rubro)
        {
                $this->rubro = $rubro;

                return $this;
        }

        

        /**
         * Get the value of activo
         */ 
        public function getActive()
        {
                return $this->activo;
        }

        /**
         * Set the value of activo
         *
         * @return  self
         */ 
        public function setActive($activo)
        {
                $this->activo = $activo;

                return $this;
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
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Get the value of cuit
         */ 
        public function getCuit()
        {
                return $this->cuit;
        }

        /**
         * Set the value of cuit
         *
         * @return  self
         */ 
        public function setCuit($cuit)
        {
                $this->cuit = $cuit;

                return $this;
        }
    }
?>