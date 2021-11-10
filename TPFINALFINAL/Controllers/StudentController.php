<?php
    namespace Controllers;

    use DAO\StudentDAO as StudentDAO;
    use Models\Student as Student;

    class StudentController
    {
        private $studentDAO;

        public function __construct()
        {
            $this->studentDAO = new StudentDAO();
        }


        public function ShowListView()
        {
            $studentList = $this->studentDAO->GetAll();

            require_once(VIEWS_PATH."student-list.php");
        }

        public function Add($firstName, $lastName, $careerId, $dni, $gender, $birthDate, $phoneNumber, $fileNumber, $email, $active)
        {
            $student = new Student();
            $student->setfirstName($firstName);
            $student->setLastName($lastName);
            $student->setCareerId($careerId);
            $student->setDni($dni);
            $student->setGender($gender);
            $student->setBirthDate($birthDate);
            $student->setPhoneNumber($phoneNumber);
            $student->setFileNumber($fileNumber);
            $student->setEmail($email);
            $student->setActive($active);

            $this->studentDAO->Add($student);
            

            $this->ShowAddView();
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