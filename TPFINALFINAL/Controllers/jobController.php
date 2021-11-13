<?php
    namespace Controllers;

    use DAO\JobRepositorie as JobRepository;
    use DAO\JobApplyRepository as JobApplyRepository;
    use DAO\jobOfferDAO as JobOfferDAO;
    use DAO\companyRepository as companyDAO;
    use Models\Job as Job;
    use Models\JobOffer as JobOffer;
    use Models\JobApply as JobApply;
    
  
    class jobController
    {
        private $jobDAO;
        private $jobApplyDAO;
        private $companyDAO;
        private $jobOfferDAO;
        private $id;
        private $list;
        private $companyList;

        public function __construct()
        {
            $this->jobDAO = new JobRepository();
            $this->jobOfferDAO = new JobOfferDAO();
            $this->jobApplyDAO = new JobApplyRepository();
            $this->companyDAO = new companyDAO();
            
        }

        public function Jobs()
        {
            require_once(VIEWS_PATH."Jobs.php");
        }
      public function addOfferForm()
    {
        $companyList = $this->companyDAO->GetAll();
        $list = $this->jobDAO->GetAll();
        require_once(VIEWS_PATH."jobOffer-add.php");
    }

    public function addOffer($description, $nombre, $vacancies)
    {
        $companyList = $this->companyDAO->GetAll();
        $list = $this->jobDAO->GetAll();
        foreach($companyList as $company)
        {
            if($company->getNombre() == $nombre)
            {
                $id = $company->getId();
            }
           
        }
        foreach($list as $job)
        {
            if($job->getDescription() == $description)
            {
                $jobPositionId = $job->getJobPositionId();
                $careerId = $job->getCareerId();
            }
        }
        $jobOffer = new JobOffer();
        $jobOffer->setVacancies($vacancies);
        $jobOffer->setJobPositionId($jobPositionId);
        $jobOffer->setCareerId($careerId);
        $jobOffer->setDescription($description);
        $jobOffer->setCompanyID($id);
        $this->jobOfferDAO->Add($jobOffer);
        header("location: Jobs");
     }
     
     
        public function addOfferCompany($description, $nombre, $vacancies)
        {
            $companyList = $this->companyDAO->GetAll();
            $list = $this->jobDAO->GetAll();
            foreach($companyList as $company)
            {
                if($company->getNombre() == $nombre)
                {
                    $id = $company->getId();
                }
               
            }
            foreach($list as $job)
            {
                if($job->getDescription() == $description)
                {
                    $jobPositionId = $job->getJobPositionId();
                    $careerId = $job->getCareerId();
                }
            }
            $jobOffer = new JobOffer();
            $jobOffer->setVacancies($vacancies);
            $jobOffer->setJobPositionId($jobPositionId);
            $jobOffer->setCareerId($careerId);
            $jobOffer->setDescription($description);
            $jobOffer->setCompanyID($id);
            $this->jobOfferDAO->Add($jobOffer);
            header("location: ../Home/mainCompany");;
        }
     
    
        public function List()
        {
            $jobList = $this->jobOfferDAO->getAll();
            require_once(VIEWS_PATH."jobListApply.php");
        }
       
       
        public function listAllJobs()
        {
            $studentList = $this->jobDAO->GetAll();
            require_once(VIEWS_PATH."job-list.php");
        }
        public function Apply($id)
        {
            require_once(ROOT."jobApply.php");
            Header("location: List");

        }
        public function ViewApplies()
        {
            $jobList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."viewApply.php");
        }
        public function deleteApply($id)
        {
            $this->jobApplyDAO->deleteApply($id);
            Header("location: ../Student/Profile");
        }
        public function viewRemoveOffers()
        {
            $jobList = $this->jobOfferDAO->getAll();
            require_once (VIEWS_PATH. "viewOffers.php");
        }
        public function deleteOffer($id)
        {
            $this->jobOfferDAO->deleteOffer($id);
           header("location: viewRemoveOffers");
        }

        public function deleteOfferCompany($id)
        {
            $this->jobOfferDAO->deleteOffer($id);
           header("location: OffersCompany");
        }
        

        public function addOfferFormCompany(){
           
            $companyList = $this->companyDAO->GetAll();
            $list = $this->jobDAO->GetAll();
            require_once(VIEWS_PATH."addOfferFormCompany.php");
        }
        

        public function viewAppliesCompany()
        {
            $comp = new CompanyDAO();
            $compList = array();
            $compList = $comp->GetAll();
            $jobL = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."viewAppliesCompany.php");
        }
        public function OffersCompany()
        {
            require_once(VIEWS_PATH."viewOffersCompany.php");
            
        }

    }
?>