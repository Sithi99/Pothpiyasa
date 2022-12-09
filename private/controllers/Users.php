<?php

//Users controller
class Users extends Controller
{

    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $user = new User();
        $data = $user->findAll();

        //$data comes as array of items (Array ( [0] => stdClass Object ( [UserID] => 1 [RegistrationNo] => 2020/CS/212....)

        //In view method, it extract the data (['rows'] => $data; --> $rows = $data;)
        $this->view('admin/users.view', ['rows' => $data]);

    }

    public function add()
    {
        $errors = array();

        if (count($_POST) > 0) {
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
                $userData['MemberType'] = $_POST['MemberType'];
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
                if ($userData['MemberType'] == 'Library-Staff') {
                    $userData['JobType'] = 'Library-Staff';

                }

                if ($userData['MemberType'] == 'Administrator') {

                    $userData['JobType'] = 'Administrator';

                }

                if ($userData['MemberType'] == 'Librarian') {

                    $userData['JobType'] = 'Librarian';

                }

                if (
                    $userData['MemberType'] == 'Librarian'
                    || $userData['MemberType'] == 'Library-Staff'
                    || $userData['MemberType'] == 'Administrator'
                    || $userData['MemberType'] == 'Non-Academic'
                ) {

                    $userData['AcademicType'] = 'Non-Academic';

                }

                if ($userData['MemberType'] == 'Lecturer' || $userData['MemberType'] == 'Student') {

                    $userData['AcademicType'] = 'Academic';

                }

                if ($userData['MemberType'] == 'Lecturer') {
                    $userData['Type'] = 'Lecturer';

                }

                if ($userData['MemberType'] == 'Student') {
                    $userData['Type'] = 'Student';

                }

                //Insert data to user table
                $user->insert($userData);


                //Insert data to librarystaff table
                if ($userData['MemberType'] == 'Library-Staff') {
                    $libStaff = new LibraryStaff();

                    //For LibraryStaff table
                    $libStaffData['UserID'] = $userData['UserID'];
                    $libStaff->insert($libStaffData);
                }

                //Insert data to student table
                if ($userData['MemberType'] == 'Student') {
                    $student = new Student();

                    $studentData['UserID'] = $userData['UserID'];
                    $studentData['StudentType'] = $_POST['StudentType'];
                    $studentData['Degree'] = $_POST['Degree'];
                    $studentData['Batch'] = $_POST['Batch'];

                    $student->insert($studentData);

                }

                //Insert data to lecturer table
                if ($userData['MemberType'] == 'Lecturer') {
                    $lecturer = new Lecturer();

                    $lecturerData['UserID'] = $userData['UserID'];
                    $lecturerData['LecType'] = $_POST['LecType'];
                    $lecturerData['Subject'] = $_POST['Subject'];
                    $lecturerData['Department'] = $_POST['Department'];

                    $lecturer->insert($lecturerData);
                }

                $this->redirect('adminDashboard');

            } else {
                $errors = $user->errors;

            }
        }

        $this->view('admin/users.add', ['errors' => $errors]);
    }

    public function edit($id = null)
    {
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
                $userData['MemberType'] = $_POST['MemberType'];


                //Checking member type
                if ($userData['MemberType'] == 'Library-Staff') {
                    $userData['JobType'] = 'Library-Staff';

                }

                if ($userData['MemberType'] == 'Administrator') {

                    $userData['JobType'] = 'Administrator';

                }

                if ($userData['MemberType'] == 'Librarian') {

                    $userData['JobType'] = 'Librarian';

                }

                if (
                    $userData['MemberType'] == 'Librarian'
                    || $userData['MemberType'] == 'Library-Staff'
                    || $userData['MemberType'] == 'Administrator'
                    || $userData['MemberType'] == 'Non-Academic'
                ) {

                    $userData['AcademicType'] = 'Non-Academic';

                }

                if ($userData['MemberType'] == 'Lecturer' || $userData['MemberType'] == 'Student') {

                    $userData['AcademicType'] = 'Academic';

                }

                if ($userData['MemberType'] == 'Lecturer') {
                    $userData['Type'] = 'Lecturer';

                }

                if ($userData['MemberType'] == 'Student') {
                    $userData['Type'] = 'Student';

                }

                //Insert data to user table
                $user->update('UserID', $id, $userData);


                //Insert data to student table
                if ($userData['MemberType'] == 'Student') {
                    $student = new Student();

                    $studentData['StudentType'] = $_POST['StudentType'];
                    $studentData['Degree'] = $_POST['Degree'];
                    $studentData['Batch'] = $_POST['Batch'];

                    $student->update('UserID', $id, $studentData);

                }

                //Insert data to lecturer table
                if ($userData['MemberType'] == 'Lecturer') {
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