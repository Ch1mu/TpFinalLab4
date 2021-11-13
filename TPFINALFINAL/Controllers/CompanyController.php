<?php
    namespace Controllers;

    use DAO\companyRepository as companyRepository;
    use Models\Company as Company;
  
    class CompanyController
    {
        private $companyDAO;
        private $id;

        public function __construct()
        {
            $this->companyDAO = new companyRepository();
        }

        public function AddCompany()
        {
            require_once(VIEWS_PATH."company-add.php");
        }

        public function ListCompany()
        {
            $studentList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."company-list.php");
        }
        public function ListAdmin()
        {
            $studentList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."company-listAdmin.php");
        }
        
        
        public function Add($nombre, $localidad, $rubro, $email)
        {
            $list = new companyRepository();
            $studentList = array();
            $studentList = $list->GetAll();


            
            
                $company = new Company();
                $company->setEmail($email);
                $company->setNombre($nombre);
                $company->setLocalidad($localidad);
                $company->setRubro($rubro);

                $this->companyDAO->Add($company);

                $this->Companys();
            
            
        }
        
        public function deleteForm()
        {
            require_once(VIEWS_PATH."deleteCompany-form.php");
        }
        
        public function Remove($id)
        {
            
        $this->companyDAO->Delete($id);

        header("location: ListAdmin");
            
        }

        public function filterForm(){
            require_once(VIEWS_PATH."filterFormCompany.php");
        }

        public function filterCompany($nombre){
            $studentList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."filterCompany.php");
        }
        public function Companys()
        {
            require_once(VIEWS_PATH."Companys.php");
        }
        
        public function editCompany($id){
            $studentList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."editCompany.php");
        }

        public function editCompany2($id, $nombre, $localidad, $rubro, $active, $email){
        
            $this->companyDAO->Modify($id, $nombre, $localidad, $rubro, $active, $email);

                    require_once(VIEWS_PATH."Companys.php");
                
            
        }
        public function inactiveList()
        {
            $studentList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."company-list-inactive.php");
        }

        public function activate($id)
        {
            $this->companyDAO->Activate($id);
            header("location: inactiveList");
        }


    }
?>