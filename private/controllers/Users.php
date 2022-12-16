<?php

//Users controller
class Users extends Controller
{

    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('AdminLogin');
        }

        $user = new User();
        $data = $user->findAll();
        
        //$data comes as array of items (Array ( [0] => stdClass Object ( [UserID] => 1 [RegistrationNo] => 2020/CS/212....)

        //In view method, it extract the data (['rows'] => $data; --> $rows = $data;)
        $this->view('admin/users.view', ['rows' => $data]);

    }

    public function add()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }

        $errors = array();

        if (count($_POST) > 0) {
            echo "awa";
            
            $user = new User();

            if ($user->validate($_POST)) {


                $userData['RegistrationNo'] = $_POST['RegistrationNo'];
                $userData['Title'] = $_POST['Title'];
                $userData['FirstName'] = $_POST['FirstName'];
                $userData['MidName'] = $_POST['MidName'];
                $userData['LastName'] = $_POST['LastName'];
                $userData['Sex'] = $_POST['Sex'];
                $userData['Birthday'] = $_POST['Birthday'];
                $userData['Address'] = $_POST['Address'];
                $userData['Email'] = $_POST['Email'];
                //Password
                $userData['Password'] = password_hash($_POST['RegistrationNo'], PASSWORD_DEFAULT);
                //UserName
                $userData['UserName'] = $_POST['RegistrationNo'];
                //UserID
                $userData['UserID'] = random_string(11);
                //AddStaffID
                $userData['AddStaffID'] = $_SESSION['USER']->UserID;
                //AddDate
                $userData['AddDate'] = date("Y-m-d H:i:s");



                //Checking member type

                if (
                    $_POST['MemberType'] == 'Librarian'
                    || $_POST['MemberType'] == 'Library-Staff'
                    || $_POST['MemberType'] == 'Administrator'
                ) {

                    $userData['MemberType'] = 'Library-StaffMember';

                }else{

                    $userData['MemberType'] = 'Other-Member';
                }


                if ($_POST['MemberType'] == 'Library-Staff') {
                    $userData['JobType'] = 'Library-Staff';

                }

                if ($_POST['MemberType'] == 'Administrator') {

                    $userData['JobType'] = 'Administrator';

                }

                if ($_POST['MemberType'] == 'Librarian') {

                    $userData['JobType'] = 'Librarian';

                }


                if ($_POST['MemberType'] == 'Lecturer' || $_POST['MemberType'] == 'Student') {

                    $userData['AcademicType'] = 'Academic';

                }

                if ($_POST['MemberType'] == 'Non-Academic') {
                    $userData['AcademicType'] = 'Non-Academic';

                }

                if ($_POST['MemberType'] == 'Lecturer') {
                    $userData['Type'] = 'Lecturer';

                }

                if ($_POST['MemberType'] == 'Student') {
                    $userData['Type'] = 'Student';

                }

                //Insert data to user table
                $user->insert($userData);


                //Insert data to librarystaff table
                if ($_POST['MemberType'] == 'Library-Staff') {
                    $libStaff = new LibraryStaff();

                    //For LibraryStaff table
                    $libStaffData['UserID'] = $userData['UserID'];
                    $libStaff->insert($libStaffData);
                }

                //Insert data to student table
                if ($_POST['MemberType'] == 'Student') {
                    $student = new Student();

                    $studentData['UserID'] = $userData['UserID'];
                    $studentData['StudentType'] = $_POST['StudentType'];
                    $studentData['Degree'] = $_POST['Degree'];
                    $studentData['Batch'] = $_POST['Batch'];

                    $student->insert($studentData);

                }

                //Insert data to lecturer table
                if ($_POST['MemberType'] == 'Lecturer') {
                    $lecturer = new Lecturer();

                    $lecturerData['UserID'] = $userData['UserID'];
                    $lecturerData['LecType'] = $_POST['LecType'];
                    $lecturerData['Subject'] = $_POST['Subject'];
                    $lecturerData['Department'] = $_POST['Department'];

                    $lecturer->insert($lecturerData);
                }

                //Insert data to nonAcademic staff table
                if ($_POST['MemberType'] == 'Non-Academic') {
                    $nonAcademicStaff = new NonAcademicStaff();

                    //For LibraryStaff table
                    $nonAcademicStaffData['UserID'] = $userData['UserID'];
                    $nonAcademicStaff->insert($nonAcademicStaffData);
                }

                
                $this->redirect('AdminDashboard');

            } else {
                $errors = $user->errors;

            }
        }
        
        $this->view('admin/users.add', ['errors' => $errors]);
    }

    public function edit($id = null)
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }

        $errors = array();

        $user = new User();

        //Getting existing data from database
        $row = $user->where('UserID', $id);

        if (count($_POST) > 0) {

            if ($user->validate($_POST)) {
                $userData['RegistrationNo'] = $_POST['RegistrationNo'];
                $userData['Title'] = $_POST['Title'];
                $userData['FirstName'] = $_POST['FirstName'];
                $userData['MidName'] = $_POST['MidName'];
                $userData['LastName'] = $_POST['LastName'];
                $userData['Sex'] = $_POST['Sex'];
                $userData['Birthday'] = $_POST['Birthday'];
                $userData['Address'] = $_POST['Address'];
                $userData['Email'] = $_POST['Email'];

                //Checking member type

                if (
                    $_POST['MemberType'] == 'Librarian'
                    || $_POST['MemberType'] == 'Library-Staff'
                    || $_POST['MemberType'] == 'Administrator'
                ) {

                    $userData['MemberType'] = 'Library-StaffMember';

                }else{

                    $userData['MemberType'] = 'Other-Member';
                }


                if ($_POST['MemberType'] == 'Library-Staff') {
                    $userData['JobType'] = 'Library-Staff';

                }

                if ($_POST['MemberType'] == 'Administrator') {

                    $userData['JobType'] = 'Administrator';

                }

                if ($_POST['MemberType'] == 'Librarian') {

                    $userData['JobType'] = 'Librarian';

                }


                if ($_POST['MemberType'] == 'Lecturer' || $_POST['MemberType'] == 'Student') {

                    $userData['AcademicType'] = 'Academic';

                }

                if ($_POST['MemberType'] == 'Non-Academic') {
                    $userData['AcademicType'] = 'Non-Academic';

                }

                if ($_POST['MemberType'] == 'Lecturer') {
                    $userData['Type'] = 'Lecturer';

                }

                if ($_POST['MemberType'] == 'Student') {
                    $userData['Type'] = 'Student';

                }

                //Insert data to user table
                $user->update('UserID', $id, $userData);


                //Insert data to student table
                if ($_POST['MemberType'] == 'Student') {
                    $student = new Student();

                    $studentData['StudentType'] = $_POST['StudentType'];
                    $studentData['Degree'] = $_POST['Degree'];
                    $studentData['Batch'] = $_POST['Batch'];

                    $student->update('UserID', $id, $studentData);

                }

                //Insert data to lecturer table
                if ($_POST['MemberType'] == 'Lecturer') {
                    $lecturer = new Lecturer();

                    $lecturerData['LecType'] = $_POST['LecType'];
                    $lecturerData['Subject'] = $_POST['Subject'];
                    $lecturerData['Department'] = $_POST['Department'];

                    $lecturer->update('UserID', $id, $lecturerData);
                }

                $this->redirect('users');

            } else {
                $errors = $user->errors;

            }
        }

        $this->view('admin/users.edit', [
            'row' => $row,
            'errors' => $errors
        ]);
    }

    public function delete($id = null)
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }

        $user = new User();

        //Getting existing data from database
        $row = $user->where('UserID', $id);

        if (count($_POST) > 0) {


            //Delete data from user table
            $user->delete('UserID', $id);


            //Delete data from user table
            $libStaff = new LibraryStaff();

            $libStaff->delete('UserID', $id);

            //Delete data from student table
            $student = new Student();

            $student->delete('UserID', $id);


            //Delete data from lecturer table
            $lecturer = new Lecturer();

            $lecturer->delete('UserID', $id);

            $this->redirect('users');

        }

        $this->view('admin/users.delete', [
            'row' => $row
        ]);
    }

}