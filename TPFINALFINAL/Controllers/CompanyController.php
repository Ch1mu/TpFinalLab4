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
        
        
        public function Add($id, $nombre, $localidad, $rubro, $vacantes)
        {
            $flag = 0;
            $list = new companyRepository();
            $studentList = array();
            $studentList = $list->GetAll();

            foreach($studentList as $value){
                if($value->getId() == $id){
                    $flag = 1;
                }
            }
            if($flag == 0){
                $company = new Company();
                $company->setId($id);
                $company->setNombre($nombre);
                $company->setLocalidad($localidad);
                $company->setRubro($rubro);
                $company->setVacantes($vacantes);

                $this->companyDAO->Add($company);

                $this->Companys();
            }
            else{
                echo '<script language="javascript">alert("Ya hay una empresa con ese ID");';
                echo "window.location = 'AddCompany'; </script>";
            }
        }
        
        public function deleteForm()
        {
            require_once(VIEWS_PATH."deleteCompany-form.php");
        }
        
        public function Remove($id)
        {
            
            require_once(ROOT."removeCompany.php");
            
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
        public function editForm(){
            $studentList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."editForm.php");
        }

        public function editCompany($id){
            $studentList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."editCompany.php");
        }

        public function editCompany2($id, $nombre, $localidad, $rubro, $vacantes){
            $studentList = $this->companyDAO->GetAll();
            foreach($studentList as $company){

                if($company->getId() == $id){
                    $this->Remove($id);
                    $this->Add($id, $nombre, $localidad, $rubro, $vacantes);
                    require_once(VIEWS_PATH."Companys.php");
                }
            }
        }


    }
?>