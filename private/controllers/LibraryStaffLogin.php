<?php

//Login controller
class LibraryStaffLogin extends Controller
{
    public function index()
    {
        $errors = array();

        if (count($_POST) > 0) {

            $user = new User();

            if ($row = $user->where('UserName', $_POST['UserName'])) {

                //$row comes as array of items (Array ( [0] => stdClass Object ( [UserID] => 1 [RegistrationNo] => 2020/CS/212....)
                $row = $row[0];

                //$row[0], (stdClass Object ( [UserID] => 1 [RegistrationNo] => 2020/CS/212..)

                if (password_verify($_POST['Password'],$row->Password)) {

                    Auth::authenticate($row);

                    
                    if ($row->JobType == "Librarian") {
                        $this->redirect('LibrarianDashboard');

                    }
                    else if ($row->JobType == "Administrator") {
                        $this->redirect('AdminDashboard');

                    }
                    else if ($row->JobType == "Library-Staff") {
                        $this->redirect('librarystaffdashboard');

                    }
                    else if($row->MemberType == "Other-Member"){

                        $this->redirect('UserDashboard');

                    }

                } else {
                    $errors['UserName'] = "Invalid Password";
                }

            } else {

                $errors['UserName'] = "Invalid User Name";

            }

        }

        $this->view('librarystaff/login', ['errors' => $errors]);
    }
}