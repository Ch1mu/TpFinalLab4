<?php
    namespace Controllers;

    use DAO\StudentDAO as StudentDAO;
    use DAO\careerDAO as CareerDAO;
    use Models\Student as Student;
    use Models\Career as Career;

    class StudentController
    {
        private $studentDAO;
        private $careerDAO;

        public function __construct()
        {
            $this->careerDAO = new CareerDAO();
            $this->studentDAO = new StudentDAO();
        }


        public function ShowListView()
        {
            $careerList = $this->careerDAO->GetAll();
            $studentList = $this->studentDAO->GetAll();

            require_once(VIEWS_PATH."student-list.php");
        }

        
        public function filterForm(){
            require_once(VIEWS_PATH."filterFormStudent.php");
        }
        public function filterStudent($studentId){
            $studentList = $this->studentDAO->GetAll();
            require_once(VIEWS_PATH."filterStudent.php");
        }
        public function Students(){
            require_once(VIEWS_PATH."Students.php");
        }
        public function Profile(){
            $studentList = $this->studentDAO->GetAll();
            require_once(VIEWS_PATH."profile.php");
        }
    }
?>