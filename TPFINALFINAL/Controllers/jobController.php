<?php
    namespace Controllers;

    use DAO\JobRepositorie as JobRepository;
    use DAO\JobApplyRepository as JobApplyRepository;
    use DAO\JobOfferDAO as JobOfferDAO;
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
            $this->jobApplyDAO = new JobApplyRepository();
            $this->companyDAO = new companyDAO();
            $this->jobOfferDAO = new JobOfferDAO();
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
    public function addOffer($description, $nombre)
    {
        $jobOffer = new JobOffer();
        $jobOffer->setDescription($description);
        $jobOffer->setCompanyID($nombre);
        $jobOfferDAO->Add()
    }
    
        public function List()
        {
            $jobList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."jobListApply.php");
        }
       
       
        public function listAllJobs()
        {
            $studentList = $this->jobDAO->GetAll();
            require_once(VIEWS_PATH."job-list.php");
        }
        public function Apply($jobPositionId)
        {
            require_once(ROOT."jobApply.php");

        }
        public function ViewApplies()
        {
            $jobList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."viewApply.php");
        }

    }
?>