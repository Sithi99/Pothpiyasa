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

        if (isset($_POST['filter_search'])) {

            $column = $_POST['user_filter'];

            if ($column == 'Library-Staff Members') {
                $data = $user->where('MemberType', 'Library-StaffMember');

            } elseif ($column == 'Lecturers') {
                $data = $user->where('Type', 'Lecturer');

            } elseif ($column == 'Students') {
                $data = $user->where('Type', 'Student');

            } elseif ($column == 'Non-Academic Members') {
                $data = $user->where('AcademicType', 'Non-Academic');
                
            } else {
                $data = $user->findAll();
            }

        } elseif (isset($_POST['filter_typo_search'])) {

            $column = $_POST['user_filter_typo'];
            $value = $_POST['user_filter_typo_input'];

            if ($column == 'FirstName') {
                $data = $user->where($column, $value);

            } elseif ($column == 'LastName') {
                $data = $user->where($column, $value);

            } elseif ($column == 'Sex') {
                $data = $user->where($column, $value);

            } elseif ($column == 'Email') {
                $data = $user->where($column, $value);

            } else {
                $data = $user->findAll();
            }

        } else {

            $data = $user->findAll();

        }

        //$data comes as array of items (Array ( [0] => stdClass Object ( [UserID] => 1 [RegistrationNo] => 2020/CS/212....)

        //In view method, it extract the data (['rows'] => $data; --> $rows = $data;)
        $this->view('admin/users.view', ['rows' => $data]);

    }

    public function add()
    {
        if (!Auth::logged_in()) {
            $this->redirect('AdminLogin');
        }

        $errors = array();
        $flag = array(0);

        if (count($_POST) > 0) {

            $user = new User();

            if ($user->validate($_POST)) {


                $userData['RegistrationNo'] = $_POST['RegistrationNo'];
                $userData['Title'] = $_POST['Title'];
                $userData['FirstName'] = $_POST['FirstName'];
                $userData['PhoneNo'] = $_POST['PhoneNo'];
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
                $userData['UserID'] = random_string(9);
                //AddStaffID
                $userData['AddStaffID'] = get_staffid('UserID', $_SESSION['USER']->UserID);
                //AddDate
                $userData['AddDate'] = date("Y-m-d H:i:s");



                //Checking member type

                if (
                    $_POST['MemberType'] == 'Librarian'
                    || $_POST['MemberType'] == 'Library-Staff'
                    || $_POST['MemberType'] == 'Administrator'
                ) {

                    $userData['MemberType'] = 'Library-StaffMember';

                } else {

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
                if ($userData['MemberType'] == 'Library-StaffMember') {
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

                $flag[0] = 1;
                //$this->redirect('AdminDashboard');

            } else {
                $errors = $user->errors;

            }
        }

        $this->view('admin/users.add', ['errors' => $errors,'flag'=>$flag]);
    }

    public function edit($id = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('AdminLogin');
        }

        $errors = array();
        $flag = array(0);


        $user = new User();

        //Getting existing data from database
        $row = $user->where('UserID', $id);

        if (count($_POST) > 0) {

            if ($user->validate($_POST)) {
                $userData['RegistrationNo'] = $_POST['RegistrationNo'];
                $userData['Title'] = $_POST['Title'];
                $userData['FirstName'] = $_POST['FirstName'];
                $userData['PhoneNo'] = $_POST['PhoneNo'];
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

                } else {

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

                $flag[0] = 1;
                //$this->redirect('users');

            } else {
                $errors = $user->errors;

            }
        }

        $this->view('admin/users.edit', [
            'row' => $row,
            'errors' => $errors,
            'flag'=>$flag
        ]);
    }

    public function delete($id = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('AdminLogin');
        }

        $user = new User();
        $flag = array(0);


        //Getting existing data from database
        $row = $user->where('UserID', $id);

            //Delete data from user table
            $user->delete('UserID', $id);


            //Delete data from librarystaff table
            $libStaff = new LibraryStaff();

            $libStaff->delete('UserID', $id);

            //Delete data from student table
            $student = new Student();

            $student->delete('UserID', $id);


            //Delete data from lecturer table
            $lecturer = new Lecturer();

            $lecturer->delete('UserID', $id);

            $flag[0]=1;

            echo $flag[0];
            // $this->redirect('users');


        $this->view('admin/users.delete', [
            'row' => $row,
            'flag'=>$flag
        ]);
    }

    public function editProfile($id = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('AdminLogin');
        }

        $errors = array();
        $flag = array(0);


        $user = new User();

        //Getting existing data from database
        $row = $user->where('UserID', $id);

        if (count($_POST) > 0) {

            if ($user->validate($_POST)) {
                $userData['RegistrationNo'] = $_POST['RegistrationNo'];
                $userData['Title'] = $_POST['Title'];
                $userData['FirstName'] = $_POST['FirstName'];
                $userData['PhoneNo'] = $_POST['PhoneNo'];
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

                } else {

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

                $flag[0] = 1;
                $this->redirect('users');

            } else {
                $errors = $user->errors;

            }
        }

        $this->view('admin/users.editProfile', [
            'row' => $row,
            'errors' => $errors,
            'flag'=>$flag
        ]);
    }

    public function deletePreview($id = Null){
        $user = new User();
        $row =$user->where("UserID",$id);
            
        $this->view("admin/users.deletePreview",['row'=>$row]);
          
        
    }

}