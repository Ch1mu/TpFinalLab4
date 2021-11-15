<?php
    namespace Controllers;

    use DAO\JobRepositorie as JobRepository;
    use DAO\JobApplyRepository as JobApplyRepository;
    use DAO\jobOfferDAO as JobOfferDAO;
    use DAO\companyRepository as companyDAO;
    use DAO\careerDAO as careerDAO;
    use Models\Job as Job;
    use Models\mail as mail;
    use Models\JobOffer as JobOffer;
    use Models\JobApply as JobApply;
    
  
    class jobController
    {
        private $jobDAO;
        private $careerDAO;
        private $jobApplyDAO;
        private $companyDAO;
        private $jobOfferDAO;
        private $id;
        private $list;
        private $companyList;
        private $mail;

        public function __construct()
        {
            
            $this->jobDAO = new JobRepository();
            $this->jobOfferDAO = new JobOfferDAO();
            $this->jobApplyDAO = new JobApplyRepository();
            $this->companyDAO = new companyDAO();
            $this->careerDAO = new careerDAO();
            
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
            

        }
        public function ViewApplies()
        {
            $jobList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."viewApply.php");
        }
        public function deleteApply($id, $offer)
        {
            $this->jobApplyDAO->deleteApply($id);
            $this->jobOfferDAO->setActive($offer);

            Header("location: ../Student/Profile");
        }
        public function viewRemoveOffers()
        {
            $jobList = $this->jobOfferDAO->getAll();
            require_once (VIEWS_PATH. "viewOffers.php");
        }

        public function deleteOffer($id)
        {
            foreach($jobOfferDAO as $job){
                if($job->getCompanyID() == $id){
                    $desc = $job->getDescription();
                }
                foreach($listApplies as $applies){
                    if($applies->getCompId() == $id){
                            $we = "From: francolucianotpfinallab4@gmail.com";
                         $email = "lusoto456@gmail.com";
                         $subject = "Oferta Finalizada";
                         $message = "La oferta laboral para $desc a la que te postulaste ha finalizado, gracias por participar!";
                         $this->mail = new mail($email, $subject, $message);
                         Mail::send($email, $subject, $message, $we);
                    }
                }
             }

            $this->jobOfferDAO->deleteOffer($id);
            $jobApplyDAO = new jobApplyRepository();
            $listApplies = array();
            $listApplies = $jobApplyDAO->getAll();

            header("location: viewRemoveOffers");
        }

        public function deleteOfferCompany($id)
        {
           


            /*foreach($jobOfferDAO as $job){
               if($job->getCompanyID() == $id){
                   $desc = $job->getDescription();
               }
               foreach($listApplies as $applies){
                   if($applies->getCompId() == $id){
                        
                        
                   }
               }
            }
*/
                require_once(ROOT."sendMessage.php");


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
        public function filterOffers($career, $jobName)
        {
            $list = $this->careerDAO->GetAll();
            $jobOfferL = $this->jobOfferDAO->GetAll();
            $companyList = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."filterOffers.php");
           
        }
        public function filterOffersForm()
        {
            $jobL = $this->jobOfferDAO->GetAll();
            $list = $this->careerDAO->GetAll();
            require_once(VIEWS_PATH."filterFormOffer.php");
        }
        public function editOfferForm($id)
        {
            $list = $this->jobOfferDAO->GetAll();
            $jobL = $this->jobDAO->GetAll();
            $careerList = $this->careerDAO->GetAll();
    
            require_once(VIEWS_PATH."editOffer.php");
        }

        public function editOffer($offerId, $description, $vacancies)
        {
           
            $jobL = $this->jobDAO->GetAll();
            foreach($jobL as $job)
            {
                if($job->getDescription() == $description)
                {
                    $jobPositionId = $job->getJobPositionId();
                    $careerId = $job->getCareerId();
                }
            } 
            
            $this->jobOfferDAO->Edit($offerId, $description, $jobPositionId, $vacancies, $careerId);
    
            if($_SESSION["role"] == "Admin")
            header("location: viewRemoveOffers");
            if($_SESSION["role"] == "Company")
            header("location: OffersCompany");
        }

    }
?>