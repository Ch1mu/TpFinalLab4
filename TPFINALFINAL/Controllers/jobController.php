<?php
    namespace Controllers;

    use DAO\JobRepositorie as JobRepository;
    use Models\Job as Job;
  
    class jobController
    {
        private $jobDAO;
        private $id;

        public function __construct()
        {
            $this->jobDAO = new JobRepository();
        }

        public function Jobs()
        {
            require_once(VIEWS_PATH."Jobs.php");
        }
        public function AddForm()
        {
            require_once(VIEWS_PATH."job-add.php");
        }

           public function Add($jobPositionId, $careerId, $description)
        {
            $flag = 0;
            $list = new JobRepository();
            $studentList = array();
            $studentList = $list->GetAll();

            foreach($studentList as $value){
                if($value->getJobPositionId() == $jobPositionId){
                    $flag = 1;
                }
            }
            if($flag == 0){
                $company = new Job();
                $company->setJobPositionId($jobPositionId);
                $company->setCareerId($careerId);
                $company->setDescription($description);

                $this->jobDAO->Add($company);

                $this->jobs();
            }
            else{
                echo '<script language="javascript">alert("Ya hay un Trabajo con ese ID");';
                echo "window.location = 'AddForm'; </script>";
            }
        }
        public function listAllJobs()
        {
            $studentList = $this->jobDAO->getAll();
            require_once(VIEWS_PATH."job-list.php");
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
        public function Apply($jobPositionId)
        {
            require_once(ROOT."jobApply.php");
        }

    }
?>