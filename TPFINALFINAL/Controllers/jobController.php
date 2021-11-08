<?php
    namespace Controllers;

    use DAO\JobRepositorie as JobRepository;
    use DAO\JobOfferRepository as JobOfferRepository;
    use DAO\companyRepository as companyDAO;
    use Models\Job as Job;
    use Models\JobOffer as JobOffer;
    
  
    class jobController
    {
        private $jobDAO;
        private $id;

        public function __construct()
        {
            $this->jobDAO = new JobRepository();
            $this->jobOfferDAO = new JobOfferRepository();
        }

        public function Jobs()
        {
            require_once(VIEWS_PATH."Jobs.php");
        }
        public function AddForm()
        {
            require_once(VIEWS_PATH."job-add.php");
        }

           public function Add($careerId, $description, $companyIds)
        {
                 $list = new JobRepository();
                $studentList = array();
                $studentList = $list->GetAll(); 
                $companyDAO = new companyDAO();
                $companyL = array();
                $companyL = $companyDAO->GetAll();
                $flag = 0;
                foreach($companyL as $company)
                {
                    if($company->getId() == $companyIds && $company->getActive() == 1)
                    {
                        $flag = 1;
                    }
                }
                if($flag == 1)
                {

                

                $company = new Job();
                $company->setCompanyIds($companyIds);
                
                $company->setCareerId($careerId);
                $company->setDescription($description);

                $this->jobDAO->Add($company);
                $this->jobs();
                }
                else {
                    echo '<script language="javascript">alert("No existe una empresa con este ID!");';
                    echo "window.location = 'Jobs'; </script>";
                }
           

                

                
            

        }
        
        public function List()
        {
            $jobList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."jobListApply.php");
        }
        public function removeForm()
        {
            require_once(VIEWS_PATH."deleteJob-form.php");
        }
        public function remove($jobPositionId)
        {
            require_once(ROOT."removeJob.php");
        }
        public function listAllJobs()
        {
            $studentList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."job-list.php");
        }
        public function Apply($jobPositionId)
        {
            require_once(ROOT."jobApply.php");

        }
        public function ViewApplies()
        {
            $jobList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."viewApplies.php");
        }

    }
?>